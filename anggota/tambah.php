<?php  

include '../aset/header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<center>
	<h1>Form Tambah Data Anggota</h1>
	<form action="proses-tambah.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" placeholder="masukkan Nama" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" placeholder="masukkan kelas" required></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td><input type="text" name="telp" placeholder="masukkan no. telp" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="masukkan username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="masukkan password" required></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
				</td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php  
include '../aset/footer.php';
?>