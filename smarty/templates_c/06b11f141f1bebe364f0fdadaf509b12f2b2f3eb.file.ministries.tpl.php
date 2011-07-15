<?php /* Smarty version Smarty-3.0.7, created on 2011-06-21 15:29:05
         compiled from "/var/trc/smarty/templates/ministries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14082069514e011b315495e2-21782002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b11f141f1bebe364f0fdadaf509b12f2b2f3eb' => 
    array (
      0 => '/var/trc/smarty/templates/ministries.tpl',
      1 => 1308695344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14082069514e011b315495e2-21782002',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div style="clear:both;height:20px;"></div>
<span class="head" style="width:100%;text-align:center;font-size:1.9em;">TRC Ministries</span>
<div style="clear:both;height:20px;"></div>

<div id="colcontent" style="width:200px;">
	<div id="ministries">
		<span class="head" style="font-size:1.3em;margin-bottom:20px;">Ministries</span>
		<?php  $_smarty_tpl->tpl_vars['ministry'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ministries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ministry']->key => $_smarty_tpl->tpl_vars['ministry']->value){
?>
			<span class="title" onclick="showMinistryDiv('<?php echo $_smarty_tpl->tpl_vars['ministry']->value['ID'];?>
');" style="margin:0px 0px 12px 12px;cursor:pointer;">
				<?php echo $_smarty_tpl->tpl_vars['ministry']->value['title'];?>

			</span>
		<?php }} ?>
	</div>
</div>

<div style="margin-left:220px;">
	<?php  $_smarty_tpl->tpl_vars['ministry'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ministries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ministry']->key => $_smarty_tpl->tpl_vars['ministry']->value){
?>
		<div id="mid:<?php echo $_smarty_tpl->tpl_vars['ministry']->value['ID'];?>
" <?php if ($_smarty_tpl->getVariable('mid')->value!=$_smarty_tpl->tpl_vars['ministry']->value['ID']){?>style="display:none;"<?php }?>>
			<span class="title" style="font-size:1.5em;clear:none;"><?php echo $_smarty_tpl->tpl_vars['ministry']->value['title'];?>
</span>
			<span class="summary" style="clear:none;"><?php echo $_smarty_tpl->tpl_vars['ministry']->value['description'];?>
</span>
		</div>
	<?php }} ?>
</div>

<div style="clear:both;height:20px;"></div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
