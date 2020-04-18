<?php
include '../koneksi.php';
$sql = "SELECT * FROM buku ORDER BY judul";
$res = mysqli_query($koneksi, $sql);
$pinjam = array();	
while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}
?>
<?php 
include '../aset/header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SiPERPUS</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
		</div>
	</div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-book"></i> Buku</h2>
    <button type="submit" class="btn btn-warning"><a href="tambah.php"><i class="fas fa-book-medical"></i>   Tambah </a></button>
    </div>
    <div class="card-body">
    	<table class="table table-striped">
  	<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Ringkasan</th>
      <th scope="col">Cover</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  	</thead>
  	<tbody>
    <?php 
    $no = 1;
    foreach ($pinjam as $p ) { ?>
    	<tr>
    		<th scope="row"><?= $no ?></th>
    		<td><?=	$p['judul']?></td>
        <td><?= $p['penerbit']?></td>
    		<td><?=	$p['pengarang']?></td>
        <td><?= $p['ringkasan']?></td>
        <td><?= $p['cover']?></td>
        <td><?= $p['stok']?></td>
    		<td>
    			<a href="detail.php?id_buku=<?= $p["id_buku"];?>" class="badge badge-success">Detail</a>
                <a href="edit.php?id_buku=<?= $p["id_buku"];?>  " class="badge badge-warning">Edit</a>
                <a href="hapus.php?id_buku=<?= $p["id_buku"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
    		</td>
    	</tr>
   	<?php 
    $no++;
    }
   	?>
  	</tbody>
	</table>
    </div>
</div>
</body>
</html>
 <?php 
include '../aset/footer.php';
 ?>