<?php

function adodb_pr($str = ""){
	if( is_array($str) or is_object($str) ){
		echo "<pre>".print_r($str,true)."</pre>";	
	}else{
		echo $str;	
	}
}