<?php 
require_once('core/init.php');
require_once('template/header.php');

$result = tampil();
//print_r($result);
?>

<a href="add.php" id="tambah">Tambah Data</a>

<div id="head">
	<div class="col-3">
		Nama
	</div>

	<div class="col-3">
		Password
	</div>

	<div class="col-3">
		Umur
	</div>
</div>

<div class="clear"></div>

<div id="body">

	<?php while($row = mysqli_fetch_assoc($result)): ?>
		<div class="col-3">
			<?= $row['nama'];?>
		</div>

		<div class="col-3">
			<?= $row['password'];?>
		</div>

		<div class="col-3">
			<?= $row['umur'];?>
		</div>

		<div class="col-3">
			<a href="delete.php?id=<?= $row['id']; ?>" class="hapus">Hapus</a>
		</div>

		<div class="col-3">
			<a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
		</div>
	<?php endwhile ?>
</div>