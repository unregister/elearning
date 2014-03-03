<?php

$query = "SELECT * FROM kelas ORDER BY kelas_id DESC";
$paging = new Pagination($query,10);

$num_rows = $paging->NumRows();
$result = $paging->Result();
$link = $paging->Link();

if( isset($_GET['delete']) and $_GET['delete'] == 'yes' )
{
	$id = (int)$_GET['id'];
	$hapus = Delete("kelas","WHERE kelas_id = $id");
	if($hapus){
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=kelas');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=kelas');	
		exit();
	}
}

?>