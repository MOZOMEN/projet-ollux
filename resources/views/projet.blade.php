<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-project</title>
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
    </style>
</head>
<body>
    @extends("welcome")

    @section("content")
        <div class="row ligne1" style="background-image: url('{{ asset('assets/propep.jpg') }}');height: 575px ">
            <h1 class="titre fw-bolder text-white text-center">{{__("message.ct44")}}</h1>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                <h1 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">{{__("message.ct45")}}</h1>

                <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                    {{__("message.ct46")}}
                </p>
                <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                    {{__("message.ct47")}}
                </p>
                {{-- <div class="justify-content-center text-center">
                    <li class="fw-bolder know mb-5" style="margin-top:80px;">
                        <a href="#" class="bg-body-secondary">{{__("message.ct8")}}</a>
                    </li>
                </div> --}}

            </div>
            <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">
                <h1 style="font-weight: bolder; color:#E21111; margin-top: 60px;margin-left: -60px">{{__("message.ct48")}}
                </h1>

                <span class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: -60px; color:#E21111">
                    {{__("message.ct49")}}:
                </span>
                <ul style="margin-left: 33px">
                    <li class="fw-bolder" style="margin-left: -60px">
                        -{{__("message.ct82")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px">
                        -{{__("message.ct83")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px; ">
                        -{{__("message.ct84")}};
                    </li>
                </ul>

                <span class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: -60px; color:#E21111">
                    {{__("message.ct85")}} :
                </span>
                <ul style="margin-left: 33px">
                    <li class="fw-bolder" style="margin-left: -60px; text-align:justify">
                        -{{__("message.ct86")}}; <br>
                        {{__("message.ct87")}}. <br> {{__("message.ct88")}} ;
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px">
                        - {{__("message.ct89")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px; ">
                        - {{__("message.ct90")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px; ">
                        - {{__("message.ct91")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px; ">
                        - {{__("message.ct92")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px; ">
                        -{{__("message.ct93")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px; ">
                        -{{__("message.ct94")}};
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">
                <h1 style="font-weight: bolder; color:#E21111; margin-top: 60px;margin-left: -60px">{{__("message.ct50")}}
                </h1>

                <span class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: -60px; color:#E21111">
                    {{__("message.ct95")}}:
                </span>
                <ul style="margin-left: 33px">
                    <li class="fw-bolder" style="margin-left: -60px">
                        -{{__("message.ct96")}} ; <br>
                        {{__("message.ct97")}};
                    </li> <br>
                    <li class="fw-bolder"  style="margin-left: -60px">
                        -{{__("message.ct98")}};
                    </li>
                </ul>

                <span class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: -60px; color:#E21111">
                    {{__("message.ct99")}}:
                </span>
                <ul style="margin-left: 33px">
                    <li class="fw-bolder" style="margin-left: -60px">
                        -{{__("message.ct100")}}.
                    </li>
                </ul>
            </div>
        </div>
    @endsection
</body>
</html>
