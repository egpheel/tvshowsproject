<!DOCTYPE html>
<html>
    <head>
        <title>TV Shows Project</title>

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
                font-family: 'Lato';
                @if (isset($tvshow))
                  background-image: url({{ $tvshow->fanart }});
                  background-size: cover
                @endif
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

            .info {
                font-size: 42px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">TV Shows Project</div>
                @if (isset($tvshow))
                  <div class="info">
                    <p>{{ $tvshow->name }}</p>
                  </div>
                @endif
            </div>
        </div>
    </body>
</html>
