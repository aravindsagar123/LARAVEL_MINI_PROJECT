@extends('layout.index4')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
@endif
<div class="container">
    <h2>Registration Form</h2>
    <form action="{{ route('doctor_reg') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="name">doctorName:</label>
      <input type="text" id="name" name="doctor_name" required>

      <label for="name">specialization:</label>
      <input type="text" id="username" name="specialization" required>

      <label for="email">phone_no:</label>
      <input type="Tel" id="email" name="phone_no" required>

      <label for="password">email_id:</label>
      <input type="email" id="password" name="email_id" required>

      <label for="image">Profile Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>

      <input type="submit" value="Register">
    </form>
  </div>
  @endsection