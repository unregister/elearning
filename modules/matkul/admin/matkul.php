<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data mata kuliah</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=matkul&act=add_matkul")?></div>
            	<div class="table-responsive">
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Nama mata kuliah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
            
						<?php
                        if( $num_rows > 0 )
                        {
                            foreach($result as $row)
                            {
                         ?>
                         		<tr>
                                	<td><?=$row['matkul_id']?></td>
                                    <td><?=$row['matkul_nama']?></td>
                                    <td>
									<?=link_edit("admin.php?mod=matkul&act=edit_matkul&id=".$row['matkul_id'])?>
                                    <?=link_hapus("admin.php?mod=matkul&delete=yes&id=".$row['matkul_id'])?>
                                    </td>
                                </tr>
                         <?php  
                            }
                        }
                        ?>
                    </tbody>
            		
                    <tfoot>
                    	<tr>
                        	<td colspan="5"><?php echo $link; ?></td>
                        </tr>
                    </tfoot>
                    
            	</table>
            	</div>
            
            </div>
            </div>  
    
    </div>

</div>
</div>