{extends file="layout.tpl"}

{block name="page"}
<div data-role="page" class="books_page">

	<div data-role="content" class="content">

	
		<h1 id="splashLogo">Chinese Flashcards</h1>
		<div id="logo">
			
		</div>
		<div id="theBooks">

			<ul>
				{foreach item=book from=$books}
					<li><a href="book/{$book->short_name}">{$book->name}</a></li>
				{/foreach}
			</ul>

		</div><!-- #theBooks -->



	</div> <!-- content -->



</div><!-- /page -->
{/block}
