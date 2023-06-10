@extends('layout.index3')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
@endif
  <div class="container">
    <h2>Registration Form</h2>
    <form action="{{ route('staffregi') }}" method="post" enctype="multipart/form-data">
      @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="name">userName:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email ID:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone_no" required>

      <label for="name">type:</label>
      <input type="text" id="type" name="type" required>

      <label for="image">Profile Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>

      <input type="submit" value="Register">
    </form>
  </div>
  @endsection