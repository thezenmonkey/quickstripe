<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">
			$Content
			<% if $TeamMembers %>
				<ul>
					<% loop $TeamMembers %>
						<li>
							$Headshot.SetWidth(150)
							<h4>$PersonalTitle $Title $Credentials<br>
								<small>$JobTitle - $Role</small>
							</h4>
							$Bio
							<dl>
								<dt><strong>Email:</strong></dt>
									<dd>$Email</dd>
								<dt><strong>Social:</strong></dt>
									<dd><a href="http://twitter.com/{$Twitter}">@{$Twitter}</a></dd>
									<dd><a href="$Facebook">Facebook</a></dd>
									<dd><a href="$GooglePlus">Google+</a></dd>
							</dl>
						</li>
					<% end_loop %>
				</ul>
			<% end_if %>
		</div>
	</article>
		$Form
		$PageComments
</div>