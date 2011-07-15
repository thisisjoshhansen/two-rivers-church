{include file='header.tpl'}

<img src="images/header_images/Header_A.png" alt="image A" />

<div id="colcontent">
	<div class="twoCol" id="col1">
		<span class="head">Two Rivers Church</span>
		
		<span class="title"><a href="index.php?page=whoweare&sub=doctrine">What We Believe</a></span>
		<textarea id="docstatement" class="consum" readonly="true">{$info.docstatement.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="docstatementEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('docstatement');" class="editBox">edit box</a></div>
		{/if}

		<span class="title"><a href="index.php?page=whoweare&sub=corevalues">Core Values</a></span>
		<textarea id="corevalues" class="consum" readonly="true">{$info.corevalues.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="corevaluesEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('corevalues');" class="editBox">edit box</a></div>
		{/if}
	</div>
	
	<div class="twoColLast" id="col2">
		<span class="head">Join Us</span>

		<span class="title"><a href="index.php?page=locationservices">Locations & Services</a></span>
		<textarea id="locsservs" class="consum" readonly="true">{$info.locsservs.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="locsservsEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('locsservs');" class="editBox">edit box</a></div>
		{/if}

		<span class="title"><a href="index.php?page=newsevents">News & Events</a></span>
		<textarea id="newsevents" class="consum" readonly="true">{$info.newsevents.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="newseventsEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('newsevents');" class="editBox">edit box</a></div>
		{/if}
	</div>
</div>

{include file='footer.tpl'}
