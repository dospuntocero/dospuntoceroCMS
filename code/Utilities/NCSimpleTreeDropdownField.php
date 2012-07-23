<?php

class NCSimpleTreeDropdownField extends DropdownField
{
	protected $sourceClass;
	function __construct($name, $title = "", $sourceClass = "SiteTree", $value = "", $form = null, $emptyString = null)
	{
		$this->sourceClass = $sourceClass;
		parent::__construct($name, $title, $this->getHierarchy(0), $value, $form, $emptyString);
	}
	
	private function getHierarchy($parentID, $level = 0)
	{
		$options = array();

		if($children = DataObject::get($this->sourceClass, "ParentID = $parentID")) {
			foreach($children as $child) {
				$indent="";
				for($i=0;$i<$level;$i++) $indent .= " > ";
				$options[$child->URLSegment] = empty($child->Title) ? "<em>$indent "._t('NCSimpleTreeDropdownField.UNTITLED',"Untitled")."</em>" : $indent.$child->Title;
				$options += $this->getHierarchy($child->ID, $level+1);
			}
		}				
		return $options;	
	}
}
?>