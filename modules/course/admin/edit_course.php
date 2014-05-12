<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

<div class="panel-heading"><h3 class="panel-title">Tambah course</h3></div>
    <div class="panel-body"> 
        
        <div class="row clearfix">
            <div class="col-md-12 column" id="post">
        	<div class="text-left" style="margin-bottom:15px;">
				<?php echo link_data('admin.php?mod=course','Data course'); ?>
            </div>
            <?php echo isset($_msg)?$_msg:""; ?>
        	<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data"> 
              <?php echo form_dropdown("Kategori","kategori_id",$kategori,$row['kategori_id']);?>   
              <?php echo form_dropdown("Semester","semester",$semester,$row['semester']);?>         
              <?php echo form_text("Judul course","course_judul",$row['course_judul']);?>
              <?php echo form_textarea("Deskripsi","course_deskripsi",$row['course_deskripsi']);?>
              <?php echo form_file("File","course_file","files/".$row['course_file']);?>
              <?php echo form_button("SIMPAN","edit_course");?>      
            </form>

        
            </div>
        </div>  
    
    </div>

</div>
</div>