<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

<div class="panel-heading"><h3 class="panel-title">Tambah dosen</h3></div>
    <div class="panel-body"> 
        
        <div class="row clearfix">
            <div class="col-md-12 column" id="post">
        	<div class="text-left" style="margin-bottom:15px;">
				<?php echo link_data('admin.php?mod=dosen','Data dosen'); ?>
            </div>
            <?php echo get_msg(); ?>
        	<form class="form-horizontal" method="post" action="" enctype="multipart/form-data"> 
              <?php echo form_text("NIP","dosen_nip");?>
              <?php echo form_dropdown("Mata kuliah","dosen_matkul_id",$matkul);?>
              <?php echo form_password("Password dosen","dosen_password");?>
              <?php echo form_text("Nama dosen","dosen_nama");?>
              <?php echo form_dropdown("Jenis kelamin","dosen_jk",array('1'=>'Laki-laki','2'=>'Perempuan'));?>
              <?php echo form_dropdown("Agama","dosen_agama",$agama);?>
              <?php echo form_textarea("Alamat","dosen_alamat");?>
              <?php echo form_file("Foto","dosen_foto");?>
              <?php echo form_button("SIMPAN","add_dosen");?>     
            </form>

        
            </div>
        </div>  
    
    </div>

</div>
</div>