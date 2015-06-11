<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">
			$Content
			<address>
				<span>$BusinessName</span><br>
				<span>$StreetAddress</span><br>
				<span>$City</span>, <span>$Province</span>, <span>$PostalCode</span><br>
				<% if $PhoneNumber %>Tel: <span>$PhoneNubmer</span><br><% end_if %>
				<% if $FaxNumber %>Fax: <span>$FaxNumber</span><br><% end_if %>
				<% if $MainEmail %>Email: <span>$MainEmail</span><% end_if %>
			</address>
			<p><% if $Twitter %><a class="qs-twitter" href="http://twitter.com/{$Twitter}">Twitter</a> <% end_if %>
			<% if $FacebookURL %><a class="qs-facebook" href="$FacebookURL">Facebook</a> <% end_if %>
			<% if $GooglePlusURL %><a class="qs-google" href="$GooglePlusURL">Google +</a> <% end_if %>
			<% if $LinkedInURL %><a class="qs-linkedin" href="$LinkedInURL">LinkedIn</a> <% end_if %>
			<% if $PinterestURL %><a class="qs-pinterest" href="$PinterestURL">Pinterest</a> <% end_if %>
			<% if $InstagramURL %><a class="qs-instagram" href="$InstagramURL">Instagram</a> <% end_if %>
			<% if $YouTubeURL %><a class="qs-youtube" href="$YouTubeURL">YouTube</a> <% end_if %>
			<% if $TumblrURL %><a class="qs-tumblr" href="$TumblrURL">Tumblr</a> <% end_if %>
			</p>
			$SimpleContactForm
		</div>
	</article>
		$Form
		$PageComments
</div>