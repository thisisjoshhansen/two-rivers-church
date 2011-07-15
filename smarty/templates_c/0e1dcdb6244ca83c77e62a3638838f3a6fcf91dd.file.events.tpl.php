<?php /* Smarty version Smarty-3.0.7, created on 2011-06-30 09:03:28
         compiled from "/var/trc/smarty/templates/events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4770935074e0c9e50806b97-60585006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e1dcdb6244ca83c77e62a3638838f3a6fcf91dd' => 
    array (
      0 => '/var/trc/smarty/templates/events.tpl',
      1 => 1309449800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4770935074e0c9e50806b97-60585006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div style="clear:both;height:20px;"></div>
<span class="head" style="width:100%;text-align:center;font-size:1.9em;">TRC Events</span>
<div style="clear:both;height:20px;"></div>

<div id="colcontent" style="width:205px;">
	<div id="latestnews">
		<span class="head" style="font-size:1.3em;margin-bottom:20px;">Upcomming Events</span>
		<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
?>
			<span class="title" onclick="showEventDiv('<?php echo $_smarty_tpl->tpl_vars['event']->value['ID'];?>
');" style="margin:0px 0px 12px 12px;cursor:pointer;white-space:nowrap">
				<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>

			</span>
		<?php }} ?>
	</div>
</div>

<div style="margin-left:220px;">
	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
?>
		<div id="eid:<?php echo $_smarty_tpl->tpl_vars['event']->value['ID'];?>
" <?php if ($_smarty_tpl->getVariable('eid')->value!=$_smarty_tpl->tpl_vars['event']->value['ID']){?>style="display:none;"<?php }?>>
			<span class="title" style="font-size:1.5em;clear:none;"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</span>
			<span class="date" style="font-size:.8em;clear:none;"><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
</span>
			<span class="summary" style="clear:none;"><?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
</span>
		</div>
	<?php }} ?>
</div>

<div style="clear:both;height:20px;"></div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
