<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    ​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    ​
    <title>Cheap domestic flights from Barcelona</title>
</head>
<body style="background:url('https://www.worldatlas.com/r/w728-h425-c728x425/upload/fb/46/c6/shutterstock-311421530.jpg'); background-size:cover;">
<h1 style="margin-top:5%;margin-left:3%; font-size:52px;">Flights</h1>
<table class="table table-hover" style="margin-top:2%;">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Origin</th>
        <th scope="col">Destination</th>
        <th scope="col">Emisions</th>
        <th scope="col">Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($flights as $flight)
    <tr>
        <th scope="row">{{$flight->id}}</th>
        <td>{{$flight->origin}}</td>
        <td>{{$flight->destination}}</td>
        <td>{{$flight->pollution}}</td>
        <td>{{$flight->price}}€</td>
        <td><button type="button" class="btn btn-primary col-md-4">Buy</button></td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
