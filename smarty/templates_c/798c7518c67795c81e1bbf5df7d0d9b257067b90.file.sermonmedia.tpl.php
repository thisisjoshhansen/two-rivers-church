<?php /* Smarty version Smarty-3.0.7, created on 2012-01-09 13:52:25
         compiled from "/var/trc/smarty/templates/sermonmedia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15048072534f0b61990e48e0-74032813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798c7518c67795c81e1bbf5df7d0d9b257067b90' => 
    array (
      0 => '/var/trc/smarty/templates/sermonmedia.tpl',
      1 => 1326145941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15048072534f0b61990e48e0-74032813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="sermon_play_container">

	<iframe src="http://player.vimeo.com/video/<?php echo $_smarty_tpl->getVariable('sermon_play')->value;?>
?title=0&amp;byline=0&amp;portrait=0&amp;color=168FF8" width="468" height="350" frameborder="0"></iframe>

</div>

<!--<div style="text-align:center;float:left;margin-top:30px;">
	<div style="width:936px;">
		<?php  $_smarty_tpl->tpl_vars['sermon'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sermon_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sermon']->key => $_smarty_tpl->tpl_vars['sermon']->value){
?>
		<div style="width:180;clear:none;float:left;">
			<span style="">Ephesians 1:1-4</span>
			<img src="images/series/<?php echo $_smarty_tpl->tpl_vars['sermon']->value['thumbnail'];?>
" onclick="sermon_activate(<?php echo $_smarty_tpl->tpl_vars['sermon']->value['vimeo_number'];?>
)" width="180" />
		</div>
		<?php }} ?>
	</div>
</div>-->

<div class="scroll-pane ui-widget ui-widget-header ui-corner-all" style="margin-bottom:20px;background:transparent;border:none;">
	<div class="scroll-content">
		<?php  $_smarty_tpl->tpl_vars['sermon'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sermon_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sermon']->key => $_smarty_tpl->tpl_vars['sermon']->value){
?>
			<div class="scroll-content-item ui-widget-header" style="background:transparent;border:0;">
				<span style="font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['sermon']->value['passage'];?>
</span><br />
				<img src="images/series/<?php echo $_smarty_tpl->tpl_vars['sermon']->value['thumbnail'];?>
" onclick="sermon_activate(<?php echo $_smarty_tpl->tpl_vars['sermon']->value['vimeo_number'];?>
)" width="140" />
			</div>
		<?php }} ?>
	</div>
	<div class="scroll-bar-wrap ui-widget-content ui-corner-all">
		<div class="scroll-bar"></div>
	</div>
</div>


<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
