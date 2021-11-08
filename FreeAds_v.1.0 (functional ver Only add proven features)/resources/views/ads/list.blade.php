<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ads List</title>
</head>
<body>
    {{-- <a href="#">Admin page</a> --}}
   {{--  <a href="#">New Client</a> This line will be placed inside CRUD ops col in table--}}
    <h1>ads list</h1>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Image <title></title></td> 
            <td>Title</td>
            <td>Owner</td>
            <td>Description</td>
            <td>Category</td>           
            <td>Localization</td>
            <td>Price</td>
            <td>CRUD operations</td>           
        </tr>
   @foreach ($items as $item )

        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['upload_img']}} </td> 
            <td>{{$item['title']}} </td>
            <td>{{$item['user_id']}} </td>
            <td>{{$item['description']}} </td>           
            <td>{{$item['category_id']}} </td>
            <td>{{$item['localisation']}} </td>
            <td>{{$item['price']}} </td>
            <td>
                <a href={{"ads-edit/". $item['id']}}>Edit</a>
                
                <a href={{"ads-delete/". $item['id']}}>Delete</a>
            </td>
            
        </tr>

        @endforeach
    </table>
</body>
</html>