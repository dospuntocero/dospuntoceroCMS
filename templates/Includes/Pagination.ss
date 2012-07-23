<% if Paginate.MoreThanOnePage %>
	<div class="pagination">
	  <ul>

		<% if Paginate.PrevLink %>
		    <li class="prev disabled">
				<a href="$Paginate.PrevLink">&larr; <% _t('Paginate.PREVIOUS', 'Previous') %></a> 
			</li>			
		<% end_if %>
	
		<% control Paginate.Pages %>
			<% if CurrentBool %>
				<li class="active"><a href="#">$PageNum</a></li>
			<% else %>
	    		<li><a href="$Link">$PageNum</a></li>
			<% end_if %>
		<% end_control %>

		<% if Paginate.NextLink %>
			<li class="next">
				<a href="$Paginate.NextLink"><% _t('Paginate.NEXT', 'Next') %> &rarr;</a> 
			</li>
		<% end_if %>
	  </ul>
	</div>
<% end_if %>