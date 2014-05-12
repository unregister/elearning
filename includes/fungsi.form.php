<?php

function form_text($title='',$name='',$val='',$attr=''){
	$out  = '<div class="form-group">';
    $out .= '<label for="'.$name.'" class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
    $out .= '<input type="text" class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$title.'" value="'.$val.'" '.$attr.'>';
    $out .= '</div></div>';	
	return $out;
}

function form_plaintext($title='',$val=''){
	$out  = '<div class="form-group">';
    $out .= '<label class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
    $out .= $val;
    $out .= '</div></div>';	
	return $out;
}

function form_password($title='',$name='',$attr=''){
	$out  = '<div class="form-group">';
    $out .= '<label for="'.$name.'" class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
    $out .= '<input type="password" class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$title.'" '.$attr.'>';
    $out .= '</div></div>';	
	return $out;
}

function form_textarea($title='',$name='',$val='',$attr=''){
	$out  = '<div class="form-group">';
    $out .= '<label for="'.$name.'" class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
    $out .= '<textarea class="form-control" id="'.$name.'" name="'.$name.'" placeholder="'.$title.'" '.$attr.'>'.$val.'</textarea>';
    $out .= '</div></div>';
	return $out;	
}

function form_dropdown($title='',$name='',$array='',$vals='',$attr=''){
	$out  = '<div class="form-group">';
    $out .= '<label for="'.$name.'" class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
	$out .= '<select name="'.$name.'" '.$attr.'>';
  	if( !empty($array) ){
		foreach((array)$array as $key=>$val){
			$selected = ($key==$vals)?' selected="selected"' : "";
			$out .= '<option value="'.$key.'"'.$selected.'>'.$val.'</option>';	
		}
	}
	$out .= '</select>';
    $out .= '</div></div>';	
	return $out;
}

function form_file($title='',$name='',$val='',$attr=''){
	$out  = '<div class="form-group">';
    $out .= '<label for="'.$name.'" class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
	
	if( !empty($val) and file_exists(_ROOT.$val) )
	{
		$out .= '<input type="hidden" name="hidden_foto" value="'.$val.'">';
		$ext = strtolower( end( explode(".",$val) ) );
		$filename = end( explode("/",$val) ) ;
		
		if( in_array($ext,array('jpg','jpeg','gif','bmp','png') ) ){
			$out .= '<img src="'._URL.$val.'" style="width:150px;"/><br>';
		}else{
			$out .= '<img src="'._URL."assets/file.png".'" /><br>';
		}
		$out .= $filename."<br>";
	}
	
    $out .= '<input type="file" name="'.$name.'" id="'.$name.'" value="'.$val.'" '.$attr.'>';
    $out .= '</div></div>';	
	return $out;
}

function form_dropdown_tanggal($title='',$name='',$val='')
{
	$arr_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	
	$tgl = substr($val,8,2);
	$tgl = ($tgl<10)?str_replace("0","",$tgl):$tgl;
	
	$bln = substr($val,5,2);
	$bln = ($bln<10)?str_replace("0","",$bln):$bln;
	
	$thn = substr($val,0,4);
	
	$out  = '<div class="form-group">';
    $out .= '<label for="'.$name.'" class="col-sm-3 control-label">'.$title.'</label>';
    $out .= '<div class="col-sm-9">';
    $out .= '<select name="'.$name.'_tgl">';
    for($i=1;$i<=31;$i++){
		$t_select = ($i==$tgl)?" selected":"";
    	$out .= '<option value="'.$i.'" '.$t_select.'>'.$i.'</option>';
	}
	$out .= '</select>';
	$out .= '<select name="'.$name.'_bln">';
	foreach($arr_bulan as $no=>$nm){
		$b_select = ($no==$bln)?" selected":"";
    	$out .= '<option value="'.$no.'"'.$b_select.'>'.$nm.'</option>';
	}
	$out .= '</select>';
	$out .= '<select name="'.$name.'_thn">';
	for($j=1980;$j<=date('Y');$j++){
		$h_select = ($j==$thn)?" selected":"";
    	$out .= '<option value="'.$j.'"'.$h_select.'>'.$j.'</option>';
	}
    $out .= '</select>';
    $out .= '</div></div>';	
	return $out;
}

function form_button($title='',$name='',$attr='')
{
	$out  = '<div class="form-group">';
	$out .= '<div class="col-sm-offset-3 col-sm-9">';
	$out .= '<button type="submit" class="btn btn-success" name="'.$name.'" '.$attr.'>'.$title.'</button>';
	$out .= '</div>';
	$out .= '</div>';
	return $out;
}