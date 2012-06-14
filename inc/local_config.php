<?php

$conf['db']['type'] = 'mysql';
$conf['db']['host'] = 'mysql.laits.utexas.edu';
$conf['db']['name'] = 'pkeane_chinese_flashcards';
$conf['db']['user'] = 'dev_pkeane';
$conf['db']['pass'] = 'zxcdsaqwe321';
$conf['db']['table_prefix'] = '';

$conf['app']['main_title'] = 'Chinese Flashcards';
$conf['app']['default_handler'] = 'books';
$conf['request_handler']['login'] = 'uteid';
$conf['app']['user_class'] = 'Dase_DBO_User';
$conf['app']['log_level'] = 3;
$conf['app']['init_global_data'] = false;

//$conf['app']['media_dir'] = '/var/www-data/dase/apps/<app_name>/'; 

$conf['auth']['superuser']['pkeane'] = 'flashcards';
$conf['auth']['superuser']['rml249'] = 'flashcards';
$conf['auth']['token'] = 'auth';
$conf['auth']['ppd_token'] = "ppd";
$conf['auth']['service_token'] = "service";
$conf['auth']['serviceuser']['test'] = 'ok';

