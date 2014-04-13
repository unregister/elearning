<?php

$parent_id = 0;
if( isset($_GET['parent_id']) ){
	$parent_id = (int)$_GET['parent_id'];	
}

$kategori_nama = GetOne("SELECT kategori_nama FROM kategori WHERE kategori_id = ".$parent_id);

if( isset($_POST['add_kategori']) )
{	
	if( $_POST['kategori_nama'] == '' ){
		$_error = "Nama kategori harus diisi";	
	}
	
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['kategori_nama']	 = $_POST['kategori_nama'];	
		$data['kategori_parent_id']	 = $parent_id;		
		$insert = Insert("kategori", $data);
		
		if( $insert )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}
?>