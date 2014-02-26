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
	if( isset($_SESSION['_login']) or !empty($_SESSION['_login']) )	{
		return true;	
	}
	return false;
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