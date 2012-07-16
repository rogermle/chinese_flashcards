<?php
class Dase_Handler_Instructions extends Dase_Handler
{
		public $resource_map = array(
				'/' => 'instructions',
		);

		protected function setup($r)
		{
		}

		public function getInstructions($r)
		{
				$t = new Dase_Template($r);
				$r->renderResponse($t->fetch('chinese_flashcards/instructions.tpl'));
		}

		
}
