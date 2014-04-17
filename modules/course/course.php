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
                        <p>
                            <a href="<?=_URL?>index.php?mod=course&act=detail&id=<?=$row['course_id']?>">
                                <i class="glyphicon glyphicon-file"></i>
                                <span class="course"><?=$row['course_judul']?></span>
                            </a>
                        </p>
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