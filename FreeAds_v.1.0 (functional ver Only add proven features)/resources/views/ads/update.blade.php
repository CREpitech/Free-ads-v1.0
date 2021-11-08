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
    <form method="POST" action="/ads-edit">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-3">
          Title: <input value="{{$data['title']}}" type="text" class="form-control" id="title" name="title">

        </div>
        <div class="mb-3">
            Description: <input value="{{$data['description']}}" type="text" class="form-control" id="description" name="description">

        </div>
        <div class="mb-3">

           Category:  <input value="{{$data['category_id']}}" type="text" class="form-control" id="category_id" name="category_id"> 

        </div>
        <div class="mb-3">
            
            Localization: <input value="{{$data['localisation']}}" type="text" name="localisation" class="form-control">
            
        </div>
        <div class="mb-3">
            
           Price: <input value="{{$data['price']}}" type="text" name="price" class="form-control">
            
        </div>

        <!--<div class="mb-3 form-check">
            Is admin? check for True <input value="{{-- {{$data['is_admin']} --}}}" type="checkbox" class="form-check-input" id="exampleCheck1">
        </div>-->
        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>

</body>

</html>
