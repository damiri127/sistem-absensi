<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('login-form-22/style.css')}}">
  <link rel="icon" href="{{url('login-form-22/img/logo.jpg')}}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>WELCOME TO SISTEM ABSENSI GURU SMKS TELADAN KERTASMAYA</title>
</head>
<body>
  <div class="login-wrapper">
    <form action="" class="form">
      <img src="{{asset('login-form-22//img/logo.jpg')}}" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="email" id="loginUser" autocomplete="off" required>
        <label for="loginUser">Email</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>