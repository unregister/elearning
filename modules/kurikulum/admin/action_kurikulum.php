<?php
$query = "SELECT * FROM kurikulum ORDER BY kurikulum_id DESC";
$kurikulum = GetAll( $query );
$num_rows = NumRows($query);
?>