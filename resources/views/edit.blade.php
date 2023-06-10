@extends('layout.index6')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4" style="padding-top:10px;">
            <form method='POST' action="{{ route('update',$edit->doctor_id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input class="form-control" name="doctor_name" value="{{$edit->doctor_name}}" placeholder="doctorname*">
                    <label> doctor name : </label>
                </div>
                <div class="form-group">
                    <input class="form-control" name="specialization" value="{{$edit->specialization}}" placeholder="specialization*">
                    <label> specialization: </label>
                </div>
                <div class="form-group">
                    <input class="form-control" name="email_id" value="{{$edit->email_id}}" placeholder="email_id*">
                    <label> email_id : </label>
                </div>

                <div class="form-group">
                    <input type="file"  class="form-control" name="image" value="{{$edit->image}}">
                    <label> image : </label>
                </div>

                <button class="btn btn-primary" name="update" value="update" type="submit" > update</button> 
</form>
        </div>
    </div>
</div>

@endsection