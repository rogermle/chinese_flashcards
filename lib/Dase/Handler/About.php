<?php
class Dase_Handler_About extends Dase_Handler
{
		public $resource_map = array(
				'/' => 'about',
		);

		protected function setup($r)
		{
		}

		public function getAbout($r)
		{
				$t = new Dase_Template($r);
				$r->renderResponse($t->fetch('chinese_flashcards/about.tpl'));
		}

		
}
