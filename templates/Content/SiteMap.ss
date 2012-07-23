<div class="content typography">
<h2><span>$Title</span></h2>
<div class="sitemap">
	<ul id="primaryNav" class="col$NumberOfPagesAtRootLevel">
		<% control CalculatedSiteMap %>
			<li<% if URLSegment = home %> id = "home"<% end_if %>><a href="$Link" title="$Title">$MenuTitle</a>
				<% if Children %>
					<ul>
						<% control Children %>
							<li><a href="$Link" title="$MenuTitle">$MenuTitle</a>
								<% if Children %>
								<ul>
									<% control Children %>
										<li><a href="$Link" title="$MenuTitle">$MenuTitle</a>
											<% if Children %>
												<ul>
													<% control Children %>
														<li><a href="$Link" title="$MenuTitle">$MenuTitle</a></li>
													<% end_control %>														
												</ul>
											<% end_if %>												
										</li>
									<% end_control %>
								</ul>									
								<% end_if %>
							</li>
						<% end_control %>						
					</ul>
				<% end_if %>
			</li>		
		<% end_control %>
	</ul>
</div>
</div>             