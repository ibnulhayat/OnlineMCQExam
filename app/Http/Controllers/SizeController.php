<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $result['data']=Size::all();
        return view('admin.size',$result);
    }

    public function manage_size(Request $request,$id='')
    {
        if($id>0)
        {
            $arr=Size::where(['id'=>$id])->get();
            $result['id']=$arr['0']->id;
            $result['size']=$arr['0']->size;
            $result['status']=$arr['0']->status;

        }
        else
        {
            $result['size']='';
            $result['status']='';
            $result['id']=0;


        }
        return view('admin/manage_size',$result);
    }


    public function manage_size_process(Request $request)
    {
        $request->validate([
            'size'=>'required',

        ]);



        //dd($request->post('id'));

        if($request->post('id')>0){
            $model=Size::find($request->post('id'));
            $msg="Size updated";
        }else{
            $model=new Size();
            $msg="Size inserted";
        }
        $model->size=$request->post('size');

        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/size');

    }
    public function delete(Request $request,$id)
    {
        $model=Size::find($id);
        $model->delete();
        $request->session()->flash('message','Size deleted');
         return redirect('size/category');

    }
    public function status(Request $request,$type,$id)
    {
        $model=Size::find($id);
        $model->status=$type;
        $model->save();
        $request->session()->flash('message','Size status updated');
         return redirect('admin/size');


    }
}
