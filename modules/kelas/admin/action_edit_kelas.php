<?php

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM kelas WHERE kelas_id = $id");
}

if( isset($_POST['edit_kelas']) )
{
	if( $_POST['kelas_nama'] == '' ){
		$_error[] = "Nama kelas harus diisi";	
	}
		
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['kelas_nama']	 = $_POST['kelas_nama'];	
		$update = Update("kelas", $data, "WHERE kelas_id = $id");
		
		if( $update )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}

?>