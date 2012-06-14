<?php

include 'config.php';


$data = json_decode(file_get_contents('dump.json'),1);

$books = new Dase_DBO_Book($db);

$i = 0;

foreach ($books->findAll(1) as $book) {
		$lesson = new Dase_DBO_Lesson($db);
		$lesson->book_id = $book->id;
		foreach ($lesson->findAll(1) as $less) {
				foreach ($data['items'] as $it) {
						$filename_prefix = $it['metadata']['filename_prefix'][0];
						$lesson_ident = $it['metadata']['lesson'][0];
						$english = $it['metadata']['english'][0];
						$simplified = $it['metadata']['simplified'][0];
						$traditional = $it['metadata']['traditional'][0];
						$word_index = $it['metadata']['word_index'][0];
						$pinyin = $it['metadata']['pinyin'][0];
						$sub_lesson = '';
						if (isset($it['metadata']['sub_lesson'])) {
								$sub_lesson = $it['metadata']['sub_lesson'][0];
								print $sub_lesson."\n";
						}
						if ($filename_prefix == $book->ident && $less->name == $lesson_ident) {
								$word = new Dase_DBO_Word($db);
								$word->lesson_id = $less->id;
								$word->book_id = $lesson->book_id;
								$word->word_index = $word_index;
								$word->english = $english;
								$word->simplified = $simplified;
								$word->traditional = $traditional;
								$word->pinyin = $pinyin;
								$word->sub_lesson = $sub_lesson;
								if (!$word->findOne()) {
										print $i++;
										if (isset($it['media']['mp3'])) {
												$audio_ident = substr($it['metadata']['title'][0],-5,1);
												if ('b' == $audio_ident) {
														$word->audio_file_b = $it['app_root'].$it['media']['mp3'];
												} else {
														$word->audio_file_a = $it['app_root'].$it['media']['mp3'];
												}
										}
										if (isset($it['media']['oga'])) {
												$audio_ident = substr($it['metadata']['title'][0],-5,1);
												if ('b' == $audio_ident) {
														$word->oga_audio_file_b = $it['app_root'].$it['media']['oga'];
												} else {
														$word->oga_audio_file_a = $it['app_root'].$it['media']['oga'];
												}
												print "OGA FILE INSERTED";
										}
										$word->insert();
								} else {
										print $i++;
										print " SECOND FILE INSERTED\n";
										if (isset($it['media']['mp3'])) {
												$audio_ident = substr($it['metadata']['title'][0],-5,1);
												if ('b' == $audio_ident) {
														$word->audio_file_b = $it['app_root'].$it['media']['mp3'];
												} else {
														$word->audio_file_a = $it['app_root'].$it['media']['mp3'];
												}
										}
										if (isset($it['media']['oga'])) {
												$audio_ident = substr($it['metadata']['title'][0],-5,1);
												if ('b' == $audio_ident) {
														$word->oga_audio_file_b = $it['app_root'].$it['media']['oga'];
												} else {
														$word->oga_audio_file_a = $it['app_root'].$it['media']['oga'];
												}
												print "OGA FILE INSERTED";
										}
										$word->update();
								}
						}
				}
		}
}


/*
foreach (array_keys($books) as $b) {
		$bk = new Dase_DBO_Book($db);
		list($name,$ident) = explode(':',$b);
		$bk->name = $name;
		$bk->ident = $ident;
		$bk->insert();
}
 */
