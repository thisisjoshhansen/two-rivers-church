<?php /* Smarty version Smarty-3.0.7, created on 2011-07-14 17:30:50
         compiled from "/var/trc/smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18255448664e1f8a3ac83659-50256035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03372a5c558afbc207fd8fbfe67542ce748b553' => 
    array (
      0 => '/var/trc/smarty/templates/home.tpl',
      1 => 1310689849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18255448664e1f8a3ac83659-50256035',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template('homeProfile_admin.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="homeContainer">

	<b class="section_header_bg">
		<b class="section_header_bg1"></b>
		<b class="section_header_bg2"></b>
		<b class="section_header_bg3"></b>
		<b class="section_header_bg4"></b>
		<b class="section_header_bg5"></b>
	</b>

	<div id="sectionContainer">
	<?php if ($_smarty_tpl->getVariable('section')->value==''){?>
		<div id="constContainer">
			<div id="construction">
				This page is under construction!
			</div>
		</div>

	<!--LOCATIONS & SERVICES-->
	<?php }elseif($_smarty_tpl->getVariable('section')->value=='admin_locsservs'){?>
		<div id="adminLocs" class="adminHomeDiv" style="float:left;">
			<span class="head" style="margin-bottom:20px;">Locations</span>
			<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('locations')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value){
?>
				<span class="title"><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
</span>
				<span class="summary" style="white-space:nowrap">
					<?php echo $_smarty_tpl->tpl_vars['location']->value['street'];?>
<br />
					<?php echo $_smarty_tpl->tpl_vars['location']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['location']->value['state'];?>
 <?php echo $_smarty_tpl->tpl_vars['location']->value['zip'];?>

				</span>
				<a class="editButton" onclick="popUpWindow('adminLocs', 'admin_locationForm', <?php echo $_smarty_tpl->tpl_vars['location']->value['ID'];?>
);">+<span>Edit Location!</span></a>
				<a class="deleteButton" onclick="admin_deleteLocation(<?php echo $_smarty_tpl->tpl_vars['location']->value['ID'];?>
);">+<span>Delete Location!</span></a><br />
				<br />
			<?php }} ?>
			<div id="admin_locationForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminLocs', 'admin_locationForm', '0')">+<span>Add Location!</span></a><br />
		</div>

		<div id="adminServs" class="adminHomeDiv" style="float:right;">
			<span class="head" style="margin-bottom:20px;">Services</span>
			<?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('locations')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value){
?>
				<span class="title"><?php echo $_smarty_tpl->tpl_vars['location']->value['name'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['location']->value['hasService']){?>
					<?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('services')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value){
?>
						<?php if ($_smarty_tpl->tpl_vars['service']->value['locid']==$_smarty_tpl->tpl_vars['location']->value['ID']){?>
							<span class="summary"><?php echo $_smarty_tpl->tpl_vars['service']->value['time'];?>
</span>
						<?php }?>
					<?php }} ?>
				<?php }else{ ?>
					<span class="summary">No Services</span>
				<?php }?>
				<br />
			<?php }} ?>
			<div id="admin_serviceForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminServs', 'admin_serviceForm', '0');">+<span>Manage Services!</span></a>
		</div>

	<!--NEWS & EVENTS-->
	<?php }elseif($_smarty_tpl->getVariable('section')->value=='admin_newsevents'){?>
		<div id="adminNews" class="adminHomeDiv" style="float:left;">
			<span class="head" style="margin-bottom:20px;">News</span>
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
					<a class="editButton" onclick="popUpWindow('adminNews', 'admin_newsForm', <?php echo $_smarty_tpl->tpl_vars['n']->value['ID'];?>
);">+<span>Edit!</span></a>
					<a class="deleteButton" onclick="admin_deleteNews(<?php echo $_smarty_tpl->tpl_vars['n']->value['ID'];?>
);">+<span>Delete!</span></a><br />
				<?php }} ?>
			<?php }else{ ?>
				<br />
				<span class="summary">There is no news!</span>
			<?php }?>
			<div id="admin_newsForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminNews', 'admin_newsForm', '0');">+<span>Add News Item!</span></a><br />
		</div>

		<div id="adminEvents" class="adminHomeDiv" style="float:right;">
			<span class="head" style="margin-bottom:20px;">Events</span>
			<?php if ($_smarty_tpl->getVariable('events')->value){?>
				<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
?>
					<span class="date" style="margin-top:1.5em;"><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['event']->value['time'];?>
</span>
					<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=events&eid=<?php echo $_smarty_tpl->tpl_vars['event']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a></span>
					<span class="summary"><?php echo $_smarty_tpl->tpl_vars['event']->value['summary'];?>
</span>
					<a class="editButton" onclick="popUpWindow('adminEvents', 'admin_eventsForm', <?php echo $_smarty_tpl->tpl_vars['event']->value['ID'];?>
);">+<span>Edit!</span></a>
					<a class="deleteButton" onclick="admin_deleteEvent(<?php echo $_smarty_tpl->tpl_vars['event']->value['ID'];?>
);">+<span>Delete!</span></a><br />
				<?php }} ?>
			<?php }else{ ?>
				<br />
				<span class="summary">No upcomming events</span>
			<?php }?>
			<div id="admin_eventsForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminEvents', 'admin_eventsForm', '0');">+<span>Add Event!</span></a>
		</div>

	<!--DOCTRINE & VALUES-->
	<?php }elseif($_smarty_tpl->getVariable('section')->value=='admin_docvals'){?>
		<div id="adminDoct" class="adminHomeDiv" style="float:left;">
			<span class="head" style="margin-bottom:20px;">Doctrine</span>
			<?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('doctrine')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
				<span class="title"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
.&nbsp;<?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</span>
				<span class="summary"><?php echo $_smarty_tpl->tpl_vars['doc']->value['summary'];?>
</span>
			<?php }} ?>
		</div>

		<div id="adminVals" class="adminHomeDiv" style="float:right;">
			<span class="head" style="margin-bottom:20px;">Core Values</span>
			<?php  $_smarty_tpl->tpl_vars['coreval'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('corevals')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['coreval']->key => $_smarty_tpl->tpl_vars['coreval']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
				<span class="title" style="margin-bottom:.2em;"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
.&nbsp;<?php echo $_smarty_tpl->tpl_vars['coreval']->value['title'];?>
</span>
				<span class="summary" style="margin:0em 0em 1em .3em;"><?php echo $_smarty_tpl->tpl_vars['coreval']->value['summary'];?>
</span>
			<?php }} ?>
		</div>

	
	<!--SERMONS-->
	<?php }elseif($_smarty_tpl->getVariable('section')->value=='admin_sermons'){?>
		<div id="constContainer">
			<div id="construction">
				This page is under construction!
			</div>
		</div>

	
	<?php }?>
	</div>

	<div style="clear:both;"></div>
	<b class="section_header_bg">
		<b class="section_header_bg5"></b>
		<b class="section_header_bg4"></b>
		<b class="section_header_bg3"></b>
		<b class="section_header_bg2"></b>
		<b class="section_header_bg1"></b>
	</b>

</div>
<b class="profile_header_bg">
	<b class="profile_header_bg5"></b>
	<b class="profile_header_bg4"></b>
	<b class="profile_header_bg3"></b>
	<b class="profile_header_bg2"></b>
	<b class="profile_header_bg1"></b>
</b>
<br />

<?php $_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
