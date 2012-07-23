<?php

class PageExtension extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db' => array(
				'ShowInHeaderMenu' => 'Boolean',
				'ShowInFooterMenu' => 'Boolean',
				"ShowChildren" => "Boolean",
			),
			'has_one' => array(
				'MainPhoto' => 'Image',
			),
			"many_many" => array(
				'ExtraPhotos' => 'Image',
				'Attachments' => 'File'
			)
		);
	}
	

	// =========
	// = menus =
	// =========
	function FooterMenu() {
		$whereStatement = "ShowInFooterMenu = 1";
		return DataObject::get("Page", $whereStatement);
	}

	function HeaderMenu() {
		$whereStatement = "ShowInHeaderMenu = 1";
		return DataObject::get("Page", $whereStatement);
	}
	
	// ===============
	// = positioning =
	// ===============
	public function AlphaOmega() {
		return ($this->owner->Odd()) ? 'alpha' : 'omega';
	}

	public function getIsNth($val = 3) { 
		return ($this->owner->iteratorPos+1) % $val == 0; 
	}

	// ==========
	// = pagers =
	// ==========
	public function nextPager() {
		$where = "ParentID = ($this->owner->ParentID + 0) AND Sort > ($this->owner->Sort + 0 )";
		$pages = DataObject::get("SiteTree", $where, "Sort", "", 1);
		if($pages) {
			foreach($pages as $page) {
				return $page;
			}
		}
	}
	public function previousPager() {
		$where = "ParentID = ($this->owner->ParentID + 0) AND Sort < ($this->owner->Sort + 0)";
		$pages = DataObject::get("SiteTree", $where, "Sort DESC", "", 1);
		if($pages) {
			foreach($pages as $page) {
				return $page;
			}
		}
	}
	
	// ================
	// = getting pages =
	// ================
	function LatestChild() {
		$stage = Versioned::current_stage() == 'Live' ? '_Live' : '';
		$mDate = (string) DB::query("SELECT MAX(Created) From SiteTree{$stage} where ParentID = {$this->owner->ID}")->value();			
		$obj = DataObject::get_one("SiteTree","`SiteTree{$stage}`.ParentID = {$this->owner->ID} and `SiteTree{$stage}`.Created = '{$mDate}'"); 
		// Debug::dump($obj);
		return $obj;
	}
		
	public function getPageByID($ID = null){
		$theID = intval ($ID);
		$record = DataObject::get_by_id("Page", $theID);
		return $record;
	}

	public function getChildrenByID($ID = null){
		$theID = intval ($ID);		
		$record = DataObject::get("SiteTree", "`ParentID` = ". $theID);
		return $record;
	}
	
    function getAllChildrens(){
	    $children = $this->owner->AllChildren();
	    $children->sort('PublishedDatetime', 'DESC');
	    return $children;
	}

	function Siblings($amount = 3) {
		// $whereStatement = "`ParentID` = $this->ParentID";		
		$table = (Versioned::current_stage() == 'Live') ? 'SiteTree_Live' : 'SiteTree';

		$whereStatement = "`ParentID` = {$this->owner->ParentID} AND {$table}.ID <> {$this->owner->ID}";
		return DataObject::get("Page", $whereStatement,'RAND()','',$amount);
	}
	

	// ========================================
	// = clear requirements / for clean pages =
	// ========================================
	function ClearReq() {
		Requirements::clear();
	}	

	// ==============
	// = pagination =
	// ==============

	// function Paginate($num = 10){		
	// 	if ($this->owner->Children()) {
	// 		$pagarray = $this->owner->Children()->column('ClassName');
	// 		return PaginateChildren::Paginate($pagarray[0],$num);
	// 	}
	// }
	// 
	// =============
	// = analytics =
	// =============
	
	function GoogleAnalytics(){

		if (Director::get_environment_type()=='live') {
			
			$sc = SiteConfig::current_site_config();

			if ($sc->GAnalitycsApiKey) {
				Requirements::javascript('http://www.google-analytics.com/ga.js');
				Requirements::customScript("
				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', '".$sc->GAnalitycsApiKey."']);
				  _gaq.push(['_trackPageview']);
				  (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();
	            ");
			}else{
				Requirements::customScript("alert('necesito una llave de analytics');");
			}
		}

	}
	

	// ========================
	// = count children pages =
	// ========================

	function getChildrenCountFixed(){
		$fixed = $this->owner->Children()->count();

		if (0<$fixed && $fixed<5) {
			return 5;
		}else if(6 < $fixed && $fixed < 10){
			return 10;
		}else if(11 < $fixed && $fixed < 20){
			return 15;
		}else if(21 < $fixed){
			return 20;
		}else{
			return 0;
		}
		
	}


	public function updateCMSFields(FieldSet &$fields) {
	  	$fields->addFieldToTab('Root.Behaviour', new CheckboxField('ShowInHeaderMenu',_t('Page.SHOWINHEADERMENU',"Show in header henu?")),"ShowInSearch");
	  	$fields->addFieldToTab('Root.Behaviour', new CheckboxField('ShowInFooterMenu',_t('Page.SHOWINFOOTERMENU',"Show in footer menu?")),"ShowInSearch");
	  	$fields->addFieldToTab('Root.Behaviour', new CheckboxField('ShowChildren',_t('Page.SHOWCHILDREN',"Show children?")),"ShowInSearch");

		if ($this->owner->ClassName != 'HomePage') {
			$fields->addFieldsToTab("Root.Content.Images", array(
				new FileAttachmentField('MainPhoto',_t('PageExtension.MAINPHOTO',"MainPhoto")),
				new MultipleFileAttachmentField('ExtraPhotos',_t('PageExtension.EXTRAPHOTOS',"ExtraPhotos"))
			));
		  	$fields->addFieldToTab('Root.Content.Attachments', new MultipleFileAttachmentField('Attachments',_t('PageExtension.ATTACHMENTS',"Attachments")));
		}
		
	}

	function contentControllerInit(){
		if (Director::get_environment_type()=='dev') {
			SSViewer::flush_template_cache();
		}
		if(!$this->owner->dbObject('Content')->hasValue()){
			if($this->owner->Children()->Count()){ 
				Director::redirect($this->owner->Children()->First()->AbsoluteLink()); 
			}
		} 

		Requirements::css("mysite/css/layout.css");
		Requirements::css("mysite/css/typography.css");
		Requirements::javascript("dospuntoceroCMSCore/javascript/jquery.min.js");
		Requirements::javascript($this->owner->ThemeDir()."/js/core.js");
		Requirements::insertHeadTags($this->owner->renderWith('Metatags'));

	}

}