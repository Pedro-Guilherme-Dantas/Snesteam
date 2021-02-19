<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateGame;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;
class GameController extends Controller
{
    public function index(){
    	$games = Game::all();
    	return view('admin.games.index',['games'=>$games]);
    }
    public function create(){
    	return view('admin.games.create');
    }
    public function store(StoreUpdateGame $request){
        $game= new Game;
    	$game->title = $request->title;
    	$game->description = $request->description;
    	if($request->hasFile('cover') && $request->cover->isValid()){
    			$extensionCover =$request->cover->extension();
    			$nomeArquivo ='Capa - '.$request->title . '.' . $extensionCover;
            	$imagePath=$request->cover->storeAs('Games/Imagens',$nomeArquivo);
            	$game->cover = $imagePath; 
        }
        for ($i=1; $i < 5 ; $i++) { 
            $img = 'img'.$i;
            if($request->hasFile($img) && $request->$img->isValid()){
                $extensionImg =$request->$img->extension();
                $nomeArquivo = $request->title . '(' .$i . ').' . $extensionImg;
                $imagePath=$request->$img->storeAs('Games/Imagens',$nomeArquivo);
                $game->$img = $imagePath;     
            }         
        }
        $extensionFile = $request->file->extension();
        if($extensionFile == 'zip' or $extensionFile == 'rar'){
        	if($request->hasFile('file') && $request->file->isValid()){
    			$nomeArquivo = $request->title . '.' . $extensionFile;
            	$imagePath=$request->file->storeAs('Games/Arquivos',$nomeArquivo);
            	$game->file = $imagePath;     
        	}
        }else{
        	return redirect()->back()->with('msgZip','Arquivo tem que ser .zip ou .rar');
        }
        $game->save();
        return redirect()->route('admin.games.index')->with('msg','Jogo cadastrado com sucesso!');
    }
    public function edit($id){
        $game= Game::findOrFail($id);
        return view('admin.games.edit',['game'=>$game]);
    }
    public function update(StoreUpdateGame $request,$id){
        $game= Game::findOrFail($id);
        $linha = $request->all();
        if($request->hasFile('cover') && $request->cover->isValid()){
                $extensionCover =$request->cover->extension();
                $nomeArquivo =$game->cover;
                $imagePath=$request->cover->storeAs('',$nomeArquivo);
                $linha['cover'] = $imagePath;     
        }

        for ($i=1; $i < 5 ; $i++) { 
            $img = 'img'.$i;
            if($request->hasFile($img) && $request->$img->isValid()){
                $extensionImg =$request->$img->extension();
                $nomeArquivo = $game->$img;
                $imagePath=$request->$img->storeAs('',$nomeArquivo);
                $linha[$img] = $imagePath;     
            }         
        }
        $extensionFile = $request->file->extension();
        if($extensionFile == 'zip' or $extensionFile == 'rar'){
            if($request->hasFile('file') && $request->file->isValid()){
                $nomeArquivo = $game->file;
                $imagePath=$request->file->storeAs('',$nomeArquivo);
                $linha['file'] = $imagePath;     
            }
        }else{
            return redirect()->back()->with('msgZip','Arquivo tem que ser .zip ou .rar');
        }
        $game->update($linha);
        return redirect()->route('admin.games.index')->with('msg','Jogo editado com sucesso!');

    }
    public function destroy($id){
        $game = Game::findOrFail($id);
        if(!$game){
            return redirect()->route('admin.games.index')->with('msg','Erro ao excluir');  
        }else{
            if($game->cover && Storage::exists($game->cover)){
                Storage::delete([$game->cover,$game->img1,$game->img2,$game->img3,$game->img4,$game->file]);
            }
            $game->delete();
            return redirect()->route('admin.games.index')->with('msg','Jogo deletado com sucesso!');  
        }
        
    }
}
