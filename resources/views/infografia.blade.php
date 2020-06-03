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
            <div class="m-b-md">

            <h1>Infografía</h1>
<p>Descubre m&aacute;s sobre este animal:</p>
<p><strong>V&iacute;deos y documentales</strong></p>
<ul>
<li><a href="https://www.youtube.com/watch?v=L0Y5rtVkL_o">Ba&ntilde;o entre boquerones.</a></li>
<li><a href="https://www.youtube.com/watch?v=b9SSGO9MIt0">Temporada del boquer&oacute;n en Sanlucar de Barrameda (C&aacute;diz).</a></li>
<li><a href="https://www.youtube.com/watch?v=c9jYkwO9L6o">Boqueron Indomable: Documental de Siglo y Cuarto.</a></li>
<li><a href="https://www.rtve.es/alacarta/videos/aqui-la-tierra/aqui-tierra-bocarte-anchoa-boqueron/4163258/">Diferencia entre bocarte, anchoa o boquer&oacute;n - RTVE.</a></li>
</ul>
<p>&nbsp;</p>
<p><strong>Art&iacute;culos</strong></p>
<ul>
<li><a href="https://core.ac.uk/download/pdf/36038943.pdf">Anchovy early life history and its relation to its surrounding environment in the Western Mediterranean basin.</a></li>
<li><a href="https://www.ajol.info/index.php/ajms/article/view/66515">Worldwide large-scale fluctuations of sardine and anchovy populations.</a></li>
<li><a href="https://www.tandfonline.com/doi/pdf/10.2989/02577618909504561?needAccess=true&amp;">World-wide fluctuations of sardine and anchovy stocks: the regime problem</a></li>
</ul>
<p>&nbsp;</p>
<ul>
<li><a href="https://www.sciencedirect.com/science/article/pii/S0378382011000300">Performance and emission study of waste anchovy fish biodiesel in a diesel engine</a></li>
<li><a href="https://blog.nationalgeographic.org/tag/anchovies/">Blog del National Geografic.</a></li>
<li><a href="https://www.rtve.es/alacarta/videos/para-todos-la-2/para-todos-2-boqueron-anchoa-bocarte/1097782/">Para Todos La 2 - El boqueron, la anchoa y el bocarte.</a></li>
<li><a href="https://www.laopiniondemalaga.es/luces-malaga/2009/09/14/boquerones-anchoas-bocartes/289001.html">Boquerones, anchoas, bocartes... - la Opini&oacute;n de M&aacute;laga.</a></li>
</ul>
<p>&nbsp;</p>
<p><strong>Pel&iacute;culas y cortos</strong></p>
<ul>
<li><a href="https://www.youtube.com/watch?v=cj8tBHEUweo">Karate a muerte en Torremolinos.</a></li>
<li><a href="https://www.youtube.com/watch?v=GGv3H57xWgY">Los boquerones del alba.</a></li>
<li><a href="https://www.youtube.com/watch?v=qQ1lgKoCjg0">Boquerones, sardinas - Torrente I</a></li>
</ul>
<p>&nbsp;</p>
            </div>
        </div>
    </div>
</body>

</html>
