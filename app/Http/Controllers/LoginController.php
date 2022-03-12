<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
require_once('/path/to/MailchimpMarketing/vendor/autoload.php');

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
    public function newsletterSignup(Request $req){
        $mailchimp = new \MailchimpMarketing\ApiClient();
        $mailchimp->setConfig([
            'apiKey' => 'd0851a352e1ea76c4d52da69ea3a0062-us6',
            'server' => 'us6'
        ]);
        try{
            $response = $mailchimp->lists->createList([
                "name" => "dag's tech",
                "permission_reminder" => "permission_reminder",
                "email_type_option" => false,
                "contact" => [
                "company" => "dag's tech",
                "address1" => "Via San Giuseppe, 19",
                "city" => "Turin",
                "state" => "IT",
                "zip" => "10121",
                "country" => "EU",
                ],
                "campaign_defaults" => [
                "from_name" => "Gettin' Together",
                "from_email" => "notics.pro@gmail.com",
                "subject" => "dag's tech",
                "language" => "IT",
                ],
            ]);
            die(var_dump($response));
        } catch(MailchimpMarketing\ApiException $e){
            die(var_dump($e->getMessage()));
        }
        return back();
    }
}
