<?php
session_start();
error_reporting(0);
$url = "http://".$_SERVER['SERVER_NAME'].str_replace("admin.php","",$_SERVER['SCRIPT_NAME']);

# Konstanta untuk mendefisniskan posisi root folder
define('_ROOT',	dirname(__FILE__)."/");

# Konstanta untuk mendapatkan url aplikasi
define('_URL',$url);
define('_ASSET_URL',$url."assets/");

include_once _ROOT . "includes/koneksi.php";
include_once _ROOT . "includes/fungsi.db.php";
include_once _ROOT . "includes/fungsi.web.php";
include_once _ROOT . "includes/fungsi.form.php";
include_once _ROOT . "includes/pagination.php";
include_once _ROOT . "includes/menu_login.php";

$logindata = get_login();

if( !cek_login() )
{
	header('location:index.php?l=1');
	exit();	
}

if( isset($_GET['logout']) and $_GET['logout'] == 1 ){
	logout();
	header('location:index.php');
	exit();
}

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
	
	if( file_exists(_ROOT . "modules/$mod/admin/$file.php") ){
		include_once _ROOT . "modules/$mod/admin/$file.php";
	}
	
}

# START LAYOUT
include_once _ROOT . "includes/admin_header.php";
include_once _ROOT . "includes/admin_sidebar.php";

if( isset($_GET['mod']) and !empty($_GET['mod']) )
{
	$mod = trim($_GET['mod']);
	$file = $mod;
	
	if( isset($_GET['act']) and !empty($_GET['act']) ){
		$file = trim($_GET['act']);	
	}
	
	if( file_exists(_ROOT . "modules/$mod/admin/$file.php") ){
		include_once _ROOT . "modules/$mod/admin/$file.php";
	}else{
		include_once _ROOT . "includes/404_admin.php";	
	}
}
else
{
	include_once _ROOT . "modules/home/admin/home.php";	
}

include_once _ROOT . "includes/admin_footer.php";
# END LAYOUT