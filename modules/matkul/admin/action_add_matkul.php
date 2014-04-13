<?php
if( isset($_POST['add_matkul']) )
{	
	if( $_POST['matkul_nama'] == '' ){
		$_error = "Nama matkul harus diisi";	
	}
	
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['matkul_nama']	 = $_POST['matkul_nama'];		
		$insert = Insert("mata_kuliah", $data);
		
		if( $insert )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}
?>