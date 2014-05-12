<?php
cek_login(true);
if( isset($_GET['id']) and !empty($_GET['id']) )
{
	$id = (int)$_GET['id'];
	
	$query = "SELECT * FROM course WHERE course_id = $id";	
	if( NumRows($query) > 0 )
	{
		$row = GetRow($query);
		$filename = $row['course_file'];
		
		if( $filename and file_exists(_ROOT."files/$filename") ){
			Execute("UPDATE course SET course_download = course_download+1 WHERE course_id = $id");
			header('location:'._URL."files/$filename");
			exit();
		}else{
			$_msg = error("File yang Anda maksud tidak ditemukan");	
		}
	}else{
		$_msg = error("File yang Anda maksud tidak ditemukan");	
	}
}else{
	$_msg = error("File yang Anda maksud tidak ditemukan");		
}
?>