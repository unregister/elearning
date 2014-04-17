<?php
session_start();

$url = "http://".$_SERVER['SERVER_NAME'].str_replace("index.php","",$_SERVER['SCRIPT_NAME']);

# Konstanta untuk mendefisniskan posisi root folder
define('_ROOT',	dirname(__FILE__)."/");

# Konstanta untuk mendapatkan url aplikasi
define('_URL',$url);
define('_ASSET_URL',$url."assets/");

include_once _ROOT . "includes/koneksi.php";
include_once _ROOT . "includes/fungsi.db.php";
include_once _ROOT . "includes/fungsi.web.php";
include_once _ROOT . "includes/login.php";
include_once _ROOT . "includes/pagination.php";

/*
Setiap halaman kemungkinan membutuhkan sebuah script aksi, baik berupa aksi saat submit form 
ato aksi untuk mengolah data dari parameter $_GET. Nah fungsi script dibawah ini adalah :
- pertama cek kedalam module yg bersangkutan apakah ada file dengan nama action_{nama_module}.php
  apabila ditemukan maka akan secara langsung diincludekan.
- apabila tidak ada maka akan diabaikan
*/
if( isset($_GET['mod']) and !empty($_GET['mod']) )
{
	$mod = trim($_GET['mod']);
	$file = "action_".$mod;
	
	if( isset($_GET['act']) and !empty($_GET['act']) ){
		$act = trim($_GET['act']);	
		$file = "action_".$act;	
	} 
	
	if( file_exists(_ROOT . "modules/$mod/$file.php") ){
		include_once _ROOT . "modules/$mod/$file.php";
	}
	
}

if( isset($_GET['logout']) and $_GET['logout'] == 1 ){
	logout();
	header('location:index.php');
	exit();
}

# START LAYOUT
include_once _ROOT . "includes/header.php";
include_once _ROOT . "includes/sidebar.php";

if( isset($_GET['mod']) and !empty($_GET['mod']) )
{
	$mod = trim($_GET['mod']);
	$file = $mod;
	
	if( isset($_GET['act']) and !empty($_GET['act']) ){
		$file = trim($_GET['act']);	
	}
	
	
	if( file_exists(_ROOT . "modules/$mod/$file.php") ){
		include_once _ROOT . "modules/$mod/$file.php";
	}else{
		include_once _ROOT . "includes/404.php";	
	}
}
else
{
	if( isset($_GET['l']) and $_GET['l'] == 1 ){
		include_once _ROOT . "includes/must_login.php";
	}else{
		include_once _ROOT . "modules/home/home.php";	
	}
}

include_once _ROOT . "includes/footer.php";
# END LAYOUT