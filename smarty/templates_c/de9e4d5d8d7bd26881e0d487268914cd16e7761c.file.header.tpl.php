<?php /* Smarty version Smarty-3.0.7, created on 2011-07-22 09:23:38
         compiled from "/var/trc/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7602387914e29a40aa5d3c9-94977622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de9e4d5d8d7bd26881e0d487268914cd16e7761c' => 
    array (
      0 => '/var/trc/smarty/templates/header.tpl',
      1 => 1311351799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7602387914e29a40aa5d3c9-94977622',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="jesus, god, church, two rivers, love, worship, colorado, salvation, service, peace" />
	<!--CSS includes-->
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/topNavBar.css" />
	<link rel="stylesheet" type="text/css" href="css/popup.css" />
	<link rel="stylesheet" type="text/css" href="css/home.css" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<link rel="stylesheet" type="text/css" href="libs/jQuery/jQueryUI/jquery-ui-1.8.14.custom.css" /><!--JQuery plugin-->
	<!--JS includes-->
	<script src="libs/jQuery/jquery-1.6.1.min.js" type="text/javascript"></script><!--JQuery-->
	<script src="libs/jQuery/jQueryUI/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script><!--JQuery plugin-->
	<script src="libs/jQuery/plugins/elastic/elastic.js" type="text/javascript"></script><!--JQuery plugin-->
	<script src="js/toolkit.js" type="text/javascript"></script><!--This one must be included as first js file other than the jquery lib-->
	<script src="js/index.js" type="text/javascript"></script>
	<script src="js/home.js" type="text/javascript"></script>
	<script src="js/ajax.js" type="text/javascript"></script>
	<script src="js/dom.js" type="text/javascript"></script>

	<!--Define the favicon-->
	<link rel="shortcut icon" href="favicon.ico" />
	<title>two rivers church</title>
</head>

<body>
<br />
	<div id="main">

		<div id="header">
				<div id="logo"><a href="/"><img src="images/Logo_Main.png" /></a></div>
		</div>

		<div id="topNavDiv">
			<ul id="topNavBar">
				<?php  $_smarty_tpl->tpl_vars['topNavObj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('topNavObjs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['topNavObj']->key => $_smarty_tpl->tpl_vars['topNavObj']->value){
?>
				<li onmouseover="dispHoverUL();" onmouseout="dispActiveUL();"><a href="/?page=<?php echo $_smarty_tpl->tpl_vars['topNavObj']->value['link'];?>
" <?php if ($_smarty_tpl->getVariable('page')->value==$_smarty_tpl->tpl_vars['topNavObj']->value['link']){?>id="topNav_active"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['topNavObj']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['topNavObj']->value['title'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['topNavObj']->value['subs']){?>
					<ul <?php if ($_smarty_tpl->getVariable('page')->value==$_smarty_tpl->tpl_vars['topNavObj']->value['link']){?> id="id_subNav_activeUL" class="subNav_activeUL" <?php }?>>
					<?php  $_smarty_tpl->tpl_vars['subLink'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subTitle'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topNavObj']->value['subs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subLink']->key => $_smarty_tpl->tpl_vars['subLink']->value){
 $_smarty_tpl->tpl_vars['subTitle']->value = $_smarty_tpl->tpl_vars['subLink']->key;
?>
						<li><a href="/?page=<?php echo $_smarty_tpl->tpl_vars['topNavObj']->value['link'];?>
&sub=<?php echo $_smarty_tpl->tpl_vars['subLink']->value;?>
" <?php if ($_smarty_tpl->getVariable('sub')->value==$_smarty_tpl->tpl_vars['subLink']->value){?>id="subNav_active"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['subLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subTitle']->value;?>
</a></li>
					<?php }} ?>
					</ul>
					<?php }?>
				</li>
				<?php }} ?>
			</ul>
		</div>

