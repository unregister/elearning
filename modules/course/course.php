<div class="col-md-9" id="content-container">
<div class="panel panel-primary">
    
        <div class="panel-heading"><h3 class="panel-title">DATA COURSE</h3></div>
        <div class="panel-body"> 
            <?php
			if( isset($num_rows) and $num_rows > 0 )
			{
			?> 
                <div class="row clearfix">
                    <div class="col-md-12 column" id="post">
                    <?php
					foreach((array)$result as $row)
					{
					?>  
                    
                    <div class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="<?=_URL?>assets/img/document.png" alt="...">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading"><?=$row['course_judul']?></h4>
                        <?=$row['course_deskripsi']?>
                        <div style="margin-top:10px">
                        <a href="<?=_URL?>index.php?mod=course&act=download&id=<?=$row['course_id']?>" class="btn btn-success btn-xs">
                        DOWNLOAD
                        </a>
                        </div>
                      </div>
                    </div>
                        
                     <?php
					}
					 ?>                 
                    
                    </div>
                </div>  
        	<?php	
			}else{
			?>
            	<div class="alert alert-info">Data course dengan kategori ini tidak ditemukan</div>
            <?php	
			}
			?>
        </div>
    
    </div>
</div>