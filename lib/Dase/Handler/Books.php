<?php

class Dase_Handler_Books extends Dase_Handler
{
		public $resource_map = array(
				'/' => 'books',
				'{str}' => 'books'
		);

		protected function setup($r)
		{
		}

		public function getBooks($r) 
		{
				$t = new Dase_Template($r);
				$books = new Dase_DBO_Book($this->db);
				$t->assign("books", $books->findAll());
				$r->renderResponse($t->fetch('chinese_flashcards/books.tpl'));
		}
}

