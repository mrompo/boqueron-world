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

        <h1>Conductas y hábitos</h1>
<p>Forman densos card&uacute;menes*&nbsp;que ascienden a la superficie durante la noche desde profundidades medias, para alimentarse de&nbsp;plancton; las especies m&aacute;s grandes suplementan su dieta con otros peces.</p>
<p><em>* Un cardumen, tambi&eacute;n llamado&nbsp;banco de peces,&nbsp;es un conjunto de&nbsp;peces&nbsp;similares, no necesariamente de especies comerciales. Y puede no ser tampoco espec&iacute;fica a una especie. Se reserva el t&eacute;rmino&nbsp;"banco"&nbsp;para grupos de la misma especie, nadando en una alta sincronizaci&oacute;n y de manera polarizada.</em></p>
<p>&nbsp;Efect&uacute;a la puesta entre junio y julio; los&nbsp;huevos, de una peculiar forma alargada, flotan durante dos o tres d&iacute;as tras la&nbsp;fecundaci&oacute;n&nbsp;hasta la eclosi&oacute;n de los&nbsp;alevines. Estos crecen muy lentamente (ejemplares de un a&ntilde;o pueden medir menos de 3&nbsp;cm) hasta alcanzar el tama&ntilde;o adulto.</p>
<p style="text-align: center;">&nbsp;<img src="https://www.eldiario.es/fotos/Cortesia-Integration-Application-University-Environmental_EDIIMA20180402_0062_20.jpg" alt="" width="394" height="306" /></p></div>
    </div>
</body>

</html>
