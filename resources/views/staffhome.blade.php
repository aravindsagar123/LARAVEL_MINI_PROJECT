@extends('layout.index6')
@section('content')
<style>
  /* Registration Form Styles */
  .card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 40px;
  }

  #registration h2 {
    color: #333;
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 40px;
    text-align: center;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-control {
    width: 100%;
    height: 50px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
  }

  .text-center {
    text-align: center;
  }

  button[type="submit"] {
    background-color: #4cbbb9;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 24px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #45aca7;
  }
</style>

<section id="registration" class="d-flex align-items-center">
      <div class="container">
        <div class="card">
        <h2>Register Form</h2>
        <form method="POST" action="{{ route('register') }}" class="php-email-form">
          @csrf
          <div class="form-group">
            <input type="text" name="patientname" class="form-control" placeholder="Enter the Name * " required>
          </div>

          <div class="form-group">
            <input type="date" name="date" class="form-control" placeholder="Enter the date * " required>
          </div>

          <div class="form-group">
            <input type="text" name="doctor_name" class="form-control" placeholder="Enter the doctor Name * " required>
          </div>

          <div class="form-group">
              <select name="gender" id="gender" class="form-control" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>

          <div class="form-group">
            <input type="file" name="image" class="form-control" placeholder="" required>
          </div>

          <div class="text-center">
            <button type="submit" value="submit" >Register</button>
          </div>
        </form>
</div>
      </div>
    </section>
@endsection