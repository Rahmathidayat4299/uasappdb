<!DOCTYPE html>
<html>
<head>
 <title>Formulir Pendaftaran Mahasiswa Baru | SMK Coding</title>
 <link rel="stylesheet" href="styleform_pinjam.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
 <header>
 <h3>Formulir Dosen Baru</h3>
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
        <a class="nav-link" href="list_mahasiswa.php">List Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_mahasiswa.php">List Dosen</a>
      </li>
    </ul>
  </div>
</nav>
 </header>
<div class = "container-logout">
<div class="form-group">
 <form action="proses-pendaftaran-dosen.php" method="POST">
 <fieldset>
 <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" class="form-control" id="nama" name ="nama" aria-describedby="emailHelp" placeholder="masukkan nama">
    </div>
 <p>
 <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name ="alamat" aria-describedby="emailHelp" placeholder="masukkan alamat">
    </div>
 </p>
 <p>
 <label for="jenis_kelamin">Jenis Kelamin: </label>
 <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-laki" checked>
        <label class="form-check-label" for="exampleRadios1">
            laki-laki
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Perempuan">
        <label class="form-check-label" for="exampleRadios2">
            perempuan
        </label>
    </div>
 </p>
 <p>
 <label for="agama">Agama: </label>
 <div>
	<select name = "agama" id = "agama" class="form-control form-control-sm">
    <option value="" disabled selected>Agama</option>
	<option value="islam">Islam</option>
	<option value="kristen">Kristen</option>
    <option value="katolik">Katolik</option>
    <option value="hindu">Hindu</option>
    <option value="buddha">Buddha</option>
	<option value="konghucu">Konghucu</option>
    </select>

	</div>
 </p>
 <p>
 <div class="form-group">
        <label for="exampleInputEmail1">Universitas Asal</label>
        <input type="text" class="form-control" id="lulusan_universitas" name ="lulusan_universitas" aria-describedby="emailHelp" placeholder="masukkan nama Universitas">
    </div>
 </p>
 <p>
 </div>
 <div class="form-group">
 <tr>
        <td>Foto</td>
        <td>
          <input type="file" name="foto">
        </td>
      </tr>
 </div>
 <input type="submit" value="Daftar" name="daftar" />
 </p>
 </fieldset>
 </form>
</div>
 </body>
</html>
