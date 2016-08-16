<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            span {
                font-size: 48px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <!-- <div class="title">Ola k ase</div> -->

                @unless(empty($people))
                    <span>VACIA ESTA VAINA</span>
                @endunless

                @foreach ($people as $person)
                    <span> {{ $person }} </span>
                @endforeach


            </div>
        </div>
    </body>
</html>
