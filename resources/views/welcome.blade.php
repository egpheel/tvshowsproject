<!DOCTYPE html>
<html>
  <head>
    <title>TV Shows Project</title>

    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

    <script type="text/javascript" src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/plugins/bgfader.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>

  </head>
  <body {!! isset($tvshow) ? 'style="background-image: url('. $tvshow->fanart .');"' : '' !!}>
    <div class="container">
      <div class="content">
        <div class="title">TV Shows Project</div>
        {!! Form::open(['route' => 'show.search']) !!}
          {!! Form::text('search', 'Search TV Show', ['class' => 'form-control']) !!}
        {!! Form::close() !!}
        @if (isset($tvshow))
          <div class="info">
            <p>{{ $tvshow->name }}</p>
          </div>
        @endif
      </div>
    </div>
    <div class="preloader" style="background-image: null"></div>
  </body>
</html>
