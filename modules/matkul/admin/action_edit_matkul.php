<?php

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM mata_kuliah WHERE matkul_id = $id");
}

if( isset($_POST['edit_matkul']) )
{
	if( $_POST['matkul_nama'] == '' ){
		$_error[] = "Nama matkul harus diisi";	
	}
		
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['matkul_nama']	 = $_POST['matkul_nama'];	
		$update = Update("mata_kuliah", $data, "WHERE matkul_id = $id");
		
		if( $update )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}

?>