<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Clients</title>
</head>

<body>
    {{$errors}}
    <h1>Update Client</h1>
    <form method="POST" action="/edit">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-3">
           Name: <input value="{{$data['full_name']}}" type="text" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            Username: <input value="{{$data['username']}}" type="text" class="form-control" id="username" name="username">

        </div>
        <div class="mb-3">

            Phone Number:  <input value="{{$data['phone_number']}}" type="text" class="form-control" id="phone_number" name="phone_number"> 

        </div>
        <div class="mb-3">
            
            Email: <input value="{{$data['email']}}" type="email" name="email" class="form-control">
            
        </div>
        <div class="mb-3">
            
           Is admin? <input value="{{$data['is_admin']}}" type="text" name="is_admin" class="form-control">
            
        </div>

        <!--<div class="mb-3 form-check">
            Is admin? check for True <input value="{{-- {{$data['is_admin']} --}}}" type="checkbox" class="form-check-input" id="exampleCheck1">
        </div>-->
        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>

</body>

</html>
