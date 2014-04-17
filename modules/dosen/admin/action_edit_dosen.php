<?php
# Cari data agama
$query_agama = GetAll("SELECT * FROM agama");
$agama = array();
foreach((array)$query_agama as $agm){
	$agama[$agm['agama_id']] = $agm['agama_nama'];	
}

# Cari data kelas
$query_matkul = GetAll("SELECT * FROM mata_kuliah");
$matkul = array();
foreach((array)$query_matkul as $matkuls){
	$matkul[$matkuls['matkul_id']] = $matkuls['matkul_nama'];	
}

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM dosen WHERE dosen_id = $id");
}


if( isset($_POST['edit_dosen']) )
{
	

	if( trim($_POST['dosen_nama']) == '' ){
		$_error[] = "Nama dosen tidak boleh kosong";
	}

	if( trim($_POST['dosen_alamat']) == '' ){
		$_error[] = "Alamat dosen tidak boleh kosong";
	}

	if( !isset($_POST['hidden_foto']) )
	{
	
		if( !isset($_FILES['dosen_foto']) or $_FILES['dosen_foto']['name'] == ''){
			$_error[] = "Foto dosen tidak boleh kosong";
		}else{
			$allow_extension = array('jpg','png','gif','bmp');
			$ekstensi = end(explode(".",$_FILES['dosen_foto']['name'])) ;
			$ekstensi = strtolower($ekstensi);
	
			if( !in_array($ekstensi, $allow_extension) ){
				$_error[] = "Foto dosen hanya boleh ber-extensi JPG,PNG,GIF atau BMP";
			} 
		}
	
	}

	if( isset($_error) )
	{
		$msg = implode("<br>",$_error);
		set_msg( error($msg) );
	}else{
	
		$data['dosen_nama'] = $_POST['dosen_nama'];
		$data['dosen_matkul_id'] = $_POST['dosen_matkul_id'];
		$data['dosen_jk'] = $_POST['dosen_jk'];
		$data['dosen_alamat'] = $_POST['dosen_alamat'];
		$data['dosen_agama'] = $_POST['dosen_agama'];

	
		if( isset($_FILES['dosen_foto']) and $_FILES['dosen_foto']['name'] != '')
		{
			
			if( file_exists(_ROOT.$_POST['hidden_foto']) ){
				unlink(_ROOT.$_POST['hidden_foto']);
			}
			
			$ekstensi = end(explode(".",$_FILES['dosen_foto']['name'])) ;
			$ekstensi = strtolower($ekstensi);
			$namafoto = $row['dosen_nip']."_".time().".".$ekstensi;
			$pathupload = _ROOT . "foto/dosen/";

			if( move_uploaded_file($_FILES['dosen_foto']['tmp_name'], $pathupload.$namafoto) )
			{
				$data['dosen_foto'] = $namafoto;
			}
		
		}
	
	
		$update = Update("dosen",$data,"WHERE dosen_id = $row[dosen_id]");
		if($update)
		{
			$msg = success("Data berhasil disimpan");
			set_msg($msg);
		}else{
			$msg = error("Data gagal disimpan");
			set_msg($msg);
		}
			
		
	}
}