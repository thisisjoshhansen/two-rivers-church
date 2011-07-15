{include file='header.tpl'}

<div id="rowcontent">
	<div class="rowdiv">
		<span class="head" style="margin-bottom:1em;font-size:1.7em;width:100%;text-align:center;">Core Values</span>
		{foreach from=$corevals item=coreval name=foo}
			<span class="title" style="margin-bottom:.2em;">{$smarty.foreach.foo.index + 1}.&nbsp;{$coreval.title}</span>
			<span class="summary" style="margin:0em 0em 1em .3em;">{$coreval.description}</span>
		{/foreach}
	</div>
</div>

{include file='footer.tpl'}
