{extends file="layout.tpl"}

{block name="page"}
<div data-role="page">

	<div data-role="header" class="ui-bar">
		<a href="{$app_root}books" data-role="button" data-icon="home" data-inline="true" data-iconpos="notext">Home</a>
		<h1>About</h1>
	</div><!-- /header -->

	<div data-role="content" role="main">
		<ul data-role="listview" data-theme="c" data-divider-theme="a">
			<li>
				<img src="{$app_root}www/images/logo-small.png" />
				<div>
					<h3>Chinese Flashcards</h3>
					<p>Art Director / STA Program Manager</p>
				</div>
				
			</li>
			<li>
				<img src="{$app_root}www/images/logo-small.png" />
				<div>
					<h3>Wen Hua Teng</h3>
					<p>Senior Lecturer</p>
				</div>
				
			</li>
			<li>
				<img src="{$app_root}www/images/logo-small.png" />
				<div>
					<h3>Nick Geiser</h3>
					<p>Creator/Brainchild behind Chinese Flashcards</p>
				</div>
			</li>
			<li data-role="list-divider" role="heading">
				LAITS Staff
			</li>
			<li>
				<h3>Michael Heidenreich</h3>
				<p>Audio Services Manager</p>
			</li>
			<li>
				<h3>Roger Le</h3>
				<p>Software Developer</p>
			</li>
			<li>
				<h3>Suloni Robertson</h3>
				<p>Art Director / STA Program Manager </p>
			</li>
			<li>
				<h3>Angie Calderon</h3>
				<p>STA</p>
			</li>
			<li>
				<h3>Peter Keane</h3>
				<p>Senior Software Developer / Analyst</p>
			</li>
			<li>
				<h3>Joseph TenBarge Jr</h3>
				<p>Director, Liberal Arts ITS/Assistant Dean</p>
			</li>
		</ul>
	</div> <!-- content -->

	<div data-role="footer">

	</div> <!-- footer -->


</div><!-- /page -->
{/block}

	
