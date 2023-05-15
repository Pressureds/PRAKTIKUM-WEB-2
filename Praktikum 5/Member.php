<?php
require "Koneksi.php";
require "Model.php";

if (!empty($_GET['id_member'])) {
  $id_member = $_GET['id_member'];
  deletedata("member", $id_member, "id_member");
  header('location:Member.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Data Member</title>
  <style>
    h1, table {
      text-align: center;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="Index.php">Home</a>
        <a class="nav-link active" aria-current="page" href="Member.php">Member</a>
        <a class="nav-link" href="Buku.php">Buku</a>
        <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
      </div>
    </div>
  </div>
</nav><br>
  <h1 class="mt-1">Data Member</h1>
  <a href="FormMember.php"><button type="button" class="btn btn-primary btn-sm mt-4 ms-4">+Tambah Member</button></a>
  <div class="table-responsive mx-4 mt-4">
    <table class="table table-hover table-bordered">
      <tr class="table-info">
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Nomor Telepon</th>
        <th>Alamat</th>
        <th>Tanggal Mendaftar</th>
        <th>Tanggal Terakhir Bayar</th>
        <th colspan="2">Aksi</th>
      </tr>

      <?php
      $result = selectalldata("member");
      while ($data = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php echo $data['id_member'] ?></td>
          <td><?php echo $data['nama_member'] ?></td>
          <td><?php echo $data['nomor_member'] ?></td>
          <td><?php echo $data['alamat'] ?></td>
          <td><?php echo $data['tgl_mendaftar'] ?></td>
          <td><?php echo $data['tgl_terakhir_bayar'] ?></td>
          <td style="text-align: center;"><a href="FormMember.php?id_member=<?php echo $data['id_member']; ?>"><button class="btn btn-secondary btn-sm">Edit</button></a></td>
          <td style="text-align: center;"><a href="Member.php?id_member=<?php echo $data['id_member']; ?>" onclick="return confirm('Hapus data?')"><button class="btn btn-danger btn-sm">Hapus</button></a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>