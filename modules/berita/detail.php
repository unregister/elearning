<div class="col-md-9" id="content-container">
<div class="panel panel-primary">
    
        <div class="panel-heading"><h3 class="panel-title">DETAIL</h3></div>
        <div class="panel-body"> 
            
                <div class="row clearfix">
                	
                    <?php
					if( $detail )
					{

                    ?>
                    
                    <div class="col-md-12 column" id="post">
                    	<div id="post-content">
                            <h2><a><?=$detail['berita_judul']?></a></h2>
                            <div id="info-content">Diposting oleh : <strong><?=$detail['dosen_nama']?></strong> | Tanggal : <?=tgl_indonesia($detail['berita_tanggal'])?> </div>
                            <p>
                            	<?php
								if( !empty($detail['berita_gambar']) and file_exists(_ROOT."foto/berita/".$detail['berita_gambar']) )
								{
								?>
                                <img src="<?=_URL?>foto/berita/<?=$detail['berita_gambar']?>" style="width:300px; float:left; margin-right:5px;" class="img-thumbnail">
                                <?php
								}
								?>
                               <?= $detail['berita_isi']?>
                            </p>
          
                        </div>
                    </div>
                    <?php
					
					}else{
					?>
                    	<div align="center"><em>Detail berita tidak ditemukan</em></div>
                    <?php
					}
					?>
                    
                    
                </div>  
        
        </div>
    
    </div>
</div>