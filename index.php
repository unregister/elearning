<?php
session_start();

$url = "http://".$_SERVER['SERVER_NAME'].str_replace("index.php","",$_SERVER['SCRIPT_NAME']);

# Konstanta untuk mendefisniskan posisi root folder
define('_ROOT',	dirname(__FILE__)."/");

# Konstanta untuk mendapatkan url aplikasi
define('_URL',$url);

include_once _ROOT . "includes/koneksi.php";
include_once _ROOT . "includes/fungsi.db.php";
include_once _ROOT . "includes/fungsi.web.php";

$data = GetOne("select kurikulum_tahun_pertama from kurikulum where kurikulum_id = 1");
adodb_pr($data);