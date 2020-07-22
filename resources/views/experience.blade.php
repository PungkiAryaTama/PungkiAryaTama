<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
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
    .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        margin-top: 20px;
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
      <li class="nav-item active">
        <a class="nav-link" href="experience">Experience <span class="sr-only">(current)</span></a>
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
  <h2 class="display-8">My Experience</h2>
  <hr class="my-4">

  <div class="card-group">
  <div class="card">
    <img src="{{ ('img/0001.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Event Baparekraf Developer Day 2020</h5>
      <p class="card-text">Baparekraf Developer Day adalah kegiatan yang diadakan oleh Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) dengan tujuan mengasah kemampuan teknis pengembang aplikasi di Indonesia. Kegiatan ini memungkinkan transfer pengetahuan dan standar industri secara langsung dari para praktisi yang telah sukses, khususnya pada bidang pengembangan aplikasi.</p>
      <p class="card-text"><small class="text-muted">Posted By : Pungki Arya Tama</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ ('img/Kunjin.jpeg') }}" class="card-img-top" alt="..." height="330px">
    <div class="card-body">
      <h5 class="card-title">Kunjungan Industri PT.Frisidea</h5>
      <p class="card-text">Melakukan Kunjungan industri ke PT.Frisidea Selama 3 hari yaitu mulai tanggal 5-7 Desember 2018. Perusahaan ini Berlokasi di daerah Jakarta. Perusahaan ini adalah perusahaan yang bergerak di bidang teknologi, atau lebih tepatnya teknologi pengembangan perangkat lunak, Seperti Web Development, Mobile Development, dan desktop yang digabungkan dengan pendekatan berorientasi layanan di selama siklus hidup aplikasi.</p>
      <p class="card-text"><small class="text-muted">Posted By : Pungki Arya Tama</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ ('img/tutor.jpeg') }}" class="card-img-top" alt="..." height="330px">
    <div class="card-body">
      <h5 class="card-title">Tutor Sebaya SMK Taruna Bhakti</h5>
      <p class="card-text"> Pada Tahun 2018 SMK Taruna Bhakti mengadakan sebuah program tutor sebaya, yaitu praktek membuat sebuah aplikasi Belajar Mengaji menggunakan Android Studio yang di pandu oleh kakak kelas pada jurusan yang sama yaitu Rekayasa Perangkat Lunak. Acara ini berlangsung selama 1 hari. Dalam acara itu saya belajar beberapa hal baru yang sebelumnya belum pernah saya pelajari, seperti belajar menggunakan Android Studio.</p>
      <p class="card-text"><small class="text-muted">Posted By : Pungki Arya Tama</small></p>
    </div>
  </div>
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