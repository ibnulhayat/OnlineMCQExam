@extends('layout')
@section('page_title','Set Exam Paper')
@section('dashboard_select','active')
@section('container')

<h1 >Set Exam Paper</h1>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('color.manage_color_process')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value=""/>
                            <div class="row ">
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label  class="control-label ">Subject Name </label>
                                        <select class="form-control" name="selectSubject" id="selectSubject" required>
                                            <option value="">Select One</option>
                                            <option value="Bangla">Bangla</option>
                                            <option value="English">English</option>
                                            <option value="Math">Math</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label  class="control-label ">Set Time:</label>
                                        <input type="number" class="form-control" required name="setTime">

                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label  class="control-label ">Exam Type </label>
                                        <select class="form-control" name="selectSubject" id="selectSubject" required>
                                            <option value="">Select One</option>
                                            <option value="Written">Written</option>
                                            <option value="MCQ">MCQ</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label  class="control-label ">Upload Question ( Pdf/Docx ):</label>
                                        
                                        <input  accept=".pdf,.doc,.docx" type="file" name=""
                                        size="chars">

                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info ">Submit </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection