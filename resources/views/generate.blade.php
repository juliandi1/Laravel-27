<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>P27</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand d-flex align-items-center">
                <img src="https://laravel.com/img/logomark.min.svg" width="40">
                <span class="ms-2">
                    P27
                </span>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row justify-content-center mb-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">ODD</div>
                    <div class="card-body text-center">
                        <h1>{{ $number['odd'] }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">EVEN</div>
                    <div class="card-body text-center">
                        <h1>{{ $number['even'] }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-4">
                <div class="btn-group">
                    <a href="{{ route('firebase.set') }}" class="btn btn-primary">Random</a>
                    <a href="{{ route('firebase.remove') }}" class="btn btn-danger">Remove</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
