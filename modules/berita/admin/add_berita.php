<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

<div class="panel-heading"><h3 class="panel-title">Tambah berita</h3></div>
    <div class="panel-body"> 
        
        <div class="row clearfix">
            <div class="col-md-12 column" id="post">
        	<div class="text-left" style="margin-bottom:15px;">
				<?php echo link_data('admin.php?mod=berita','Data berita'); ?>
            </div>
            <?php echo isset($_msg)?$_msg:""; ?>
        	<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data"> 
              <?php echo form_text("Judul","berita_judul");?>  
              <?php echo form_textarea("Isi","berita_isi");?>
              <?php echo form_file("File","berita_gambar");?>
              <?php echo form_button("SIMPAN","add_berita");?>      
            </form>

        
            </div>
        </div>  
    
    </div>

</div>
</div>