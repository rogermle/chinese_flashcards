<?php

require_once 'Dase/DBO/Autogen/Book.php';

class Dase_DBO_Book extends Dase_DBO_Autogen_Book 
{
	public $lessons = array();
	
	public function getLessons()
	{
		$lessons = new Dase_DBO_Lesson($this->db);
		$lessons->book_id = $this->id;
		$this->lessons = $lessons->findAll(1);
		
		return $this->lessons;
	}
}