<div id="CN_CompactNavigator">
	<div id="CN_NavigatorDetails">
		<p id="CN_PageType">
			<% if DisplayMode == Stage %>
				<span><% _t('CMSNavigator.DRAFTSITE','Draft Site') %></span>
			<% else_if DisplayMode == Live %>
				<span><% _t('CMSNavigator.PUBLISHEDSITE','Published Site') %></span>
			<% else_if DisplayMode == Archived %>
				<span><% _t('CMSNavigator.ARCHIVEDSITE','Archived Site') %><br/>$ArDate.Nice</span>
			<% end_if %>
		</p>
		
		<ul id="CN_SwitchView">
			<li><a href="$cmsLink/$ID" target="cms"><% _t('CMSNavigator.EDITTHISPAGE','Edit this Page') %></a></li>
			
			<% if DisplayMode == Stage %>
				<li><a href="$Link?stage=Live"><% _t('CMSNavigator.VIEWPUBLISHEDSITE','View Published Site') %></a></li>
			
			<% else_if DisplayMode == Live %>
				<li><a href="$Link?stage=Stage"><% _t('CMSNavigator.VIEWDRAFTSITE','View Draft Site') %></a></li>			

			<% else_if DisplayMode == Archived %>
				<li><a href="$Link?stage=Stage"><% _t('CMSNavigator.VIEWDRAFTSITE','View Draft Site') %></a></li>
				<li><a href="$Link?stage=Live"><% _t('CMSNavigator.VIEWPUBLISHEDSITE','View Published Site') %></a></li>
			<% end_if %>
			
			<li><a href="$Link?flush=all"><% _t('CMSNavigator.FLUSHCACHE','Flush cache') %></a></li>
			<li><a href="dev/build?returnURL=$BaseHref/$Link&amp;flush=all"><% _t('CMSNavigator.REBUILDSITE','Rebuild Site') %></a></li>		
			<li><a href="AddContent&amp;flush=all"><% _t('CMSNavigator.ADDCONTENTUSINGTXTFILE','Add Content using txt file') %></a></li>		
			<li><a href="typography"><% _t('CMSNavigator.TYPOGRAPHY','Typography') %></a></li>					
		</ul>
		
		<p id="CN_Credentials">
			<% if CurrentMember %><% control CurrentMember %>
				<% _t('CMSNavigator.LOGGEDINAS','Logged in as ') %>$FirstName - 
				<a href="Security/logout"><% _t('CMSNavigator.LOGOUT','Logout') %></a>
			<% end_control %><% else %>
				<% _t('CMSNavigator.NOTLOGGEDIN','Not logged in') %> - <a href="Security/login?returnURL=$BaseHref/$Link" id="LoginLink"><% _t('CMSNavigator.LOGIN','log in') %></a>
			<% end_if %>
		</p>
	</div>
</div>
