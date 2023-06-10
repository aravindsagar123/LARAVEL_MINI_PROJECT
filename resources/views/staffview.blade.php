@extends('layout.index7')
@section('content')
<style>
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #f9f9f9;
        font-weight: bold;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    th,tr,td{
        text-align:center;
    }
</style>
<!-- resources/views/details/index.blade.php -->

<h1><CENTER> STAFF VIEW </center></h1>

<center><table class="table" style="width:75%;">
    <thead>
        <tr>
            <th>staff name</th>
            <th>staff email</th>
            <th> username</th>
            <th>phone_no </th>
            <th> image </th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($staff as $staffs)
        <tr>
            <td>{{ $staffs->name }}</td>
            <td>{{ $staffs->email }}</td>
            <td>{{ $staffs->username }}</td>
            <td>{{ $staffs->phone_no}}</td>
            <td><img src="{{asset('storage/images/'.$staffs->image)}}" alt="" width="80px" height="80px"></td>
             <td>
                <a href="{{ route('editstaff', $staffs->id) }}" class="btn btn-primary"> EDIT </a>&nbsp &nbsp 
                <a href="" class="btn btn-danger"> DELETE </a>
</td>
        </tr>
        @endforeach
    </tbody>
</table></center>

@endsection 