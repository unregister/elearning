<?php

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM kurikulum WHERE kurikulum_id = $id");
}

if( isset($_POST['edit_kurikulum']) )
{
	if( $_POST['kurikulum_nama'] == '' ){
		$_error[] = "Nama kurikulum harus diisi";	
	}
	if( $_POST['kurikulum_tahun_pertama'] == '' ){
		$_error[] = "Kurikulum tahun pertama harus diisi";	
	}
	
	if( $_POST['kurikulum_tahun_kedua'] == '' ){
		$_error[] = "Kurikulum tahun kedua harus diisi";	
	}
	
	if( isset($_error) )
	{
		$_msg = error( implode("<br>",$_error) );	
	}else{
		$data['kurikulum_nama']	 = $_POST['kurikulum_nama'];
		$data['kurikulum_tahun_pertama']	 = $_POST['kurikulum_tahun_pertama'];
		$data['kurikulum_tahun_kedua']	 = $_POST['kurikulum_tahun_kedua'];
		
		$update = Update("kurikulum", $data, "WHERE kurikulum_id = $id");
		
		if( $update )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}




?>