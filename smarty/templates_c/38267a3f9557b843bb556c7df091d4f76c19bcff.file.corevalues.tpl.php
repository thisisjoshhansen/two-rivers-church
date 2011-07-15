<?php /* Smarty version Smarty-3.0.7, created on 2011-07-05 09:23:57
         compiled from "/var/trc/smarty/templates/corevalues.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928858264e133a9d671ba2-87075300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38267a3f9557b843bb556c7df091d4f76c19bcff' => 
    array (
      0 => '/var/trc/smarty/templates/corevalues.tpl',
      1 => 1309448936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928858264e133a9d671ba2-87075300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="rowcontent">
	<div class="rowdiv">
		<span class="head" style="margin-bottom:1em;font-size:1.7em;width:100%;text-align:center;">Core Values</span>
		<?php  $_smarty_tpl->tpl_vars['coreval'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('corevals')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['coreval']->key => $_smarty_tpl->tpl_vars['coreval']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			<span class="title" 
style="margin-bottom:.2em;"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
.&nbsp;<?php echo $_smarty_tpl->tpl_vars['coreval']->value['title'];?>
</span>
			<span class="summary" style="margin:0em 0em 1em .3em;"><?php echo $_smarty_tpl->tpl_vars['coreval']->value['description'];?>
</span>
		<?php }} ?>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
