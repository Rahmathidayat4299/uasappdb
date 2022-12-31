<?php include("config.php"); ?>
    <!DOCTYPE html>
    <html>
        <head>
              <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <title>Pendaftaran Siswa Baru | SMK Coding</title>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        </head>
        <body>
            <header>
                <h3>Siswa yang sudah mendaftar</h3>
            </header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="berhasil_login.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list_mahasiswa.php">List Mahasiswa</a>
          </li>
        
        </ul>
      </div>
    </nav>
            <div class="table-responsive-md">
            <table class="table table-striped" style="width: 800px; border : solid red 1px;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Sekolah Asal</th>
                        <th scope="col">Tindakan</th>
                        </tr>

    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM dosen";
    $query = mysqli_query($conn, $sql);
    while($siswa = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td scope = row>".$siswa['id']."</td>";
    echo "<td scope = row><img src='images/".$siswa['foto']."' width='100' height='100'></td>";
    echo "<td scope = row>".$siswa['nama']."</td>";
    echo "<td scope = row >".$siswa['alamat']."</td>";
    echo "<td scope = row>".$siswa['jenis_kelamin']."</td>";
    echo "<td scope = row>".$siswa['agama']."</td>";
    echo "<td scope = row>".$siswa['lulusan_universitas']."</td>";
    echo "<td>";
    echo "<a class= btn btn-warning href='form_edit_dosen.php?id=".$siswa['id']."'>Edit</a> | ";
    echo "<a  href='hapus_dosen.php?id=".$siswa['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    <BR>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <button onclick="window.print()">Print Laporan Siswa</button>
    <button><a href="register.php">Logout</a></button>
    </BR>
    </div>
    </body>

    </html>
