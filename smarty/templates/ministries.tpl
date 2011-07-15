
{include file="header.tpl"}

<div style="clear:both;height:20px;"></div>
<span class="head" style="width:100%;text-align:center;font-size:1.9em;">TRC Ministries</span>
<div style="clear:both;height:20px;"></div>

<div id="colcontent" style="width:200px;">
	<div id="ministries">
		<span class="head" style="font-size:1.3em;margin-bottom:20px;">Ministries</span>
		{foreach $ministries as $ministry}
			<span class="title" onclick="showMinistryDiv('{$ministry.ID}');" style="margin:0px 0px 12px 12px;cursor:pointer;">{$ministry.title}</span>
		{/foreach}
	</div>
</div>

<div style="margin-left:220px;">
	{foreach $ministries as $ministry}
		<div id="mid:{$ministry.ID}" {if $mid != $ministry.ID}style="display:none;"{/if}>
			<span class="title" style="font-size:1.5em;clear:none;">{$ministry.title}</span>
			<span class="summary" style="clear:none;">{$ministry.description}</span>
		</div>
	{/foreach}
</div>

<div style="clear:both;height:20px;"></div>

{include file="footer.tpl"}
