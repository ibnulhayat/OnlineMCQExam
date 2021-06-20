@extends('layout')
@section('page_title','Dashboard')
@section('dashboard_select','active')
@section('container')

<a href="{{url('set-exam-paper')}}" class="btn btn-success" type="button"> Add Exam </a>

@endsection
