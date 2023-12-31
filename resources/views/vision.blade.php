<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-Our vision</title>
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

        .row .titre3{
            font-size: 5em;
        }
        .ligne2 {
            opacity: 0.9;
        }
        .text{
            font-size: 1.5em;
        }
        .ligne3{
            background: rgba(255, 165, 0, 0.3);
        }
        .ligne2 .titre2{
            color:#E21111
        }

    </style>
</head>
<body>
    @extends("welcome")
    @section("content")
        <div class="row ligne1" style="background-image: url('{{ asset('assets/img8.jpg') }}');height:570px">
            <h1 class="titre fw-bolder text-white text-center">{{__("message.ct26")}}</h1>
        </div>

        <div class="image-container row ligne1 ligne2 mt-3" style="background-image: url('{{ asset('assets/img5.jpg') }}');height: 570px;">
            <h1 class="titre2 fw-bolder text-start">{{__("message.ct27")}}</h1>
            <p class="fw-bolder text">
                {{__("message.ct42")}}
            </p>
        </div>

        <div class="row mt-4 ligne3">
            <h1 class="text-center titre3" style="color: #E21111">
                    {{__("message.ct67")}}
            </h1>
            <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; padding-left: 60px">
                {{__("message.ct68")}}.
            </p>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        {{__("message.ct69")}}
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct70")}} .
                    </p>

                </div>
                <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        {{__("message.ct71")}}
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct72")}}.
                    </p>

                </div>
                <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                    <h3 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">
                        {{__("message.ct73")}}
                    </h3>

                    <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                        {{__("message.ct74")}} .
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
