@extends('layout.index5')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
@endif
<center>
    <table class="table table-bordered table-striped" style="width:75%; margin-top:25px;">
        <tr>
            <th>Doctor Name</th>
            <th>Specialization</th>
            <th>Phone No</th>
            <th>Email ID</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($data as $datas)
        <tr>
            <td>{{$datas->doctor_name}}</td>
            <td>{{$datas->specialization}}</td>
            <td>{{$datas->phone_no}}</td>
            <td>{{$datas->email_id}}</td>
            <td><img src="{{asset('storage/images/'.$datas->image)}}" alt="" width="80px" height="80px"></td>
            <td>
                <a href="{{ route('edit', $datas->doctor_id ) }}" class="btn btn-warning">Edit</a>&nbsp &nbsp
                <a href="{{ route('delete', $datas->doctor_id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
</table><center>
@endsection