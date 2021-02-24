<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateComment;
use App\Models\Game;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    
    public function index($gameid){
        $game= Game::findOrFail($gameid);
        return view('user.index',['game'=>$game]);
    }

    public function store($gameid,StoreUpdateComment $request){

        $comment = new Comment;

        $comment->user_id = Auth::user()->id;
        $comment->game_id = $gameid;
        $comment->content = $request->comment;
        $comment->liked = $request->liked=='like'? 1 : 0;
        
        $comment->save();
        return redirect()->route('comments.index',$gameid)->with('msg','Comentário criado com sucesso!');

    }
}
