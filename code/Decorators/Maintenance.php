<?php 

	class Maintenance extends DataObjectDecorator{

		function extraStatics() {
			return array('db' => array('Maintenance' => 'Boolean'));
		}

		public function updateCMSFields(FieldSet &$fields) {
			$fields->addFieldToTab("Root.Main", new LiteralField('Maintenance0',"<h2>"._t('Maintenance.MAINTENANCEMODE',"Maintenance mode")."</h2>"),"Title");
			$fields->addFieldToTab("Root.Main", new CheckboxField('Maintenance',_t('Maintenance.MAINTENANCE',"Put the site into maintenance mode?")),"Title");
			$fields->addFieldToTab("Root.Main", new LiteralField('Maintenance2',"<br><hr /><br>"),"Title");
		}
	}

	class MaintenanceController_Decorator extends SiteTreeDecorator{

		public function contentcontrollerInit($controller) {
			if (!Member::currentUser()) {
				$this->checkMaintenance();
			}
			Requirements::block('/jsparty/behaviour.js');
			Requirements::block('sapphire/javascript/Validator.js');
			Requirements::block('jsparty/prototype.js');
			Requirements::clear('jsparty/behavior.js');
			Requirements::block('jsparty/behavior.js');
			Requirements::block('sapphire/javascript/i18n.js');
			Requirements::block('assets/base.js');
			Requirements::block('sapphire/javascript/lang/en_US.js');
		}

		public function checkMaintenance(){
			$checkHomeForMaintenance = SiteConfig::current_site_config();
			if($checkHomeForMaintenance->Maintenance == 1){
				if ($this->owner->URLSegment != 'Security') {
					Requirements::clear();
					$view = new SSViewer(array('MaintenanceView'));
					echo $view->process(_t('Maintenance.MESSAGE',"Site under maintenance"));
					exit;
				}
			}
		}
	}
	
