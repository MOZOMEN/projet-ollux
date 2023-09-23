<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-Services</title>
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
    <div class="row ligne1 w-100 p-0" style="background-image: url('{{ asset('assets/img7.jpg') }}'); height:100vh">
        <h1 class="titre fw-bolder text-white text-center">{{__("message.ct29")}}</h1>
    </div>

    <div class="row mt-3">
        <h1 class="mt-3 mb-3 text-danger text-center titre2">{{__("message.ct30")}}</h1>
        <div class="col-12 col-sm-12 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
    @endsection
</body>
</html>
