<?php

class DospuntoceroCMS extends LeftAndMainDecorator{
	
	function alternateAccessCheck() {
		// html display simplification
		// temporarily unset this
		$lines  = array('undo','redo','pastetext','separator','bold','italic','underline','strikethrough','hr','separator','formatselect','separator','bullist','numlist','blockquote','ssimage','ssflash','sslink','unlink','anchor','separator','advcode');
		$config = HtmlEditorConfig::get('cms');
		$config->setButtonsForLine(1, $lines);
		$config->setButtonsForLine(2, null);
		$config->setButtonsForLine(3, null);

		HtmlEditorConfig::get('cms')->setOption('theme_advanced_blockformats', 'p,h1,h2,h3,h4'); 

		// Requirements::clear();

		Requirements::block("cms/css/silverstripe.tabs.css");
		Requirements::block("cms/css/cms_right.css");
		Requirements::block("cms/css/cms_left.css");
		Requirements::block("cms/css/editor.css");
		

		Requirements::block("sapphire/css/TreeDropdownField.css");
		Requirements::block("cms/css/typography.css");
		Requirements::block("cms/css/layout.css");
		Requirements::block("sapphire/css/Form.css");
		Requirements::block("sapphire/css/SilverStripeNavigator.css");
		Requirements::block("sapphire/css/TableListField.css");

		Requirements::block("userforms/css/FieldEditor.css");
		Requirements::block("sapphire/thirdparty/tabstrip/tabstrip.css");

		Requirements::block("sapphire/thirdparty/greybox/greybox.css");
		Requirements::block("sapphire/javascript/tree/tree.css");

		Requirements::block("sapphire/css/SelectionGroup.css");
		Requirements::block("sapphire/thirdparty/tinymce/themes/advanced/skins/default/ui.css");

		LeftAndMain::require_css("dospuntoceroCMSCore/css/DospuntoceroCMS.css");
		Requirements::css(CMS_DIR . '/css/ModelAdmin.css'); // standard layout formatting for management UI
		Requirements::css(CMS_DIR . '/css/silverstripe.tabs.css'); // follows the jQuery UI theme conventions		
      	CMSMenu::remove_menu_item('Help'); 

	} 
	
}
