<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href={{"/favicon/apple-touch-icon.png"}}>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        ul li{
            list-style: none;
            display: inline-block;
        }

        li{
            list-style-type: none;

        }

        li a{
            text-decoration: none;
        }

        ul .menu1:active{
            border: 2px solid red;
            border-radius: 20px;
        }

        ul .menu1:hover{
            border: 2px solid red;
            border-radius: 20px;
        }

        .text{
            text-align: justify;
        }

        .col-6 .menu2 .soumenu2 a{
            text-decoration: none;
            list-style-type: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row border-bottom border-2 border-dark align-items-center">
            <div class="col-6">
                <a class="navbar-brand" href="/resources/views/index.blade.php">
                    <img src="{{ asset('assets/logo-ollux.png') }}" alt="logo ollux energy" width="20%" height="20%" class="img-fluid">
                </a>
            </div>

            <div class="col-6">
                <ul class="nav justify-content-end">
                    <li class="nav-item" >
                      <a class="nav-link" href="#" >
                        <select class="form-control changeLang" style="width: 100%">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>Français</option>
                        </select>
                      </a>
                    </li>

                    <li class="nav-item">
                      <p class="fw-bold">{{date("H:i A")}}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <header class="navbar navbar-expand-md px-5">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-content">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-around" id="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item menu1"><a href="/index" target="_blank" class="fw-bolder nav-link">{{__("message.ct1")}}</a></li>

                        <li class="nav-item menu1"><a href="/apropos" target="_blank" class="fw-bolder nav-link">{{__("message.ct2")}}</a></li>

                        <li class="nav-itemm menu1"><a href="/vision" target="_blank" class="fw-bolder nav-link">{{__("message.ct3")}}</a></li>

                        <li class="nav-item menu1"><a href="/service" target="_blank" class="fw-bolder nav-link">{{__("message.ct4")}}</a></li>

                        <li class="nav-item menu1"><a href="/impact" target="_blank" class="fw-bolder nav-link">{{__("message.ct5")}}</a></li>

                        <li class="nav-item menu1"><a href="/contact" target="_blank" class="fw-bolder nav-link">{{__("message.ct6")}}</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        @yield("content")

        <div class="row mt-5 bg-danger">
            <div class="col-12 col-sm-12 col-md-6">
                <p class="text-white fw-bold">
                    {{__("message.ct14")}}
                </p>

                <p class="text-white">
                    {{__("message.ct15")}}
                </p>

                <a href="/impact" class="btn btn-light mb-3 fw-bold">{{__("message.ct16")}}</a>
            </div>

            <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end">
                    <ul class="menu2 mb-5">
                        <li class="text-white fs-5 fw-bold">{{__("message.ct17")}}</li> <br>
                        <li class="soumenu2"> <a href="" class="text-white">Facebook</a> </li> <br>
                        <li class="soumenu2"> <a href="" class="text-white">Instagram</a> </li> <br>
                        <li class="soumenu2"> <a href="" class="text-white">Twitter</a> </li> <br>
                        <li class="soumenu2"> <a href="" class="text-white">Linkedin</a> </li> <br>
                    </ul>
            </div>
        </div>

        <div class="row mt-5 border-top border-bottom border-2 border-dark">
            <div class="col-12 col-sm-12 col-md-4 justify-content-center">
                <img src="{{ asset('assets/logo-ollux.png') }}" alt="" class="img-fluid ms-5" width="150px" height="50px">
                <ul class="justify-content-center">
                    <li> <a href="" class="fs-2 text-dark"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-square-instagram"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-square-twitter"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-4 justify-content-center">
                <h1 class="fs-1">{{__("message.ct6")}}</h1>
                <p>+971-558-57-94-14</p>
                <li><a href="" class="text-dark mb-4">info.ollux@syandcoholding.com</a></li>
                <p class="mt-3">Jewellery & Gemplex 3 Plot <br>
                    No DMCC-PH2-J&GPLexS</p>
            </div>

            <div class="col-12 col-sm-12 col-md-4 justify-content-center">
                <p class="text-dark fs-5 fw-bold">{{__("message.ct18")}}</p>
                    <ul class="menu2 mb-3">
                        <li class="soumenu2"> <a href="/apropos" class="text-dark">{{__("message.ct19")}}</a> </li> <br>
                        <li class="soumenu2"> <a href="/apropos" class="text-dark">{{__("message.ct20")}}</a> </li> <br>
                        <li class="soumenu2"> <a href="/apropos" class="text-dark">{{__("message.ct21")}}</a> </li> <br>
                    </ul>

                <p class="text-dark fs-5 fw-bold">{{__("message.ct5")}}</p>
                    <ul class="menu2">
                        <li class="soumenu2"> <a href="/impact" class="text-dark">{{__("message.ct22")}}</a> </li> <br>
                        <li class="soumenu2"> <a href="/impact" class="text-dark">{{__("message.ct23")}}</a> </li> <br>
                    </ul>
            </div>
        </div>

        <p class="fw-bold text-center">Ollux ENERGIES, {{__("message.ct24")}}, {{date("Y")}}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
    <script type="text/javascript">

        var url = "{{ route('changelang') }}";

        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });

    </script>
</html>
