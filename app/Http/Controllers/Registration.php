<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Registration extends Controller
{
    //

    public function index()
    {
        return view('registration');
    }

    public function Store(Request $req)
    {
        $model = new User();

        $model->name = $req->post('name');
        $model->email = $req->post('useremail');
        $model->phone = $req->post('phone-number');
        $model->password = $req->post('password');
        $model->user_type = $req->post('user_type');
        $model->save();

        $req->session()->flash('success','Request send successfully. Please wait for accept your request.');
        return redirect('registration');
    }
}
