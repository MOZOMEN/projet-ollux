<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon"  href="{{ asset('assets/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        ul li {
            list-style: none;
            display: inline-block;
            /* margin:0 60px; */
        }
        li {
            list-style-type: none;

        }
        li a {
            text-decoration: none;
        }
        .actif {
            border: 2px solid red;
            border-radius: 20px;
        }
        .text {
            text-align: justify;
        }
        .col-6 .menu2 .soumenu2 a {
            text-decoration: none;
            list-style-type: none;
        }
        nav ul .menu1:hover{
            background-color: gray;
            text-decoration: underline black 2px;
            border-radius: 20px;
        }
        nav ul .menu1 a:hover{
            color: white
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row border-bottom border-2 border-dark align-items-center">
            <div class="col-6">
                <a class="navbar-brand" href="/resources/views/index.blade.php">
                    <img src="{{ asset('assets/logo.png') }}" style="height: 4rem; margin:0.5rem"
                        alt="logo ollux energy" class="img-fluid">
                </a>
            </div>

            <div class="col-6">
                <ul class="nav justify-content-end" style="display: flex; align-items: center">
                    <li class="nav-item" style="margin:0px">
                        <a class="nav-link" href="#">
                            <select class="form-control changeLang" style="width: 100%;background-color:black; color:white;">
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} >English
                                </option>
                                <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>Français
                                </option>
                            </select>
                        </a>
                    </li>

                    <li class="nav-item" id="clock" onload="currentTime()"
                        style="background-color:black; color:white; padding:5px; font-size:1rem">
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <header class="navbar navbar-expand-md px-5">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbar-content">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav  class="collapse navbar-collapse" id="navbar-content">
                    <ul class="navbar-nav" style="justify-content: space-between; width: 100%">
                        <li class="nav-item menu1 {{ (request()->is('index')) ? 'actif' : '' }}">
                            <a href="/index" class="fw-bolder nav-link">{{ __('message.ct1') }}</a>
                        </li>

                        <li class="nav-item menu1 {{ (request()->is('apropos')) ? 'actif' : '' }}">
                            <a href="/apropos" class="fw-bolder nav-link">{{ __('message.ct2') }}</a>
                        </li>

                        <li class="nav-itemm menu1 {{ (request()->is('vision')) ? 'actif' : '' }}">
                            <a href="/vision" class="fw-bolder nav-link">{{ __('message.ct3') }}</a>
                        </li>

                        <li class="nav-item menu1 {{ (request()->is('service')) ? 'actif' : '' }}">
                            <a href="/service" class="fw-bolder nav-link">{{ __('message.ct4') }}</a>
                        </li>

                        <li class="nav-item menu1 {{ (request()->is('impact')) ? 'actif' : '' }}">
                            <a href="/impact" class="fw-bolder nav-link">{{ __('message.ct5') }}</a>
                        </li>

                        <li class="nav-item menu1 {{ (request()->is('projet')) ? 'actif' : '' }}">
                            <a href="/projet" class="fw-bolder nav-link">{{ __('message.ct43') }}</a>
                        </li>

                        <li class="nav-item menu1 {{ (request()->is('contact')) ? 'actif' : '' }}">
                            <a href="/contact" class="fw-bolder nav-link">{{ __('message.ct6') }}</a>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>

        @yield('content')

        <div class="row mt-5" style="background-color: #E21111">
            <div class="col-12 col-sm-12 col-md-6">
                <p class="text-white fw-bold">
                    {{ __('message.ct14') }}
                </p>

                <p class="text-white">
                    {{ __('message.ct15') }}
                </p>

                <a href="/impact" class="btn btn-light mb-3 fw-bold">{{ __('message.ct16') }}</a>
            </div>

            <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end">
                <ul class="menu2 mb-5">
                    <li class="text-white fs-5 fw-bold">{{ __('message.ct17') }}</li> <br>
                    <li class="soumenu2"> <a href="" class="text-white">Facebook</a> </li> <br>
                    <li class="soumenu2"> <a href="" class="text-white">Instagram</a> </li> <br>
                    <li class="soumenu2"> <a href="" class="text-white">Twitter</a> </li> <br>
                    <li class="soumenu2"> <a href="" class="text-white">Linkedin</a> </li> <br>
                </ul>
            </div>
        </div>

        <div class="row mt-5 border-top border-bottom border-2 border-dark">
            <div class="col-12 col-sm-12 col-md-4 justify-content-center">
                <img src="{{ asset('assets/logo-ollux.png') }}" alt="" class="img-fluid ms-5"
                    width="150px" height="50px">
                <ul class="justify-content-center">
                    <li> <a href="" class="fs-2 text-dark"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-square-instagram"></i></a>
                    </li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-square-twitter"></i></a></li>
                    <li><a href="" class="fs-2 text-dark"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-4 justify-content-center">
                <h1 class="fs-1">{{ __('message.ct6') }}</h1>
                <p>+971-558-57-94-14</p>
                <li><a href="" class="text-dark mb-4">info.ollux@syandcoholding.com</a></li>
                <p class="mt-3">Jewellery & Gemplex 3 Plot <br>
                    No DMCC-PH2-J&GPLexS</p>
            </div>

            <div class="col-12 col-sm-12 col-md-4 justify-content-center">
                <p class="text-dark fs-5 fw-bold">{{ __('message.ct18') }}</p>
                <ul class="menu2 mb-3">
                    <li class="soumenu2"> <a href="/apropos" class="text-dark">{{ __('message.ct19') }}</a> </li>
                    <br>
                    <li class="soumenu2"> <a href="/apropos" class="text-dark">{{ __('message.ct20') }}</a> </li>
                    <br>
                    <li class="soumenu2"> <a href="/apropos" class="text-dark">{{ __('message.ct21') }}</a> </li>
                    <br>
                </ul>

                <p class="text-dark fs-5 fw-bold">{{ __('message.ct5') }}</p>
                <ul class="menu2">
                    <li class="soumenu2"> <a href="/impact" class="text-dark">{{ __('message.ct22') }}</a> </li>
                    <br>
                    <li class="soumenu2"> <a href="/impact" class="text-dark">{{ __('message.ct23') }}</a> </li>
                    <br>
                </ul>
            </div>
        </div>

        <p class="fw-bold text-center">Ollux ENERGIES, {{ __('message.ct24') }}, {{ date('Y') }}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>
<script type="text/javascript">
    var url = "{{ route('changelang') }}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });

    function currentTime() {
        let date = new Date();
        let hh = date.getHours();
        let mm = date.getMinutes();
        let ss = date.getSeconds();
        let session = "AM";


        if (hh > 12) {
            session = "PM";
        }

        hh = (hh < 10) ? "0" + hh : hh;
        mm = (mm < 10) ? "0" + mm : mm;
        ss = (ss < 10) ? "0" + ss : ss;

        let time = hh + ":" + mm+ " " + session;

        document.getElementById("clock").innerText = time;
        let t = setTimeout(function() {
            currentTime()
        }, 1000);

    }

    currentTime();
</script>


</html>
