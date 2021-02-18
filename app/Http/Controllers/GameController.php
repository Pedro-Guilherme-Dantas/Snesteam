<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(){
    	$games = Game::all();
    	return view('admin.games.index',['games'=>$games]);
    }
    public function create(){
    	return view('admin.games.create');
    }
    public function store(Request $request){
    	$request->validate([
    		'title' => 'required|min:8',
    		'image' => 'required|image',
    		'description'=>'required|min:8',
    		'file' => 'required',
    	]);




    	$game= new Game;
    	$game->title = $request->title;
    	$game->description = $request->description;
    	// $game->file = 'arquivotetse';

    	if($request->hasFile('image') && $request->image->isValid()){
    			$extensionImg =$request->image->extension();
    			$nomeArquivo = $request->title . '.' . $extensionImg;
            	$imagePath=$request->image->storeAs('Games/Imagens',$nomeArquivo);
            	$game->images = $imagePath;     
        }

        $extensionFile = $request->file->extension();
        if($extensionFile == 'zip'){
        	if($request->hasFile('file') && $request->file->isValid()){
    			$nomeArquivo = $request->title . '.' . $extensionFile;
            	$imagePath=$request->file->storeAs('Games/Arquivos',$nomeArquivo);
            	$game->file = $imagePath;     
        	}
        }else{
        	return redirect()->back()->with('msgZip','Arquivo tem que ser .zip');
        }

        $game->save();
        return redirect()->route('admin.games.index');
    }
}
