<?php /* Smarty version Smarty-3.0.7, created on 2011-07-05 10:03:46
         compiled from "/var/trc/smarty/templates/newhere.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12623322724e1343f2cfedc9-26852128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83797300014f9348afab842e0444298cf4612ec5' => 
    array (
      0 => '/var/trc/smarty/templates/newhere.tpl',
      1 => 1309448938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12623322724e1343f2cfedc9-26852128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<img src="images/header_images/Header_A.png" alt="image A" />

<div id="colcontent">
	<div class="twoCol" id="col1">
		<span class="head">Two Rivers Church</span>
		
		<span class="title"><a href="index.php?page=whoweare&sub=doctrine">What We Believe</a></span>
		<textarea id="docstatement" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['docstatement']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="docstatementEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('docstatement');" class="editBox">edit box</a></div>
		<?php }?>

		<span class="title"><a href="index.php?page=whoweare&sub=corevalues">Core Values</a></span>
		<textarea id="corevalues" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['corevalues']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="corevaluesEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('corevalues');" class="editBox">edit box</a></div>
		<?php }?>
	</div>
	
	<div class="twoColLast" id="col2">
		<span class="head">Join Us</span>

		<span class="title"><a href="index.php?page=locationservices">Locations & Services</a></span>
		<textarea id="locsservs" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['locsservs']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="locsservsEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('locsservs');" class="editBox">edit box</a></div>
		<?php }?>

		<span class="title"><a href="index.php?page=newsevents">News & Events</a></span>
		<textarea id="newsevents" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['newsevents']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="newseventsEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('newsevents');" class="editBox">edit box</a></div>
		<?php }?>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
