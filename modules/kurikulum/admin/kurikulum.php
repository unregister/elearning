<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data kurikulum</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=kurikulum&act=add_kurikulum")?></div>
            	<div class="table-responsive">
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Nama kurikulum</th>
                            <th>Tahun pertama</th>
                            <th>Tahun kedua</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
            
						<?php
                        if( $num_rows > 0 )
                        {
                            foreach($kurikulum as $row)
                            {
                         ?>
                         		<tr>
                                	<td><?=$row['kurikulum_id']?></td>
                                    <td><?=$row['kurikulum_nama']?></td>
                                    <td><?=$row['kurikulum_tahun_pertama']?></td>
                                    <td><?=$row['kurikulum_tahun_kedua']?></td>
                                    <td>
										<?=link_edit("admin.php?mod=kurikulum&act=edit_kurikulum&id=".$row['kurikulum_id'])?>
                                        <?=link_hapus("admin.php?mod=kurikulum&delete=yes&id=".$row['kurikulum_id'])?>                     
                                    </td>
                                </tr>
                       <?php  
                            }
                        }else{
						?>
                        	<tr>
                            	<td colspan="5" align="center"><em>Tidak ada data</em></td>
                            </tr>
                        <?php	
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