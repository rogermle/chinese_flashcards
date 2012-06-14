<?php

class Dase_Handler_Search extends Dase_Handler
{
	public $resource_map = array(
		'/' => 'search',
		'{id}' => 'card',
	);

	protected function setup($r)
	{
	}
	
	public function getSearchJson($r)
	{
			$result = CFSearch::search($this->db,$r->get('q'));
			$r->renderResponse(Dase_Json::get($result));
	}
}

