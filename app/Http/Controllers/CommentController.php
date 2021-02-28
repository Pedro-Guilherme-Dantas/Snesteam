<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateComment;
use App\Models\Game;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class CommentController extends Controller
{
    
    public function index($game_id){
        $game= Game::findOrFail($game_id);
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
  
        $userComments = Comment::where([
            ['user_id',$user_id], // comentário do user logado
            ['game_id',$game_id]
        ])->get();
        $comments = Comment::where([ // comentários de terceiros
            ['user_id','!=',$user_id],
            ['game_id',$game_id]
        ])->get();

        $file_size = round(Storage::size('game_files/'.$game->file)/1000,2);
        return view('user.game-info',[
            'game'=>$game,'userComments'=>$userComments,'comments'=>$comments,'file_size'=>$file_size
            ]);
    }

    public function store($game_id,StoreUpdateComment $request){
        $user_id = Auth::user()->id;

        if(Comment::where([['user_id',$user_id],['game_id',$game_id]])->exists())
            return redirect()->back()->with('msg_error','Você já comentou neste jogo!');

        $comment = new Comment;

        $comment->user_id = $user_id;
        $comment->game_id = $game_id;
        $comment->content = $request->comment;
        $comment->liked = $request->liked=='like'? 1 : 0;
        
        $comment->save();
        return redirect()->route('comments.index',$game_id)->with('msg','Comentário criado com sucesso!');
    }

    public function destroy($comment_id){
        $comment = Comment::findOrFail($comment_id);
        $comment->delete();

        return redirect()->back()->with('msg','Comentário deletado com sucesso!');
    }
}
