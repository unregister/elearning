<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data siswa</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=siswa&act=add_siswa")?></div>
            	<div class="table-responsive">
                <form method="get" action="">
                	<input type="hidden" name="mod" value="siswa">
                    <input type="text" name="nama" placeholder="Nama siswa" /> <input type="submit" name="s" value="Cari">
                </form>
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>NIS</th>
                            <th>Nama siswa</th>
                            <th>Kelas</th>
                            <th>Tempat lahir</th>
                            <th>Tanggal lahir</th>
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
                                	<td><?=$row['siswa_nis']?></td>
                                    <td><?=$row['siswa_nama']?></td>
                                    <td><?=$kelas[$row['siswa_kelas_id']]?></td>
                                    <td><?=tgl_indonesia($row['siswa_tgl_lahir'])?></td>
                                    <td><?=$jenis_kelamin[$row['siswa_jk']]?></td>
                                    <td><?=$agama[$row['siswa_agama']]?></td>
                                    <td><?=$row['siswa_alamat']?></td>
                                    <td>
										<?=link_edit("admin.php?mod=siswa&act=edit_siswa&id=".$row['siswa_id'])?>
                                        <?=link_hapus("admin.php?mod=siswa&delete=yes&id=".$row['siswa_id'])?>                     
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