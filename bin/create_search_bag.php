<?php


include 'config.php';

setlocale(LC_ALL, 'en_US.UTF8');

function clearUTF($s)
{
		$r = '';
		$s1 = iconv('UTF-8', 'ASCII//TRANSLIT', $s);
		for ($i = 0; $i < strlen($s1); $i++)
		{
				$ch1 = $s1[$i];
				$ch2 = mb_substr($s, $i, 1);

				$r .= $ch1=='?'?$ch2:$ch1;
		}
		return $r;
}

$words = new Dase_DBO_Word($db);

foreach ($words->findAll(1) as $word) {
		$sub = array();
		$sub[] = $word->simplified;
		$sub[] = $word->traditional;
		$sub[] = $word->pinyin;
		$sub[] = clearUTF($word->pinyin);
		$word->search_bag = join(' ',$sub);
		print $word;
		$word->update();
}

