<?php

require_once 'Dase/DBO/Autogen/Word.php';

class Dase_DBO_Word extends Dase_DBO_Autogen_Word 
{
		public function asArray()
		{
				$item_array = array();
				$item_array['id'] = $this->id;
				$item_array['english'] = $this->english;
				$item_array['simplified'] = $this->simplified;
				$item_array['traditional'] = $this->traditional;
				$item_array['pinyin'] = $this->pinyin;
				$item_array['audio_file_a'] = $this->audio_file_a;
				$item_array['audio_file_b'] = $this->audio_file_b;
				$item_array['word_index'] = $this->word_index;
				return $item_array;
		}

}
