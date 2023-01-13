<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Universitas Lancang Kuning</title>
    <link rel="stylesheet" href="home.css">
    <link rel=”icon” href=”images/logo.png”>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Hanalei+Fill|Noto+Serif+JP|Raleway" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <div class="nav">
        <div class="logo">
          <a href="images/logo.png">
          <p>Unilak</p>
          </a>
        </div>
        <ul>
          <li><a class="nav-link" href="home.php"></a>Home</li>
          <li class="nav-item">
            <a class="nav-link" href="form-daftar.php">Pendaftaran Mahasiswa</a>
          </li>
          <li>
            <a class="nav-link" href="form_daftar_dosen.php">Pendaftaran dosen</a>
        </li>
        <div class="dropdown">
        <button class="dropbtn">List Data</button>
        <div class="dropdown-content">
            <a href="list_mahasiswa.php">List Mahasiswa</a>
            <a href="list_dosen.php">List Dosen </a>
        </div>
        </div>
          <li><a href="logout.php" class="btn">Logout</a></li>
        </ul>
      </div>
      <div class="header">
        <h1>Universitas Lancang Kuning</h1>
      </div>
      <br>
      <div class="tagline">
        <p>Menjadi Universitas Unggul 
            di tingkat Nasional berlandaskan 
            Budaya Melayu
        Pada tahun 2030</p><br>
      </div>
      <div class="down">
        <img src="images/unilak.png" alt="Travel">
      </div>
    </div>
  </body>
</html>