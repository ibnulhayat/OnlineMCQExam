<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{

    public function index()
    {
        return view('dashboard'); 
    }

    public function setExamPaper(Request $request,$id='')
    {
        // if($id>0){
        //     $arr=Color::where(['id'=>$id])->get();

        //     $result['color']=$arr['0']->color;
        //     $result['status']=$arr['0']->status;
        //     $result['id']=$arr['0']->id;
        // }else{
        //     $result['color']='';
        //     $result['status']='';
        //     $result['id']=0;

        // }
        return view('set_exam_paper');
    }

    public function storeExamPaper(Request $request)
    {
        //return $request->post();

        $request->validate([
            'color'=>'required|unique:colors,color,'.$request->post('id'),
        ]);

        if($request->post('id')>0){
            $model=Color::find($request->post('id'));
            $msg="Color updated";
        }else{
            $model=new Color();
            $msg="Color inserted";
        }
        $model->color=$request->post('color');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('color');

    }
}
