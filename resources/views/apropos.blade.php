<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-About us</title>
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
        .row .titre2{
            font-size: 5em;
        }
    </style>
</head>
<body>
    @extends("welcome")

    @section("content")
        <div class="row ligne1 w-100 p-0" style="background-image: url('{{ asset('assets/img2.jpg') }}'); height:100vh">
            <h1 class="titre fw-bolder text-white text-center">{{__("message.ct18")}}?</h1>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-6 p-0">
                <img src="{{ asset('assets/img9.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <h1 class="titre2 text-danger text-center">{{__("message.ct28")}}</h1>
                <p style="text-align: justify"> {{__("message.ct25")}}</p>
            </div>
        </div>
    @endsection
</body>
</html>
