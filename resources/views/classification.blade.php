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
            html, body {
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

            .links > a {
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
            <b>Nombre científico y clasificación</b>
<p><b>Tipos de boquerones</b><br></p><p>(ES) Anchoíta Engraulis anchoita</p><p>(EN) Argentine anchovy</p><p>(FR) Anchois d'Argentine</p><p>También conocida como anchoa de Argentina. Es la especie más pequeña de la familia Engraulidae. Abunda en la costa oriental de Argentina, Uruguay y Brasil.
</p><p><br></p><p>(ES) Anchoíta japonesa Engraulis japonicus</p><p>(EN) Japanese anchovy</p><p>(FR) Anchois japonais</p><p>Viven en aguas niponas y en los océanos Pacífico e Índico.</p><p><br></p><p>(ES) Anchoa de California Engraulis mordax</p><p>(EN) Californian anchovy</p><p>(FR) Anchois de Californie</p><p>Se distribuye por los océanos Índico y Pacífico.</p><p><br></p><p>(ES) Boquerón Aduanero Encrasicholina heteroloba</p><p>(EN) Shorthead anchovy</p><p>(FR) Anchois douanier</p><p>Vive en las aguas tropicales de los océanos Pacífico e Índico.</p>
            </div>
        </div>
    </body>
</html>
