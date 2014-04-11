<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data mahasiswa</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=mahasiswa&act=add_mahasiswa")?></div>
            	<div class="table-responsive">
                <form method="get" action="">
                	<input type="hidden" name="mod" value="mahasiswa">
                    <input type="text" name="nama" placeholder="Nama mahasiswa" /> <input type="submit" name="s" value="Cari">
                </form>
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>NIS</th>
                            <th>Nama mahasiswa</th>
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
                                	<td><?=$row['mahasiswa_nis']?></td>
                                    <td><?=$row['mahasiswa_nama']?></td>
                                    <td><?=$kelas[$row['mahasiswa_kelas_id']]?></td>
                                    <td><?=$row['mahasiswa_tempat_lahir']?></td>
                                    <td><?=tgl_indonesia($row['mahasiswa_tgl_lahir'])?></td>
                                    <td><?=$jenis_kelamin[$row['mahasiswa_jk']]?></td>
                                    <td><?=$agama[$row['mahasiswa_agama']]?></td>
                                    <td><?=$row['mahasiswa_alamat']?></td>
                                    <td>
										<?=link_edit("admin.php?mod=mahasiswa&act=edit_mahasiswa&id=".$row['mahasiswa_id'])?>
                                        <?=link_hapus("admin.php?mod=mahasiswa&delete=yes&id=".$row['mahasiswa_id'])?>                     
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