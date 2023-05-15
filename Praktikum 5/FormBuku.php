<?php
require "Koneksi.php";
require "Model.php";
if (isset($_POST['submit'])) {
	$data = array(
		"id_buku" => "'" . $_POST['id_buku'] . "'",
		"judul_buku" => "'" . $_POST['judul_buku'] . "'",
		"penulis" => "'" . $_POST['penulis'] . "'",
		"penerbit" => "'" . $_POST['penerbit'] . "'",
		"tahun_terbit" => "'" . $_POST['tahun_terbit'] . "'"
	);
	insert($data, 'buku');
	header('location:Buku.php');
}

$id = isset($_GET['id_buku']) ? $_GET['id_buku'] : '';
$data = selectdatabyid("buku", $id, "id_buku");
if (isset($_POST['edit'])) {
	$data = array(
		"id_buku" => "'" . $_POST['id_buku'] . "'",
		"judul_buku" => "'" . $_POST['judul_buku'] . "'",
		"penulis" => "'" . $_POST['penulis'] . "'",
		"penerbit" => "'" . $_POST['penerbit'] . "'",
		"tahun_terbit" => "'" . $_POST['tahun_terbit'] . "'"
	);
	update($data, 'buku', $id, "id_buku");
	header("location:Buku.php");
}

if (isset($_POST['kembali'])) {
	header("location:Buku.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<?php if (!isset($_GET['id_buku'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Form Tambah Buku</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID Buku</label>
							<input type="text" name="id_buku" placeholder="Isi ID Buku" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Judul Buku</label>
							<input type="text" name="judul_buku" placeholder="Isi Judul Buku" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Penulis</label>
							<input type="text" name="penulis" placeholder="Isi Penulis" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Penerbit</label>
							<input type="text" name="penerbit" placeholder="Isi Penerbit" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tahun Terbit</label>
							<input type="number" name="tahun_terbit" placeholder="Isi Tahun Diterbitkan" required class="form-control col-form-label-sm" min="1900" max="2099">
						</div>
						<button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Ingin Menambah buku?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-secondary" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php
	endif;
	if (isset($_GET['id_buku'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Form Edit Buku</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID Buku</label>
							<input type="text" name="id_buku" value="<?php echo $data['id_buku']; ?>" placeholder="Isi ID Buku" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Judul Buku</label>
							<input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" placeholder="Isi Judul Buku" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Penulis</label>
							<input type="text" name="penulis" value="<?php echo $data['penulis']; ?>" placeholder="Isi Penulis" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Penerbit</label>
							<input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>" placeholder="Isi Penerbit" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tahun Terbit</label>
							<input type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit'] ?>" placeholder="Isi Tahun Diterbitkan" required class="form-control col-form-label-sm" min="1900" max="2099">
						</div>
						<button type="submit" class="btn btn-success" name="edit" onclick="return confirm('Ingin Menyimpan perubahan?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-secondary" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php endif; ?>
</body>
</html>
