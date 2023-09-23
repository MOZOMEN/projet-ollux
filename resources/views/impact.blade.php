<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-impact</title>
    <link rel="icon"  href="{{ asset('assets/logo.png') }}">
    <style>
        .ligne1{
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .row .titre{
            margin-top: 300px;
            font-size: 5em;
        }
        .bouton{
            width: 10px;
        }
    </style>
</head>
<body>
    @extends("welcome")
    @section("content")
    <div class="row ligne1" style="background-image: url('{{ asset('assets/img3.png') }}'); height: 570px">
        <h1 class="titre fw-bolder text-white text-center">{{__("message.ct31")}}</h1>

        <li class="d-grid gap-2 d-md-flex justify-content-md-end" style="height:73px;">
            <a href="/impactplus" class="btn btn-light mb-3 fw-bold justify-content-end text-danger">{{__("message.ct8")}}</a>
        </li>

    </div>
    @endsection
</body>
</html>
