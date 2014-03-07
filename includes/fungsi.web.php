<?php

function adodb_pr($str = ""){
	if( is_array($str) or is_object($str) ){
		echo "<pre>".print_r($str,true)."</pre>";	
	}else{
		echo $str;	
	}
}

function error( $msg = "" ){
	return "<div class=\"alert alert-danger\">$msg</div>";
}

function success( $msg = "" ){
	return "<div class=\"alert alert-success\">$msg</div>";
}

function cek_login()
{
	if( isset($_SESSION['_login']) and !empty($_SESSION['_login']) )	{
		return true;	
	}
	return false;
}

function logout(){
	unset($_SESSION['_login']);
	$_SESSION['_login'] = array();
}

function set_msg( $str ){
	$_SESSION['_msg'] = $str;	
}

function get_msg(){
	if( isset($_SESSION['_msg']) ){
		echo $_SESSION['_msg'];	
		unset($_SESSION['_msg']);
	}
}

function get_login()
{
	if( cek_login() )
	{
		$group_id = $_SESSION['_login']['grup_id'];
		$user_id = $_SESSION['_login']['user_id'];
		
		switch($group_id)
		{
			case '1':
			case '2':
				$query = "SELECT * FROM pegawai WHERE user_id = $user_id";
				$row = GetRow($query);
			break;	
			
			case '3':
				$query = "SELECT * FROM siswa WHERE user_id = $user_id";
				$row = GetRow($query);
			break;
		}
		
		if($row){
			return $row;	
		}
	}
}

function link_edit($url, $attr = "" )
{
	$str = "<a href=\"$url\" class=\"btn btn-primary btn-xs\" $attr>
			<i class=\"glyphicon glyphicon-edit\"></i> EDIT</a>";
	return $str;
}

function link_hapus($url, $attr = "" )
{
	$confirm = " onclick=\"return confirm('Apakah Anda yakin akan menghapus data ini?');\"";
	$str = "<a href=\"$url\" class=\"btn btn-danger btn-xs\" $confirm $attr>
			<i class=\"glyphicon glyphicon-remove\"></i> HAPUS</a>";
	return $str;
}

function link_tambah($url="",$title="Tambah data", $attr = "")
{
	$title = strtoupper($title);
	$str = "<a href=\"$url\" class=\"btn btn-success btn-xs\" $attr>
			<i class=\"glyphicon glyphicon-plus\"></i> $title</a>";
	return $str;
}

function link_data( $url = '', $title = '' )
{
	$title = strtoupper($title);
	$str = "<a href=\"$url\" class=\"btn btn-success btn-xs\">
			<i class=\"glyphicon glyphicon-list-alt\"></i> $title</a>";
	return $str;
}

function tgl_indonesia($tgl)
{
	if( empty($tgl) ){ return false; }
	$tanggal = substr($tgl,8,2);
	$bulan = substr($tgl,5,2);
	$tahun = substr($tgl,0,4);
	$jam = substr($tgl,11,6);
	return "$tanggal/$bulan/$tahun $jam";	
}

function get_foto( $nama, $folder = 'siswa' )
{
	if( !empty($nama) ){
		if( file_exists(_ROOT."foto/$folder/".$nama) ){
			return "<img src=\""._URL."foto/$folder/$nama\" width=\"100\" />\n";	
		}
	}
}