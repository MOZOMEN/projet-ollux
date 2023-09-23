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
        </div>

        <p class="text fw-bolder" style="text-align: justify; margin-top: 10px; padding: 60px 60px">
            {{__("message.ct101")}}. <br> <br>
            {{__("message.ct102")}}.
        </p>

        <div class="row mt-4 ligne3">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        1. {{__("message.ct103")}}
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct104")}}.
                    </p>

                </div>
                <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        2.{{__("message.ct105")}} 
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct106")}}.
                    </p>

                </div>
                <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        3. {{__("message.ct107")}}
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct108")}}.
                    </p>

                </div>
                <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        4. {{__("message.ct109")}}
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct110")}}.
                    </p>

                </div>
                <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
                </div>
            </div>
        </div>

    @endsection
</body>
</html>
