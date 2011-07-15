<?php /* Smarty version Smarty-3.0.7, created on 2011-07-05 09:43:37
         compiled from "/var/trc/smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375464224e133f39ada352-22186860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ad55cfb01c07de217b5f0c381b435bc3cb0e5e' => 
    array (
      0 => '/var/trc/smarty/templates/login.tpl',
      1 => 1309884216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375464224e133f39ada352-22186860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="loginContainer">
	<?php if ($_smarty_tpl->getVariable('msg')->value){?>
		<?php if ($_smarty_tpl->getVariable('msg')->value=='bad'){?>
			<div style="width:100%;text-align:center;margin-bottom:40px;">
				Failed attempt!
			</div>
		<?php }elseif($_smarty_tpl->getVariable('msg')->value=='redir'){?>
			<div style="width:100%;text-align:center;margin-bottom:40px;">
				You must be logged in to view this page!
			</div>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->getVariable('sessionType')->value=='none'){?>
	<div id="logFormDiv">
		<form action="controls/login.php" id="login" name="login" method="POST">
			<span class="head" style="font-size:1em; margin:0px;">user name</span>
			<input type="text" id="login_userName" name="login_userName" style="margin-bottom:10px;border:#000 2px inset"><br />
			<span class="head" style="font-size:1em; margin-bottom:0px">password</span>
			<input type="password" id="login_userPass" name="login_userPass" style="margin-bottom:20px;border:#000 2px inset">
			<input type="submit" value="login">
		</form>
	</div>

	<?php }elseif($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
	<div id="logFormDiv">
		<form action="controls/logout.php" id="logout" name="logout" method="POST">
			<center>
			<span class="head" style="font-size:1em; margin-bottom:0px; white-space:pre-wrap;">Would you like to logout of the admin page?</span>
			<input type="submit" value="logout" style="margin-top:20px">
			</center>
		</form>
	</div>
	<?php }?>
</div>
<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
