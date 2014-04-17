<?php
include_once _ROOT . "includes/pagination.class.php";
class Pagination
{
	var $query;
	var $per_page;
	var $num_rows;
	var $paging;
	
	function __construct($query = "", $per_page = 10 )
	{
		$this->paging = new Paginator();
		$this->query = $query;
		$this->per_page = $per_page;
		$this->Init();
	}
	
	function Init()
	{
		if( !empty($this->query) )
		{
			$run = mysql_query( $this->query ) or die( mysql_error() );	
			$num_rows = mysql_num_rows($run);
			
			$this->num_rows = $num_rows;
			$this->paging->items_total = $num_rows;
			$this->paging->items_per_page = $this->per_page;
		}
	}
	
	function NumRows(){
		return $this->num_rows;	
	}
	
	function Result()
	{
		$result = array();
		$this->paging->paginate();
		$run = mysql_query( $this->query . $this->paging->limit ) or die( mysql_error() );	
		while( $row = mysql_fetch_array($run) ){
			$result[] = $row;
		}
		
		return $result;
	}
	
	function Link(){
		$out  = "<ul class=\"pagination\">\n";
		$out .= $this->paging->display_pages();	
		$out .= "</ul>\n";
		return $out;
	}
}