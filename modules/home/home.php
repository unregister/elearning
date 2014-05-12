<div class="col-md-9" id="content-container">
<div class="panel panel-primary">
    
        <div class="panel-heading"><h3 class="panel-title">Content</h3></div>
        <div class="panel-body"> 
            
                <div class="row clearfix">
                	
                    <?php
					if( $berita )
					{
                    foreach((array)$berita as $news)
					{
                    ?>
                    
                    <div class="col-md-12 column" id="post">
                    	<div id="post-content">
                            <h2><a href="index.php?mod=berita&act=detail&id=<?=$news['berita_id']?>"><?=$news['berita_judul']?></a></h2>
                            <div id="info-content">Diposting oleh : <strong><?=$news['dosen_nama']?></strong> | Tanggal : <?=tgl_indonesia($news['berita_tanggal'])?> </div>
                            <p>
                               <?= substr( strip_tags($news['berita_isi']),0,300)?>
                            </p>
                            <p>
                                <a class="btn" href="index.php?mod=berita&act=detail&id=<?=$news['berita_id']?>">Lihat detail »</a>
                            </p>
                        </div>
                    </div>
                    <?php
					}
					}
					?>
                    
                    
                </div>  
        
        </div>
    
    </div>
</div>