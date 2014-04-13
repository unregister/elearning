<?php

$query = "SELECT * FROM kurikulum ORDER BY kurikulum_id DESC";
$paging = new Pagination($query,10);

$num_rows = $paging->NumRows();
$kurikulum = $paging->Result();
$link = $paging->Link();

if( isset($_GET['delete']) and $_GET['delete'] == 'yes' )
{
	$id = (int)$_GET['id'];
	$hapus = Delete("kurikulum","WHERE kurikulum_id = $id");
	if($hapus){
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=kurikulum');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=kurikulum');	
		exit();
	}
}

?>