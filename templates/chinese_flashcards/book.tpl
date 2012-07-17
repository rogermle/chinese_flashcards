{extends file="layout.tpl"}

{block name="page"}
<div data-role="page" class="lessonlist_page">

	<div data-role="header" class="ui-bar">
		<a href="{$app_root}books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
		<h1><a href="{$app_root}books">Books</a> :: {$book->short_name|capitalize}</h1>
	</div><!-- /header -->

	<div data-role="content">
		<ul data-role="listview" data-filter="false" data-theme="c">
			{foreach item=lesson from=$book->lessons}
			<li><a href="{$app_root}book/{$book->short_name}/lesson/{$lesson->name}" data-ajax="false">Lesson {$lesson->name}</a></li>
			{/foreach}
		</ul>

	</div> <!-- content -->
	<div data-role="footer">

	</div> <!-- footer -->


</div><!-- /page -->
{/block}

	
