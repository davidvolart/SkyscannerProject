<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Skyscanner hackupc19!</title>
</head>
<body style="background:url('https://www.worldatlas.com/r/w728-h425-c728x425/upload/fb/46/c6/shutterstock-311421530.jpg'); background-size:cover;">
    <h1 style="margin-top:20%; margin-left:2%;">Where to next?</h1>
    <form method="POST" action="{{route('find')}}" class="card" style="margin-top:1%;background-color:darkblue; margin-left:0.5%;margin-right:0.5%">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="from">From</label>
                <input type="text" class="form-control" id="from" name="from" placeholder="Coutry, city, airport" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-group col-md-4">
                <label for="to">To</label>
                <input type="text" class="form-control" id="to" name="to" placeholder="Coutry, city, airport" aria-describedby="basic-addon1">
            </div>
            <div class="form-group col-md-2">
                <label for="depart">Depart</label>
                <input type="date" class="form-control" id="depart" name="depart" aria-describedby="basic-addon1" required>
            </div>
            <div class="form-group col-md-2">
                <label></label>
                <button id="submit" class="btn btn-lg btn-primary form-control form-control-lg" type="submit">
                    Send
                </button>
            </div>
        </div>
    </form>
</body>
</html>
