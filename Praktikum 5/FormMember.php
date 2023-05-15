<?php
require "Koneksi.php";
require "Model.php";
if (isset($_POST['submit'])) {
	$data = array(
		"id_member" => "'" . $_POST['id_member'] . "'",
		"nama_member" => "'" . $_POST['nama_member'] . "'",
		"nomor_member" => "'" . $_POST['nomor_member'] . "'",
		"alamat" => "'" . $_POST['alamat'] . "'",
		"tgl_mendaftar" => "'" . $_POST['tgl_mendaftar'] . "'",
		"tgl_terakhir_bayar" => "'" . $_POST['tgl_terakhir_bayar'] . "'"
	);
	insert($data, 'member');
	header('location:Member.php');
}

$id = isset($_GET['id_member']) ? $_GET['id_member'] : '';
$data = selectdatabyid("member", $id, "id_member");
if (isset($_POST['edit'])) {
	$data = array(
		"id_member" => "'" . $_POST['id_member'] . "'",
		"nama_member" => "'" . $_POST['nama_member'] . "'",
		"nomor_member" => "'" . $_POST['nomor_member'] . "'",
		"alamat" => "'" . $_POST['alamat'] . "'",
		"tgl_mendaftar" => "'" . $_POST['tgl_mendaftar'] . "'",
		"tgl_terakhir_bayar" => "'" . $_POST['tgl_terakhir_bayar'] . "'"
	);
	update($data, 'member', $id, "id_member");
	header("location:Member.php");
}

if (isset($_POST['kembali'])) {
	header("location:Member.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Member</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<?php if (isset($_GET['id_member'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Form Edit Member</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID</label>
							<input type="text" name="id_member" value="<?php echo $data['id_member']; ?>" placeholder="Isi ID Member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" name="nama_member" value="<?php echo $data['nama_member']; ?>" placeholder="Isi Nama Lengkap Member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nomor Telepon</label>
							<input type="text" name="nomor_member" value="<?php echo $data['nomor_member']; ?>" placeholder="Isi Nomor Telepon" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Isi Alamat" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Mendaftar</label>
							<input type="datetime-local" step="1" name="tgl_mendaftar" value="<?php echo date('Y-m-d\TH:i:s', strtotime($data['tgl_mendaftar'])); ?>" placeholder="Isi Tanggal Pendaftaran" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Terakhir Bayar</label>
							<input type="date" name="tgl_terakhir_bayar" value="<?php echo $data['tgl_terakhir_bayar']; ?>" placeholder="Isi Tanggal Terakhir Bayar" required class="form-control col-form-label-sm">
						</div>
						<button type="submit" class="btn btn-success" name="edit" onclick="return confirm('Ingin Menyimpan perubahan?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-secondary" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php
	endif;
	if (!isset($_GET['id_member'])) : ?>
		<h1 style="text-align: center;" class="mt-2">Form Tambah Member</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-5 mx-auto">
					<form method="POST">
						<div class="mb-3 mt-3">
							<label class="form-label">ID</label>
							<input type="text" name="id_member" placeholder="Isi ID Member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" name="nama_member" placeholder="Isi Nama Lengkap Member" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Nomor Telepon</label>
							<input type="text" name="nomor_member" placeholder="Isi Nomor Telepon" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" name="alamat" placeholder="Isi Alamat" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Mendaftar</label>
							<input type="datetime-local" step="1" name="tgl_mendaftar" placeholder="Isi Tanggal Pendaftaran" required class="form-control col-form-label-sm">
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Terakhir Bayar</label>
							<input type="date" name="tgl_terakhir_bayar" placeholder="Isi Tanggal Terakhir Bayar" required class="form-control col-form-label-sm">
						</div>
						<button type="submit" class="btn btn-success" name="submit" onclick="return confirm('Ingin menambah member?')">Submit</button>
						<button type="submit" value="ignore" formnovalidate class="btn btn-secondary" name="kembali">Kembali</button>
					</form>
				</div>
			</div>
		</div>
	<?php endif; ?>
</body>

</html>