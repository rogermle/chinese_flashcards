//Utility Function for show/hide of card elements
function word_toggle(value)
{
	switch(value)
		{
			case 'pin-eng-chi':
				$.mobile.activePage.find('div.char').removeClass('full_width word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng').removeClass('full_width word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng div.pin_half').removeClass('word_toggle_hidden full_height');
				$.mobile.activePage.find('div.pin_eng div.eng_half').removeClass('word_toggle_hidden full_height');
				
				break;
			case 'pin-eng':
				$.mobile.activePage.find('div.pin_eng div.pin_half').removeClass('word_toggle_hidden full_height');
				$.mobile.activePage.find('div.pin_eng div.eng_half').removeClass('word_toggle_hidden full_height');
				$.mobile.activePage.find('div.pin_eng').addClass('full_width');
				$.mobile.activePage.find('div.char').addClass('word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng').addClass('full_width');
				break;
			case 'pin-chi':
				$.mobile.activePage.find('div.pin_eng div.pin_half').addClass('word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng div.pin_half').addClass('full_height').removeClass('full_width word_toggle_hidden');
				$.mobile.activePage.find('div.char').removeClass('full_width word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng').removeClass('full_width word_toggle_hidden');
				break;
			case 'eng-chi':
				$.mobile.activePage.find('div.pin_eng div.pin_half').addClass('word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng div.eng_half').addClass('full_height').removeClass('word_toggle_hidden');
				$.mobile.activePage.find('div.char').removeClass('full_width word_toggle_hidden');
				$.mobile.activePage.find('div.pin_eng').removeClass('full_width word_toggle_hidden');
				break;
			case 'pin':
				$.mobile.activePage.find('div.pin_eng div.pin_half').removeClass("word_toggle_hidden").addClass('full_height');
				$.mobile.activePage.find('div.pin_eng div.eng_half').addClass('word_toggle_hidden').removeClass('full_height');
				$.mobile.activePage.find('div.pin_eng').addClass('full_width').removeClass('word_toggle_hidden');
				$.mobile.activePage.find('div.char').addClass('word_toggle_hidden');
				break;
			case 'eng':
				$.mobile.activePage.find('div.pin_eng div.eng_half').removeClass("word_toggle_hidden").addClass('full_height');
				$.mobile.activePage.find('div.pin_eng div.pin_half').addClass('word_toggle_hidden').removeClass('full_height');
				$.mobile.activePage.find('div.pin_eng').addClass('full_width').removeClass('word_toggle_hidden');
				$.mobile.activePage.find('div.char').addClass('word_toggle_hidden');
				break;
			case 'chi':
				$.mobile.activePage.find('div.pin_eng').addClass('word_toggle_hidden').removeClass('full_width');
				$.mobile.activePage.find('div.char').removeClass('word_toggle_hidden').addClass('full_width');
				break;
			default:
				break;
		}
}

function next_page()
{
	var nextPage = $.mobile.activePage.find(".nextCard").attr("href");
		if (nextPage !== undefined)
		{
			$.mobile.changePage(nextPage);
		}
}

function previous_page()
{
	var prevPage = $.mobile.activePage.find(".prevCard").attr("href");
		if (prevPage !== undefined)
			$.mobile.changePage(prevPage);
}

$(document).on("pagebeforeshow", "#word_list.ui-page", function(e){
	var user_pref = $.cookie('user_pref');
	if( user_pref === undefined)
	{
		user_pref = 'simplified';
	}
	//Update the displayed characters for 
	switch(user_pref)
	{
		case 'traditional':
			$.mobile.activePage.find("ul.wordlist span.char_trad").show();
			$.mobile.activePage.find("ul.wordlist span.char_simp").hide();
			break;
		case 'simplified':
		default:
			$.mobile.activePage.find("ul.wordlist span.char_simp").show();
			$.mobile.activePage.find("ul.wordlist span.char_trad").hide();
			break;
	}
	
	$.mobile.activePage.find('fieldset.char_toggle input[type="radio"]').each(function(){
		if( user_pref === $(this).val())
		{
			$(this).prop("checked", true);
		}
		else
		{
			$(this).prop("checked", false);
		}
		$(this).checkboxradio("refresh");
	});
});


