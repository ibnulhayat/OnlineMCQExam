<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam_papers;

class Dashboard extends Controller
{

    public function index()
    {
        $arr['data'] = Exam_papers::all();
        return view('admin/dashboard',$arr); 
    }

    public function setExamPaper(Request $request)
    {
        return view('admin/set_exam_paper');
    }

    public function storeExamPaper(Request $request)
    {
        $model = new Exam_papers();
        $request->validate([
            'file' => 'required|mimes:pdf,docx,doc|max:2048',
        ]);
        $fileName = time().'.'.$request->file->extension();  
        $model->subject_name = $request->post('subject_name'); 
        $model->exam_type = $request->post('exam_type'); 
        $model->time_duration = $request->post('time_duration'); 
        $model->question_name = $fileName;
        $model->save(); 
        $request->file->move(public_path('uploads'), $fileName);

        return redirect('dashboard');

    }
}
