<?php include("config.php"); ?>
<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 // ambil data dari formulir
 $foto = $_POST['foto'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $jk = $_POST['jenis_kelamin'];
 $agama = $_POST['agama'];
 $lulusan_universitas = $_POST['lulusan_universitas'];
 // buat query
 $sql = "INSERT INTO dosen (foto,nama, alamat, jenis_kelamin, agama, lulusan_universitas) VALUE
('$foto','$nama', '$alamat', '$jk', '$agama', '$lulusan_universitas')";
 $query = mysqli_query($conn, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header('Location: list_dosen.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: home.php?status=gagal');
 }
} else {
 die("Akses dilarang...");
}
?>