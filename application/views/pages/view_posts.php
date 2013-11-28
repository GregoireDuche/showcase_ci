<!-- Listing posts from a category -->
<div class="bx-viewport">
	<ul>
		{posts}
			<li class="portfolio" style="float: left; list-style: none outside none; position: relative; width: 960px;">
				<article>
					<h1>{title}</h1>
					<p><a href="{link}" class="lienExt">Visit the website</a></p>
					{description}
				</article>
			</li>
		{/posts}
	</ul>
</div>