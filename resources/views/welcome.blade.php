<!DOCTYPE html>
<html>
  <head>
    <title>TV Shows Project</title>

    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script type="text/javascript" src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/plugins/bgfader.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>

  </head>
  <body {!! isset($tvshow) ? 'style="background-image: url('. $tvshow->fanart .');"' : '' !!}>
    <div class="title-container">
      <div class="container">
        <div class="content">
          <div class="title">TV Shows Project</div>
          {!! Form::open(['route' => 'show.search', 'method' => 'GET', 'id' => 'searchTVShowForm']) !!}
          <div class="input-group">
            {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search TV Show', 'autocomplete' => 'off']) !!}
            <div class="input-group-btn">
              {!! Form::button('<span class="glyphicon glyphicon-search" aria-hidden="true"></span>', ['type' => 'submit', 'class' => 'btn btn-default searchSubmitBtn']) !!}
            </div>
          </div>
          {!! Form::close() !!}
          @if (isset($tvshow))
            <div class="info">
              <p>{{ $tvshow->name }}</p>
            </div>
          @endif
        </div>
      </div>
    </div>
    <div class="preloader" style="background-image: null"></div>
  </body>
</html>
