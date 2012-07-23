<?php

class VimeoVideo extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db' => array(
				"VimeoURL" => "Varchar"
			),
		);
	}

	public function updateCMSFields(FieldSet &$fields) {
		$fields->addFieldToTab("Root.Content.Main", new TextField('VimeoURL',_t('TrailerPage.VIMEOURL',"Vimeo URL")),"Content");
	}

	function getVimeoVideo(){
		if ($this->owner->VimeoURL) {
			$videoID = explode("/", $this->owner->VimeoURL);
			return $this->owner->customise(
				array('VimeoURL' => $videoID[3])
			)->renderWith("VimeoVideo");
		}else{
			return false;
		}
	}
	function contentControllerInit(){

	}
}