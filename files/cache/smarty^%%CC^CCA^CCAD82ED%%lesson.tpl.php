<?php /* Smarty version 2.6.20, created on 2012-06-07 10:44:24
         compiled from chinese_flashcards/lesson.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'extends', 'chinese_flashcards/lesson.tpl', 1, false),array('block', 'block', 'chinese_flashcards/lesson.tpl', 3, false),array('modifier', 'count', 'chinese_flashcards/lesson.tpl', 184, false),)), $this); ?>
<?php echo _smarty_swisdk_extends(array('file' => "layout.tpl"), $this);?>


<?php $this->_tag_stack[] = array('block', array('name' => 'page')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<div id="word_list" data-role="page" data-fullscreen="true" data-add-back-btn="true" data-back-btn-text="Previous">
		<div data-role="header">
			<a rel='external' href="<?php echo $this->_tpl_vars['app_root']; ?>
books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
			<h1><a id="book" href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
"><?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
</a> :: Lesson <?php echo $this->_tpl_vars['lesson']->name; ?>
</h1>
			<div class="ui-grid-b">
				<div class="ui-block-a">
					<a data-rel="back" href='#' class='ui-btn-left' data-icon='arrow-l'></a>
				</div>
				<div class="ui-block-b">
				</div>
				<div class="ui-block-c">
					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup" data-type="horizontal" class="char_toggle" data-mini="true">
							<input type="radio" name="simp_trad_toggle" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?>checked="checked"<?php endif; ?> id="simp_trad_toggle_s" value="simplified" />
							<label for="simp_trad_toggle_s" class="simplified">s</label>
							<input type="radio" name="simp_trad_toggle" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?>checked="checked"<?php endif; ?> id="simp_trad_toggle_t" value="traditional" />
							<label for="simp_trad_toggle_t" class="traditional">t</label>
						</fieldset>
					</div>
				</div><!-- end of ui-block-c -->
			</div><!-- end of ui-grid-b -->
		</div><!-- /header -->

		<div data-role="content">	
			<ul data-role="listview" class="wordlist" data-filter="true">
				
				<?php $_from = $this->_tpl_vars['lesson']->words; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub'] => $this->_tpl_vars['cardset']):
?>
					
					<?php if ($this->_tpl_vars['sub'] == '1'): ?>
					<li data-role="list-divider">Sublesson One</li>
					<?php elseif ($this->_tpl_vars['sub'] == '2'): ?>
					<li data-role="list-divider">Sublesson Two</li>
					<?php elseif ($this->_tpl_vars['sub'] == 's'): ?>
					<li data-role="list-divider">Supplementary Sublesson</li>
					<?php else: ?>
					<?php endif; ?>
					<?php $_from = $this->_tpl_vars['cardset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['card']):
?>
					<li>
						<a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
#card_<?php echo $this->_tpl_vars['card']->word_index; ?>
.<?php echo $this->_tpl_vars['card']->sub_lesson; ?>
">
							<p class="character">
								<span class="char_trad" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> style="display: none;" <?php endif; ?>><?php echo $this->_tpl_vars['card']->traditional; ?>
</span>
								<span class="char_simp" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> style="display: none;" <?php endif; ?>><?php echo $this->_tpl_vars['card']->simplified; ?>
</span>
							</p>
							<p class="pinyin"><?php echo $this->_tpl_vars['card']->pinyin; ?>
</p>
							<p class="english"><?php echo $this->_tpl_vars['card']->english; ?>
</p>
						</a>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div><!-- /content -->
	</div><!-- /page -->

	
	<!-- Start of second page -->
	<?php $this->assign('card_index', 0); ?>
	<?php $_from = $this->_tpl_vars['lesson']->words; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub'] => $this->_tpl_vars['cardset']):
?>
		<?php $_from = $this->_tpl_vars['cardset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['card']):
?>
	
		<div data-role="page" id="card_<?php echo $this->_tpl_vars['card']->word_index; ?>
.<?php echo $this->_tpl_vars['card']->sub_lesson; ?>
" class="card_page">
			<div data-role="header" class="card_header" data-position="fixed" data-fullscreen="true">
				<div class="ui-grid-d">
				<div class="ui-block-a">
					<a data-rel="back"></a>
					<a rel='external' href="<?php echo $this->_tpl_vars['app_root']; ?>
books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
				</div>
				<div class="ui-block-b">
					<!--<fieldset data-role="controlgroup" data-type="horizontal" class="char_toggle">
                        <input type="radio" name="simp_trad_toggle" data-mini="true" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?>checked="checked"<?php endif; ?> id="simp_trad_toggle_s_<?php echo $this->_tpl_vars['card']->id; ?>
" value="simplified" />
                        <label for="simp_trad_toggle_s_<?php echo $this->_tpl_vars['card']->id; ?>
" class="simplified">s</label>
                        <input type="radio" name="simp_trad_toggle" data-mini="true" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?>checked="checked"<?php endif; ?> id="simp_trad_toggle_t_<?php echo $this->_tpl_vars['card']->id; ?>
" value="traditional" />
                        <label for="simp_trad_toggle_t_<?php echo $this->_tpl_vars['card']->id; ?>
" class="traditional">t</label>
           			</fieldset>-->
				</div><!-- end of ui-block-b -->
				<div class="ui-block-c">
					<fieldset data-role="controlgroup" data-type="horizontal"  class="word_toggle">
						
						<input type="checkbox" name="pinyin_toggle" id="pinyin_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="view_toggle" value="pin"/>
                        <label for="pinyin_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="pinyin">p</label>
                        
                        <input type="checkbox" name="english_toggle" id="english_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="view_toggle" value="eng"/>
                        <label for="english_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="english">e</label>
                        
                        <input type="checkbox" name="character_toggle" id="character_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="view_toggle" value="chi"/>
                        <label for="character_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="character">c</label>
                        
                        <input type="checkbox" name="show_all_toggle" id="show_all_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="show_all" value="all"/>
                        <label for="show_all_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="show_all">a</label>
                    </fieldset>
				</div>
				<div class="ui-block-d">
    
                </div><!-- end of ui-block-d -->
                <div class="ui-block-e">
                	<fieldset data-role="controlgroup" class="play_buttons" data-type="horizontal">
						<?php if ($this->_tpl_vars['card']->audio_file_a && $this->_tpl_vars['card']->audio_file_b): ?>
					    <input type="radio" id="audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_choice" value="<?php echo $this->_tpl_vars['card']->audio_file_a; ?>
" class="audio_a" />
					    <label for="audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
">A</label>
					    <input type="radio" id="audio_b_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_choice" value="<?php echo $this->_tpl_vars['card']->audio_file_b; ?>
" class="audio_b" />
					    <label for="audio_b_<?php echo $this->_tpl_vars['card']->id; ?>
">B</label>
					    <input type="hidden" id="oga_audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_source" value="<?php echo $this->_tpl_vars['card']->oga_audio_file_a; ?>
" class ="audio_source_a" />
					    <input type="hidden" id="oga_audio_b_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_source" value="<?php echo $this->_tpl_vars['card']->oga_audio_file_b; ?>
" class ="audio_source_b" />
					    <?php elseif ($this->_tpl_vars['card']->audio_file_a): ?>
					    <input type="radio" id="audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_choice" value="<?php echo $this->_tpl_vars['card']->audio_file_a; ?>
" class="audio_a" />
					    <label for="audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
">A</label>
					    <input type="hidden" id="oga_audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_source" value="<?php echo $this->_tpl_vars['card']->oga_audio_file_a; ?>
" class="audio_source_a" />
					    <?php else: ?>
					    <input type="radio" id="no_audio_<?php echo $this->_tpl_vars['card']->id; ?>
" name="audio_choice" value="no_audio" class="no_audio" disabled="disabled"/>
					    <label for="no_audio_<?php echo $this->_tpl_vars['card']->id; ?>
">N/A</label>
					    <?php endif; ?>
					</fieldset>
                </div>
			</div><!-- end of ui-grid-d -->
			</div><!-- /header -->
			
			
			
			<div data-role="content" class="card_content">
				<div class="ui-grid-a card">
		            <div class="ui-block-a pin_eng">
		                <div class="ui-bar ui-bar-c pin_half" >
		                	<div class="word_wrapper">
		                		<span class="pinyin">
		                			<?php echo $this->_tpl_vars['card']->pinyin; ?>

		                		</span>
		                	</div>
		                	
		                </div>
		                <div class="ui-bar ui-bar-c eng_half">
		                	<div class="word_wrapper">
		                		<span class="english">
		                			<?php echo $this->_tpl_vars['card']->english; ?>

		                		</span>
		                	</div>
		                	
		                </div>
		            </div>
		            <div class="ui-block-b char">
		            	<div class="ui-bar ui-bar-c">
		            		<div class="character character_wrapper">
		            			<span class="trad <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> major_character<?php else: ?> minor_character<?php endif; ?>">
										<?php echo $this->_tpl_vars['card']->traditional; ?>

								</span>
								<span class="simp <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> major_character<?php else: ?> minor_character<?php endif; ?>">
										<?php echo $this->_tpl_vars['card']->simplified; ?>

								</span>
		            		</div>
			            	
		            	</div>
		            </div>
		  </div>
					
		      <?php if ($this->_tpl_vars['card']->audio_file_a && $this->_tpl_vars['card']->audio_file_b): ?>
	           <div class="jquery_jplayer_a" id="jquery_jplayer_audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
">
	               
	           </div>
	           
	           <div class="jquery_jplayer_b" id="jquery_jplayer_audio_b_<?php echo $this->_tpl_vars['card']->id; ?>
">
                   
               </div>
               <?php elseif ($this->_tpl_vars['card']->audio_file_a): ?>
               <div class="jquery_jplayer_a" id="jquery_jplayer_audio_a_<?php echo $this->_tpl_vars['card']->id; ?>
">
                   
               </div>
	           <?php endif; ?>
			</div> <!-- content -->
			
			<div data-role="footer" class="card_footer" data-position="fixed" data-fullscreen="true">
				<?php $this->assign('prev_index', $this->_tpl_vars['card_index']-1); ?>
				<?php $this->assign('prev', $this->_tpl_vars['lesson']->word_idents[$this->_tpl_vars['prev_index']]); ?>
				<div class="ui-grid-c">
					<div class="ui-block-a">
						<?php if ($this->_tpl_vars['prev_index'] > -1): ?>
								<a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
#card_<?php echo $this->_tpl_vars['prev']; ?>
" style="margin: 0px 0px;" class="prevCard" data-role="button" data-icon="arrow-l" data-inline="true" data-iconpos="notext">prev</a></li>
						<?php endif; ?>
					</div>
					<!--<div class="ui-block-b">
						<ul>
							<li class="name"><?php echo $this->_tpl_vars['book']->short_name; ?>
</li>
							<li class="lesson">&bull;<span class="lesson_name"><?php echo $this->_tpl_vars['lesson']->name; ?>
.<?php echo $this->_tpl_vars['sub']; ?>
</span></li>
							<li class="card">&bull;<span class="card_num"><?php echo $this->_tpl_vars['card_index']+1; ?>
</span> <?php echo count($this->_tpl_vars['lesson']->word_idents); ?>
</li>
						</ul>
					</div>-->
					
					<div class="ui-block-b">
					<?php $this->assign('next_index', $this->_tpl_vars['card_index']+1); ?>
					<?php $this->assign('next', $this->_tpl_vars['lesson']->word_idents[$this->_tpl_vars['next_index']]); ?>
						<a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
" data-role="button" data-icon="list"><span class="return">lesson</span></a>
					</div>
					<div class="ui-block-c">
						<a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
" data-role="button" data-icon="list"><span class="return">word</span></a>
					</div>
					<div class="ui-block-d">
						<?php if ($this->_tpl_vars['next_index'] < count($this->_tpl_vars['lesson']->word_idents)): ?>
							<a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
#card_<?php echo $this->_tpl_vars['next']; ?>
" style="float: right; margin: 0px 0px;" data-role="button" class="nextCard" data-icon="arrow-r" data-inline="true" data-iconpos="notext">next</a>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- /footer -->
		</div><!-- /page -->
		<?php $this->assign('card_index', $this->_tpl_vars['card_index']+1); ?>
		<?php endforeach; endif; unset($_from); ?>	
	<?php endforeach; endif; unset($_from); ?>
		<div data-role="dialog" id="dialog">
			<div data-role="header">
				<h1 class="dialog_title"></h1>
			</div>
			<div data-role="content" class="dialog_content">
				<div class="dialog_card">
					<div class="ui-grid-a">
							<div class="ui-block-a">
									<div class="ui-bar ui-bar-c">
										<div class="word_wrapper">
											<span class="pinyin"></span>
										</div>
									</div>
									<div class="ui-bar ui-bar-c">
										<div class="word_wrapper">
												<span class="english"></span>
										</div>
									</div>
								</div>
							<div class="ui-block-b">
								<div class="ui-bar ui-bar-c">
									<div class="character character_wrapper">
										<span class="char major_character"></span>
									</div>
								</div>
							</div>
						</div>
				</div>
				<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Ok</a>
			</div>
		</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>