<?php /* Smarty version 2.6.20, created on 2012-04-24 12:45:43
         compiled from chinese_flashcards/test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'extends', 'chinese_flashcards/test.tpl', 1, false),array('block', 'block', 'chinese_flashcards/test.tpl', 3, false),array('modifier', 'count', 'chinese_flashcards/test.tpl', 245, false),)), $this); ?>
<?php echo _smarty_swisdk_extends(array('file' => "layout.tpl"), $this);?>


<?php $this->_tag_stack[] = array('block', array('name' => 'page')); $_block_repeat=true;_smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<!-- Start of first page -->
	<div data-role="page" id="foo">

		<div data-role="header">
			<div class="ui-grid-b">
				<div class="ui-block-a">
					<a data-rel="back" href='#' class='ui-btn-left' data-icon='arrow-l'></a>
				</div>
				<div class="ui-block-b">
					<h3>
						<a id="book" href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
" data-ajax="true"><?php echo $this->_tpl_vars['lesson']->book->name; ?>
</a> :: Lesson <?php echo $this->_tpl_vars['lesson']->name; ?>
</h3>
				</div>
				<div class="ui-block-c">
					<fieldset data-role="controlgroup" data-type="horizontal" class="charTypeSelect">
						<!--<select name="user_pref" id="wordlist-char-select" data-role="slider" data-theme="d" class="slider" data-mini="true">
							<option value="simplified" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?>selected="selected"<?php endif; ?>>Simp</option>
							<option value="traditional" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?>selected="selected"<?php endif; ?>>Trad</option>
						</select>-->
						<input type="radio" name="simp_trad_toggle" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?>checked="checked"<?php endif; ?> id="simp_trad_toggle_s" value="simplified" />
						<label for="simp_trad_toggle_s" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?>checked="checked"<?php endif; ?> >Simp</label>
						<input type="radio" name="simp_trad_toggle" id="simp_trad_toggle_t" value="traditional" />
						<label for="simp_trad_toggle_t">Trad</label>
					</fieldset>
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
					<?php endif; ?>
					<?php if ($this->_tpl_vars['sub'] == '2'): ?>
					<li data-role="list-divider">Sublesson Two</li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['sub'] == 's'): ?>
					<li data-role="list-divider">Supplementary Sublesson</li>
					<?php endif; ?>
					<?php $_from = $this->_tpl_vars['cardset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['card']):
?>
					<li><a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
#card_<?php echo $this->_tpl_vars['card']->word_index; ?>
.<?php echo $this->_tpl_vars['card']->sub_lesson; ?>
">
						<span class="character char_trad" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> style="display: none;" <?php endif; ?>><?php echo $this->_tpl_vars['card']->traditional; ?>
</span>
						<span class="character char_simp" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> style="display: none;" <?php endif; ?>><?php echo $this->_tpl_vars['card']->simplified; ?>
</span>
						<span class="pinyin"><?php echo $this->_tpl_vars['card']->pinyin; ?>
</span>
						<span class="english"><?php echo $this->_tpl_vars['card']->english; ?>
</span></a></li>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed">
			<h4>Page Footer</h4>
		</div><!-- /footer -->
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
">
	
			<div data-role="header">
				<div class="ui-grid-c">
				<div class="ui-block-a">
					<a data-rel="back"></a>
					<a rel='external' href="<?php echo $this->_tpl_vars['app_root']; ?>
books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
				</div>
				<div class="ui-block-b">
                    <fieldset data-role="controlgroup" data-type="horizontal"  class="word_toggle">
                        <input checked="checked" type="checkbox" name="pinyin_toggle" id="pinyin_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="custom" value="pin"/>
                        <label for="pinyin_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="pinyin">pinyin</label>
                        
                        <input checked="checked" type="checkbox" name="english_toggle" id="english_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="custom" value="eng"/>
                        <label for="english_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="english">english</label>
                        
                        <input checked="checked" type="checkbox" name="character_toggle" id="character_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="custom" value="chi"/>
                        <label for="character_toggle_<?php echo $this->_tpl_vars['card']->id; ?>
" class="character">character</label>
            
                        <a href="#" class="showAll" data-role="button">show all</a>
                    </fieldset>
				</div><!-- end of ui-block-b -->
				<div class="ui-block-c">
					<fieldset data-role="controlgroup">
						<?php if ($this->_tpl_vars['card']->audio_file_a && $this->_tpl_vars['card']->audio_file_b): ?>
					    <a href="#" data-role="button" class="audio_a">Play A</a>
					    <a href="#" data-role="button" class="audio_b">Play B</a>
					    <?php elseif ($this->_tpl_vars['card']->audio_file_a): ?>
					    <a href="#" data-role="button" class="audio_a">Play A</a>
					    <?php else: ?>
					    <a href="#" data-role="button" class="no_audio">No Audio</a>
					    <?php endif; ?>
					</fieldset>
				</div>
				<div class="ui-block-d" style="display: inline;">
                    <fieldset data-role="controlgroup" data-type="horizontal" class="charTypeSelect">
                        <input type="radio" name="simp_trad_toggle" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?>checked="checked"<?php endif; ?> id="simp_trad_toggle_s_<?php echo $this->_tpl_vars['card']->id; ?>
" value="simplified" />
                        <label for="simp_trad_toggle_s_<?php echo $this->_tpl_vars['card']->id; ?>
" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?>checked="checked"<?php endif; ?> >Simp</label>
                        <input type="radio" name="simp_trad_toggle" id="simp_trad_toggle_t_<?php echo $this->_tpl_vars['card']->id; ?>
" value="traditional" />
                        <label for="simp_trad_toggle_t_<?php echo $this->_tpl_vars['card']->id; ?>
">Trad</label>
                    </fieldset>
                </div><!-- end of ui-block-c -->
			</div><!-- end of ui-grid-b -->
			</div><!-- /header -->
	
			<div data-role="content" class="card_content">
				
				<div id="view_pin-eng-chi_card_<?php echo $this->_tpl_vars['card']->id; ?>
">
	
								<div class="leftHalf">
	
										<div class="top pinyin">
											<p><?php echo $this->_tpl_vars['card']->pinyin; ?>
</p>
										</div> <!-- top pinyin -->
	
										<div class="bottom english">
											<p><?php echo $this->_tpl_vars['card']->english; ?>
</p>
										</div> <!-- bottom english -->
	
								</div> <!-- leftHalf -->
	
								<div class="rightHalf character">
									<p class="char_trad" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->traditional; ?>
</p>	
									<p class="char_simp" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->simplified; ?>
</p>	
								</div> <!-- rightHalf character -->
	
					</div> <!-- #view_pin-eng-chi -->
	
	
					<div id="view_pin-eng_card_<?php echo $this->_tpl_vars['card']->id; ?>
" style="display:none;">
	
	
								<div class="top pinyin">
									<p><?php echo $this->_tpl_vars['card']->pinyin; ?>
</p>
								</div> <!-- top pinyin -->
	
								<div class="bottom english">
									<p><?php echo $this->_tpl_vars['card']->english; ?>
</p>
								</div> <!-- bottom english -->
	
	
					</div> <!-- #view_pin-eng -->
	
	
					<div id="view_chi_card_<?php echo $this->_tpl_vars['card']->id; ?>
" style="display:none;">
	
	
								<div class="fullCard character">
									<p class="char_trad" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->traditional; ?>
</p>
									<p class="char_simp" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->simplified; ?>
</p>
								</div> <!-- fullCard character -->
	
	
					</div> <!-- #view_chi -->
	
					<div id="view_pin_card_<?php echo $this->_tpl_vars['card']->id; ?>
" style="display: none;">
	
	
								<div class="fullCard pinyin">
									<p><?php echo $this->_tpl_vars['card']->pinyin; ?>
</p>
								</div> <!-- fullCard pinyin -->
	
	
					</div> <!-- #view_pin -->
	
	
					<div id="view_eng_card_<?php echo $this->_tpl_vars['card']->id; ?>
" style="display: none;">
	
	
								<div class="fullCard english">
									<p><?php echo $this->_tpl_vars['card']->english; ?>
</p>
								</div> <!-- fullCard english -->
	
	
					</div> <!-- #view_eng -->
	
	
					<div id="view_pin-chi_card_<?php echo $this->_tpl_vars['card']->id; ?>
" style="display: none;">
	
								<div class="leftHalf pinyin">
	
									<p><?php echo $this->_tpl_vars['card']->pinyin; ?>
</p>
	
								</div> <!-- leftHalf pinyin-->
	
								<div class="rightHalf character">
	
									<p class="char_trad" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->traditional; ?>
</p>	
									<p class="char_simp" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->simplified; ?>
</p>
	
								</div> <!-- rightHalf character -->
	
					</div> <!-- #view_pin-chi -->
	
					<div id="view_eng-chi_card_<?php echo $this->_tpl_vars['card']->id; ?>
" style="display: none;">
	
								<div class="leftHalf english">
	
									<p><?php echo $this->_tpl_vars['card']->english; ?>
</p>
	
								</div> <!-- leftHalf english-->
	
								<div class="rightHalf character">
	
									<p class="char_trad" <?php if ($this->_tpl_vars['user_pref'] == 'simplified'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->traditional; ?>
</p>	
									<p class="char_simp" <?php if ($this->_tpl_vars['user_pref'] == 'traditional'): ?> style="display: none;" <?php endif; ?> ><?php echo $this->_tpl_vars['card']->simplified; ?>
</p>
	
								</div> <!-- rightHalf character -->
	
					</div> <!-- #view_eng-chi -->
				
			      <?php if ($this->_tpl_vars['card']->audio_file_a && $this->_tpl_vars['card']->audio_file_b): ?>
		           <div class="jquery_jplayer_1_<?php echo $this->_tpl_vars['card']->id; ?>
" id="jquery_jplayer_1_<?php echo $this->_tpl_vars['card']->id; ?>
">
		               
		           </div>
		           
		           <div class="jquery_jplayer_2_<?php echo $this->_tpl_vars['card']->id; ?>
" id="jquery_jplayer_2_<?php echo $this->_tpl_vars['card']->id; ?>
">
	                   
	               </div>
	               <?php elseif ($this->_tpl_vars['card']->audio_file_a): ?>
	               <div class="jquery_jplayer_1_<?php echo $this->_tpl_vars['card']->id; ?>
" id="jquery_jplayer_1_<?php echo $this->_tpl_vars['card']->id; ?>
">
	                   
	               </div>
		           <?php endif; ?>
	
		</div> <!-- content -->
	
			<div data-role="footer" class="ui-grid-a">
				<div class="ui-block-a">
				<?php $this->assign('prev_index', $this->_tpl_vars['card_index']-1); ?>
				<?php $this->assign('prev', $this->_tpl_vars['lesson']->word_idents[$this->_tpl_vars['prev_index']]); ?>
				<?php if ($this->_tpl_vars['prev_index'] > -1): ?>
					
					<a rel='external' href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
#card_<?php echo $this->_tpl_vars['prev']; ?>
" class="prevCard" data-role="button" data-icon="arrow-l" data-inline="true" data-iconpos="notext">prev</a>
				<?php endif; ?>
				</div>
				
				<div class="ui-block-b">
				<?php $this->assign('next_index', $this->_tpl_vars['card_index']+1); ?>
				<?php $this->assign('next', $this->_tpl_vars['lesson']->word_idents[$this->_tpl_vars['next_index']]); ?>
				<?php if ($this->_tpl_vars['next_index'] < count($this->_tpl_vars['lesson']->word_idents)): ?>
					<a href="<?php echo $this->_tpl_vars['app_root']; ?>
book/<?php echo $this->_tpl_vars['lesson']->book->short_name; ?>
/lesson/<?php echo $this->_tpl_vars['lesson']->name; ?>
#card_<?php echo $this->_tpl_vars['next']; ?>
" data-role="button" class="ui-btn-right nextCard" data-icon="arrow-r" data-inline="true" data-iconpos="notext">next</a>
				<?php endif; ?>
				</div>
			</div><!-- /footer -->
		</div><!-- /page -->
		<?php $this->assign('card_index', $this->_tpl_vars['card_index']+1); ?>
		<?php endforeach; endif; unset($_from); ?>	
	<?php endforeach; endif; unset($_from); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo _smarty_swisdk_process_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>