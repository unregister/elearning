<?php
# konfigurasi database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_base = 'elearning';

# proses koneksi
$db_connect = mysql_connect($db_host,$db_user,$db_pass);

#jika berhasil konek
if( $db_connect )
{
	# pilih database
	$select_db = mysql_select_db($db_base,$db_connect);
	if( !$select_db ) #<== jika gagal pilih database
	{
		die( "Gagal pilih database. ".mysql_error() );	
	}
}
else #<== jika gagal koneksi
{
	die("Gagal koneksi ke database. ".mysql_error());	
}
