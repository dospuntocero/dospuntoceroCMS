<div id="VCard">
	<% control SiteConfig %>
		<address id="about" class="vcard">
			<div class="primary">
				<strong><a class="fn org url" href="$BaseHREF">$Title</a></strong>
				<span class="role">$Siteconfig.Tagline</span>
			</div><!-- /.primary -->
			<div class="bio">$SiteDescription</div>

			<div class="adr">
				<strong><span class="type"><% _t('VCard.WORK','Work') %></span></strong>:
				<% if StreetAddress %>
					<div class="street-address">$StreetAddress</div>		
				<% end_if %>
				<% if Locality %>
				<span class="locality">$Locality</span>,  		
				<% end_if %>
				<% if Region %>
				<abbr class="region" title="$Region">$Region</abbr>&nbsp;&nbsp;		
				<% end_if %>
				<% if PostalCode %>
				<br /><span class="postal-code">$PostalCode</span>		
				<% end_if %>
				<% if CountryName %>
				<div class="country-name">$CountryName</div>		
				<% end_if %>
			</div>
			<div class="comm">
				<% if PhoneWork %>
					<div class="tel">
						<strong><span class="type"><% _t('VCard.PHONEWORK','Work Phone') %></span></strong>: $PhoneWork
					</div>		
				<% end_if %>
				<% if Cellphone %>
					<div class="tel">
						<strong><span class="type"><% _t('VCard.CELLPHONE','Cellphone') %></span></strong>: $Cellphone
					</div>		
				<% end_if %>
				<% if Email %>
					<div><strong><% _t('VCard.EMAIL','Email') %></strong>:
						<span class="email">$Email</span>
					</div>
				<% end_if %>
			</div>
		</address>
	<% end_control %>
</div>