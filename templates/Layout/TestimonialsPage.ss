<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">
			$Content saa
			<% if $Testimonials %>
				waa
				<ul>
					<% loop $Testimonials %>
						<li>
							<figure>
								<blockquote>
									<% if $Title %><h4>$Title</h4><% end_if %>
									$Content
								</blockquote>
								<figcaption>
									$Contributor
								</figcaption>
							</figure>
						</li>
					<% end_loop %>
				</ul>
			<% end_if %>
		</div>
	</article>
		$Form
		$PageComments
</div>