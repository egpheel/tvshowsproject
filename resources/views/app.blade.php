<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>TV Shows Project</title>

    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script type="text/javascript" src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="title-container">
      <div class="container">
        <div class="content">
          <div class="title">TV Shows Project</div>
          {!! Form::open(['route' => 'show.search', 'method' => 'POST', 'id' => 'searchTVShowForm']) !!}
          <div class="input-group">
            {!! Form::text('search', null, ['class' => 'form-control request', 'placeholder' => 'Search TV Show', 'autocomplete' => 'off']) !!}
            <div class="input-group-btn">
              {!! Form::button('<span class="glyphicon glyphicon-search" aria-hidden="true"></span>', ['type' => 'submit', 'class' => 'btn btn-default searchSubmitBtn']) !!}
            </div>
          </div>
          <div class="searching">
            Searching...
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

    <div class="tvshow-wrap">
      <div class="tvshow">

      </div>
      <div id="tvshow-info" class="block">
        <tvshow-info :name="name" :rating="rating" :desc="desc"></tvshow-info>
      </div>
    </div>


    <template id="tvshow-info-template">
      <div class="info">
        <p>@{{ name }}</p>
        <p>Rating: @{{ rating }}</p>
        <p>Description: @{{ desc }}</p>
      </div>
    </template>

    <script type="text/javascript" src="/js/vendor/vue.js"></script>
    <script type="text/javascript" src="/js/vue-app.js"></script>
    <script type="text/javascript" src="/js/jquery-app.js"></script>

  </body>
</html>
