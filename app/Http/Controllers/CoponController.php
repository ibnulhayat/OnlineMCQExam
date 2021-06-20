<?php

namespace App\Http\Controllers;

use App\Models\Copon;
use Illuminate\Http\Request;

class CoponController extends Controller
{
    public function index()
    {
        $result['data']=Copon::all();
        return view('admin.coupon',$result);
    }

    public function manage_coupon(Request $request,$id='')
    {
        if($id>0)
        {
            $arr=Copon::where(['id'=>$id])->get();
            $result['id']=$arr['0']->id;
            $result['title']=$arr['0']->title;
            $result['code']=$arr['0']->code;
            $result['value']=$arr['0']->value;

        }
        else
        {
            $result['title']='';
            $result['code']='';
            $result['value']='';
            $result['id']=0;


        }
        return view('admin/manage_coupon',$result);
    }


    public function manage_coupon_process(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'code'=>'required',
            'value'=>'required',
        ]);



        //dd($request->post('id'));

        if($request->post('id')>0){
            $model=Copon::find($request->post('id'));
            $msg="Coupon updated";
        }else{
            $model=new Copon();
            $msg="Coupon inserted";
        }
        $model->title=$request->post('title');
        $model->code=$request->post('code');
        $model->value=$request->post('value');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/coupon');

    }
    public function delete(Request $request,$id)
    {
        $model=Copon::find($id);
        $model->delete();
        $request->session()->flash('message','Coupon deleted');
         return redirect('admin/coupon');

    }
    public function status(Request $request,$type,$id)
    {
        $model=Copon::find($id);
        $model->status=$type;
        $model->save();
        $request->session()->flash('message','Coupon status updated');
         return redirect('admin/coupon');


    }
}
