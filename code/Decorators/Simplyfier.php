<?php

class Simplyfier extends DataObjectDecorator{

	public function updateCMSFields(FieldSet &$fields) {
		$fields->removeFieldFromTab("Root","Reports");
		$fields->removeFieldFromTab("Root","To-do");
	}
	
}
