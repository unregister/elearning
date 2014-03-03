<?php
if( isset($_POST['add_kelas']) )
{	
	if( $_POST['kelas_nama'] == '' ){
		$_error = "Nama kelas harus diisi";	
	}
	
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['kelas_nama']	 = $_POST['kelas_nama'];		
		$insert = Insert("kelas", $data);
		
		if( $insert )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}
?>