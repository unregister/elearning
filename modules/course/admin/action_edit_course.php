<?php

if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM course WHERE course_id = $id");
}


$kategori = array();
$r_kategori = GetAll("SELECT kategori_id,kategori_nama FROM kategori ORDER BY kategori_nama ASC");

foreach((array)$r_kategori as $cat){
	$kategori[$cat['kategori_id']] = $cat['kategori_nama'];
}

$semester = array('1'=>'Ganjil','2' => 'Genap');

$kurikulum = array();

if( isset($_POST['edit_course']) )
{
	if( trim($_POST['course_judul']) == '' ){
		$_error[] = "Judul course tidak boleh kosong";
	}
	
	if( isset($_FILES['course_file']) )
	{
		$file_diizinkan = array('pdf','xls','xlsx','doc','docx','ppt','pptx','jpg','png','png','gif','jpeg','zip','mp4','txt','mp3');
		
		$filename = $_FILES['course_file']['name'];
		$ext = end( explode(".",$filename) );
		$ext = strtolower($ext);
		
		if( !isset($_POST['hidden_foto']) and !empty($_POST['hidden_foto']) )
		{
			if( $_FILES['course_file']['name'] == '' ){
				$_error[] = "File tidak boleh kosong";	
			}else{			
				if( !in_array($ext,$file_diizinkan) ){
					$_error[] = "Ekstensi file tidak diizinkan. Anda hanya boleh mengupload file berekstensi ".implode(",",$file_diizinkan);	
				}
			}
		}
		
		if( isset($_error) )
		{
			$_msg = error( implode("<br>",$_error) );
		}
		else
		{
			
			if( $_FILES['course_file']['name'] != '' )
			{
				if( isset($_POST['hidden_foto']) and !empty($_POST['hidden_foto']) and file_exists(_ROOT.$_POST['hidden_foto']) ){
					unlink(_ROOT.$_POST['hidden_foto']);
				}
				
				$ekstensi = pathinfo($_FILES['course_file']['name'],PATHINFO_EXTENSION);
				$newname = preg_replace("#[^a-zA-Z\_]#is","_",$_POST['course_judul']);
				$newfilename = date("dmyHis")."_".$newname.".".strtolower($ekstensi);
				
				if( move_uploaded_file($_FILES['course_file']['tmp_name'],_ROOT."files/".$newfilename) )
				{
					$data['course_file'] = $newfilename;	
				}
			}else{
				$currentfile = _ROOT."files/".$row['course_file'];
				$ekstensi = pathinfo($currentfile,PATHINFO_EXTENSION);
				$newname = preg_replace("#[^a-zA-Z\_]#is","_",$_POST['course_judul']);
				$newfilename = date("dmyHis")."_".$newname.".".strtolower($ekstensi);
				
				if( file_exists($currentfile) )
				{				
					rename($currentfile,_ROOT."files/$newfilename");
					$data['course_file'] = $newfilename;				
				}
			}
			
			
			$data['kategori_id'] 		= $_POST['kategori_id'];
			$data['course_judul'] 		= $_POST['course_judul'];
			$data['semester'] 			= $_POST['semester'];
			$data['course_tgl'] 		= date('Y-m-d H:i:s');
			$data['course_deskripsi'] 	= $_POST['course_deskripsi'];
			$data['user_id'] 			= $_SESSION['_login']['user_id'];
			$data['course_publish'] 	= 1;
			
			$insert = Update("course",$data,"WHERE course_id = $id");
			
			if( $insert )
			{
				$_msg = success("Data berhasil disimpan");	
			}else{
				$_msg = error("Data gagal disimpan");	
			}
			
		}
		
	}
}