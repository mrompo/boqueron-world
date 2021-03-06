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
            <div class="title m-b-md">
                Boqueron-World
            </div>

            <div class="links">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('gallery')}}">IMAGE GALLERY</a>
                <a href="{{route('reproduction')}">MATTING AND REPRODUCTION INFORMATION</a>
                <a href="http://localhost:8080/habitat">ANIMAL HABITAT</a>
                <a href="http://localhost:8080/sc-name-classification">SCIENTIFIC NAME AND CLASSIFICATION</a>
                <a href="http://localhost:8080/anatomy">ANIMAL ANATOMY AND BIOLOGY</a>
                <a href="http://localhost:8080/animal-behavior">ANIMAL BEHAVIOR</a>
            </div>
        </div>
    </div>
</body>

</html>
