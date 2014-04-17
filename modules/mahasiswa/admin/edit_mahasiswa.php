<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

<div class="panel-heading"><h3 class="panel-title">Edit mahasiswa</h3></div>
    <div class="panel-body"> 
        
        <div class="row clearfix">
            <div class="col-md-12 column" id="post">
          <div class="text-left" style="margin-bottom:15px;">
        <?php echo link_data('admin.php?mod=mahasiswa','Data mahasiswa'); ?>
            </div>
            <?php echo get_msg(); ?>
          <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
            
              <?php echo form_plaintext("NIS",$row['mahasiswa_nis']);?>
              <?php echo form_text("Nama mahasiswa","mahasiswa_nama",$row['mahasiswa_nama']);?>
              <?php echo form_dropdown("Kelas","mahasiswa_kelas_id",$kelas,$row['mahasiswa_kelas_id']);?>
              <?php echo form_dropdown("Jenis kelamin","mahasiswa_jk",array('1'=>'Laki-laki','2'=>'Perempuan'),$row['mahasiswa_jk']);?>
              <?php echo form_text("Tempat lahir","mahasiswa_tempat_lahir",$row['mahasiswa_tempat_lahir']);?>
              <?php echo form_dropdown_tanggal("Tanggal lahir","lahir",$row['mahasiswa_tgl_lahir']);?>
              <?php echo form_dropdown("Agama","mahasiswa_agama",$agama,$row['mahasiswa_agama']);?>
              <?php echo form_textarea("Alamat","mahasiswa_alamat",$row['mahasiswa_alamat']);?>
              <?php echo form_file("Foto","mahasiswa_foto","foto/mahasiswa/".$row['mahasiswa_foto']);?>
              <?php echo form_button("SIMPAN","edit_mahasiswa");?>              
              
            </form>

        
            </div>
        </div>  
    
    </div>

</div>
</div>