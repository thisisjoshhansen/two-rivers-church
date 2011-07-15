{include file='header.tpl'}

<img src="images/header_images/Header_C.png" alt="image C" />
<div id="colcontent">
	<div class="twoCol" id="col1">
		<span class="head">Locations</span>
		{foreach $locations as $location}
			{if $location.city && $location.state && $location.zip}
			<span class="title">{$location.name}</span>
			<span class="summary" style="white-space:nowrap">
				{$location.street}<br />
				{$location.city}, {$location.state} {$location.zip}
			</span>
			<br />				
			{/if}
		{/foreach}
	</div>

	<div class="twoColLast" id="col2">
		<span class="head">Services</span>
		{foreach $locations as $location}
		{if $location.hasService}
			<span class="title">{$location.name}</span>
			{foreach $services as $service}
				{if $service.locid eq $location.ID}
					<span class="summary">{$service.time}</span>
					<br />
				{/if}
			{/foreach}
		{/if}
		{/foreach}
	</div>
</div>

{include file='footer.tpl'}
