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
            <!-- #######  THIS IS A COMMENT - Visible only in the source editor #########-->
           <!-- #######  THIS IS A COMMENT - Visible only in the source editor #########-->
<h1 style="text-align: center;"><strong>HABITAT</strong></h1>
<h4><strong>Esta especie abunda en el&nbsp;Oc&eacute;ano Pac&iacute;fico&nbsp;y el&nbsp;Atl&aacute;ntico, aunque tambi&eacute;n se encuentra en los mares&nbsp;Mediterr&aacute;neo&nbsp;y&nbsp;Negro.</strong></h4>
<h4><strong>Vive a m&aacute;s de 100 metros de profundidad en grandes bancos</strong></h4>
<h4><strong>En los meses de&nbsp;primavera&nbsp;y&nbsp;verano, cuando el&nbsp;sol&nbsp;calienta la superficie de las aguas del mar, los bancos de boquerones ascienden a las capas m&aacute;s superficiales para alimentarse y reproducirse. Mientras que durante el&nbsp;invierno&nbsp;los boquerones permanecen a m&aacute;s de 100 metros de profundidad.</strong></h4>
<p><strong><img style="display: block; margin-left: auto; margin-right: auto;" src="https://4.bp.blogspot.com/-SioLbGRP-4E/U24x1ToaoBI/AAAAAAAAI7s/H4ccb4YLdtY/s1600/Boquerones.jpg" width="561" height="700" /></strong></p>
            </div>
    </div>
</body>

</html>
