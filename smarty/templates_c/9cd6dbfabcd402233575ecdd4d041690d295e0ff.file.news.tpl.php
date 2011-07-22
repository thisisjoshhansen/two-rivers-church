<?php /* Smarty version Smarty-3.0.7, created on 2011-07-19 11:15:45
         compiled from "/var/trc/smarty/templates/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16623056374e25c9d151c561-52086810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd6dbfabcd402233575ecdd4d041690d295e0ff' => 
    array (
      0 => '/var/trc/smarty/templates/news.tpl',
      1 => 1309448938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16623056374e25c9d151c561-52086810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div style="clear:both;height:20px;"></div>
<span class="head" style="width:100%;text-align:center;font-size:1.9em;">TRC News</span>
<div style="clear:both;height:20px;"></div>

<div id="colcontent" style="width:200px;">
	<div id="latestnews">
		<span class="head" style="font-size:1.3em;margin-bottom:20px;">Latest News</span>
		<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
?>
			<span class="title" onclick="showNewsDiv('<?php echo $_smarty_tpl->tpl_vars['n']->value['ID'];?>
');" style="margin:0px 0px 12px 12px;cursor:pointer;white-space:nowrap">
				<?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>

			</span>
		<?php }} ?>
	</div>
</div>

<div style="margin-left:220px;">
	<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
?>
		<div id="nid:<?php echo $_smarty_tpl->tpl_vars['n']->value['ID'];?>
" <?php if ($_smarty_tpl->getVariable('nid')->value!=$_smarty_tpl->tpl_vars['n']->value['ID']){?>style="display:none;"<?php }?>>
			<span class="title" style="font-size:1.5em;clear:none;"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</span>
			<span class="date" style="font-size:.8em;clear:none;"><?php echo $_smarty_tpl->tpl_vars['n']->value['postdate'];?>
</span>
			<span class="summary" style="clear:none;"><?php echo $_smarty_tpl->tpl_vars['n']->value['news'];?>
</span>
		</div>
	<?php }} ?>
</div>

<div style="clear:both;height:20px;"></div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
