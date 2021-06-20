<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginCheck(Request $req)
    {
        $email = $req->post('email');
        $pass = $req->post('password');

        $user = User::where(['email'=>$email])->get();
        
        //dd($result);
        if(count($user) > 0)
        {
            if($req->post('password') == $user['0']->password)
            {
                session()->put('id',$user['0']->id);
                session()->put('user_type',$user['0']->user_type);
                return redirect('dashboard');
            }else{
                $req->session()->flash('error','Please enter valid password');

                return redirect('login');
            }

        }else{
            $req->session()->flash('error','User Not Fount');
            return redirect('login');
        }

    }
    
    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}
