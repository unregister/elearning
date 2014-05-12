<?php

$r_kategori = array();	
$kategori = GetAll("SELECT * FROM kategori");
foreach((array)$kategori as $cat){
	$r_kategori[$cat['kategori_id']] = $cat['kategori_nama'];	
}

$r_dosen = array();	
$dosen = GetAll("SELECT * FROM dosen");
foreach((array)$dosen as $dos){
	$r_dosen[$dos['dosen_id']] = $dos['dosen_nama'];	
}


$publish = array('1'=>'Publish','0'=>'Not publish');

$search = " WHERE 1 ";
if( isset($_GET['judul']) and $_GET['judul'] != '' )
{
	$keyword = mysql_real_escape_string($_GET['judul']);
	$clause[] = " course_judul LIKE '%$keyword%' ";	
}

if( isset($_GET['kategori_id']) and $_GET['kategori_id'] != '' )
{
	$kategori_id = intval($_GET['kategori_id']);
	$clause[] = " kategori_id = $kategori_id ";	
}

if( isset($clause) and count($clause) > 0 ){
	$search = implode(" AND ",$clause);
}


$dosenlogin= "";
if( $logindata['grup_id'] == 2 )
{
	$user_id = $logindata['user_id'];
	$dosenlogin = " AND user_id = $user_id ";
}



$query = "SELECT * FROM course $search $dosenlogin ORDER BY course_id DESC";
$paging = new Pagination($query,10);

$num_rows = $paging->NumRows();
$result = $paging->Result();
$link = $paging->Link();