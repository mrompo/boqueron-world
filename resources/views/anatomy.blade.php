<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('gallery')}}">Gallery</a>
            <a href="{{route('reproduction')}}">Reproduction</a>
            <a href="{{route('habitat')}}">habitat</a>
            <a href="{{route('classification')}}">classification</a>
            <a href="{{route('anatomy')}}">anatomy</a>
            <a href="{{route('behavior')}}">behavior</a>
        </div>

        <div class="content">
            <b>Anatomía y biología</b>
            <ul>
                <li><b>Forma:</b> El boquerón posee un cuerpo pequeño, comprimido y relativamente alargado. La boca es grande y la comisura se ubica detrás de los ojos. La aleta caudal es bifurcada y posee una única aleta dorsal.</li>
                <li><b>Dimensión: </b>10-15 cm</li>
                <li><b>Color: Su vientre es de color plateado mientras que el dorso es verde fuerte o azul grisáceo.</li>
                <li><b>Tiempo de vida: </b>2 años</li>
                <li>Respiración: las branquias con las que captan el oxígeno disuelto en el agua. Están constituidas por estructuras filiformes que contienen muchos capilares sanguíneos y cuya superficie permite el intercambio de los gases. El pez aspira agua por la boca y la expulsa a través de las branquias para que éstas retengan el oxígeno y liberen el dióxido de carbono./li>
            </ul>
        </div>
    </div>
</body>

</html>