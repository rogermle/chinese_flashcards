<?php

include 'config.php';

$words = new Dase_DBO_Word($db);

foreach ($words->findAll(1) as $word) {
		$lesson = new Dase_DBO_Lesson($db);
		$lesson->load($word->lesson_id);
		$word->book_id = $lesson->book_id;
		print $word;
		$word->update();
}

