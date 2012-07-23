<?php

class SiteMap extends Page_Controller {

	public static $url_segment = 'sitemap';
	static $singular_name = "SiteMap";

	public $calculated;
	public $calculatedCount;
	
	function init() {
		parent::init();
		Requirements::themedCSS("rockmap");  						
		$this->CalculateSiteMap();
	}

	function CalculateSiteMap(){
		$calculated = DataObject::get('SiteTree',"(ParentID = 0 or ParentID is null) and ShowInMenus <> 0 and ClassName  <> 'ErrorPage' ","`Sort` asc");
		$this->calculatedCount = $calculated->Count();
		$this->calculated = $calculated;
	}

	function getCalculatedSiteMap(){
		return $this->calculated;
	}

	function NumberOfPagesAtRootLevel(){
		return $this->calculatedCount-1;
	}

}