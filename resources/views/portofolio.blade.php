<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <!-- Bootsrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

</head>
<style type="text/css">
    .jumbotron{
        font-size: 20px;
        padding: 50px;
        text-align: center;
        color: black;  
    }
    .p{
        text-align: justify;
        color: black;
    }
    card{
        text-align: justify;    
    }
    h2{
        font-family: Georgia, serif;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profil">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience">Experience</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Portofolio <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron" style="background-color: #00CED1;">
<hr class="my-4">
  <img src="{{ ('img/Me.jpg') }}" width="200px" style="border-radius: 50px; -moz-border-radius: 50px;">
  <h1 class="display-4">Pungki Arya Tama</h1>
  <p class="lead">Student | Beginner Web Programmmer | Music</p>
  <hr class="my-4">
  </div>
  
  <div class="jumbotron" style="background-color: #32CD32; text-align: justify">
  <h2 class="display-8">Portofolio</h2>
  <hr class="my-4">
    <p class="lead">Berikut Merupakan Beberapa Karya Yang Saya Dokumentasikan</p>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ ('img/karya1.png') }}" class="d-block w-100" alt="Web">
    </div>
  
    <div class="carousel-item">
      <img src="{{ ('img/karya2.png') }}" class="d-block w-100" alt="Starbhak Mart">
    </div>
  
    <div class="carousel-item">
      <img src="{{ ('img/2020-05-06 (3).png') }}" class="d-block w-100" alt="Starbhak Mart">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
  </div>
  <div class="jumbotron" style="background-color: #FFFAFA; text-align: justify">
    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mail.google.com/mail/u/0/#inbox"> aryatamapungki@gmail.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>