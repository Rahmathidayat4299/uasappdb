<?php include("config.php"); ?>
<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
 header('Location: list_dosen.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM dosen WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
 die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Formulir Edit dosen | SMK Coding</title>
 <link rel="stylesheet" href="styleform.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 <header>
 <h3>Formulir Edit Dosen</h3>
 </header>
 <div class="container-logout">
 <form action="proses_edit_dosen.php" method="POST">
 <fieldset>
 
 <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
 <p>
 <div class="form-group">
<label for="id">nama</label>
<input type="text" class="form-control" nama="nama" value="<?php echo
$siswa['nama'] ?>" aria-describedby="emailHelp" name = "nama" placeholder="masukkan nama">
</div>
 </p>
 <p>
 <!-- <label for="alamat">Alamat: </label>
 <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea> -->

 <div class="form-group">
<label for="id">alamat</label>
<input type="text" class="form-control" alamat="alamat" value="<?php echo $siswa['alamat'] ?>" aria-describedby="emailHelp" name = "alamat" placeholder="masukkan alamat">
        
                    </div>
 </p>
 <p>
 <label for="jenis_kelamin">Jenis Kelamin: </label>
 <?php $jk = $siswa['jenis_kelamin']; ?>
 <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk ==
'laki-laki') ? "checked": "" ?>> Laki-laki</label>
 <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk ==
'perempuan') ? "checked": "" ?>> Perempuan</label>


 </p>
 <p>
 <label for="agama">Agama: </label>
 <?php $agama = $siswa['agama']; ?>
 <select name="agama">
 <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
 <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
 <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
 <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
 <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
 </select>
 </p>
 <p>
 <label for="lulusan_universitas">Sekolah Asal: </label>
 <input type="text" name="lulusan_universitas" placeholder="nama sekolah" value="<?php echo
$siswa['lulusan_universitas'] ?>" />
 </p>
 <div class="form-group">
 <tr>
        <td>Foto</td>
        <td>
          <input type="file" name="foto">
        </td>
      </tr>
 </div>
 <p>
 <input type="submit" value="Simpan" name="simpan" />
 </p>
 </fieldset>
 </form>
 </div>
 </body>
</html>