<?php 
cek_login(true);
	
if( isset( $_GET['kategori_id']) and !empty($_GET['kategori_id']) )
{
	$kategori_id = (int)$_GET['kategori_id'];
	$query = "SELECT * FROM course WHERE kategori_id = $kategori_id";
	
	$paging = new Pagination($query,10);

	$num_rows = $paging->NumRows();
	$result = $paging->Result();
	$link = $paging->Link();
		
}
?>