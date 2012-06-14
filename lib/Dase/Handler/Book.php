<?php
class Dase_Handler_Book extends Dase_Handler
{
		public $resource_map = array(
				'/' => 'list',
				'{short_name}' => 'book',
				'{short_name}/lesson/{lesson_name}' => 'lesson',
		);

		protected function setup($r)
		{
		}

		public function getBook($r)
		{
				$book = new Dase_DBO_Book($this->db);
				$book->short_name = $r->get('short_name');
				if ( !$book->findOne() )
				{
						$r->renderRedirect('books');
				}
				$book->getLessons();
				$t = new Dase_Template($r);
				$t->assign("book", $book);
				$r->renderResponse($t->fetch('chinese_flashcards/book.tpl'));
		}

		public function getLesson($r)
		{
				$book = new Dase_DBO_Book($this->db);
				$book->short_name = $r->get('short_name');
				$book->findOne();
				$lesson = new Dase_DBO_Lesson($this->db);
				$lesson->name = $r->get('lesson_name');
				$lesson->book_id = $book->id;
				$lesson->findOne();
				$lesson->getBook();
				$lesson->getWords();
				$t = new Dase_Template($r);
				
				//Simplified or Traditional Pref
				if(isset($_COOKIE['user_pref']))
				{
					$pref = $_COOKIE['user_pref'];
					$t->assign('user_pref',$pref);
				}
				else
				{
					$t->assign('user_pref', 'simplified');
					setcookie('user_pref', 'simplified', time()+60*60*24*14, '/');
				}
               
                //Card Preferences
                if(isset($_COOKIE['card_pref']))
                {
                    $pref = $_COOKIE['card_pref'];
                    $t->assign('card_pref',$pref);
                }
                else
                {
                    $t->assign('card_pref', 'pin-chi-eng');
					setcookie('card_pref', 'pin-chi-eng', time()+60*60*24*14, '/');
                }
				
				
				$t->assign("book", $book);
				$t->assign("lesson", $lesson);
				$r->renderResponse($t->fetch('chinese_flashcards/lesson.tpl') );
		}

		public function getList($r)
		{
			$r->renderRedirect('books');
		}
}
