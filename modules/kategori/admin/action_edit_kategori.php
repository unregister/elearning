<?php

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM kategori WHERE kategori_id = $id");
}

if( isset($_POST['edit_kategori']) )
{
	if( $_POST['kategori_nama'] == '' ){
		$_error[] = "Nama kategori harus diisi";	
	}
		
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['kategori_nama']	 = $_POST['kategori_nama'];	
		$update = Update("kategori", $data, "WHERE kategori_id = $id");
		
		if( $update )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}

?>