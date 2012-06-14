<?php /* Smarty version 2.6.20, created on 2012-06-01 16:32:17
         compiled from chinese_flashcards/books.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'extends', 'chinese_flashcards/books.tpl', 1, false),array('block', 'block', 'chinese_flashcards/books.tpl', 3, false),)), $this); ?>
<?php echo _smarty_swisdk_extends(array('file' => "layout.tpl"), $this);?>


<?php $this->_tag_stack[] = array('block', array('name' => 'page')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div data-role="page" class="books_page">

	<div data-role="content" class="content">

	
		<h1 id="splashLogo">Chinese Flashcards</h1>
		<div id="logo">
			
		</div>
		<div id="theBooks">

			<ul>
				<?php $_from = $this->_tpl_vars['books']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['book']):
?>
					<li><a href="book/<?php echo $this->_tpl_vars['book']->short_name; ?>
"><?php echo $this->_tpl_vars['book']->name; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>

		</div><!-- #theBooks -->



	</div> <!-- content -->



</div><!-- /page -->
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>