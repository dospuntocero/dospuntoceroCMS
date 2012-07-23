<?php
class URLSegmentDecorator extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db' => array(
				'URLSegment' => 'Varchar(255)',
			),
		);
	}

	function onBeforeWrite() {
		if ($this->owner->isChanged('Title')) {
	      $this->owner->URLSegment = URLPageDecorator::generateURLSegment($this->owner->Title);
	    }
	}
}