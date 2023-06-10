<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    .container input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .container input[type="submit"]:hover {
      background-color: #45a049;
    }

    .container .link {
      text-align: center;
      margin-top: 16px;
    }

    .container .link a {
      color: #999;
      text-decoration: none;
    }

    .container .link a:hover {
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="{{ route('log') }}" method="post" >
      @csrf
      <input type="text" placeholder="Username" name="email" required>
      <input type="password" placeholder="Password" name="password" required>
      <input type="submit" value="Login">
    </form>
    <div class="link">
      <a href="#">Forgot password?</a> | <a href="#">Create an account</a>
    </div>
  </div>
</body>
</html>
