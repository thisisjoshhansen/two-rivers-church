{include file="header.tpl"}

<img src="images/header_images/Header_B.png" alt="image B" />
<div id="rowcontent">
	<div class="rowdiv">
		<span class="head">Two Rivers</span>

		<span class="title">Vision</span>
		<textarea id="vision" class="consum" readonly="true">{$info.vision.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="visionEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('vision');" class="editBox">edit box</a></div>
		{/if}
		<br />

		<span class="title">Mission</span>
		<textarea id="mission" class="consum" readonly="true">{$info.mission.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="missionEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('mission')" class="editBox">edit box</a></div>
		{/if}
		<br />

		<span class="title">History</span>
		<textarea id="history" class="consum" readonly="true">{$info.history.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="historyEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('history');" class="editBox">edit box</a></div>
		{/if}
	</div>
</div>

<div id="colcontent">
	<div id="col1" class="twoCol">
		<span class="head">What We Believe</span>

		<span class="title"><a href="/?page=whoweare&sub=doctrine">Doctrinal Statement</a></span>
		<textarea id="docstatement" class="consum" readonly="true">{$info.docstatement.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="docstatementEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('docstatement');" class="editBox">edit box</a></div>
		{/if}

		<span class="title"><a href="/?page=whoweare&sub=corevalues">Core Values</a></span>
		<textarea id="corevalues" class="consum" readonly="true">{$info.corevalues.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="corevaluesEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('corevalues');" class="editBox">edit box</a></div>
		{/if}
	</div>

	<div id="col2" class="twoColLast">
		<span class="head">Community</span>
		
		<span class="title">Community Covenent</span>
		<textarea id="comcovenent" class="consum" readonly="true">{$info.comcovenent.text}</textarea>
		{if $sessionType == 'admin'}
		<div id="comcovenentEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('comcovenent');" class="editBox">edit box</a></div>
		{/if}	
		<br /><br />
		
		<span class="title"><a href="/?page=whoweare&sub=ministries">Ministries</a></span>
		<textarea id="ministries" class="consum" readonly="true">{$info.ministries.text}</textarea>
		{if $sessionType == 'admin'}
			<div id="ministriesEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('ministries');" class="editBox">edit box</a></div>
		{/if}

	</div>
</div>

{include file="footer.tpl"}
