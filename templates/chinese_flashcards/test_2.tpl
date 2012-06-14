{extends file="layout.tpl"}

{block name="page"}
	<!-- Start of first page -->
	<div data-role="page" id="foo">

		<div data-role="header">
			<div class="ui-grid-b">
				<div class="ui-block-a">
					<a data-rel="back" href='#' class='ui-btn-left' data-icon='arrow-l'></a>
				</div>
				<div class="ui-block-b">
					<h3>
						<a id="book" href="{$app_root}book/{$lesson->book->short_name}" data-ajax="true">{$lesson->book->name}</a> :: Lesson {$lesson->name}</h3>
				</div>
				<div class="ui-block-c">
					<fieldset data-role="controlgroup" data-type="horizontal" class="charTypeSelect">
						<!--<select name="user_pref" id="wordlist-char-select" data-role="slider" data-theme="d" class="slider" data-mini="true">
							<option value="simplified" {if $user_pref == 'simplified'}selected="selected"{/if}>Simp</option>
							<option value="traditional" {if $user_pref == 'traditional'}selected="selected"{/if}>Trad</option>
						</select>-->
						<input type="radio" name="simp_trad_toggle" {if $user_pref == 'simplified'}checked="checked"{/if} id="simp_trad_toggle_s" value="simplified" />
						<label for="simp_trad_toggle_s" {if $user_pref == 'traditional'}checked="checked"{/if} >Simp</label>
						<input type="radio" name="simp_trad_toggle" id="simp_trad_toggle_t" value="traditional" />
						<label for="simp_trad_toggle_t">Trad</label>
					</fieldset>
				</div><!-- end of ui-block-c -->
			</div><!-- end of ui-grid-b -->
		</div><!-- /header -->

		<div data-role="content">	
			<ul data-role="listview" class="wordlist" data-filter="true">
				{foreach item=cardset key=sub from=$lesson->words}
					{if $sub == '1'}
					<li data-role="list-divider">Sublesson One</li>
					{/if}
					{if $sub == '2'}
					<li data-role="list-divider">Sublesson Two</li>
					{/if}
					{if $sub == 's'}
					<li data-role="list-divider">Supplementary Sublesson</li>
					{/if}
					{foreach from=$cardset item=card}
					<li><a href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}#card_{$card->word_index}.{$card->sub_lesson}">
						<span class="character char_trad" {if $user_pref == 'simplified'} style="display: none;" {/if}>{$card->traditional}</span>
						<span class="character char_simp" {if $user_pref == 'traditional'} style="display: none;" {/if}>{$card->simplified}</span>
						<span class="pinyin">{$card->pinyin}</span>
						<span class="english">{$card->english}</span></a></li>
					{/foreach}
				{/foreach}
			</ul>
		</div><!-- /content -->

		<!--<div data-role="footer">
			<h4>Page Footer</h4>
		</div><!-- /footer -->-->
	</div><!-- /page -->

	
	<!-- Start of second page -->
	{assign var=card_index value=0}
	{foreach item=cardset key=sub from=$lesson->words}
		{foreach item=card key=key from=$cardset}
	
		<div data-role="page" id="card_{$card->word_index}.{$card->sub_lesson}">
	
			<div data-role="header">
				<div class="ui-grid-c">
				<div class="ui-block-a">
					<a data-rel="back"></a>
					<a rel='external' href="{$app_root}books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
				</div>
				<div class="ui-block-b">
                    <fieldset data-role="controlgroup" data-type="horizontal"  class="word_toggle">
                        <input checked="checked" type="checkbox" name="pinyin_toggle" id="pinyin_toggle_{$card->id}" class="custom" value="pin"/>
                        <label for="pinyin_toggle_{$card->id}" class="pinyin">pinyin</label>
                        
                        <input checked="checked" type="checkbox" name="english_toggle" id="english_toggle_{$card->id}" class="custom" value="eng"/>
                        <label for="english_toggle_{$card->id}" class="english">english</label>
                        
                        <input checked="checked" type="checkbox" name="character_toggle" id="character_toggle_{$card->id}" class="custom" value="chi"/>
                        <label for="character_toggle_{$card->id}" class="character">character</label>
            
                        <a href="#" class="showAll" data-role="button">show all</a>
                    </fieldset>
				</div><!-- end of ui-block-b -->
				<div class="ui-block-c">
					<fieldset data-role="controlgroup">
						{if $card->audio_file_a and $card->audio_file_b}
					    <a href="#" data-role="button" class="audio_a">Play A</a>
					    <a href="#" data-role="button" class="audio_b">Play B</a>
					    {elseif $card->audio_file_a}
					    <a href="#" data-role="button" class="audio_a">Play A</a>
					    {else}
					    <a href="#" data-role="button" class="no_audio">No Audio</a>
					    {/if}
					</fieldset>
				</div>
				<div class="ui-block-d" style="display: inline;">
                    <fieldset data-role="controlgroup" data-type="horizontal" class="charTypeSelect">
                        <input type="radio" name="simp_trad_toggle" {if $user_pref == 'simplified'}checked="checked"{/if} id="simp_trad_toggle_s_{$card->id}" value="simplified" />
                        <label for="simp_trad_toggle_s_{$card->id}" {if $user_pref == 'traditional'}checked="checked"{/if} >Simp</label>
                        <input type="radio" name="simp_trad_toggle" id="simp_trad_toggle_t_{$card->id}" value="traditional" />
                        <label for="simp_trad_toggle_t_{$card->id}">Trad</label>
                    </fieldset>
                </div><!-- end of ui-block-c -->
			</div><!-- end of ui-grid-b -->
			</div><!-- /header -->
			
			
	
			<div data-role="content">
				
				<div id="view_pin-eng-chi_card_{$card->id}" class="card_content">
	
								<div class="left_half">
	
										<div class="top pinyin">
											<p>{$card->pinyin}</p>
										</div> <!-- top pinyin -->
	
										<div class="bottom english">
											<p>{$card->english}</p>
										</div> <!-- bottom english -->
	
								</div> <!-- leftHalf -->
	
								<div class="right_half character">
									<p class="char_trad" {if $user_pref == 'simplified'} style="display: none;" {/if} >{$card->traditional}</p>	
									<p class="char_simp" {if $user_pref == 'traditional'} style="display: none;" {/if} >{$card->simplified}</p>	
								</div> <!-- rightHalf character -->
	
					</div> <!-- #view_pin-eng-chi -->
	
	
					<div id="view_pin-eng_card_{$card->id}" style="display:none;">
	
	
								<div class="top pinyin">
									<p>{$card->pinyin}</p>
								</div> <!-- top pinyin -->
	
								<div class="bottom english">
									<p>{$card->english}</p>
								</div> <!-- bottom english -->
	
	
					</div> <!-- #view_pin-eng -->
	
	
					<div id="view_chi_card_{$card->id}" style="display:none;">
	
	
								<div class="full_card character">
									<p class="char_trad" {if $user_pref == 'simplified'} style="display: none;" {/if} >{$card->traditional}</p>
									<p class="char_simp" {if $user_pref == 'traditional'} style="display: none;" {/if} >{$card->simplified}</p>
								</div> <!-- full_card character -->
	
	
					</div> <!-- #view_chi -->
	
					<div id="view_pin_card_{$card->id}" style="display: none;">
	
	
								<div class="full_card pinyin">
									<p>{$card->pinyin}</p>
								</div> <!-- full_card pinyin -->
	
	
					</div> <!-- #view_pin -->
	
	
					<div id="view_eng_card_{$card->id}" style="display: none;">
	
	
								<div class="full_card english">
									<p>{$card->english}</p>
								</div> <!-- full_card english -->
	
	
					</div> <!-- #view_eng -->
	
	
					<div id="view_pin-chi_card_{$card->id}" style="display: none;">
	
								<div class="left_half pinyin">
	
									<p>{$card->pinyin}</p>
	
								</div> <!-- leftHalf pinyin-->
	
								<div class="right_half character">
	
									<p class="char_trad" {if $user_pref == 'simplified'} style="display: none;" {/if} >{$card->traditional}</p>	
									<p class="char_simp" {if $user_pref == 'traditional'} style="display: none;" {/if} >{$card->simplified}</p>
	
								</div> <!-- rightHalf character -->
	
					</div> <!-- #view_pin-chi -->
	
					<div id="view_eng-chi_card_{$card->id}" style="display: none;">
	
								<div class="left_half english">
	
									<p>{$card->english}</p>
	
								</div> <!-- leftHalf english-->
	
								<div class="right_half character">
	
									<p class="char_trad" {if $user_pref == 'simplified'} style="display: none;" {/if} >{$card->traditional}</p>	
									<p class="char_simp" {if $user_pref == 'traditional'} style="display: none;" {/if} >{$card->simplified}</p>
	
								</div> <!-- rightHalf character -->
	
					</div> <!-- #view_eng-chi -->
				
			      {if $card->audio_file_a and $card->audio_file_b}
		           <div class="jquery_jplayer_1_{$card->id}" id="jquery_jplayer_1_{$card->id}">
		               
		           </div>
		           
		           <div class="jquery_jplayer_2_{$card->id}" id="jquery_jplayer_2_{$card->id}">
	                   
	               </div>
	               {elseif $card->audio_file_a}
	               <div class="jquery_jplayer_1_{$card->id}" id="jquery_jplayer_1_{$card->id}">
	                   
	               </div>
		           {/if}
	
		</div> <!-- content -->
	
			<div data-role="footer" class="ui-grid-a">
				<div class="ui-block-a">
				{assign var=prev_index value=$card_index-1}
				{assign var=prev value=$lesson->word_idents.$prev_index}
				<!--<p>{$prev_index}{$prev}</p>-->
				{if $prev_index > -1}
					<a rel='external' href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}#card_{$prev}" class="prevCard" data-role="button" data-icon="arrow-l" data-inline="true" data-iconpos="notext">prev</a>
				{/if}
				</div>
				
				<div class="ui-block-b">
				{assign var=next_index value=$card_index+1}
				{assign var=next value=$lesson->word_idents.$next_index}
				{if $next_index < $lesson->word_idents|@count}
					<a href="{$app_root}book/{$lesson->book->short_name}/lesson/{$lesson->name}#card_{$next}" style="float: right; margin: 0px 0px;" data-role="button" class="nextCard" data-icon="arrow-r" data-inline="true" data-iconpos="notext">next</a>
				{/if}
				</div>
			</div><!-- /footer -->
		</div><!-- /page -->
		{assign var=card_index value=$card_index+1}
		{/foreach}	
	{/foreach}
{/block}
