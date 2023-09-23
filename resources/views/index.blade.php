<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .know a{
            color: red;
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
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img1.jpg') }}" class="d-block img-fluid" alt="..." width="98%" height="700px">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{__("message.ct7")}}</h1>
                    <li class="fw-bolder know"><a href="/apropos">{{__("message.ct8")}}</a></li>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img2.jpg') }}" class="d-block img-fluid" alt="..."width="98%" height="700px">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{__("message.ct7")}}</h1>
                    <li class="fw-bolder know"><a href="/apropos">{{__("message.ct8")}}</a></li>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img3.png') }}" class="d-block img-fluid" alt="..."width="98%" height="700px">
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

        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-6 border-end border-2 border-dark">
                <h1 class="text-danger">{{__("message.ct9")}}</h1>
                <h3>{{__("message.ct10")}}</h3>
                <p class="text fw-bolder">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit ipsum dolore cumque vel quae tempore? Et atque temporibus nesciunt, quia dolorum aspernatur. <br> Officia corporis minima consequatur corrupti nam molestiae.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente sed voluptatum commodi quia voluptatem magni <br>pariatur voluptas dicta beatae? Accusantium minus quisquam consequuntur reiciendis deserunt quia sunt harum blanditiis et?
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <img src="{{ asset('assets/logo-ollux.png') }}" alt="" width="300px" height="300px" class="img-fluid">
            </div>
        </div>

        <div class="row mt-3">
            <h1 class="text-danger">{{__("message.ct11")}}</h1>
            <p class="fw-bolder text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae odit ipsum dolore cumque vel quae tempore? Et atque temporibus nesciunt, quia dolorum aspernatur. <br> Officia corporis minima consequatur corrupti nam molestiae.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente sed voluptatum commodi quia voluptatem <br>pariatur voluptas dicta beatae? Accusantium minus quisquam consequuntur reiciendis deserunt quia sunt harum blanditiis et?
            </p>
        </div>

        <div class="row mt-3">
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
 
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-6">
                <h1 class="text-center text-danger">
                    {{__("message.ct12")}}
                </h1>
                <div style="border: 3px dashed red" class="align-baseline">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sapiente ut culpa eaque nostrum <br> similique nulla ad corrupti! Earum praesentium, eaque sint aut iure libero fugiat? Molestiae beatae esse voluptate.
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <h1 class="text-center text-danger">
                    {{__("message.ct13")}}
                </h1>
                <div style="border: 3px dashed red" class="align-baseline">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima sapiente ut culpa eaque nostrum <br> similique nulla ad corrupti! Earum praesentium, eaque sint aut iure libero fugiat? Molestiae beatae esse voluptate.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </div>
    @endsection
</body>
</html>

