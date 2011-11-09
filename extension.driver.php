<?php

	Class extension_jquery_date_picker extends Extension{

		public function about(){
			return array(
				'name' => 'jQuery Date Picker',
				'version' => '1.3',
				'release-date' => '2011-04-05',
				'author' => array(
					'name' => 'Max Wheeler',
					'email' => 'max@makenosound.com'
				)
			);
		}
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page' => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'initializeAdmin'
				)
			);
		}
		
		public function initializeAdmin($context) {
			$page = $context['parent']->Page;
			$assets_path = '/extensions/jquery_date_picker/assets/';
			
			# load jQuery and autocomplete JS
			$page->addScriptToHead('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js', 430);
			$page->addScriptToHead(URL . $assets_path . 'initialise.js', 431);
			
			# load autocomplete styles
			$page->addStylesheetToHead('http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css', 'screen', 110);
			/*$page->addStylesheetToHead(URL . $assets_path . 'ui.theme.css', 'screen', 111);
			$page->addStylesheetToHead(URL . $assets_path . 'ui.datepicker.css', 'screen', 112); */
		}
	}
