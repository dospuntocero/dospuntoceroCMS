<?php

class BaseConfig extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db' => array(
				'SiteDescription' => 'HTMLText',
				"StreetAddress" => "Varchar(255)",
				"Locality" => "Varchar(125)",
				"Region" => "Varchar(125)",
				"PostalCode" => "Varchar(125)",
				"CountryName" => "Varchar(125)",
				"PhoneWork" => "Varchar(125)",
				"CellPhone" => "Varchar(125)",
				"Email" => "Varchar(125)",
				'GMapsApiKey' => 'Varchar(255)',
				'GAnalitycsApiKey' => 'Varchar(255)',
			),
		);
	}

	public function updateCMSFields(FieldSet &$fields) {
		
		$fields->removeByName('Theme');

		$contactDetailsTab = _t('DospuntoceroCMSCore.CONTACTDETAILSTAB',"ContactDetails");			
		$APIKeysTab = _t('DospuntoceroCMSCore.APIKEYSTAB',"ApiKeys");			


		$fields->addFieldsToTab('Root.'.$contactDetailsTab, array(
			new HeaderField(_t('DospuntoceroCMSCore.CONTACTDETAILSINFO',"This information will appear in the footer of every page"), '4'),
			new HTMLEditorField('SiteDescription', _t('DospuntoceroCMSCore.SITEDESCRIPTION',"SiteDescription"),10),
			new TextField('StreetAddress',_t('BaseConfig.STREETADDRESS',"Street Address")),
			new TextField('Locality',_t('BaseConfig.LOCALITY',"Locality")),
			new TextField('Region',_t('BaseConfig.REGION',"Region")),
			new TextField('PostalCode',_t('BaseConfig.POSTALCODE',"Postal Code")),
			new CountryDropdownField('CountryName',_t('BaseConfig.COUNTRYNAME',"Country Name")),
			new TextField('PhoneWork',_t('BaseConfig.PHONEWORK',"Phone Work")),
			new TextField('CellPhone',_t('BaseConfig.CELLPHONE',"Cellphone")),
			new TextField('Email',_t('BaseConfig.EMAIL',"Email"))
		));
		
		$fields->addFieldsToTab('Root.'.$APIKeysTab, array(
			new HeaderField(_t('DospuntoceroCMSCore.GMAPSAPIKEYTITLE',"google maps api key"), '4'),
			new TextField('GMapsApiKey',_t('DospuntoceroCMSCore.GMAPSAPIKEY',"Google maps api key is needed if you want to add maps to your site. <a target='_blank' href='http://code.google.com/intl/es/apis/maps/signup.html'>get yours here</a>")),
			new HeaderField(_t('DospuntoceroCMSCore.GANALITYCSAPIKEYTITLE',"google analitycs api key"), '4'),
			new TextField('GAnalitycsApiKey',_t('DospuntoceroCMSCore.GANALITYCSAPIKEY',"Google Analitycs api key is needed for website tracking"))			
		));
		
	}
}