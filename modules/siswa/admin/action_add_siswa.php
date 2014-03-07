<?php
# Cari data agama
$query_agama = GetAll("SELECT * FROM agama");
$agama = array();
foreach((array)$query_agama as $agm){
	$agama[$agm['agama_id']] = $agm['agama_nama'];	
}

# Cari data kelas
$query_kelas = GetAll("SELECT * FROM kelas");
$kelas = array();
foreach((array)$query_kelas as $class){
	$kelas[$class['kelas_id']] = $class['kelas_nama'];	
}

if( isset($_POST['add_siswa']) )
{
	$nis = GetOne("SELECT COUNT(*) FROM siswa WHERE siswa_nis = '".$_POST['siswa_nis']."'");
	if( trim($_POST['siswa_nis']) == '' ){
		$_error[] = "NIS tidak boleh kosong";
	}elseif($nis > 0){
		$_error[] = "NIS Sudah ada. Silahkan gunakan NIS yg lain";
	}

	if( trim($_POST['siswa_password']) == '' ){
		$_error[] = "Password tidak boleh kosong";
	}

	if( trim($_POST['siswa_nama']) == '' ){
		$_error[] = "Nama siswa tidak boleh kosong";
	}

	if( trim($_POST['siswa_tempat_lahir']) == '' ){
		$_error[] = "Tempat lahir siswa tidak boleh kosong";
	}

	if( trim($_POST['siswa_agama']) == '' ){
		$_error[] = "Agama siswa tidak boleh kosong";
	}

	if( trim($_POST['siswa_alamat']) == '' ){
		$_error[] = "Alamat siswa tidak boleh kosong";
	}

	if( !isset($_FILES['siswa_foto']) or $_FILES['siswa_foto']['name'] == ''){
		$_error[] = "Foto siswa tidak boleh kosong";
	}else{
		$allow_extension = array('jpg','png','gif','bmp');
		$ekstensi = end(explode(".",$_FILES['siswa_foto']['name'])) ;
		$ekstensi = strtolower($ekstensi);

		if( !in_array($ekstensi, $allow_extension) ){
			$_error[] = "Foto siswa hanya boleh ber-extensi JPG,PNG,GIF atau BMP";
		} 
	}

	if( isset($_error) )
	{
		$msg = implode("<br>",$_error);
		set_msg( error($msg) );
	}else{

		$data['siswa_nis'] = $_POST['siswa_nis'];
		$data['siswa_nama'] = $_POST['siswa_nama'];
		$data['siswa_kelas_id'] = $_POST['siswa_kelas_id'];
		$data['siswa_jk'] = $_POST['siswa_jk'];
		$data['siswa_alamat'] = $_POST['siswa_alamat'];
		$data['siswa_tempat_lahir'] = $_POST['siswa_tempat_lahir'];
		$data['siswa_tgl_lahir'] = $_POST['lahir_thn']."-".$_POST['lahir_bln']."-".$_POST['lahir_tgl'];
		$data['siswa_agama'] = $_POST['siswa_agama'];

		$user['username'] = $_POST['siswa_nis'];
		$user['password'] = md5($_POST['siswa_password']);
		$user['grup_id'] = 3;
		$user_id = Insert("users",$user);

		if($user_id)
		{
			$data['user_id'] = $user_id;
			$ekstensi = end(explode(".",$_FILES['siswa_foto']['name'])) ;
			$ekstensi = strtolower($ekstensi);
			$namafoto = $_POST['siswa_nis']."_".time().".".$ekstensi;
			$pathupload = _ROOT . "foto/siswa/";

			if( move_uploaded_file($_FILES['siswa_foto']['tmp_name'], $pathupload.$namafoto) )
			{
				$data['siswa_foto'] = $namafoto;
			}

			$insert = Insert("siswa",$data);
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