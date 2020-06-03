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
            background-color: #b1bae8;
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
            <a href="{{route('curiosidades')}}">curiosidades</a>
            <a href="{{route('infografia')}}">infografía</a>
            <a href="{{route('alimentacion')}}">alimentación</a>
        </div>

        <div class="content">
        <h1>Anatom&iacute;a y biolog&iacute;a</h1>
<p style="font-size: 1.5em;">- Forma: El boquer&oacute;n posee un cuerpo peque&ntilde;o, comprimido y relativamente alargado. La boca es grande y la comisura se ubica detr&aacute;s de los ojos. La aleta caudal es bifurcada y posee una &uacute;nica aleta dorsal.</p>
<p style="font-size: 1.5em;">- Dimensi&oacute;n: 10-15 cm.</p>
<p style="font-size: 1.5em;">- Color: Su vientre es de color plateado mientras que el dorso es verde fuerte o azul gris&aacute;ceo.</p>
<p style="font-size: 1.5em;">- Tiempo de vida: 2 a&ntilde;os.</p>
<p style="font-size: 1.5em;"><img src="https://fileservice.slidewiki.org/picture/b9837ba844fac761daa40988e27a75b1759bbffc87f1d1c4c7d9685abf1a846b.png?1546008136911" alt="" width="800" height="449" /></p>
        </div>
    </div>
</body>

</html>
