<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container text-center">
    <h2> Import Excel File To Database </h2>
    <form class="form-horizontal"  method="POST" action="/import-excel-data" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <input type="file" class="form-control" name="file">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-2">
                <button type="submit" class="btn btn-block btn-primary">Import</button>
            </div>
        </div>
    </form>
</div>
<div class="container text-center">
    <h2><a href="{{route('exportData')}}"> Export Data From Database To Excel </a></h2>
</div>

</body>
</html>
