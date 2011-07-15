{include file='header.tpl'}

<img src="images/header_images/Header_E.png" alt="image E" />
<div id="rowcontent">	
	<div  class="rowdiv">
		<span class="head">Giving</span>
		
		<span class="title">Why We Give</span>
		<textarea id="giving" class="consum" readonly="true">{$info.giving.text}</textarea>
		{if $sessionType eq 'admin'}
		<div id="givingEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('giving');" class="editBox">edit box</a></div>
		{/if}
		<script type="text/javascript">fitToContent('giving', 500);</script>

		<br /><br />

		<center>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="84PR5ZNLSY34W">
				<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>


			<span class="summary">Thank you for your partnership in the gospel!</span>
			<br />
			<p style="font-size:.7em;">As a federal and state licensed non-profit, we accept donations and issue tax-deductible receipts. You may give electronically, by mail, or in person at our service.</p>
		</center>
	</div>
</div>

{include file='footer.tpl'}
