{include file='header.tpl'}

<div id="rowcontent">
<br />
	<span class="head">Launch Team</span>
	
	<div class="rowdiv">
		<table><tr>
			<td width="1"><img src="images/profiles/Spud_Thumb.jpg" align="left"/></td>
			<td valign="top"><table>
				<tr><td><span class="title">Spud Duffey</span></td></tr>
				<tr><td>
					<textarea id="spudduffey" class="consum" style="float:left;" readonly="true">{$info.spudduffey.text}</textarea>
				</td></tr>
			</table></td>
		</tr></table>

		{if $sessionType eq 'admin'}
		<div id="spudduffeyEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('spudduffey');" class="editBox">edit box</a></div>
		{/if}
		<script type="text/javascript">fitToContent('spudduffey', 500);</script>
	</div>
	
	<div class="rowdiv">
		<table><tr>
			<td valign="top"><table>
				<tr><td><span class="title">Dave Muniz</span></td></tr>
				<tr><td><textarea id="davemuniz" class="consum" style="float:left;" readonly="true">{$info.davemuniz.text}</textarea></td></tr>
			</table></td>
			<td width="1"><img src="images/profiles/Dave_Thumb.jpg" style="float:right" /></td>
		</tr></table>

		{if $sessionType eq 'admin'}
		<div id="davemunizEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('davemuniz');" class="editBox">edit box</a></div>
		{/if}
		<script type="text/javascript">fitToContent('davemuniz', 500);</script>
	</div>
	
	<div class="rowdiv">
		<table><tr>
			<td width="1"><img src="images/profiles/Dayvid_Thumb.jpg" style="float:left" /></td>
			<td valign="top"><table>
				<tr><td><span class="title">Dayvid Sanchez</span></td></tr>
				<tr><td><textarea id="dayvidsanchez" class="consum" style="float:left;" readonly="true">{$info.dayvidsanchez.text}</textarea></td></tr>
			</table></td>
		</tr></table>

		{if $sessionType eq 'admin'}
		<div id="dayvidsanchezEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('dayvidsanchez');" class="editBox">edit box</a></div>
		{/if}
		<script type="text/javascript">fitToContent('dayvidsanchez', 500);</script>
	</div>
</div>

{include file='footer.tpl'}