$(document).on("pagebeforeshow", "div.card_page", function(e){
		var user_pref = $.cookie('user_pref');

		if( user_pref !== undefined)
		{
			//Updates the char_toggle 
			$.mobile.activePage.find('fieldset.char_toggle input[type="radio"]').each(function()
			{
				if( user_pref === $(this).val())
				{
					$(this).prop("checked", true);
				}
				else
				{
					$(this).prop("checked", false);
				}
				$(this).checkboxradio("refresh");
			});
			
			//Character Emphasis
			switch(user_pref)
			{
				case 'traditional':
					$.mobile.activePage.find("div.card span.trad").removeClass('minor_character').addClass('major_character');
					$.mobile.activePage.find("div.card span.simp").removeClass('major_character').addClass('minor_character');
					break;
				case 'simplified':
				default:
					$.mobile.activePage.find("div.card span.simp").removeClass('minor_character').addClass('major_character');
					$.mobile.activePage.find("div.card span.trad").removeClass('major_character').addClass('minor_character');
					break;
			}
		}
		else
		{
			//Default to simplified if no cookie set
			$.mobile.activePage.find("div.card div.simp").removeClass('minor_character').addClass('major_character');
			$.mobile.activePage.find("div.card div.trad").removeClass('major_character').addClass('minor_character');
		}
		
		//Read the checkbox cookie and update the UI for word_toggle
		var card_pref = $.cookie("card_pref");
		if( card_pref !== undefined)
		{
			var card_pref_array = card_pref.split('-');
			$.mobile.activePage.find('fieldset.word_toggle div.ui-checkbox:not(:last-child)').each(function(){
				if( card_pref_array.indexOf($(this).children('input[type="checkbox"]').val()) !== -1)
				{
					var checkbox = $(this).children('input[type="checkbox"]');
					$(checkbox).prop("checked", true);
					if( card_pref_array.length === 1)
					{//Disables if only one element exists
						$(checkbox).checkboxradio('disable');
						$(checkbox).parent('.ui-checkbox').addClass('unclickable');
					}
					//Handles Styling of Checkboxes
					$(this).children('label.ui-btn')
					.attr('data-icon', 'checkbox-on')
					.attr('data-wrapperels', 'span')
					.addClass('ui-btn-icon-left')
					.addClass('ui-checkbox-on');
					$(this).find('span.ui-btn-inner').append('<span class="ui-icon ui-icon-checkbox-on"></span>');
				}
				else
				{
					//Add checkboxs to UI and updates their display
					$(this).children('input[type="checkbox"]').prop("checked", false);
					//Handles Styling of Checkboxes
					$(this).children('label.ui-btn')
					.attr('data-icon', 'checkbox-on')
					.attr('data-wrapperels', 'span')
					.addClass('ui-btn-icon-left')
					.addClass('ui-checkbox-off');
					$(this).find('span.ui-btn-inner').append('<span class="ui-icon ui-icon-checkbox-off"></span>');
				}
				$(this).children('input[type="checkbox"]').checkboxradio('refresh');
			});
			//Update the view to match the toggle/cookie
			word_toggle(card_pref);
		}
		
		//Setup Audio elements for playback
		$.mobile.activePage.find('fieldset.play_buttons input[type="radio"]').each(function(){
			var prefix = "#jquery_jplayer_";
			var baseURL = $('base').attr('href');
			var target_player = prefix + this.id;
			var media_file = this.value;
			var oga_prefix = "#oga_";
			var oga_file = $( oga_prefix + this.id ).val();
			$( target_player ).jPlayer({
				swfPath: baseURL +"www/js",
				supplied: "mp3, oga",
				solution: "html,flash",
				wmode: "window",
				//preload: "metadata",
				ready: function () 
				{
					$( this ).jPlayer("setMedia", 
					{
						mp3: media_file,
						oga: oga_file
					}).jPlayer("load");
				}
				
			});
		});
	});
	/*
	 * Navigation controls
	 * Swipe Listeners
	 * */
	$(document).on("swipeleft","div.card_page", function(e){
		next_page();
	});
	
	$(document).on("swiperight","div.card_page", function(e){
		previous_page();
	});
	/*
	 * Keyboard Listeners
	 */
	$(document).on("keyup","div.card_page", function(e){
		if(e.keyCode == 37)
		{
			previous_page();	
		}
	});
	
	$(document).on("keyup","div.card_page", function(e){
		if(e.keyCode == 39)
		{
			next_page();	
		}
	});
	
	$(document).on('change', 'fieldset.word_toggle input[type="checkbox"].view_toggle', function(e){
		var word_toggle_array = [];
		var num_checked = 0;
		var checked_element = null;
		$.mobile.activePage.find('fieldset.word_toggle input[type="checkbox"].view_toggle').each(function(){
			//Cookie values are based on the value of the checkboxes
			//Separated by a hyphen
			
			if( $(this).prop("checked") )
			{
				word_toggle_array.push($(this).val());
				num_checked++;
				checked_element = this;
			}
		});
		if( num_checked < 2)
		{//Disable logic
			$(checked_element).parent('.ui-checkbox').addClass('unclickable');
			$(checked_element).checkboxradio('disable');
		}
		else
		{//Enable logic
			$(checked_element).parent('.ui-checkbox').removeClass('unclickable').siblings('.ui-checkbox').removeClass('unclickable');
			$(checked_element).checkboxradio('enable');
			$(checked_element).parent('.ui-checkbox').siblings(".ui-checkbox").find('input[type="checkbox"]').checkboxradio('enable');
		}
		var card_pref = word_toggle_array.join('-');
		$.cookie('card_pref', card_pref, {expires: 14, path: '/'});
		word_toggle(card_pref);
	});
	
	//Add event listener for changing word_toggle preferences
	$(document).on('change', 'fieldset.char_toggle', function(){
		var char_toggle_array = [];
		$.mobile.activePage.find('fieldset.char_toggle input[type="radio"]').each(function(){
			//Cookie values are based on the value of the radioboxes
			//Separated by a hyphen
			if( $(this).prop("checked") )
			{
				var char_choice = $(this).val();
				char_toggle_array.push($(this).val());
				if($.mobile.activePage.attr('class').indexOf('card_page') !== -1)//Detect if this is a card page by class name
				{//Card page
					switch(char_choice)
					{
						case 'traditional':
							$.mobile.activePage.find("div.card span.trad").removeClass('minor_character').addClass('major_character');
							$.mobile.activePage.find("div.card span.simp").removeClass('major_character').addClass('minor_character');
							break;
						case 'simplified':
							$.mobile.activePage.find("div.card span.simp").removeClass('minor_character').addClass('major_character');
							$.mobile.activePage.find("div.card span.trad").removeClass('major_character').addClass('minor_character');
							break;
					}
				}
				else
				{//wordlist page 
					switch(char_choice)
					{
						case 'traditional':
							$.mobile.activePage.find("ul.wordlist span.char_trad").show();
							$.mobile.activePage.find("ul.wordlist span.char_simp").hide();
							break;
						case 'simplified':
						default:
							$.mobile.activePage.find("ul.wordlist span.char_simp").show();
							$.mobile.activePage.find("ul.wordlist span.char_trad").hide();
							break;
					}
				}
				
			}
				
		});
		$.cookie('user_pref', char_toggle_array, {expires: 14, path: '/'});
	});
	
	$(document).on('change', 'fieldset.play_buttons input[type="radio"]', function(){
		/*
		 * Using Modernizr 2.5.3 to detect prescence of compatability with HTML5 Audio component
		 * Uses JPlayer as a fallback which has Flash as JPlayer's Fallback
		 */
	    var audioElement = document.createElement('audio');
	    if( Modernizr.audio.mp3 != "")
	    {
	    		audioElement.src = this.value;
	    		audioElement.play();
	    }
	    else if(Modernizr.audio.ogg)
	    {
	    	var prefix = "#oga_";
	    	var target = prefix + this.id;
	    	audioElement.src = $(target).attr('value');
	    	audioElement.play();
	    }
	    else
	    {
	    	var prefix = "#jquery_jplayer_";
			var target_player = prefix + this.id;
			
			$( target_player ).jPlayer("pauseOthers");
			$( target_player ).jPlayer("play");
			
	    }
	    //Set the Button(s) back to normal
		$(this).prop('checked', false);
		$(this).checkboxradio('refresh');
	});
	/*
	 * Populate the dialog box using Javascript
	 * This clones the data on the page and puts it in the dialog box. All styling will match the current CSS
	 */
	$(document).on('change', 'fieldset.word_toggle input[type="checkbox"].show_all', function(){
		//Programatically open Dialog box
		var pinyin = $.mobile.activePage.find('div.card_content span.pinyin').html();
		var english = $.mobile.activePage.find('div.card_content span.english').html();
		var character = $.mobile.activePage.find('div.card_content span.major_character').html();
		//Populate dialog with content
		$("#dialog span.pinyin").text( pinyin );
		$("#dialog span.english").text( english );
		$("#dialog span.char").text( character );
		//Change the button back to "off" state
		$(this).prop('checked', false);
		$(this).checkboxradio('refresh');
		
		$.mobile.changePage("#dialog", {role: 'dialog', transition: 'pop'});
	});

$(document).bind("mobileinit", function(){
	$.mobile.loadingMessage = 'Initializing';
	$.mobile.defaultPageTranistion = 'none';
	$.mobile.defaultDialogTranistion = 'none';
	$.mobile.orientationChangeEnabled = false;
	$.mobile.ajaxEnabled = true;
	$.mobile.useFastClick = true;
	$.mobile.loadingMessage = "Please Wait...";
});








