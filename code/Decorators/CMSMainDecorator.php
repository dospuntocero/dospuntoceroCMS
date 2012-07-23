<?php

class CMSMainDecorator extends DataObjectDecorator {

	function contentControllerInit(){

		if(Translatable::is_enabled()) {
			Debug::show("trabajando en el multinlang");
			die();
			// $Lang serves as a "context" which can be inspected by Translatable - hence it
			// has the same name as the database property on Translatable.
			if($this->getRequest()->requestVar("Locale")) {
				$this->Locale = $this->getRequest()->requestVar("Locale");
			} elseif($this->getRequest()->requestVar("locale")) {
				$this->Locale = $this->getRequest()->requestVar("locale");
			} elseif (Session::get("{$this->class}.Locale")) {
				$this->Locale = Session::get("{$this->class}.Locale");    
			} else {
				$this->Locale = Translatable::default_locale();
			}
			Translatable::set_current_locale($this->Locale);
			Session::set("{$this->class}.Locale", $this->Locale);
		}


	}

}
