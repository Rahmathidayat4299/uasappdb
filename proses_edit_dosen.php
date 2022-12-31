<?php include("config.php"); ?>
<?php include("config.php"); 
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
 $id = $_POST['id'];
 $foto = $_POST['foto'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $jk = $_POST['jenis_kelamin'];
 $agama = $_POST['agama'];
 $lulusan_universitas = $_POST['lulusan_universitas'];
 // buat query update
 $sql = "UPDATE dosen SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk',
agama='$agama', lulusan_universitas='$lulusan_universitas',foto = '$foto' WHERE id=$id";
 $query = mysqli_query($conn, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: list_dosen.php');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 die("Akses dilarang...");
}
?>
Silahk