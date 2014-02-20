<?php

# Fungsi eksekusi query
function Execute( $query = "" )
{
	if(empty($query)){return false;}
	#$query = mysql_real_escape_string($query);
	return mysql_query($query) or die( mysql_error() );
}
# Fungsi menghitung jumalh records
function NumRows( $query = "" )
{
	if(empty($query)){return false;}
	$execute = mysql_query($query);
	return mysql_num_rows($execute);
}

# Fungsi mendapatkan semua data disebuah tabel
function GetAll( $query = "" )
{
	$arr_data = array();
	if(empty($query)){return false;}
	$execute = mysql_query($query) or die( mysql_error() );
	if( $execute ){
		$num_rows = NumRows($query);
		if( $num_rows > 0 ){
			while($data = mysql_fetch_array($execute)){
				$arr_data[] = $data;
			}
		}
		mysql_free_result($execute);
	}
	
	return $arr_data;
}

# Fungsi mendapatkan satu data disebuah tabel, biasanya pake clause (WHERE id = 1)
function GetRow( $query = "" )
{
	if(empty($query)){return false;}
	$execute = mysql_query($query) or die( mysql_error() );
	if( $execute ){
		$rows = mysql_fetch_assoc( $execute );	
		mysql_free_result($execute);
		return $rows;
	}
}

# Fungsi mendapatkan satu data dari sebuah kolom disebuah tabel
function GetOne( $query = "" )
{
	if(empty($query)){return false;}
	$execute = mysql_query($query) or die( mysql_error() );
	if( $execute ){
		$rows = mysql_fetch_row($execute);
		if($rows){
			return @$rows[0];	
		}
	}	
}

function Insert( $tabel = "", $array = array() )
{
	if( !empty($tabel) and is_array($array) ){
		$r_query = array();
		foreach((array)$array as $field=>$value){
			$r_query[] = "`$field` = '$value'";	
		}
		if( count($r_query) > 0){
			$query = implode(", ",$r_query);
			$execute = Execute("INSERT INTO $tabel SET $query");
			if($execute){
				return Insert_ID();	
			}
		}
	}
}

function Update( $tabel = "", $array = array(), $clause = "" )
{
	if( !empty($tabel) and is_array($array) ){
		$r_query = array();
		foreach((array)$array as $field=>$value){
			$r_query[] = "`$field` = '$value'";	
		}
		if( count($r_query) > 0){
			$query = implode(", ",$r_query);
			$execute = Execute("UPDATE $tabel SET $query $clause");
			return $execute;
		}
	}
}

# Fungsi mendapatkan id terkahir yg diinsert
function Insert_ID()
{
	return mysql_insert_id();
}