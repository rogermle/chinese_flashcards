<?php


class CFSearch
{

		public static function search($db,$str)
		{
				$books = new Dase_DBO_Book($db);
				$book_set = array();
				foreach ($books->findAll(1) as $b) {
						$book_set[$b->id] = $b;
				}

				$result = array();
				$result['books']  = array();
				$words = new Dase_DBO_Word($db);
				$words->addWhere('search_bag','%'.$str.'%','like');
				foreach ($words->findAll(1) as $word) {
						$book = $book_set[$word->book_id];
						if (!isset($result['books'][$book->id])) {
								$result['books'][$book->id] = array();
								$result['books'][$book->id]['id'] = $book->id;
								$result['books'][$book->id]['name'] = $book->name;
								$result['books'][$book->id]['lessons'] = array();
						}
						if (!isset($result['books'][$book->id]['lessons'][$word->lesson_id])) {
								$result['books'][$book->id]['lessons'][$word->lesson_id] = array();
								$result['books'][$book->id]['lessons'][$word->lesson_id]['id'] = $word->lesson_id;
								$result['books'][$book->id]['lessons'][$word->lesson_id]['words'] = array();
						}
						if (!isset($result['books'][$book->id]['lessons'][$word->lesson_id]['words'][$word->id])) {
								$result['books'][$book->id]['lessons'][$word->lesson_id]['words'][$word->id] = array();
								$result['books'][$book->id]['lessons'][$word->lesson_id]['words'][$word->id]['id'] = $word->id;
								$result['books'][$book->id]['lessons'][$word->lesson_id]['words'][$word->id]['traditional'] = $word->traditional;
								$result['books'][$book->id]['lessons'][$word->lesson_id]['words'][$word->id]['simplified'] = $word->simplified;
								$result['books'][$book->id]['lessons'][$word->lesson_id]['words'][$word->id]['pinyin'] = $word->pinyin;
						}
				}
				return $result;
		}
}
