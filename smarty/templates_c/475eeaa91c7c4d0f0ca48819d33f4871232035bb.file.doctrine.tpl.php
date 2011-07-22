<?php /* Smarty version Smarty-3.0.7, created on 2011-07-19 11:00:06
         compiled from "/var/trc/smarty/templates/doctrine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20266126334e25c626733b13-93717868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475eeaa91c7c4d0f0ca48819d33f4871232035bb' => 
    array (
      0 => '/var/trc/smarty/templates/doctrine.tpl',
      1 => 1310689619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20266126334e25c626733b13-93717868',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="rowcontent">
	<div  class="rowdiv">
		<span class="head">Jesus Christ</span>
		<textarea id="jesus" class="contitle" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['jesus']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
		<div id="jesusEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('jesus');" class="editBox">edit box</a></div>
		<?php }?>
	</div>
</div>
<script type="text/javascript">fitToContent('jesus', 500);</script>

<div id="rowcontent">
	<div class="rowdiv">
		<span class="head">Doctrinal Statement</span>
		<?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('doctrine')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			<span class="title"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
.&nbsp;<?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</span>
			<span class="summary"><?php echo $_smarty_tpl->tpl_vars['doc']->value['description'];?>
</span>
		<?php }} ?>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
