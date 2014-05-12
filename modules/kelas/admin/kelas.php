<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data kelas</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=kelas&act=add_kelas")?></div>
            	<div class="table-responsive">
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Nama kelas</th>
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
                                	<td><?=$row['kelas_id']?></td>
                                    <td><?=$row['kelas_nama']?></td>
                                    <td>
									<?=link_edit("admin.php?mod=kelas&act=edit_kelas&id=".$row['kelas_id'])?>
                                    <?=link_hapus("admin.php?mod=kelas&delete=yes&id=".$row['kelas_id'])?>
                                    </td>
                                </tr>
                        <?php  
                            }
                        }else{
						?>
                        	<tr>
                            	<td colspan="3" align="center"><em>Tidak ada data</em></td>
                            </tr>
                        <?php	
						}
                        ?>
                    </tbody>
            		
                    <tfoot>
                    	<tr>
                        	<td colspan="3"><?php echo $link; ?></td>
                        </tr>
                    </tfoot>
                    
            	</table>
            	</div>
            
            </div>
            </div>  
    
    </div>

</div>
</div>