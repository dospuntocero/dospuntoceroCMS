<?php
class PaginateDataObject extends Object {

	function Paginate($calledClass = "",$object_num = 10,$filter = null, $sort = null, $join = null) {
	  	if(!isset($_GET['start']) || !is_numeric($_GET['start']) || (int)$_GET['start'] < 1) $_GET['start'] = 0;
	  	$SQL_start = (int)$_GET['start'];
			
		$doSet = DataObject::get($calledClass,$filter,$sort,$join,"{$SQL_start},{$object_num}");			
	  	return $doSet ? $doSet : false;
	}	
}



// how to use?
// create a function that is called
// function Paginate(){
// 	return PaginateDataObject::Paginate("ArticlePage",10);
// }
// and in templates
//
// 		<% control Paginate %>
// 			<h3><a href="$Link" title="$Title">$Title</a></h3>
// 			<div class="fecha">$Date.Long<em>$Author</em></div>
// 			<div class="info">
// 				<p>$Content.LimitCharacters(450)  <a href="$Link" title="Lees verder" class="readmore">Lees verder</a></p>
// 			</div>		
// 		<% end_control %>
// 	<% include Pagination %>