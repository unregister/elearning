<?php
$berita = GetAll("SELECT b.*,d.dosen_nama FROM berita b LEFT JOIN dosen d ON(b.berita_author=d.dosen_id) WHERE b.berita_aktif = 1 ORDER BY b.berita_id DESC LIMIT 4");
?>