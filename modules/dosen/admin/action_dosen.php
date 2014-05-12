<?php
$jenis_kelamin = array('1' => 'Laki-laki', '2' => 'Perempuan');

$search = "";
if( isset($_GET['nama']) and $_GET['nama'] != '' )
{
	$keyword = mysql_real_escape_string($_GET['nama']);
	$search = " WHERE dosen.dosen_name LIKE '%$keyword%' ";	
}

$query = "SELECT dosen.*, users.username FROM dosen LEFT JOIN users ON(dosen.user_id=users.user_id) 
		  $search ORDER BY dosen_nama ASC";
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
$query_matkul = GetAll("SELECT * FROM mata_kuliah");
$matkul = array();
foreach((array)$query_matkul as $matkuls){
	$matkul[$matkuls['matkul_id']] = $matkuls['matkul_nama'];	
}

if( isset($_GET['delete']) and $_GET['delete'] == 'yes' )
{
	$id = (int)$_GET['id'];
	$user_id = GetOne("SELECT user_id FROM dosen WHERE dosen_id = $id");
	$foto = GetOne("SELECT dosen_foto FROM dosen WHERE dosen_id = $id");
	
	$hapus = Delete("dosen","WHERE dosen_id = $id");	
	if($hapus){
		if( !empty($foto) ){
			unlink(_ROOT."foto/dosen/$foto");	
		}
		Delete("users","WHERE user_id = $user_id");
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=dosen');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=dosen');	
		exit();
	}
}