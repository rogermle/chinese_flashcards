{extends file="layout.tpl"}

{block name="page"}
<div data-role="page" class="books_page" data-theme="a">

	<div data-role="content" class="content">
		<div id="theBooks">
			<ul>
				{foreach item=book from=$books}
					<li><a href="book/{$book->short_name}">{$book->short_name|upper}</a></li>
				{/foreach}
			</ul>
		</div><!-- #theBooks -->
		<div id="logo">
			<a href="instructions"></a>
		</div>
		<div id="theInstructions">
			<a href="instructions">Instructions</a>
		</div>
		<div id="theLinks">
			<ul>
				<li><a href="http://www.utexas.edu" rel="external" target="_blank">UT</a></li>
				<li><a href="http://www.utexas.edu/cola/" rel="external" target="_blank">COLA</a></li>
				<li><a href="http://www.utexas.edu/cola/laits/" rel="external" target="_blank">LAITS</a></li>
				<li><a href="about">ABOUT</a></li>
				<li><a href="http://coerll.utexas.edu/coerll/" rel="external" target="_blank">COERLL</a></li>
			</ul>
		</div>
		
	</div> <!-- content -->
</div><!-- /page -->
{/block}
