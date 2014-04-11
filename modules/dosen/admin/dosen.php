<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data dosen</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=dosen&act=add_dosen")?></div>
            	<div class="table-responsive">
                <form method="get" action="">
                	<input type="hidden" name="mod" value="dosen">
                    <input type="text" name="nama" placeholder="Nama dosen" /> <input type="submit" name="s" value="Cari">
                </form>
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>NIP</th>
                            <th>Nama dosen</th>
                            <th>Mata kuliah</th>                            
                            <th>Jenis kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
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
                                	<td><?=$row['dosen_nip']?></td>
                                    <td><?=$row['dosen_nama']?></td>
                                    <td><?=$matkul[$row['dosen_matkul_id']]?></td>
                                    <td><?=$jenis_kelamin[$row['dosen_jk']]?></td>
                                    <td><?=$agama[$row['dosen_agama']]?></td>
                                    <td><?=$row['dosen_alamat']?></td>
                                    <td>
										<?=link_edit("admin.php?mod=dosen&act=edit_dosen&id=".$row['dosen_id'])?>
                                        <?=link_hapus("admin.php?mod=dosen&delete=yes&id=".$row['dosen_id'])?>                     
                                    </td>
                                </tr>
                         <?php  
                            }
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