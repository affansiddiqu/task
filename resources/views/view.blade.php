@extends('web.main')
@section('section')

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  {{-- <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

</head>

<body>
    <div class="container mt-5">
        <h1>Form</h1>
        <form action="{{Route('view')}}" class="form-group" method="post">

            @csrf
            <label for="name">name</label>
            <input type="name" class="form-control" name="name" value="{{old('name')}}">

            <span class="text-danger">
                @error('name')
                  {{$message}}
                  @enderror
            </span>
            <br>

            <label for="email">email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">

            <span class="text-danger">
                @error('email')
                  {{$message}}
                @enderror
            </span>
            <br>

            <label for="password">password</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}">

            <span class="text-danger">
                @error('password')
                  {{$message}}
                @enderror
            </span>
            <br>


            <input type="submit" class="btn btn-danger mt-4">

        </form>
    </div>
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-warning">
                <thead class="table table-warning">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stddata as $value )

                <tr class="">
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->password}}</td>
                    <td><a href="{{url('/')}}/dlt{{$value->id}}" class= "btn btn-danger"> <i class="fa fa-window-close" aria-hidden="true"></i>
                    </a>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>
