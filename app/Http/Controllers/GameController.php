<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateGame;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller{

    public function index(){
        $search = request('search');
        $games = $search ? 
        Game::where([['title','like','%'.$search.'%']])->get() : Game::paginate(4);
        
        return view('admin.games.index',['games'=>$games,'search'=>$search]);
    }

    /*------------------------------------------*/

	public function indexUser(){  
        $search = request('search');
        $games = $search ? 
        Game::where([['title','like','%'.$search.'%']])->get() : Game::paginate(8);
		
        return view('user.view-main',['games'=>$games,'search'=>$search]);
	}

    /*------------------------------------------*/

    public function about(){
        return view('user.about');
    }

    /*------------------------------------------*/

    public function emulators(){
        return view('user.emulators');
    }

    /*------------------------------------------*/

    public function create(){
        return view('admin.games.create');
    }

    /*------------------------------------------*/

    public function store(StoreUpdateGame $request){
        $game= new Game;

        $game->title = $request->title;
        $game->description = $request->description;

        foreach(['cover','img1','img2','img3','img4'] as $img) {
            if($request->hasFile($img) && $request->$img->isValid()){
                $extension = $request->$img->extension();
                $name = md5($img.$request->title.strtotime('now')).".".$extension;
                $path = $request->$img->storeAs($img=='cover'?'game_covers':'game_images',$name,'s3');
                $game->$img = $name;
            }
        }

        if($request->hasFile('file') && $request->file->isValid()){
            $extension = $request->file->extension();
            $name = md5($request->title.strtotime('now')).".".$extension;
            $path = $request->file->storeAs('game_files',$name,'s3');
            $game->file = $name;
        }

        $game->save();
        return redirect()->route('admin.games.index')->with('msg','Jogo cadastrado com sucesso!');
    }

    /*------------------------------------------*/

    public function edit($id){
        $game= Game::findOrFail($id);
        return view('admin.games.edit',['game'=>$game]);
    }

    /*------------------------------------------*/

    public function update(StoreUpdateGame $request,$id) {
        $game= Game::findOrFail($id);
        $data = $request->all();
        
        foreach(['cover','img1','img2','img3','img4'] as $img){
            if($request->hasFile($img) && $request->$img->isValid()){
                $extension = $request->$img->extension();
                $name = md5($img.$request->title.strtotime('now')).".".$extension;
                $path = $request->$img->storeAs($img=='cover'?'game_covers':'game_images',$name,'s3');
                $data[$img] = $name;
            }
        }

        if($request->hasFile('file') && $request->file->isValid()){
            $extension = $request->file->extension();
            $name = md5($request->title.strtotime('now')).".".$extension;
            $path = $request->file->storeAs('game_files',$name,'s3');
            $data['file'] = $name;
        }

        Storage::disk('s3')->delete(
            ['game_covers/'.$game->cover,'game_images/'.$game->img1,'game_images/'.$game->img2,'game_images/'.$game->img3,'game_images/'.$game->img4,'game_files/'.$game->file]
        );

        $game->update($data);
        return redirect()->route('admin.games.index')->with('msg','Jogo editado com sucesso!');
    }

    public function destroy($id){
        $game = Game::findOrFail($id);
        
        Storage::disk('s3')->delete(
            ['game_covers/'.$game->cover,'game_images/'.$game->img1,'game_images/'.$game->img2,'game_images/'.$game->img3,'game_images/'.$game->img4,'game_files/'.$game->file]
        );
            
        $game->delete();
        return redirect()->back()->with('msg','Jogo deletado com sucesso!');  
    }

}
