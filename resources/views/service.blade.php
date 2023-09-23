<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-Services</title>
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
        .row .titre2{
            font-size: 5em;
        }
    </style>
</head>
<body>
    @extends("welcome")
    @section("content")
    <div class="row ligne1" style="background-image: url('{{ asset('assets/img7.jpg') }}'); height: 570px">
        <h1 class="titre fw-bolder text-white text-center">{{__("message.ct29")}}</h1>
    </div>

    <div class="row mt-3" style="padding-top:50px;">
        <h1 style="font-weight: bolder; color:#E21111; padding-left:60px">{{__("message.ct11")}}</h1>
        <p class="fw-bolder" style="text-align: justify; padding: 40px 40px">
            {{__("message.ct53")}}. <br> <br>
            {{__("message.ct54")}}:
        </p>
    </div>

    <div class="row mt-1">

        <div class="col-12 col-sm-12 col-md-4 mt-1">
            <div class="card">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{__("message.ct55")}}</h5>
                  <p class="card-text" style="text-align: justify">
                    {{__("message.ct56")}}
                  </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 mt-1">
            <div class="card">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{__("message.ct57")}}</h5>
                  <p class="card-text" style="text-align: justify">{{__("message.ct58")}}</p>
                </div>
              </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 mt-1">
            <div class="card">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{__("message.ct59")}} </h5>
                  <p class="card-text" style="text-align: justify">
                    {{__("message.ct60")}}
                  </p>
                </div>
              </div>
        </div>
    </div>

    <div class="row mt-1">

        <div class="col-12 col-sm-12 col-md-4 mt-1">
            <div class="card">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{__("message.ct61")}}</h5>
                  <p class="card-text" style="text-align: justify">{{__("message.ct62")}}
                  </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 mt-1">
            <div class="card">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{__("message.ct63")}}</h5>
                  <p class="card-text" style="text-align: justify">{{__("message.ct64")}}</p>
                </div>
              </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 mt-1">
            <div class="card">
                <img src="{{ asset('assets/logo-ollux.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{__("message.ct65")}} </h5>
                  <p class="card-text" style="text-align: justify">
                    {{__("message.ct66")}}
                  </p>
                </div>
              </div>
        </div>
    </div>

   
    @endsection
</body>
</html>
