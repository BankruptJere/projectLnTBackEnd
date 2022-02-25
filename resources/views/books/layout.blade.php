<!DOCTYPE html>
<html>

<style>
      body {
        background-image: url({{ URL::to('/assets/img/blackscreen.png') }});
        background-repeat: no-repeat;
        background-attachment: fixed;
background-size: 100% 100%;
      }
      </style>

      
<head>
    <title>Pt. Musang Library</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('/assets/style.css') }}">
</head>


<body>



<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container" style="color:white"> Pt Musang | Library </a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="{{ route('books.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="{{ route('books.list') }}">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="{{ route('books.create') }}">Manage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="{{ route('books.contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br>
<div class="container">
    @yield('content')
</div>

<br> <br><br>
<div class="footer text-center p-3 bg-dark" style="color:white">
    &copy; 2021 - Pt Musang | All Right Reserved
</div>
   
</body>
</html>