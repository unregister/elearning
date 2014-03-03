<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data mata pelajaran</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=mapel&act=add_mapel")?></div>
            	<div class="table-responsive">
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Nama mata pelajaran</th>
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
                                	<td><?=$row['mapel_id']?></td>
                                    <td><?=$row['mapel_nama']?></td>
                                    <td>
									<?=link_edit("admin.php?mod=mapel&act=edit_mapel&id=".$row['mapel_id'])?>
                                    <?=link_hapus("admin.php?mod=mapel&delete=yes&id=".$row['mapel_id'])?>
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