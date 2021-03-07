<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
    	$search = request('search');
    	if($search){
    		$users = User::where([['name','like','%'.$search.'%']])->get();
    	}else{
    		$users = User::paginate(5);
    	}
    	
    	return view('admin.users.index',['users'=>$users,'search'=>$search]);
    }

    public function destroy($id){
    	$user = User::findOrFail($id);
    	$user->delete();
    	return redirect()->back()->with('msg','Usuário deletado com sucesso!');
    }
}
