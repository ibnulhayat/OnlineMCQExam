@extends('admin/admin_layout')
@section('page_title','Dashboard')
@section('dashboard_select','active')
@section('container')

<a href="{{url('set-exam-paper')}}" class="btn btn-success" type="button"> Set Exam </a>

<div class="row m-t-30">
	<div class="col-md-12">
		<!-- DATA TABLE-->
		<div class="table-responsive m-b-40">
			<table class="table table-borderless table-data3">
				<thead>
					<tr>
						<th>ID</th>
						<th>Subject Name</th>
						<th>Exam Type</th>
						<th>Time Duration (Minute)</th>
						<th>File Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $list )
					<tr>
						<td>{{$list->id}}</td>
						<td>{{$list->subject_name}}</td>
						<td>{{$list->exam_type}}</td>
						<td>{{$list->time_duration}}</td>
						<td>{{$list->question_name}}</td>
					</tr>
					@endforeach


				</tbody>
			</table>
		</div>
		<!-- END DATA TABLE-->
	</div>
</div>

@endsection
