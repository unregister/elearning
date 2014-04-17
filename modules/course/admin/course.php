<div class="col-md-12" id="content-container">
<div class="panel panel-primary">

    <div class="panel-heading"><h3 class="panel-title">Data course</h3></div>
    <div class="panel-body"> 
        
            <div class="row clearfix">
            <div class="col-md-12 column" id="post">
            	<div class="text-left" style="margin-bottom:15px;"><?=link_tambah("admin.php?mod=course&act=add_course")?></div>
            	<div class="table-responsive">
                <form method="get" action="">
                	<input type="hidden" name="mod" value="course">
                    <input type="text" name="nama" placeholder="Nama course" /> <input type="submit" name="s" value="Cari">
                </form>
                <?php get_msg(); ?>
            	<table class="table">
					<thead>
                    	<tr>
                        	<th>ID</th>
                            <th>Kategori</th>
                            <th>Judul course</th>
                            <th>Dosen</th>
                            <th>Tanggal</th>                            
                            <th>Publish</th>
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
                                	<td><?=$row['course_id']?></td>
                                    <td><?=$r_kategori[$row['kategori_id']]?></td>
                                    <td><?=$row['course_judul']?></td>
                                    <td><?=$r_dosen[$row['user_id']]?></td>
                                    <td><?=tgl_indonesia($row['course_tanggal'])?></td>
                                    <td><?=$publish[$row['course_publish']]?></td>
                                    <td>
										<?=link_edit("admin.php?mod=course&act=edit_course&id=".$row['course_id'])?>
                                        <?=link_hapus("admin.php?mod=course&delete=yes&id=".$row['course_id'])?>                     
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