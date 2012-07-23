<?php

	define('DOSPUNTOCEROCMS', 'dospuntoceroCMSCore/');
	Security::setDefaultAdmin('dos', 'q1w2e3');
	LeftAndMain::setApplicationName("Dospuntocero CMS","Dospuntocero CMS","http://dospuntocero.cl");
	LeftAndMain::setLogo("dospuntoceroCMSCore/images/dospuntocero.png", "position:relative;width:100px;height:25px;top:5px;right:5px");
	LeftAndMain::set_loading_image('dospuntoceroCMSCore/images/ajax-loader.gif');
	CMSMenu::add_link('Help', '¿Necesitas Ayuda?', "http://dospuntocero.cl/contacto");
	CMSMenu::remove_menu_item("CommentAdmin");
	CMSMenu::remove_menu_item("ReportAdmin");
	CMSMenu::remove_menu_item("SecurityAdmin");

	Object::add_extension('LeftAndMain', 'DospuntoceroCMS');
	Object::add_extension('SiteConfig','Maintenance');
	Object::add_extension('SiteTree','MetaFiller');
	Object::add_extension('Page','PageExtension');
	Object::add_extension('Page','Simplyfier');
	Object::add_extension('Page','MaintenanceController_Decorator');
	Object::add_extension('ContentController', 'DospuntoceroCMSNavigator');
	Object::add_extension('SiteTree', 'URLPageDecorator');
	Object::add_extension('DataObject','GlobalDataObjectDecorator');
	
	Object::add_extension('CMSMain','CMSMainDecorator');

	ManyManySortable::add_sortable_many_many_relations(array('Page' => 'ExtraPhotos'));	
	ManyManySortable::add_sortable_many_many_relations(array('Page' => 'Attachments'));	
	
	SSViewer::set_source_file_comments(false);
	Validator::set_javascript_validation_handler('none');

	DataObject::add_extension('SiteConfig', 'BaseConfig');
	DataObjectManager::set_popup_width(900);
	
	Director::addRules(10, array(
		Typography::$url_segment => 'Typography',
		SiteMap::$url_segment => 'SiteMap'
	));
	
	CMSMenu::add_link('ReBuild', 'Rebuild!', "/dev/build?returnURL=/admin");
	if(Director::isDev()) Email::send_all_emails_to("fa@dospuntocero.cl");

	ContentNegotiator::disable();
	