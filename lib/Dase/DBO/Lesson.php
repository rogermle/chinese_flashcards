<?php

require_once 'Dase/DBO/Autogen/Lesson.php';

class Dase_DBO_Lesson extends Dase_DBO_Autogen_Lesson 
{
		public $book = null;
		public $words = array();
		public $word_idents = array();


		public function getBook() {
				$book = new Dase_DBO_Book($this->db);
				$book->load($this->book_id);
				$this->book = $book;
				return $this->book;
		}

		public function getWords() {
				$words = new Dase_DBO_Word($this->db);
				$words->lesson_id = $this->id;
				foreach ($words->findAll(1) as $word) {

						if (!$word->sub_lesson) {
								$word->sub_lesson = '0';
						}
						if (!isset($this->words[$word->sub_lesson])) { 
								$this->words[$word->sub_lesson] = array();
						}
						$this->words[$word->sub_lesson][] = $word;
						$this->word_idents[] = $word->word_index.'.'.$word->sub_lesson;
				}
				return $this->words;
		}

}
