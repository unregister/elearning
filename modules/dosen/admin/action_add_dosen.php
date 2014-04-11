<?php

# Cari data agama
$query_agama = GetAll("SELECT * FROM agama");
$agama = array();
foreach((array)$query_agama as $agm){
	$agama[$agm['agama_id']] = $agm['agama_nama'];	
}

$query_matkul = GetAll("SELECT * FROM mata_kuliah");
$matkul = array();
foreach((array)$query_matkul as $matkuls){
	$matkul[$matkuls['matkul_id']] = $matkuls['matkul_nama'];	
}

if( isset($_POST['add_dosen']) )
{
	$nip = GetOne("SELECT COUNT(*) FROM dosen WHERE dosen_nip = '".$_POST['dosen_nip']."'");
	if( trim($_POST['dosen_nip']) == '' ){
		$_error[] = "NIP tidak boleh kosong";
	}elseif($nip > 0){
		$_error[] = "NIP Sudah ada. Silahkan gunakan NIP yg lain";
	}

	if( trim($_POST['dosen_password']) == '' ){
		$_error[] = "Password tidak boleh kosong";
	}

	if( trim($_POST['dosen_nama']) == '' ){
		$_error[] = "Nama dosen tidak boleh kosong";
	}

	
	if( trim($_POST['dosen_agama']) == '' ){
		$_error[] = "Agama dosen tidak boleh kosong";
	}

	if( trim($_POST['dosen_alamat']) == '' ){
		$_error[] = "Alamat dosen tidak boleh kosong";
	}

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

	if( isset($_error) )
	{
		$msg = implode("<br>",$_error);
		set_msg( error($msg) );
	}else{

		$data['dosen_nip'] = $_POST['dosen_nip'];
		$data['dosen_nama'] = $_POST['dosen_nama'];
		$data['dosen_matkul_id'] = $_POST['dosen_matkul_id'];
		$data['dosen_jk'] = $_POST['dosen_jk'];
		$data['dosen_alamat'] = $_POST['dosen_alamat'];
		$data['dosen_agama'] = $_POST['dosen_agama'];

		$user['username'] = $_POST['dosen_nip'];
		$user['password'] = md5($_POST['dosen_password']);
		$user['grup_id'] = 2;
		$user_id = Insert("users",$user);

		if($user_id)
		{
			$data['user_id'] = $user_id;
			$ekstensi = end(explode(".",$_FILES['dosen_foto']['name'])) ;
			$ekstensi = strtolower($ekstensi);
			$namafoto = $_POST['dosen_nip']."_".time().".".$ekstensi;
			$pathupload = _ROOT . "foto/dosen/";

			if( move_uploaded_file($_FILES['dosen_foto']['tmp_name'], $pathupload.$namafoto) )
			{
				$data['dosen_foto'] = $namafoto;
			}

			$insert = Insert("dosen",$data);
			if($insert)
			{
				$msg = success("Data berhasil disimpan");
				set_msg($msg);
			}else{
				$msg = error("Data gagal disimpan");
				set_msg($msg);
			}
		}

	}
}