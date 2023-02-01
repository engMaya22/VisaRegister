<!DOCTYPE html>
<html>
<head>
    <title> Visa Website</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: #f3fdf3">
      
<div class="container">
    <br><br>
    <h2> Register for Your Visa Now</h2>
    <br><br>
    @yield('content')
</div>
     
</body>
  
</html>