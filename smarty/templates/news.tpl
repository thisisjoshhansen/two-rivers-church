
{include file="header.tpl"}

<div style="clear:both;height:20px;"></div>
<span class="head" style="width:100%;text-align:center;font-size:1.9em;">TRC News</span>
<div style="clear:both;height:20px;"></div>

<div id="colcontent" style="width:200px;">
	<div id="latestnews">
		<span class="head" style="font-size:1.3em;margin-bottom:20px;">Latest News</span>
		{foreach $news as $n}
			<span class="title" onclick="showNewsDiv('{$n.ID}');" style="margin:0px 0px 12px 12px;cursor:pointer;white-space:nowrap">
				{$n.title}
			</span>
		{/foreach}
	</div>
</div>

<div style="margin-left:220px;">
	{foreach $news as $n}
		<div id="nid:{$n.ID}" {if $nid != $n.ID}style="display:none;"{/if}>
			<span class="title" style="font-size:1.5em;clear:none;">{$n.title}</span>
			<span class="date" style="font-size:.8em;clear:none;">{$n.postdate}</span>
			<span class="summary" style="clear:none;">{$n.news}</span>
		</div>
	{/foreach}
</div>

<div style="clear:both;height:20px;"></div>

{include file="footer.tpl"}
