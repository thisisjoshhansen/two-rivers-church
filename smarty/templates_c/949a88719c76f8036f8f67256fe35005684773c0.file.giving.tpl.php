<?php /* Smarty version Smarty-3.0.7, created on 2011-07-22 09:55:46
         compiled from "/var/trc/smarty/templates/giving.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466913884e29ab921ca8d3-49618043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '949a88719c76f8036f8f67256fe35005684773c0' => 
    array (
      0 => '/var/trc/smarty/templates/giving.tpl',
      1 => 1309448937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466913884e29ab921ca8d3-49618043',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<img src="images/header_images/Header_E.png" alt="image E" />
<div id="rowcontent">	
	<div  class="rowdiv">
		<span class="head">Giving</span>
		
		<span class="title">Why We Give</span>
		<textarea id="giving" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['giving']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
		<div id="givingEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('giving');" class="editBox">edit box</a></div>
		<?php }?>
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

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
