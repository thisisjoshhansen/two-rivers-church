<?php /* Smarty version Smarty-3.0.7, created on 2011-07-05 09:23:55
         compiled from "/var/trc/smarty/templates/whoweare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8930981004e133a9b7291f0-66302894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5168b2f068fecfb82f1fa273c00971c136fd937c' => 
    array (
      0 => '/var/trc/smarty/templates/whoweare.tpl',
      1 => 1309448939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8930981004e133a9b7291f0-66302894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<img src="images/header_images/Header_B.png" alt="image B" />
<div id="rowcontent">
	<div class="rowdiv">
		<span class="head">Two Rivers</span>

		<span class="title">Vision</span>
		<textarea id="vision" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['vision']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="visionEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('vision');" class="editBox">edit box</a></div>
		<?php }?>
		<br />

		<span class="title">Mission</span>
		<textarea id="mission" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['mission']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="missionEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('mission')" class="editBox">edit box</a></div>
		<?php }?>
		<br />

		<span class="title">History</span>
		<textarea id="history" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['history']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="historyEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('history');" class="editBox">edit box</a></div>
		<?php }?>
	</div>
</div>

<div id="colcontent">
	<div id="col1" class="twoCol">
		<span class="head">What We Believe</span>

		<span class="title"><a href="/?page=whoweare&sub=doctrine">Doctrinal Statement</a></span>
		<textarea id="docstatement" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['docstatement']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="docstatementEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('docstatement');" class="editBox">edit box</a></div>
		<?php }?>

		<span class="title"><a href="/?page=whoweare&sub=corevalues">Core Values</a></span>
		<textarea id="corevalues" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['corevalues']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="corevaluesEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('corevalues');" class="editBox">edit box</a></div>
		<?php }?>
	</div>

	<div id="col2" class="twoColLast">
		<span class="head">Community</span>
		
		<span class="title">Community Covenent</span>
		<textarea id="comcovenent" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['comcovenent']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
		<div id="comcovenentEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('comcovenent');" class="editBox">edit box</a></div>
		<?php }?>	
		<br /><br />
		
		<span class="title"><a href="/?page=whoweare&sub=ministries">Ministries</a></span>
		<textarea id="ministries" class="consum" readonly="true"><?php echo $_smarty_tpl->getVariable('info')->value['ministries']['text'];?>
</textarea>
		<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div id="ministriesEditSave" class="editBoxDiv"><a href="javascript:adminEditBox('ministries');" class="editBox">edit box</a></div>
		<?php }?>

	</div>
</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
