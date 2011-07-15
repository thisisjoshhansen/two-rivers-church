<?php /* Smarty version Smarty-3.0.7, created on 2011-06-30 08:57:47
         compiled from "/var/trc/smarty/templates/newsevents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4015160114e0c9cfb6be008-02643089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ac7c234c48aef2896d4a159471646304f4cc93' => 
    array (
      0 => '/var/trc/smarty/templates/newsevents.tpl',
      1 => 1309448938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4015160114e0c9cfb6be008-02643089',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<img src="images/header_images/Header_D.png" alt="image D" />
<div id="colcontent">
	<div class="twoCol" id="col1">
		<span class="head">Latest News</span>
		<?php if ($_smarty_tpl->getVariable('news')->value){?>
			<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
?>
				<span class="date" style="margin-top:.5em;"><?php echo $_smarty_tpl->tpl_vars['n']->value['postdate'];?>
</span>
				<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=news&nid=<?php echo $_smarty_tpl->tpl_vars['n']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</a></span>
				<span class="summary"><?php echo $_smarty_tpl->tpl_vars['n']->value['summary'];?>
</span>
			<?php }} ?>
		<?php }else{ ?>
			<br />
			<span class="summary">There is no news!</span>
		<?php }?>
	</div>
	
	<div class="twoColLast"  id="col2">
		<span class="head">Upcomming Events</span>
		<?php if ($_smarty_tpl->getVariable('events')->value){?>
			<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
?>
				<span class="date" style="margin-top:.5em;"><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['event']->value['time'];?>
</span>
				<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=events&eid=<?php echo $_smarty_tpl->tpl_vars['event']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a></span>
				<span class="summary"><?php echo $_smarty_tpl->tpl_vars['event']->value['summary'];?>
</span>
			<?php }} ?>
		<?php }else{ ?>
			<br />
			<span class="summary">No upcomming events</span>
		<?php }?>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
