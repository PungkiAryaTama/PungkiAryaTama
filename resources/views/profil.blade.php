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
      <li class="nav-item active">
        <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portofolio">Portofolio</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron" style="background-color: #00CED1;">
  <img src="{{ ('img/Me.jpg') }}" width="200px" style="border-radius: 50px; -moz-border-radius: 50px;">
  <h1 class="display-4">Pungki Arya Tama</h1>
  <p class="lead">Student | Beginner Web Programmmer | Music</p>
  <hr class="my-4">
  </div>
  <div class="jumbotron" style="background-color: #32CD32; text-align: justify">
  <h2 class="display-8">Profile</h2>
  <hr class="my-4">
        <p>Hai, nama saya Pungki Arya Tama, saya adalah seorang Pelajar yang bersekolah di SMK Taruna Bhakti Depok. Saya lahir pada tanggal 16 Februari 2003 di Kabupaten Grobogan.
        Sekarang saya tinggal bersama dengan orang tua saya, yang beralamat di Kp.Cipayung RT 07/ RW 04 Sukmajaya, Depok. Dan sekarang saya masih duduk di bangku kelas 11 di SMK Taruna Bhakti dengan jurusan Rekayasa Perangkat Lunak.
        Saya mempunyai beberapa hobi seperti, Menonton Film, Mendengarkan Musik, atau bermain game untuk mengisi waktu luang yang saya miliki.
        Mendengarkan musik adalah yang paling seering saya lakukan, karena musik membuat saya menjadi lebih tenang saat mengerjakan sesuatu. Genre yang paling saya sukai adalah Rock, Heavy Metal, dan band favorit saya adalah Metallica.
        Cita-cita saya adalah menjadi seorang programmer, dan saya ingin melanjutkan jenjang pendidikan saya ke salah satu Universitas Negeri di Bandung. Karena Bandung adalah kota yang selalu ingin saya kunjungi selain Jogja dan Bali.
        Sebenarnya ada beberapa universitas yang saya minati, yaitu Universitas Indonesia, Telkom University, Universitas Gajah Mada dll. Tapi saya akan berusaha mencapai Universitas tujuan saya terlebih dahulu.</p>
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