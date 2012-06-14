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

echo clearUTF('Šíleně žluťoučký Vašek úpěl olol! This will remain untranslated: ᾡᾧῘઍિ૮');
//outputs Silene zlutoucky Vasek upel olol! This will remain untranslated: ᾡᾧῘઍિ૮

