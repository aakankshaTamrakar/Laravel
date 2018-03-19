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
<table class="table">

  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th></th>
    <th></th>  
  </tr>
 
     
   @foreach ($user as $user)
    <tr>
    <td>{{ $user -> id }}</td>
    <td>{{ $user -> name }}</td>
    <td>{{ $user -> email }}</td>
    <td>{{ $user -> subject }}</td>
    <td>{{ $user -> message }}</td>
    <td><a href='{{ url("/delete/{$user ->id}")}}'><button class="">Delete</button></a></td>
    <td><a href='{{ url("/edit/{$user ->id}")}}'><button class="">Edit</button></a></td>
    </tr>  
@endforeach
  
</table>
</div>
</body>
</html>  