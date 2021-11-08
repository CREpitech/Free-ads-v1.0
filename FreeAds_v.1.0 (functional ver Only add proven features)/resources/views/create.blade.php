<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>

    {{-- {{$errors}} --}}
    <div class="container">
        <form method="POST" action="#">
            <h1>Create a new User</h1>
           {{--  <form method="POST" action="{{route('newUser.create')}}"> --}}
            @csrf
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name"
                    placeholder="Enter your Full Name or Organization's" value="{{ old('name') }}">
                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your User Name"
                    value="{{ old('user') }}">
                <span class="text-danger">@error('username') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" placeholder="Enter your Contact Phone"
                    value="{{ old('surname') }}">
                <span class="text-danger">@error('phone_number') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email"
                    value="{{ old('email') }}">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password"
                    value="">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Register</button>
            </div>
            <br>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
