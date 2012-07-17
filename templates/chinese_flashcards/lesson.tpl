{extends file="layout.tpl"}

{block name="page"}
	<div id="word_list" data-role="page" data-fullscreen="true" data-add-back-btn="true" data-back-btn-text="Previous">
			<div class="ui-bar ui-bar-a ui-header">
				<a href="{$app_root}books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
				<h1 class="ui-title">
					<a id="book" href="{$app_root}book/{$lesson->book->short_name}">{$lesson->book->short_name|capitalize}</a> : Lesson {$lesson->name}
				</h1>
				<div data-role="controlgroup" data-type="horizontal" data-mini="true" class="ui-btn-right">
					<fieldset class="char_toggle" >
						<input type="radio" name="simp_trad_toggle" {if $user_pref == 'simplified'}checked="checked"{/if} id="simp_trad_toggle_s" value="simplified" />
						<label for="simp_trad_toggle_s" class="simplified">s</label>
						<input type="radio" name="simp_trad_toggle" {if $user_pref == 'traditional'}checked="checked"{/if} id="simp_trad_toggle_t" value="traditional" />
						<label for="simp_trad_toggle_t" class="traditional">t</label>
					</fieldset>
				</div>
				<!--<div class="ui-grid-b">
					<div class="ui-block-a">
						<a data-rel="back" href='#' class='ui-btn-left' data-icon='arrow-l'></a>
					</div>
					<div class="ui-block-b">
					</div>
					<div class="ui-block-c">
						<div data-role="fieldcontain">
							<fieldset data-role="controlgroup" data-type="horizontal" class="char_toggle" data-mini="true">
								<input type="radio" name="simp_trad_toggle" {if $user_pref == 'simplified'}checked="checked"{/if} id="simp_trad_toggle_s" value="simplified" />
								<label for="simp_trad_toggle_s" class="simplified">s</label>
								<input type="radio" name="simp_trad_toggle" {if $user_pref == 'traditional'}checked="checked"{/if} id="simp_trad_toggle_t" value="traditional" />
								<label for="simp_trad_toggle_t" class="traditional">t</label>
							</fieldset>
						</div>
					</div>
				</div><!-- end of ui-grid-b -->
		</div><!-- /header -->

		<div data-role="content">	
			<ul data-role="listview" class="wordlist" data-filter="true" data-divider-theme="a" data-theme="c">
				
				{foreach item=cardset key=sub from=$lesson->words}
					
					{if $sub == '1'}
					<li data-role="list-divider">Sublesson One</li>
					{elseif $sub == '2'}
					<li data-role="list-divider">Sublesson Two</li>
					{elseif $sub == 's'}
					<li data-role="list-divider">Supplementary Sublesson</li>
					{else}
					{/if}
					{foreach from=$cardset item=card}
					<li>
						<a href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}#card_{$card->word_index}.{$card->sub_lesson}">
							<p class="character">
								<span class="char_trad" {if $user_pref == 'simplified'} style="display: none;" {/if}>{$card->traditional}</span>
								<span class="char_simp" {if $user_pref == 'traditional'} style="display: none;" {/if}>{$card->simplified}</span>
							</p>
							<p class="pinyin">{$card->pinyin}</p>
							<p class="english">{$card->english}</p>
						</a>
					</li>
					{/foreach}
				{/foreach}
			</ul>
		</div><!-- /content -->
	</div><!-- /page -->

	
	<!-- Start of second page -->
	{assign var=card_index value=0}
	{foreach item=cardset key=sub from=$lesson->words}
		{foreach item=card key=key from=$cardset}
	
		<div data-role="page" id="card_{$card->word_index}.{$card->sub_lesson}" class="card_page">
			<div data-role="header" class="card_header" data-position="fixed" data-fullscreen="true">
				<div class="ui-grid-d">
				<div class="ui-block-a">
					<a data-rel="back"></a>
					<a rel='external' href="{$app_root}books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
				</div>
				<div class="ui-block-b">
					<!--<fieldset data-role="controlgroup" data-type="horizontal" class="char_toggle">
                        <input type="radio" name="simp_trad_toggle" data-mini="true" {if $user_pref == 'simplified'}checked="checked"{/if} id="simp_trad_toggle_s_{$card->id}" value="simplified" />
                        <label for="simp_trad_toggle_s_{$card->id}" class="simplified">s</label>
                        <input type="radio" name="simp_trad_toggle" data-mini="true" {if $user_pref == 'traditional'}checked="checked"{/if} id="simp_trad_toggle_t_{$card->id}" value="traditional" />
                        <label for="simp_trad_toggle_t_{$card->id}" class="traditional">t</label>
           			</fieldset>-->
				</div><!-- end of ui-block-b -->
				<div class="ui-block-c">
					<fieldset data-role="controlgroup" data-type="horizontal"  class="word_toggle">
						
						<input type="checkbox" name="pinyin_toggle" id="pinyin_toggle_{$card->id}" class="view_toggle" value="pin"/>
                        <label for="pinyin_toggle_{$card->id}" class="pinyin">p</label>
                        
                        <input type="checkbox" name="english_toggle" id="english_toggle_{$card->id}" class="view_toggle" value="eng"/>
                        <label for="english_toggle_{$card->id}" class="english">e</label>
                        
                        <input type="checkbox" name="character_toggle" id="character_toggle_{$card->id}" class="view_toggle" value="chi"/>
                        <label for="character_toggle_{$card->id}" class="character">c</label>
                        
                        <input type="checkbox" name="show_all_toggle" id="show_all_toggle_{$card->id}" class="show_all" value="all"/>
                        <label for="show_all_toggle_{$card->id}" class="show_all">a</label>
                    </fieldset>
				</div>
				<div class="ui-block-d">
    
                </div><!-- end of ui-block-d -->
                <div class="ui-block-e">
                	<fieldset data-role="controlgroup" class="play_buttons" data-type="horizontal">
						{if $card->audio_file_a and $card->audio_file_b}
					    <input type="radio" id="audio_a_{$card->id}" name="audio_choice" value="{$card->audio_file_a}" class="audio_a" />
					    <label for="audio_a_{$card->id}">A</label>
					    <input type="radio" id="audio_b_{$card->id}" name="audio_choice" value="{$card->audio_file_b}" class="audio_b" />
					    <label for="audio_b_{$card->id}">B</label>
					    <input type="hidden" id="oga_audio_a_{$card->id}" name="audio_source" value="{$card->oga_audio_file_a}" class ="audio_source_a" />
					    <input type="hidden" id="oga_audio_b_{$card->id}" name="audio_source" value="{$card->oga_audio_file_b}" class ="audio_source_b" />
					    {elseif $card->audio_file_a}
					    <input type="radio" id="audio_a_{$card->id}" name="audio_choice" value="{$card->audio_file_a}" class="audio_a" />
					    <label for="audio_a_{$card->id}">A</label>
					    <input type="hidden" id="oga_audio_a_{$card->id}" name="audio_source" value="{$card->oga_audio_file_a}" class="audio_source_a" />
					    {else}
					    <input type="radio" id="no_audio_{$card->id}" name="audio_choice" value="no_audio" class="no_audio" disabled="disabled"/>
					    <label for="no_audio_{$card->id}">N/A</label>
					    {/if}
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
		                			{$card->pinyin}
		                		</span>
		                	</div>
		                	
		                </div>
		                <div class="ui-bar ui-bar-c eng_half">
		                	<div class="word_wrapper">
		                		<span class="english">
		                			{$card->english}
		                		</span>
		                	</div>
		                	
		                </div>
		            </div>
		            <div class="ui-block-b char">
		            	<div class="ui-bar ui-bar-c">
		            		<div class="character character_wrapper">
		            			<span class="trad {if $user_pref == 'traditional'} major_character{else} minor_character{/if}">
										{$card->traditional}
								</span>
								<span class="simp {if $user_pref == 'simplified'} major_character{else} minor_character{/if}">
										{$card->simplified}
								</span>
		            		</div>
			            	
		            	</div>
		            </div>
		  </div>
					
		      {if $card->audio_file_a and $card->audio_file_b}
	           <div class="jquery_jplayer_a" id="jquery_jplayer_audio_a_{$card->id}">
	               
	           </div>
	           
	           <div class="jquery_jplayer_b" id="jquery_jplayer_audio_b_{$card->id}">
                   
               </div>
               {elseif $card->audio_file_a}
               <div class="jquery_jplayer_a" id="jquery_jplayer_audio_a_{$card->id}">
                   
               </div>
	           {/if}
			</div> <!-- content -->
			
			<div data-role="footer" class="card_footer" data-position="fixed" data-fullscreen="true">
				{assign var=prev_index value=$card_index-1}
				{assign var=prev value=$lesson->word_idents.$prev_index}
				<div class="ui-grid-c">
					<div class="ui-block-a">
						{if $prev_index > -1}
								<a href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}#card_{$prev}" style="margin: 0px 0px;" class="prevCard" data-role="button" data-icon="arrow-l" data-inline="true" data-iconpos="notext">prev</a></li>
						{/if}
					</div>
					<!--<div class="ui-block-b">
						<ul>
							<li class="name">{$book->short_name}</li>
							<li class="lesson">&bull;<span class="lesson_name">{$lesson->name}.{$sub}</span></li>
							<li class="card">&bull;<span class="card_num">{$card_index+1}</span> {$lesson->word_idents|@count}</li>
						</ul>
					</div>-->
					
					<div class="ui-block-b">
					{assign var=next_index value=$card_index+1}
					{assign var=next value=$lesson->word_idents.$next_index}
						<a href="{$app_root}book/{$lesson->book->short_name}" data-role="button" data-icon="list"><span class="return">lesson</span></a>
					</div>
					<div class="ui-block-c">
						<a href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}" data-role="button" data-icon="list"><span class="return">word</span></a>
					</div>
					<div class="ui-block-d">
						{if $next_index < $lesson->word_idents|@count}
							<a href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}#card_{$next}" style="float: right; margin: 0px 0px;" data-role="button" class="nextCard" data-icon="arrow-r" data-inline="true" data-iconpos="notext">next</a>
						{/if}
					</div>
				</div>
			</div><!-- /footer -->
		</div><!-- /page -->
		{assign var=card_index value=$card_index+1}
		{/foreach}	
	{/foreach}
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
{/block}
