<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Sample Laravel Basic Task List</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">

  <style type="text/css">
    .main.container {
      padding-top: 6em;
      padding-bottom: 2em;
    }
    .task-done {
      text-decoration: line-through;
    }
    table td form {
      display: inline;
    }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui text container">
      <a href="/" class="header item">
        <i class="inverted large tasks icon"></i>
        Basic Task List
      </a>
    </div>
  </div>

  <div class="ui main text container">

    @yield('content')
    
  </div>
  
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
</body>

</html>
