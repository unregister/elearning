<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

<div class="panel-heading"><h3 class="panel-title">Tambah siswa</h3></div>
    <div class="panel-body"> 
        
        <div class="row clearfix">
            <div class="col-md-12 column" id="post">
          <div class="text-left" style="margin-bottom:15px;">
        <?php echo link_data('admin.php?mod=siswa','Data siswa'); ?>
            </div>
            <?php echo get_msg(); ?>
          <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
            
              <?php echo form_text("NIS","siswa_nis");?>
              <?php echo form_password("Password siswa","siswa_password");?>
              <?php echo form_text("Nama siswa","siswa_nama");?>
              <?php echo form_dropdown("Kelas","siswa_kelas_id",$kelas);?>
              <?php echo form_dropdown("Jenis kelamin","siswa_jk",array('1'=>'Laki-laki','2'=>'Perempuan'));?>
              <?php echo form_text("Tempat lahir","siswa_tempat_lahir");?>
              <?php echo form_dropdown_tanggal("Tanggal lahir","lahir");?>
              <?php echo form_dropdown("Agama","siswa_agama",$agama);?>
              <?php echo form_textarea("Alamat","siswa_alamat");?>
              <?php echo form_file("Foto","siswa_foto");?>
              <?php echo form_button("SIMPAN","add_siswa");?>              
              
            </form>

        
            </div>
        </div>  
    
    </div>

</div>
</div>