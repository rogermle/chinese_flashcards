<?php /* Smarty version 2.6.20, created on 2012-05-23 09:44:19
         compiled from layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'layout.tpl', 5, false),)), $this); ?>
<!DOCTYPE html> 
<html class="ui-mobile"> 
	<head> 
	<base href="<?php echo $this->_tpl_vars['app_root']; ?>
">
	<title><?php $this->_tag_stack[] = array('block', array('name' => 'title')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['main_title']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></title> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php $this->_tag_stack[] = array('block', array('name' => 'meta')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<!--<meta name="google" content="notranslate" />-->
	<meta charset="utf-8">
	<?php $this->_tag_stack[] = array('block', array('name' => 'head')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 800px)" href="<?php echo $this->_tpl_vars['app_root']; ?>
www/css/large.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 481px) and (max-device-width: 799px)" href="<?php echo $this->_tpl_vars['app_root']; ?>
www/css/medium.css">
	<link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="<?php echo $this->_tpl_vars['app_root']; ?>
www/css/mobile.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['app_root']; ?>
www/css/style.css">
	<link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.js"></script>
	<script src="<?php echo $this->_tpl_vars['app_root']; ?>
www/js/jquery.jplayer.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['app_root']; ?>
www/js/chinese_flashcards.js"></script>
	<script src="<?php echo $this->_tpl_vars['app_root']; ?>
www/js/jquery.cookie.js"></script>
	
	<?php $this->_tag_stack[] = array('block', array('name' => 'script')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</head> 
<body class="ui-mobile-viewport ui-overlay-c"> 
<?php $this->_tag_stack[] = array('block', array('name' => 'page')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</body>



 
</html>







