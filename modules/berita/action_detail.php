<?php
$detail = false;
if( isset($_GET['id']) and !empty($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$detail = GetRow("SELECT b.*,d.dosen_nama FROM berita b LEFT JOIN dosen d ON(b.berita_author=d.dosen_id) WHERE b.berita_aktif = 1 AND b.berita_id = $id LIMIT 1");
}
?>