@extends('layout')
@section('page_title','User List')
@section('container')
{{session('message')}}
<h1 >User</h1>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list )
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->user_type}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->phone}}</td>
                        <td>
                            @if($list->status=="active")
                            <a href="{{url('user/status/inactive')}}/{{$list->id}}"><button type="button" class="btn btn-success">Active</button></a>
                            @elseif($list->status=="inactive")
                            <a href="{{url('user/status/active')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Send Request</button></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

@endsection
