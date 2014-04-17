<?php

function adodb_pr($str = ""){
	if( is_array($str) or is_object($str) ){
		echo "<pre>".print_r($str,true)."</pre>";	
	}else{
		echo "<pre>".$str."</pre>";
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
				$query = "SELECT * FROM dosen WHERE user_id = $user_id";
				
				$row = GetRow($query);
				$row['grup_id'] = $group_id;
			break;	
			
			case '3':
				$query = "SELECT * FROM mahasiswa WHERE user_id = $user_id";
				
				$row = GetRow($query);
				$row['grup_id'] = $group_id;
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

function link_subkategori($url, $attr = "" )
{
	$str = "<a href=\"$url\" class=\"btn btn-info btn-xs\" $attr>
			<i class=\"glyphicon glyphicon-plus\"></i> SUB KATEGORI</a>";
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


function get_array_kategori( $parent_id = 0 )
{
	$kategori = GetAll("SELECT * FROM kategori WHERE kategori_parent_id = $parent_id");
	$r_kategori = array();
	if( count($kategori) > 0 )
	{
		$arr = array();
		foreach((array)$kategori as $cat)
		{
			$arr['id'] = $cat['kategori_id'];
			$arr['parent_id'] = $cat['kategori_parent_id'];
			$arr['nama'] = $cat['kategori_nama'];
			$arr['child'] = get_array_kategori($cat['kategori_id']);
			$r_kategori[] = $arr;
		}
	}
	
	return $r_kategori;
}


function tree_kategori( $arr, $deep = 1 )
{	
	$out = "";
	if( is_array($arr) )
	{
		$ul_id = ($deep==1) ? ' id="browser" class="filetree"' : '';
		
		$out .= "<ul$ul_id>\n";
		foreach((array)$arr as $r)
		{
			$li_class = ($deep==2)?" class=\"closed\"":"";		
			
			
			$link = "<a href=\""._URL."index.php?mod=course&kategori_id=$r[id]&nama=$r[nama]\">$r[nama]</a>";
			if( count($r['child']) > 0  ){
				$link = "<a>$r[nama]</a>";
			}
			
			$out .= "<li class=\"closed\"><span class=\"file\">$link</span>\n";
			if( count($r['child']) > 0  )
			{
				$out .= tree_kategori($r['child'],$deep+1);	
			}
			$out .= "</li>\n";
		}
		$out .= "</ul>\n";
	}
	return $out;
}