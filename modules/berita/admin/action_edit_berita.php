<?php
if( isset($_GET['id']) )
{
	$id = (int)$_GET['id'];
	$row = GetRow("SELECT * FROM berita WHERE berita_id = $id");
}

if( isset($_POST['edit_berita']) )
{
	if( trim($_POST['berita_judul']) == '' ){
		$_error[] = "Judul berita tidak boleh kosong";
	}

	if( trim($_POST['berita_isi']) == '' ){
		$_error[] = "Isi berita tidak boleh kosong";
	}

	if( isset($_error) )
	{
		$_msg = error( implode("<br>",$_error) );
	}
	else
	{
		if( isset($_FILES['berita_gambar']) and !empty($_FILES['berita_gambar']['name']) )
		{
			
			if( isset($_POST['hidden_foto']) and !empty($_POST['hidden_foto']) and file_exists(_ROOT.$_POST['hidden_foto']) ){
				unlink(_ROOT.$_POST['hidden_foto']);
			}
			
			$ekstensi = pathinfo($_FILES['berita_gambar']['name'],PATHINFO_EXTENSION);
			$newfilename = uniqid().".".strtolower($ekstensi);
			
			if( move_uploaded_file($_FILES['berita_gambar']['tmp_name'],_ROOT."foto/berita/".$newfilename) )
			{
				$data['berita_gambar'] = $newfilename;	
			}

		}

		$data['berita_judul'] 		= $_POST['berita_judul'];
		$data['berita_isi'] 		= $_POST['berita_isi'];
		$data['berita_tanggal'] 	= date('Y-m-d H:i:s');
		$data['berita_isi'] 		= mysql_real_escape_string($_POST['berita_isi']);
		$data['berita_author'] 		= $_SESSION['_login']['user_id'];
		$data['berita_aktif'] 		= 1;
		
		$insert = Update("berita",$data," WHERE berita_id = $id");
		
		if( $insert )
		{
			$_msg = success("Data berhasil disimpan");	
		}else{
			$_msg = error("Data gagal disimpan");	
		}
	}
}