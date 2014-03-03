<?php
if( isset($_POST['add_mapel']) )
{	
	if( $_POST['mapel_nama'] == '' ){
		$_error = "Nama mapel harus diisi";	
	}
	
	if( isset($_error) )
	{
		$_msg = error( $_error );	
	}else{
		$data['mapel_nama']	 = $_POST['mapel_nama'];		
		$insert = Insert("mata_pelajaran", $data);
		
		if( $insert )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");
		}
	}
}
?>