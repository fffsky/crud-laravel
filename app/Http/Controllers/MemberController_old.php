<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function top(){
        
        // $member = member::all();
        $member = member::where('user_id', '=', Auth::user()->id)->get();
        return view('top')->with([
            'member' => $member,
        ]); 
    }

    public function memberView(){
        
        $member = member::all();
        return view('member_view')->with([
           'member' => $member,
        ]); 
    }

    public function register(){
        
        return view('register'); 
    }

    public function memberRegister(Request $request){
        // dd(Auth::user()->id);
        $member = new member();
        $member->user_id = Auth::user()->id;
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();

        return redirect('top');
    }

    public function edit(Request $request){

        $member = member::where('id', '=', $request->id)->first();
        
        return view('edit')->with([
            'member' => $member, 
        ]);
    }

    public function memberEdit(Request $request){

        $member = member::where('id', '=', $request->id)->first();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();
        
        return redirect('top');
    }

    
    public function memberDelete(Request $request){

        $member = member::where('id', '=', $request->id)->first();
        $member->delete();

        return redirect('top');
    }
}
