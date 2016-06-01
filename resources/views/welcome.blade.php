<!DOCTYPE html>
<html>
    <head>
        <title>TV Shows Project</title>

        <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">

        <style>
          body {
            @if (isset($tvshow))
              background-image: url({{ $tvshow->fanart }});
              background-size: cover;
            @endif
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
