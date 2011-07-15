<?php /* Smarty version Smarty-3.0.7, created on 2011-07-05 10:30:54
         compiled from "/var/trc/smarty/templates/locationservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8961435014e134a4eef7352-20660898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1735c3494bcc2ff91bf6e07b7571baba52fd375' => 
    array (
      0 => '/var/trc/smarty/templates/locationservices.tpl',
      1 => 1309448937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8961435014e134a4eef7352-20660898',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<img src="images/header_images/Header_C.png" alt="image C" />
<div id="colcontent">
	<div class="twoCol" id="col1">
		<span class="head">Locations</span>
		<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('locations')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value){
?>
			<?php if ($_smarty_tpl->tpl_vars['location']->value['city']&&$_smarty_tpl->tpl_vars['location']->value['state']&&$_smarty_tpl->tpl_vars['location']->value['zip']){?>
			<span class="title"><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
</span>
			<span class="summary" style="white-space:nowrap">
				<?php echo $_smarty_tpl->tpl_vars['location']->value['street'];?>
<br />
				<?php echo $_smarty_tpl->tpl_vars['location']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['location']->value['state'];?>
 <?php echo $_smarty_tpl->tpl_vars['location']->value['zip'];?>

			</span>
			<br />				
			<?php }?>
		<?php }} ?>
	</div>

	<div class="twoColLast" id="col2">
		<span class="head">Services</span>
		<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('locations')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value){
?>
		<?php if ($_smarty_tpl->tpl_vars['location']->value['hasService']){?>
			<span class="title"><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
</span>
			<?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('services')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['service']->value['locid']==$_smarty_tpl->tpl_vars['location']->value['ID']){?>
					<span class="summary"><?php echo $_smarty_tpl->tpl_vars['service']->value['time'];?>
</span>
					<br />
				<?php }?>
			<?php }} ?>
		<?php }?>
		<?php }} ?>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
