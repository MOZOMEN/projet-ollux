<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ollux Energies-Our vision</title>
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
            height: 80vh;
            background: rgba(255, 165, 0, 0.3);
        }

    </style>
</head>
<body>
    @extends("welcome")
    @section("content")
        <div class="row ligne1 w-100 p-0" style="background-image: url('{{ asset('assets/img8.jpg') }}');height:100vh">
            <h1 class="titre fw-bolder text-white text-center">{{__("message.ct26")}}</h1>
        </div>

        <div class="image-container row ligne1 ligne2 w-100 p-0 mt-3" style="background-image: url('{{ asset('assets/img5.jpg') }}');height: 100vh;">
            <h1 class="titre2 fw-bolder text-danger text-start">{{__("message.ct27")}}</h1>
            <p class="fw-bolder text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex nostrum voluptates, quia <br>voluptatibus nisi repellat qui quae natus tempora voluptatum, porro magnam explicabo <br> inventore? At inventore explicabo doloremque adipisci. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, <br> accusantium maiores. Praesentium cupiditate eaque voluptates quam maxime quis expedita delectus? <br> Provident, impedit. Non ullam quis nobis voluptatum pariatur quia blanditiis.
            </p>
        </div>

        <div class="row mt-4 ligne3">
            <h1 class="text-center text-danger titre3">
                    Vision
            </h1>
            <p class="fw-bolder text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas ex nostrum voluptates, quia <br>voluptatibus nisi repellat qui quae natus tempora voluptatum, porro magnam explicabo <br> inventore? At inventore explicabo doloremque adipisci. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, <br> accusantium maiores. Praesentium cupiditate eaque voluptates quam maxime quis expedita delectus? <br> Provident, impedit. Non ullam quis nobis voluptatum pariatur quia blanditiis.
            </p>
        </div>
    @endsection

</body>
</html>
