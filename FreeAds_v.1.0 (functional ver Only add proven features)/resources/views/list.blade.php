<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
</head>
<body>
    {{-- <a href="#">Admin page</a> --}}
   {{--  <a href="#">New Client</a> This line will be placed inside CRUD ops col in table--}}
    <h1>Clients list</h1>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Full Name</td> 
            <td>Phone Number</td>
            <td>Username</td>           
            <td>Email</td>
            <td>Is admin</td>
            <td>CRUD operations</td>           
        </tr>
   @foreach ($clients as $client )

        <tr>
            <td>{{$client['id']}}</td>
            <td>{{$client['full_name']}} </td> 
            <td>{{$client['phone_number']}} </td>
            <td>{{$client['username']}} </td>           
            <td>{{$client['email']}} </td>
            <td>{{$client['is_admin']}} </td>
            <td>
                <a href={{"edit/". $client['id']}}>Edit</a>
                
                <a href={{"delete/". $client['id']}}>Delete</a>
            </td>
            
        </tr>

        @endforeach
    </table>
</body>
</html>