<?php
	
	class Extension_WMDEditor extends Extension {
	/*-------------------------------------------------------------------------
		Definition:
	-------------------------------------------------------------------------*/
		
		public function about() {
			return array(
				'name'			=> 'WMD Editor',
				'version'		=> '1.0.4',
				'release-date'	=> '2010-08-07',
				'author'		=> array(
					'name' => 'Doug Stewart',
					'website' => 'http://www.designbyadmiral.com',
					'email' => 'doug@designbyadmiral.com'
				),
				'description' => 'Adds a WMD Editor to every textarea field on every entry page.'
			);
		}
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'InitaliseAdminPageHead',
					'callback'	=> 'initaliseAdminPageHead'
				)
			);
		}
		
		public function initaliseAdminPageHead($context) {
			$page = $context['parent']->Page;
			
            $page->addScriptToHead(URL . '/extensions/wmdeditor/assets/jquery.wmd.min.js', 3466703);
            $page->addScriptToHead(URL . '/extensions/wmdeditor/assets/jquery.wmd.function.js', 3466703);
			$page->addStylesheetToHead(URL . '/extensions/wmdeditor/assets/wmdeditor.css', 'screen', 3466701);
		}
	}
		
?>