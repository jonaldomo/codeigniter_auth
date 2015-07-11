<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

<style>
div,body,h1,h2,h3,h4,h5,p {
  font-family: 'Roboto', sans-serif;
}
.card {
  position: relative;
  background: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
  margin-bottom: 30px;
}

.card .card-header {
  position: relative;
}

@media screen and (min-width: 768px) {
  .card .card-header:not(.ch-alt) {
    padding: 23px 26px;
  }
}

@media screen and (max-width: 991px) {
  .card .card-header:not(.ch-alt) {
    padding: 18px;
  }
}

.card .card-header h2 {
  margin: 0;
  line-height: 100%;
  font-size: 17px;
  font-weight: 400;
}

.card .card-header h2 small {
  display: block;
  margin-top: 8px;
  color: #AEAEAE;
  line-height: 160%;
}

@media screen and (min-width: 768px) {
  .card .card-header.ch-alt {
    padding: 23px 26px;
  }
}

@media screen and (max-width: 991px) {
  .card .card-header.ch-alt {
    padding: 18px 18px 28px;
  }
}

.card .card-header.ch-alt:not([class*="bgm-"]) {
  background-color: #f7f7f7;
}

.card .card-header[class*="bgm-"] h2,
.card .card-header[class*="bgm-"] h2 small {
  color: #fff;
}

.card .card-header .actions {
  position: absolute;
  right: 10px;
  z-index: 2;
  top: 15px;
}

.card .card-header .btn-float {
  right: 25px;
  bottom: -23px;
  z-index: 1;
}

@media screen and (min-width: 768px) {
  .card .card-body.card-padding {
    padding: 23px 26px;
  }
}

@media screen and (max-width: 991px) {
  .card .card-body.card-padding {
    padding: 18px;
  }
}

.card .card-body.card-padding-sm {
  padding: 15px;
}
</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Project name</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control">
          </div>
          <button type="submit" class="btn btn-success btn-xs">Sign in</button>
        </form>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>