<?php /* Smarty version Smarty-3.0.7, created on 2011-06-22 15:29:37
         compiled from "/var/trc/smarty/templates/leadership.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19980444744e026cd160c996-53934970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8468b60e283cc77a6228cd44ba738d26356f864' => 
    array (
      0 => '/var/trc/smarty/templates/leadership.tpl',
      1 => 1308776694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19980444744e026cd160c996-53934970',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="rowcontent">
<br />
	<span class="head">Launch Team</span>
	
	<div class="rowdiv">
		<table><tr>
			<td width="1"><img src="images/profiles/Spud_Thumb.jpg" align="left"/></td>
			<td valign="top"><table>
				<tr><td><span class="title">Spud Duffey</span></td></tr>
				<tr><td>
					<textarea id="spudduffey" class="consum" style="float:left;" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['spudduffey']['text'];?>
</textarea>
				</td></tr>
			</table></td>
		</tr></table>

		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
		<div id="spudduffeyEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('spudduffey');" class="editBox">edit box</a></div>
		<?php }?>
		<script type="text/javascript">fitToContent('spudduffey', 500);</script>
	</div>
	
	<div class="rowdiv">
		<table><tr>
			<td valign="top"><table>
				<tr><td><span class="title">Dave Muniz</span></td></tr>
				<tr><td><textarea id="davemuniz" class="consum" style="float:left;" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['davemuniz']['text'];?>
</textarea></td></tr>
			</table></td>
			<td width="1"><img src="images/profiles/Dave_Thumb.jpg" style="float:right" /></td>
		</tr></table>

		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
		<div id="davemunizEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('davemuniz');" class="editBox">edit box</a></div>
		<?php }?>
		<script type="text/javascript">fitToContent('davemuniz', 500);</script>
	</div>
	
	<div class="rowdiv">
		<table><tr>
			<td width="1"><img src="images/profiles/Dayvid_Thumb.jpg" style="float:left" /></td>
			<td valign="top"><table>
				<tr><td><span class="title">Dayvid Sanchez</span></td></tr>
				<tr><td><textarea id="dayvidsanchez" class="consum" style="float:left;" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['dayvidsanchez']['text'];?>
</textarea></td></tr>
			</table></td>
		</tr></table>

		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
		<div id="dayvidsanchezEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('dayvidsanchez');" class="editBox">edit box</a></div>
		<?php }?>
		<script type="text/javascript">fitToContent('dayvidsanchez', 500);</script>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
