<?php 
require_once('core/init.php');
require_once('template/header.php');

if (isset($_POST['submit'])){

	$data = array(
		'nama'     => $_POST['nama'],
		'password' => $_POST['password'],
		'umur' 	   => (int)$_POST['umur']
		);

	if(tambahData($data)){
		header('Location: index.php');
	}else{
		echo 'tambah data gagal';
	}

}

?>

<h3>Tambah Data</h3>

<form action="" method="post">
	Nama:     <input type="text" name="nama"> <br>
	Password: <input type="text" name="password"> <br>
	Umur:	  <input type="text" name="umur"> <br>
	<input type="submit" name="submit" value="Tambah Data" id="tambah">
</form>