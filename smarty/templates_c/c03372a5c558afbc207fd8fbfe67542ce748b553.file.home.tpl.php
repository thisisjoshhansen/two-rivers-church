<?php /* Smarty version Smarty-3.0.7, created on 2011-07-19 19:38:05
         compiled from "/var/trc/smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341619984e263f8d58ee07-45178359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03372a5c558afbc207fd8fbfe67542ce748b553' => 
    array (
      0 => '/var/trc/smarty/templates/home.tpl',
      1 => 1311129484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341619984e263f8d58ee07-45178359',
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
		<!--Doctrines-->
		<div id="admin-topic:docs" class="adminHomeDiv" style="clear:both;float:left;width:870px;">
			<div style="float:left;width:150px;">
				<div style="float:left;">
					<span class="head" style="margin-bottom:20px;">Doctrine</span>
					<?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('doctrine')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
?>
						<span class="title" onclick="showTopicDiv('<?php echo $_smarty_tpl->tpl_vars['doc']->value['ID'];?>
', 'docs');" style="margin:0px 0px 12px 12px;cursor:pointer;font-size:.9em;"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</span>
					<?php }} ?>
				</div>
			</div>

			<div style="margin-left:200px;">
				<?php  $_smarty_tpl->tpl_vars['doc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('doctrine')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['doc']->key => $_smarty_tpl->tpl_vars['doc']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
					<div id="docs:<?php echo $_smarty_tpl->tpl_vars['doc']->value['ID'];?>
" style="<?php if ($_smarty_tpl->tpl_vars['doc']->value['ID']!=$_smarty_tpl->getVariable('docID')->value){?>display:none;<?php }?>min-height:375px;position:relative;">

						<span class="title" style="clear:none;font-size:1.5em;margin-bottom:20px;"><?php echo $_smarty_tpl->tpl_vars['doc']->value['title'];?>
</span>
						<div style="position:absolute;top:0;right:0;width:200px;">
							<a class="editButton" onclick="openDialog(<?php echo $_smarty_tpl->tpl_vars['doc']->value['ID'];?>
, 'docs');">+<span>Edit!</span></a>
							<a class="deleteButton" onclick="admin_deleteItem(<?php echo $_smarty_tpl->tpl_vars['doc']->value['ID'];?>
, 'docs');">+<span>Delete!</span></a>
						</div>

						<span class="title" style="font-size:.8em;clear:none;">Summary</span>
						<span class="summary" style="font-size:.8em;clear:none;margin-bottom:10px;"><?php echo $_smarty_tpl->tpl_vars['doc']->value['summary'];?>
</span>

						<span class="title" style="font-size:.8em;clear:none;">Description</span>
						<span class="summary" style="clear:none;"><?php echo $_smarty_tpl->tpl_vars['doc']->value['description'];?>
</span>

					</div>

				<?php }} ?>
			</div>
			<a class="addButton" onclick="openDialog('0', 'docs');" style="clear:both;float:left;">+<span>Add Doctrine!</span></a>
		</div>
		<div id="admin-dialog:docs" title="Two Rivers Doctrine"></div><!--This line must be outside of 'adminDocs'-->

		<!--Core Values-->
		<div id="admin-topic:vals" class="adminHomeDiv" style="clear:both;float:left;width:870px;margin-top:20px;">
			<div style="float:left;width:150px;">
				<div style="float:left;">
					<span class="head" style="margin-bottom:20px;">Core Values</span>
					<?php  $_smarty_tpl->tpl_vars['coreval'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('corevals')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['coreval']->key => $_smarty_tpl->tpl_vars['coreval']->value){
?>
						<span class="title" onclick="showTopicDiv('<?php echo $_smarty_tpl->tpl_vars['coreval']->value['ID'];?>
', 'vals');" style="margin:0px 0px 12px 12px;cursor:pointer;font-size:.9em;"><?php echo $_smarty_tpl->tpl_vars['coreval']->value['title'];?>
</span>
					<?php }} ?>
				</div>
			</div>

			<div style="margin-left:200px;">
				<?php  $_smarty_tpl->tpl_vars['coreval'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('corevals')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['coreval']->key => $_smarty_tpl->tpl_vars['coreval']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
					<div id="vals:<?php echo $_smarty_tpl->tpl_vars['coreval']->value['ID'];?>
" style="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']!=0){?>display:none;<?php }?>min-height:375px;position:relative;">

						<span class="title" style="clear:none;font-size:1.5em;margin-bottom:20px;"><?php echo $_smarty_tpl->tpl_vars['coreval']->value['title'];?>
</span>
						<div style="position:absolute;top:0;right:0;width:200px;">
							<a class="editButton" onclick="openDialog(<?php echo $_smarty_tpl->tpl_vars['coreval']->value['ID'];?>
, 'vals');">+<span>Edit!</span></a>
							<a class="deleteButton" onclick="admin_deleteItem(<?php echo $_smarty_tpl->tpl_vars['coreval']->value['ID'];?>
, 'vals');">+<span>Delete!</span></a>
						</div>

						<span class="title" style="font-size:.8em;clear:none;">Summary</span>
						<span class="summary" style="font-size:.8em;clear:none;margin-bottom:10px;"><?php echo $_smarty_tpl->tpl_vars['coreval']->value['summary'];?>
</span>

						<span class="title" style="font-size:.8em;clear:none;">Description</span>
						<span class="summary" style="clear:none;"><?php echo $_smarty_tpl->tpl_vars['coreval']->value['description'];?>
</span>

					</div>

				<?php }} ?>
			</div>
			<a class="addButton" onclick="openDialog('0', 'vals');" style="clear:both;float:left;">+<span>Add a Core Value!</span></a>
		</div>
		<div id="admin-dialog:vals" title="Two Rivers Core Values"></div><!--This line must be outside of 'adminVals'-->
	
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
