<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <title>create_data</title>
</head>
<body>

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Create user</h2>
            </div>
            <div class="p-2 bd-highlight">
                <a  href="{{route('crud')}}" class="btn btn-secondary" >index</a>
            </div>
        </div>

        <div class="table-responsive">

    <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
       @csrf
        <input type="file"  class="swal2-input" name="image"  placeholder="image"><br>
        <input id="fname" class="swal2-input"  type="text"  name="first" placeholder="First"><br>
        <input id="lname" class="swal2-input"    type="text" name="last" placeholder="Last"><br>
        <input id="username" class="swal2-input" type="text" name="email" placeholder="email"><br><br>

        <input type="submit" class="btn btn-outline-secondary" value="click">

    </form>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

</body>
</html>
