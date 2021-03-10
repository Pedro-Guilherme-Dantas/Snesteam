<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index_admin(){
		$search = request('search');
		$users = $search ?
		User::where([['name','like','%'.$search.'%'],['utype','!=','ADM']])->get() 
		: User::where([['utype','!=','ADM']])->paginate(10);
		
		return view('admin.users.index',['users'=>$users,'search'=>$search]);
    }

	/*------------------------------------------*/

    public function destroy($id){
		$user = User::findOrFail($id);
		$user->delete();
		return redirect()->back()->with('msg','Usuário deletado com sucesso!');
    }
}
