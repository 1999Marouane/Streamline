<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>CRUD FROM</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>
<body>
    <nav class="navbar navbar-dark bg-mynav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My App</a>
        </div>
    </nav>

    <div class="container">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Users</h2>
        </div>
        <div class="p-2 bd-highlight">
            <a  href="{{route('create')}}" class="btn btn-secondary" >Create</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody id="mytable">
            @foreach($test as $customers)
            <tr>
                <!-- <th scope="row" colspan="5">Loading...</th> -->

                    <td>{{$customers->id}}</td>
                    <td><img width="45px" src="{{asset('upload/empolyee/'.$customers->image)}}"class="avatar"></td>
                    <td>{{$customers->first}}</td>
                    <td>{{$customers->last}}</td>
                    <td>{{$customers->email}}</td>
                    <td><button type="button" class="btn btn-outline-secondary">Edit</button>
                        <form action="{{ route('destroy', ['id' => $customers->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>




</body>
</html>
