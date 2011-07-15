
{include file="header.tpl"}

<div style="clear:both;height:20px;"></div>
<span class="head" style="width:100%;text-align:center;font-size:1.9em;">TRC Events</span>
<div style="clear:both;height:20px;"></div>

<div id="colcontent" style="width:205px;">
	<div id="latestnews">
		<span class="head" style="font-size:1.3em;margin-bottom:20px;">Upcomming Events</span>
		{foreach $events as $event}
			<span class="title" onclick="showEventDiv('{$event.ID}');" style="margin:0px 0px 12px 12px;cursor:pointer;white-space:nowrap">
				{$event.title}
			</span>
		{/foreach}
	</div>
</div>

<div style="margin-left:220px;">
	{foreach $events as $event}
		<div id="eid:{$event.ID}" {if $eid != $event.ID}style="display:none;"{/if}>
			<span class="title" style="font-size:1.5em;clear:none;">{$event.title}</span>
			<span class="date" style="font-size:.8em;clear:none;">{$event.date}</span>
			<span class="summary" style="clear:none;">{$event.description}</span>
		</div>
	{/foreach}
</div>

<div style="clear:both;height:20px;"></div>

{include file="footer.tpl"}
