<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data kurikulum</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=kurikulum&act=add_kurikulum")?></div>
            	<div class="table-responsive">
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
                            foreach((array)$kurikulum as $row)
                            {
                         ?>
                         		<tr>
                                	<td><?=$row['kurikulum_id']?></td>
                                    <td><?=$row['kurikulum_nama']?></td>
                                    <td><?=$row['kurikulum_tahun_pertama']?></td>
                                    <td><?=$row['kurikulum_tahun_kedua']?></td>
                                    <td>
										<?=link_edit("")?>
                                        <?=link_hapus("")?>                     
                                    </td>
                                </tr>
                         <?php  
                            }
                        }
                        ?>
                    </tbody>
            
            	</table>
            	</div>
            
            </div>
            </div>  
    
    </div>

</div>
</div>