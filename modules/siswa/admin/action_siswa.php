<?php
$jenis_kelamin = array('1' => 'Laki-laki', '2' => 'Perempuan');

$query = "SELECT siswa.*, users.username FROM siswa LEFT JOIN users ON(siswa.user_id=users.user_id) 
		  ORDER BY siswa_nama ASC";
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
	$user_id = GetOne("SELECT user_id FROM siswa WHERE siswa_is = $id");
	$hapus = Delete("siswa","WHERE siswa_id = $id");	
	if($hapus){
		Delete("users","WHERE user_id = $user_id");
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=siswa');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=siswa');	
		exit();
	}
}
