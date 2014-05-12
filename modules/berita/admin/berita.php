<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data berita</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=berita&act=add_berita")?></div>
            	<div class="table-responsive">
                <form method="get" action="">
                	<input type="hidden" name="mod" value="berita">
                    <input type="text" name="judul" placeholder="Judul" /> <input type="submit" name="s" value="Cari">
                </form>
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Judul</th>
                            <th>Penulis</th>                            
                            <th>Tanggal</th>
                            <th>Isi</th>
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
                                	<td><?=$row['berita_id']?></td>
                                    <td><?=$row['berita_judul']?></td>
                                    <td><?=$r_dosen[$row['berita_author']]?></td>
                                    <td><?=tgl_indonesia($row['berita_tanggal'])?></td>
                                    <td><?=substr( strip_tags($row['berita_isi']),0,50)?></td>
                                    <td>
										<?=link_edit("admin.php?mod=berita&act=edit_berita&id=".$row['berita_id'])?>
                                        <?=link_hapus("admin.php?mod=berita&delete=yes&id=".$row['berita_id'])?>                     
                                    </td>
                                </tr>
                        <?php  
                            }
                        }else{
						?>
                        	<tr>
                            	<td colspan="7" align="center"><em>Tidak ada data</em></td>
                            </tr>
                        <?php	
						}
                        ?>
                    </tbody>
            		
                    <tfoot>
                    	<tr>
                        	<td colspan="7"><?php echo $link; ?></td>
                        </tr>
                    </tfoot>
                    
            	</table>
            	</div>
            
            </div>
            </div>  
    
    </div>

</div>
</div>