<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user['data'] = User::all();
        return view('admin/user_list',$user);
    }

    public function status(Request $request,$type,$id)
    {
        $model = User::find($id);
        if($model->user_type != "Admin"){
            $model->status = $type;
            $model->save();
            $request->session()->flash('message','User Request Accepted');
            return redirect('user-list');
        }else{
            return redirect('user-list');
        }
    }
}