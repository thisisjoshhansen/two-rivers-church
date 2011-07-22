<?php /* Smarty version Smarty-3.0.7, created on 2011-07-22 11:45:49
         compiled from "/var/trc/smarty/templates/sermonmedia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13279800644e29c55d48e232-82256807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798c7518c67795c81e1bbf5df7d0d9b257067b90' => 
    array (
      0 => '/var/trc/smarty/templates/sermonmedia.tpl',
      1 => 1311360348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13279800644e29c55d48e232-82256807',
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
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
