<?php
//KEY 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
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignedUp;

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
    public function newsletterSignup(Request $request){
       
       Mail::to('paolodagostino08@gmail.com')->send(new SignedUp($request));
       return redirect("/#discover")->with('success', "You subscribed to our newsletter!");
    }
}
