<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateGame;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class GameController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('admin.games.index',['games'=>$games]);
    }

    /*------------------------------------------*/

	public function indexUser(){
		$games = Game::all();
        return view('view-main',['games'=>$games]);
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

        foreach(['cover','img1','img2','img3','img4'] as $img){
            if($request->hasFile($img) && $request->$img->isValid()){
                $extension = $request->$img->extension();
                $name = md5($img.$request->title.strtotime('now')).".".$extension;

                $path = $request->$img->storeAs($img=='cover'?'game_covers':'game_images',$name);
                $game->$img = $path;
            }
        }

        if($request->hasFile('file') && $request->file->isValid()){
            $extension = $request->file->extension();
            $name = md5($request->title.strtotime('now')).".".$extension;
            $path = $request->cover->storeAs('game_files',$name);
            $game->file = $path;
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

    public function update(StoreUpdateGame $request,$id){
        $game= Game::findOrFail($id);
        $data = $request->all();
        
        if($request->hasFile('cover') && $request->cover->isValid()){
                $extension = $request->cover->extension();
                $name = md5("cover".$request->title.strtotime('now')).".".$extension;
                $path = $request->cover->storeAs('game_covers',$name);
                $data['cover'] = $path;     
        }

        for($i=1;$i<=4;$i++) { 
            $img = 'img'.$i;

            if($request->hasFile($img) && $request->$img->isValid()){
                $extension = $request->$img->extension();
                $name = md5($img.$request->title.strtotime('now')).".".$extension;
                $path = $request->$img->storeAs('game_images',$name);
                $data[$img] = $path;     
            }         
        }

        $extension = $request->file->extension();
        /*|*/
        if($extension=='rar' || $extension=='zip'){
            if($request->hasFile('file') && $request->file->isValid()){
                $name = md5($request->title.strtotime('now')).".".$extension;
                $path = $request->cover->storeAs('game_files',$name);
                $data['file'] = $path;     
            }
        }else
            return redirect()->back()->with('msgZip','Arquivo tem que ser .zip ou .rar');

        Storage::delete([$game->cover,$game->img1,$game->img2,$game->img3,$game->img4,$game->file]);

        $game->update($data);
        return redirect()->route('admin.games.index')->with('msg','Jogo editado com sucesso!');
    }

    /*------------------------------------------*/

    public function destroy($id){
        $game = Game::findOrFail($id);
        
        if(!$game){
            return redirect()->route('admin.games.index')->with('msg','Erro ao excluir');  
        }else{
            Storage::delete([$game->cover,$game->img1,$game->img2,$game->img3,$game->img4,$game->file]);
            
            $game->delete();
            return redirect()->route('admin.games.index')->with('msg','Jogo deletado com sucesso!');  
        }
    }

}
