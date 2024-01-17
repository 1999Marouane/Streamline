<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('folderCss/loginRegistration.css')}}">
</head>
<body>
<div class="wrapper">
<div class="form signup">
    <span class="title">Registration</span>

    <form action="{{route('registration')}}" method="post">
        @csrf
        <div class="input-field">
            <input type="text" placeholder="Enter your name"name="name"  required>
            <i class="uil uil-user"></i>
        </div>
        <div class="input-field">
            <input type="text" placeholder="Enter your email"name="email"  required>
            <i class="uil uil-envelope icon"></i>
        </div>
        <div class="input-field">
            <input type="password" class="password" name="createpassword" placeholder="Create a password" required>
            <i class="uil uil-lock icon"></i>
        </div>
        <div class="input-field">
            <input type="password" class="password" name="confirmpassword" placeholder="Confirm a password" required>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
        </div>

        <div class="checkbox-text">
            <div class="checkbox-content">
                <input type="checkbox" id="termCon">
                <label for="termCon" class="text">I accepted all terms and conditions</label>
            </div>
        </div>

        <div class="input-field button">
            <input type="submit" value="Signup">
        </div>
    </form>

    <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="{{asset(route('login'))}}" class="text login-link">Login Now</a>
                    </span>
    </div>
</div>
</div>

<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
