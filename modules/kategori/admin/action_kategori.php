<?php

$parent_id = 0;
if( isset($_GET['parent_id']) and !empty($_GET['parent_id']) ){
	$parent_id = (int)$_GET['parent_id'];
}

$kategori_nama = GetOne("SELECT kategori_nama FROM kategori WHERE kategori_id = $parent_id");
$title_page = (!$kategori_nama)?"":" sub kategori $kategori_nama";

$query = "SELECT * FROM kategori WHERE kategori_parent_id = $parent_id  ORDER BY kategori_nama ASC";
$paging = new Pagination($query,10);

$num_rows = $paging->NumRows();
$result = $paging->Result();
$link = $paging->Link();

if( isset($_GET['delete']) and $_GET['delete'] == 'yes' )
{
	$id = (int)$_GET['id'];
	$hapus = Delete("kategori","WHERE kategori_id = $id");
	if($hapus)
	{
		$pesan = success("Data id $id berhasil dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=kategori');
		exit();	
	}else{
		$pesan = error("Data id $id gagal dihapus");
		set_msg($pesan);
		header('location:'._URL.'admin.php?mod=kategori');	
		exit();
	}
}

?>