<?php 

class GlobalDataObjectDecorator extends DataObjectDecorator{
	
	function getRequirementsForPopup(){
		Requirements::css(DOSPUNTOCEROCMS . '/css/tabstrip.css');

		#Requirements::block('dataobject_manager/css/dataobject_manager.css');
		// Requirements::css(DOSPUNTOCEROCMS . '/'.AdminDecorator::$theme.'/css/layout.css');
		// Requirements::css(DOSPUNTOCEROCMS . '/'.AdminDecorator::$theme.'/tabstrip/tabstrip.css');
		// Requirements::css(DOSPUNTOCEROCMS . '/'.AdminDecorator::$theme.'/tree/tree.css');
	}
	
	function updateCMSFields(FieldSet &$fields) {
		self::getRequirementsForPopup();
		return $fields;
	}
}