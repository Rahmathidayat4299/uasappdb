<!DOCTYPE html>
<html>
<head>
 <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
 <link rel="stylesheet" href="">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <title>Pendaftaran Siswa Baru | SMK Coding</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
 <header>
 <h3>Formulir Pendaftaran Siswa Baru</h3>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_siswa.php">List Siswa</a>
      </li>
    </ul>
  </div>
</nav>
 </header>
 <div class="form-group">
 <form action="proses-pendaftaran.php" method="POST">
 <fieldset>
 <div class="form-group">
 <label for="nama">Nama: </label>
 <input type="text" name="nama" placeholder="nama lengkap" />
 </div>
 <p>
 <div class="form-group">
 <label for="alamat">Alamat: </label>
 <textarea name="alamat"></textarea>
 </div>
 </p>
 <p>
 <label for="jenis_kelamin">Jenis Kelamin: </label>
 <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
 <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
 </p>
 <p>
 <label for="agama">Agama: </label>
 <select name="agama">
 <option>Islam</option>
 <option>Kristen</option>
 <option>Hindu</option>
 <option>Budha</option>
 <option>Atheis</option>
 </select>
 </p>
 <p>
 <label for="sekolah_asal">Sekolah Asal: </label>
 <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
 </p>
 <p>
 </div>
 <input type="submit" value="Daftar" name="daftar" />
 </p>
 </fieldset>
 </form>
 </body>
</html>
