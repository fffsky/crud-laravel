<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function top(){
        
        $user = user::where('id', '=',Auth::user()->id)->first(); //usersテーブルの情報を取得
        // dd($user);
        return view('top')->with([
            'user' => $user,
        ]); 
    }

    public function deleteView(){
        
        //$user = user::all();//全件表示
        $user = user::onlyTrashed()->get(); //論理削除のみ表示
        return view('delete-view')->with([
           'user' => $user,
        ]); 
    }

    public function registerView(){
        
        $user = user::all(); //全件表示
        return view('register-view')->with([
           'user' => $user,
        ]); 
    }

    public function register(){
        
        return view('register'); 
    }

    public function userRegister(Request $request){
        // dd(Auth::user()->id);
        $user = new user();
        $user->user_id = Auth::user()->id;
        $user->name = $request->name;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->save();

        return redirect('top');
    }

    public function edit(){

        $user = user::where('id', '=', Auth::user()->id)->first();
        
        return view('edit')->with([
            'user' => $user, 
        ]);
    }

    public function userEdit(Request $request){

        $user = user::where('id', '=',  Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        return redirect('top');
    }
    
    public function userDelete(){

        $user = user::where('id', '=',  Auth::user()->id)->first();
        $user->delete();

        return redirect('/');
    }
}
