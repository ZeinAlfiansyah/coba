 <?php  
//refactor
function run($query){
	global $link;
	if(mysqli_query($link, $query)){
		return true;
	}else{
		return false;
	}
}

function tambahData($data){

	$kunci = implode(", ",array_keys($data));

	$i = 0;
	foreach ($data as $key => $value) {
		
		if(!is_int($value)){
			$nilaiArray[$i] = "'". $value ."'";
		}else{
			$nilaiArray[$i] = $value;
		}

		$i++;
	}

	$nilai = implode(", ",$nilaiArray);

	$query = "INSERT INTO users ($kunci)
			  VALUES ($nilai)";
	return run($query);
}

function editData($data, $id){

		$i = 0;
	foreach ($data as $key => $value) {
		
		if(!is_int($value)){
			$nilaiArray[$i] = $key. " = '". $value ."'";
		}else{
			$nilaiArray[$i] = $key. " = ". $value;
		}

		$i++;
	}

	$nilai = implode(", ",$nilaiArray);

	$query = "UPDATE users SET $nilai
			  WHERE id =$id";
	return run($query);
}

function tampil(){
	global $link;

	$query  = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die('query tampil gagal');

	return $result;
}

function tampil_per_id($id){
	global $link;

	$query  = "SELECT * FROM users WHERE id =$id";
	$result = mysqli_query($link, $query) or die('query tampil gagal');

	return $result;
}


function hapusData($id){

	$query = "DELETE FROM users WHERE id = $id";

	return run($query);
}

?>