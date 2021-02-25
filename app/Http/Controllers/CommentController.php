<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateComment;
use App\Models\Game;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    
    public function index($game_id){
        $game= Game::findOrFail($game_id);
        $user_id = Auth::user()->id;
        $userComments = Comment::where([
            ['user_id',$user_id],
            ['game_id',$game_id]
        ])->get();
        $comments = Comment::where([
            ['user_id','!=',$user_id],
            ['game_id',$game_id]
        ])->get();

        return view('user.index',['game'=>$game,'userComments'=>$userComments,'comments'=>$comments]);
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
