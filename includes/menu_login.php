<?php

#Array menu buat administrator

$menu[1]['KATEGORI'][] = array('title'=>'Data kategori', 'link' => 'admin.php?mod=kategori');
$menu[1]['KATEGORI'][] = array('title'=>'Tambah kategori', 'link' => 'admin.php?mod=kategori&act=add_kategori');
$menu[1]['COURSE'][] = array('title'=>'Data course', 'link' => 'admin.php?mod=course');
$menu[1]['COURSE'][] = array('title'=>'Tambah course', 'link' => 'admin.php?mod=course&act=add_course');

$menu[1]['AKADEMIK'][] = array('title'=>'Data mahasiswa', 'link' => 'admin.php?mod=mahasiswa');
//$menu[1]['AKADEMIK'][] = array('title'=>'Data kurikulum', 'link' => 'admin.php?mod=kurikulum');
$menu[1]['AKADEMIK'][] = array('title'=>'Data mata kuliah', 'link' => 'admin.php?mod=matkul&');
$menu[1]['AKADEMIK'][] = array('title'=>'Data kelas', 'link' => 'admin.php?mod=kelas');
$menu[1]['AKADEMIK'][] = array('title'=>'Data dosen', 'link' => 'admin.php?mod=dosen');

$menu[2]['KATEGORI'][] = array('title'=>'Data kategori', 'link' => 'admin.php?mod=kategori');
$menu[2]['KATEGORI'][] = array('title'=>'Tambah kategori', 'link' => 'admin.php?mod=kategori&act=add_kategori');
$menu[2]['COURSE'][] = array('title'=>'Data course', 'link' => 'admin.php?mod=course');
$menu[2]['COURSE'][] = array('title'=>'Tambah course', 'link' => 'admin.php?mod=course&act=add_course');

//print_r($menu);
?>
