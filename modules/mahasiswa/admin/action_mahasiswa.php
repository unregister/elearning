<?php
$jenis_kelamin = array('1' => 'Laki-laki', '2' => 'Perempuan');

$search = "";
if( isset($_GET['nama']) and $_GET['nama'] != '' )
{
	$keyword = mysql_real_escape_string($_GET['nama']);
	$search = " WHERE mahasiswa.mahasiswa_nama LIKE '%$keyword%' ";	
}

$query = "SELECT mahasiswa.*, users.username FROM mahasiswa LEFT JOIN users ON(mahasiswa.user_id=users.user_id) 
		  $search ORDER BY mahasiswa_nama ASC";
$paging = new Pagination($query,10);

$num_rows = $paging->NumRows();
$result = $paging->Result();
$link = $paging->Link();


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

if( isset($_GET['delete']) and $_GET['delete'] == 'yes' )
{
	$id = (int)$_GET['id'];
	$user_id = GetOne("SELECT user_id FROM mahasiswa WHERE mahasiswa_id = $id");
	$foto = GetOne("SELECT guru_foto FROM guru WHERE guru_id = $id");
	$hapus = Delete("mahasiswa","WHERE mahasiswa_id = $id");	
	if($hapus){
		if( !empty($foto) ){
			unlink(_ROOT."foto/mahasiswa/$foto");	
		}
		Delete("users","WHERE user_id = $user_id");
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=mahasiswa');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=mahasiswa');	
		exit();
	}
}
