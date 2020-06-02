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
            <b>Apareamiento y reproducción</b>
            <p>El<strong> boquer&oacute;n o longor&oacute;n</strong>, Engraulis encrasicolus, se trata de una especie gonoc&oacute;rica, ov&iacute;para, con fecundaci&oacute;n externa y desove fraccionado a lo largo del a&ntilde;o.<br /><br /><img src="https://www.pescaderiascorunesas.es/tienda-online/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/o/boquer_n_edit.jpg" alt="" width="800" height="800" /></p>
            <p>Esta especie presenta un ciclo de vida corto, con 3 a 4 a&ntilde;os de longevidad y un r&aacute;pido crecimiento, presentando la primera madurez sexual al t&eacute;rmino del primer a&ntilde;o de vida. La &eacute;poca reproductiva se desarrolla a fines de invierno, entre los meses de julio y septiembre. cerca de la costa. Sus huevos son planct&oacute;nicos es decir, con desarrollo embrionario muy r&aacute;pido 24 &ndash; 65 horas. Las larvas est&aacute;n presentes es zonas de afloramientos.</p>
            <p style="text-align: center;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9e8N5dY4c2SJr5rm5d-uJqCww9lvpmmbwT3SHqNRlmXq5yuWp&amp;s" alt="" width="259" height="194" /></p>
        </div>
    </div>
</body>

</html>
