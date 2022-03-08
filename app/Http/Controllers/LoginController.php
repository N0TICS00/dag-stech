<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function userSignIn(Request $req){
        $data =  $req->input();
        $req->session()->put('user', $data);
        $userDatas = session('user');
        $user = new User();
        $user->name =$userDatas['name'];
        $user->password = Hash::make($userDatas['password']);
        $user->email = $userDatas['email'];
        $user->save();
        
        return redirect("overview");
    }
    public function userLogin(Request $req){
        $userInfo = User::where('email', '=', $req->email)->first();
        if(!$userInfo){
            return back()->with('error' ,'Wrong Password or Wrong Email');
        }
        else{
            if(Hash::check($req->password, $userInfo->password)){
                $req->session()->put('user', $userInfo);
                return redirect("overview");
            }else{
                return back()->with('error' ,'Wrong Password or Wrong Email');
            }
        }
    }
}
