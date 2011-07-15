{include file='header.tpl'}

<div id="rowcontent">
	<div  class="rowdiv">
		<span class="head">Jesus Christ</span>
		<textarea id="jesus" class="contitle" readonly="true">{$info.jesus.text}</textarea>
		{if $sessionType eq 'admin'}
		<div id="jesusEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('jesus');" class="editBox">edit box</a></div>
		{/if}
	</div>
</div>
<script type="text/javascript">fitToContent('jesus', 500);</script>

<div id="rowcontent">
	<div class="rowdiv">
		<span class="head">Doctrinal Statement</span>
		{foreach from=$doctrine item=doc name=foo}
			<span class="title">{$smarty.foreach.foo.index + 1}.&nbsp;{$doc.title}</span>
			<span class="summary">{$doc.description}</span>
		{/foreach}
	</div>
</div>

{include file='footer.tpl'}
