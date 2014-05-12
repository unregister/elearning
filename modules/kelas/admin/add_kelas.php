<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

<div class="panel-heading"><h3 class="panel-title">Tambah kelas</h3></div>
    <div class="panel-body"> 
        
        <div class="row clearfix">
            <div class="col-md-12 column" id="post">
        	<div class="text-left" style="margin-bottom:15px;">
				<?php echo link_data('admin.php?mod=kelas','Data kelas'); ?>
            </div>
            <?php echo isset($_msg)?$_msg:""; ?>
        	<form class="form-horizontal" role="form" method="post" action="">            
              <?php echo form_text("Nama kelas","kelas_nama");?>
              <?php echo form_button("SIMPAN","add_kelas");?>      
            </form>

        
            </div>
        </div>  
    
    </div>

</div>
</div>