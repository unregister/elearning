<?php

$search = " WHERE 1 ";
if( isset($_GET['judul']) and $_GET['judul'] != '' )
{
	$keyword = mysql_real_escape_string($_GET['judul']);
	$search .= " AND berita_judul LIKE '%$keyword%' ";	
}

$inlogin = "";
if( $_SESSION['_login']['grup_id'] != 1 ){
	$inlogin = " AND berita_author = ".$_SESSION['_login']['user_id'];
}

$query = "SELECT * FROM berita $search $inlogin ORDER BY berita_id DESC";
$paging = new Pagination($query,10);

$num_rows = $paging->NumRows();
$result = $paging->Result();
$link = $paging->Link();

$r_dosen = array();	
$dosen = GetAll("SELECT * FROM dosen");
foreach((array)$dosen as $dos){
	$r_dosen[$dos['dosen_id']] = $dos['dosen_nama'];	
}

if( isset($_GET['delete']) and $_GET['delete'] == 'yes' )
{
	$id = (int)$_GET['id'];
	$foto = GetOne("SELECT berita_gambar FROM berita WHERE berita_id = $id");
	
	$hapus = Delete("berita","WHERE berita_id = $id");	
	if($hapus)
	{
		if( !empty($foto) )
		{
			unlink(_ROOT."foto/berita/$foto");	
		}
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=berita');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=berita');	
		exit();
	}
}