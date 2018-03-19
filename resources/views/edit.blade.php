<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Bell Bootstrap 4 Theme</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

<br>
<center><h2>Display Data</h2></center>

<div class="container">

  <form action='{{ url("/show/".$user->id)}}' method="post">
   

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" value="{{$user->name}}" >
  </div>

  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="text" name="email" class="form-control" value="{{$user->email}}" >
  </div>

  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" name="subject" class="form-control" value="{{$user->subject}}" >
  </div>

  <div class="form-group">
    <label for="message">Message:</label>
    <input type="text" name="message" class="form-control" value="{{$user->message}}" >
  </div>

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="PUT">
  <input type="submit" name="edit" value="Update" class="btn btn-default">

</form>

</div> 

</body>
</html>  