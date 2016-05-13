<?php 
require_once('core/init.php');
require_once('template/header.php');

if(isset($_GET['id'])){

	if(hapusData($_GET['id'])){
		header('Location: index.php');
	}else{
		echo 'hapus data gagal';
	}


}

?>