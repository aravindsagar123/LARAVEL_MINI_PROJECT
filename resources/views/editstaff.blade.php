@extends('layout.index8')
@section('content')
<style>
       
    </style>
    <div class="container" style="max-width: 500px; margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; margin-bottom: 20px;">Edit Page</h1>
    <form>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Name:</label>
            <input type="text" id="name" name="name" value="{{$editstaff->name}}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Email:</label>
            <input type="email" id="email" name="email" value="{{$editstaff->email}}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="username" style="display: block; font-weight: bold; margin-bottom: 5px;">Username:</label>
            <input type="text" id="username" name="username" value="{{$editstaff->username}}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="phone_no" style="display: block; font-weight: bold; margin-bottom: 5px;">Phone Number:</label>
            <input type="tel" id="phone_no" name="phone_no" value="{{$editstaff->phone_no}}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="image" style="display: block; font-weight: bold; margin-bottom: 5px;">Image:</label>
            <input type="file" id="image" name="image" value="{{$editstaff->image}}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;">
        </div>
        <div class="btn-container" style="text-align: center;">
            <button type="submit" class="btn" name="submit"  value="submit" style="padding: 10px 20px; background-color: #4CAF50; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Update</button>
        </div>
    </form>
</div>

@endsection