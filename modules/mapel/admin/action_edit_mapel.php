<?php

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM mata_pelajaran WHERE mapel_id = $id");
}

if( isset($_POST['edit_mapel']) )
{
	if( $_POST['mapel_nama'] == '' ){
		$_error[] = "Nama mapel harus diisi";	
	}
		
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['mapel_nama']	 = $_POST['mapel_nama'];	
		$update = Update("mata_pelajaran", $data, "WHERE mapel_id = $id");
		
		if( $update )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}

?>