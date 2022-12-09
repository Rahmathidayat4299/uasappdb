<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>.: KOPERASI UNILAK:.</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<center><h1>CRUD SEDERHANA KOPERASI UNILAK</h1></center>
<center>
    <a class="btn btn-primary" href="?page=list"> DATA ANGGOTA</a>
    <a class="btn btn-success" href="?page=add">TAMBAH SISWA</a>
    <a class="btn btn-danger" href="?page=home">home</a>
    <a class="btn btn-success" href="?page=list_siswa">LIST SISWA</a>
    <a class="btn btn-success" href="?page=list_siswa_laporan">print</a>
</center>
<hr>
<?php 
    $page = (isset($_GET['page'])) ? $_GET['page'] : 'add' ;

    switch ($page) {
        case 'add':
            require_once 'form-daftar.php';
            break;
        case 'list_siswa':
            require_once 'list_siswa.php';
            break;
        case 'list_siswa_laporan':
                require_once 'print_laporan_siswa.php';
                break;
        case 'home':
            require_once 'home.php';
            break;
        case 'index':
            require_once 'index.php';
            break;
        default:
            require_once 'home.php';
            break;
    }
 ?>
</body>
</html>