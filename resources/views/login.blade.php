<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('folderCss/loginRegistration.css')}}">

    <title>Login</title>
</head>
<body>

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Login</span>

            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="input-field">
                    <input type="text" name="email"  placeholder="Enter your email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="confirmpassword" class="password" placeholder="Enter your password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Remember me</label>
                    </div>

                    <a href="#" class="text">Forgot password?</a>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Login">
                </div>
            </form>

            <div class="login-signup">
                    <span class="text">Not a member?
                        <a  href="{{ route('registration') }}" class="text signup-link">Signup Now</a>
                    </span>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>


</body>
</html>
