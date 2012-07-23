<?php

class DospuntoceroCMSNavigator extends Extension {

	protected $dataRecord;

	static $adminLink = 'admin';
	public static $Template;

	public function CMSNavigator() {
		if(Director::isDev() || Permission::check('CMS_ACCESS_CMSMain')) {
			$RenderTemplate = (isset(DospuntoceroCMSNavigator::$Template)) ? DospuntoceroCMSNavigator::$Template : $this->class;

			Requirements::css('dospuntoceroCMSCore/css/dospuntoceroCMSNavigator.css');

			$this->owner->cmsLink      = self::$adminLink."/".CMSMain::$url_segment."/show";
			$this->owner->adminLink    = self::$adminLink;

			if($date                   = Versioned::current_archived_date()) {
				$this->owner->DisplayMode = 'Archived';
				$this->owner->ArDate      = Object::create('Datetime', $date, null);
			} else
				$this->owner->DisplayMode = Versioned::current_stage();

			return $this->owner->renderWith(array(
				$RenderTemplate,
				'DospuntoceroCMSNavigator'
			));
		}
	}
}
