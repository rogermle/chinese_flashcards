<?php /* Smarty version 2.6.20, created on 2012-06-01 13:28:52
         compiled from chinese_flashcards/book.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'extends', 'chinese_flashcards/book.tpl', 1, false),array('block', 'block', 'chinese_flashcards/book.tpl', 3, false),)), $this); ?>
<?php echo _smarty_swisdk_extends(array('file' => "layout.tpl"), $this);?>


<?php $this->_tag_stack[] = array('block', array('name' => 'page')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div data-role="page" class="lessonlist_page">

	<div data-role="header" class="ui-bar">
		<a rel='external' href="<?php echo $this->_tpl_vars['app_root']; ?>
books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
		<h1><a href="<?php echo $this->_tpl_vars['app_root']; ?>
books">Books</a> :: <?php echo $this->_tpl_vars['book']->name; ?>
</h1>
	</div><!-- /header -->

	<div data-role="content">
		<ul data-role="listview" data-inset="true" data-filter="false">
			<?php $_from = $this->_tpl_vars['book']->lessons; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lesson']):
?>
			<li><a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['book']->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
" data-ajax="false">Lesson <?php echo $this->_tpl_vars['lesson']->name; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>

	</div> <!-- content -->

	<div data-role="footer">

	</div> <!-- footer -->


</div><!-- /page -->
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	