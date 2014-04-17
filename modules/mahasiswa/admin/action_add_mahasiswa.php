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

if( isset($_POST['add_mahasiswa']) )
{
	$nis = GetOne("SELECT COUNT(*) FROM mahasiswa WHERE mahasiswa_nis = '".$_POST['mahasiswa_nis']."'");
	if( trim($_POST['mahasiswa_nis']) == '' ){
		$_error[] = "NIS tidak boleh kosong";
	}elseif($nis > 0){
		$_error[] = "NIS Sudah ada. Silahkan gunakan NIS yg lain";
	}

	if( trim($_POST['mahasiswa_password']) == '' ){
		$_error[] = "Password tidak boleh kosong";
	}

	if( trim($_POST['mahasiswa_nama']) == '' ){
		$_error[] = "Nama mahasiswa tidak boleh kosong";
	}

	if( trim($_POST['mahasiswa_tempat_lahir']) == '' ){
		$_error[] = "Tempat lahir mahasiswa tidak boleh kosong";
	}

	if( trim($_POST['mahasiswa_agama']) == '' ){
		$_error[] = "Agama mahasiswa tidak boleh kosong";
	}

	if( trim($_POST['mahasiswa_alamat']) == '' ){
		$_error[] = "Alamat mahasiswa tidak boleh kosong";
	}

	if( !isset($_FILES['mahasiswa_foto']) or $_FILES['mahasiswa_foto']['name'] == ''){
		$_error[] = "Foto mahasiswa tidak boleh kosong";
	}else{
		$allow_extension = array('jpg','png','gif','bmp');
		$ekstensi = end(explode(".",$_FILES['mahasiswa_foto']['name'])) ;
		$ekstensi = strtolower($ekstensi);

		if( !in_array($ekstensi, $allow_extension) ){
			$_error[] = "Foto mahasiswa hanya boleh ber-extensi JPG,PNG,GIF atau BMP";
		} 
	}

	if( isset($_error) )
	{
		$msg = implode("<br>",$_error);
		set_msg( error($msg) );
	}else{

		$bln = ($_POST['lahir_bln']<10)?"0".$_POST['lahir_bln']:$_POST['lahir_bln'];
		$tgl = ($_POST['lahir_tgl']<10)?"0".$_POST['lahir_tgl']:$_POST['lahir_tgl'];
	
		$data['mahasiswa_nis'] = $_POST['mahasiswa_nis'];
		$data['mahasiswa_nama'] = $_POST['mahasiswa_nama'];
		$data['mahasiswa_kelas_id'] = $_POST['mahasiswa_kelas_id'];
		$data['mahasiswa_jk'] = $_POST['mahasiswa_jk'];
		$data['mahasiswa_alamat'] = $_POST['mahasiswa_alamat'];
		$data['mahasiswa_tempat_lahir'] = $_POST['mahasiswa_tempat_lahir'];
		$data['mahasiswa_tgl_lahir'] = $_POST['lahir_thn']."-$bln-$tgl";
		$data['mahasiswa_agama'] = $_POST['mahasiswa_agama'];

		$user['username'] = $_POST['mahasiswa_nis'];
		$user['password'] = md5($_POST['mahasiswa_password']);
		$user['grup_id'] = 3;
		$user_id = Insert("users",$user);

		if($user_id)
		{
			$data['user_id'] = $user_id;
			$ekstensi = end(explode(".",$_FILES['mahasiswa_foto']['name'])) ;
			$ekstensi = strtolower($ekstensi);
			$namafoto = $_POST['mahasiswa_nis']."_".time().".".$ekstensi;
			$pathupload = _ROOT . "foto/mahasiswa/";

			if( move_uploaded_file($_FILES['mahasiswa_foto']['tmp_name'], $pathupload.$namafoto) )
			{
				$data['mahasiswa_foto'] = $namafoto;
			}

			$insert = Insert("mahasiswa",$data);
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