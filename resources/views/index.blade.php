<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-home page</title>
    <link rel="icon"  href="{{ asset('assets/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .know a{
            color: #E21111;
            background-color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    @extends("welcome")

    @section("content")
        <div id="carouselExampleIndicators" class="carousel slide mt-5">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 550px">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img1.jpg') }}" class="d-block img-fluid w-100" alt="..." style="height: 550px;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{__("message.ct7")}}</h1>
                    <li class="fw-bolder know"><a href="/apropos">{{__("message.ct8")}}</a></li>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ asset('assets/img2.jpg') }}" class="d-block img-fluid w-100" alt="..." style="height: 550px;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{__("message.ct7")}}</h1>
                    <li class="fw-bolder know"><a href="/apropos">{{__("message.ct8")}}</a></li>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ asset('assets/img3.png') }}" class="d-block img-fluid w-100" alt="..."style="height: 550px;">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{__("message.ct7")}}</h1>
                    <li class="fw-bolder know"><a href="/apropos">{{__("message.ct8")}}</a></li>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row border-bottom border-2 border-dark">
            <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                <h1 style="font-weight: bolder; color:#E21111; margin-top: 60px; margin-left: 60px">{{__("message.ct9")}}</h1>

                <p class="text fw-bolder" style="text-align: justify; margin-top: 30px; margin-left: 60px">
                    {{__("message.ct51")}} <br> <br>
                    {{__("message.ct52")}}
                </p>
                <div class="justify-content-center text-center">
                    <li class="fw-bolder know mb-5" style="margin-top:80px;">
                        <a href="/motdir" class="bg-body-secondary">{{__("message.ct8")}}</a>
                    </li>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 justify-content-center">
                <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" class="img-fluid">
            </div>
        </div>

        <div class="row mt-3" style="padding-top:50px;">
            <h1 style="font-weight: bolder; color:#E21111; padding-left:60px">{{__("message.ct11")}}</h1>
            <p class="fw-bolder" style="text-align: justify; padding: 40px 40px">
            {{__("message.ct53")}} <br> <br>
            {{__("message.ct54")}}   :
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

        <div class="row mt-5 gap-3">
            <div class="col-12 col-sm-12 col-md-5 offset-md-1">
                <h5 style="color: #E21111">
                    {{__("message.ct12")}}
                </h5>
                <div class="row align-baseline" style="border: 3px dashed red">
                    <div class="col-4">
                        <img src="{{ asset('assets/cie-logo.png') }}" alt="" class="img-fluid align-middle" height="225px">
                    </div>

                    <div class="col-4">
                        <img src="{{ asset('assets/logo-total.png') }}" alt="" class="img-fluid align-middle" height="225px">
                    </div>

                    <div class="col-4">
                        <img src="{{ asset('assets/sir.png') }}" alt="" class="img-fluid align-middle" height="225px">
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-5">
                <h5 style="color: #E21111">
                    {{__("message.ct13")}}
                </h5>
                <div class="row align-baseline" style="border: 3px dashed red">
                    <div class="col-4">
                        <img src="{{ asset('assets/ecobank.jpg') }}" alt="" class="img-fluid align-middle">
                    </div>

                    <div class="col-4">
                        <img src="{{ asset('assets/nsia.png') }}" alt="" class="img-fluid align-middle" height="100px">
                    </div>

                    <div class="col-4">
                        <img src="{{ asset('assets/sg2.jpg') }}" alt="" class="img-fluid align-middle">
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>

