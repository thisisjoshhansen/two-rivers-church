{include file='header.tpl'}

{include file='homeProfile_admin.tpl'}
<div id="homeContainer">

	<b class="section_header_bg">
		<b class="section_header_bg1"></b>
		<b class="section_header_bg2"></b>
		<b class="section_header_bg3"></b>
		<b class="section_header_bg4"></b>
		<b class="section_header_bg5"></b>
	</b>

	<div id="sectionContainer">
	{if $section == ''}
		<div id="constContainer">
			<div id="construction">
				This page is under construction!
			</div>
		</div>

	<!--LOCATIONS & SERVICES-->
	{elseif $section == 'admin_locsservs'}
		<div id="adminLocs" class="adminHomeDiv" style="float:left;">
			<span class="head" style="margin-bottom:20px;">Locations</span>
			{foreach $locations as $location}
				<span class="title">{$location.name}</span>
				<span class="summary" style="white-space:nowrap">
					{$location.street}<br />
					{$location.city}, {$location.state} {$location.zip}
				</span>
				<a class="editButton" onclick="popUpWindow('adminLocs', 'admin_locationForm', {$location.ID});">+<span>Edit Location!</span></a>
				<a class="deleteButton" onclick="admin_deleteLocation({$location.ID});">+<span>Delete Location!</span></a><br />
				<br />
			{/foreach}
			<div id="admin_locationForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminLocs', 'admin_locationForm', '0')">+<span>Add Location!</span></a><br />
		</div>

		<div id="adminServs" class="adminHomeDiv" style="float:right;">
			<span class="head" style="margin-bottom:20px;">Services</span>
			{foreach $locations as $location}
				<span class="title">{$location.name}</span>
				{if $location.hasService}
					{foreach $services as $service}
						{if $service.locid eq $location.ID}
							<span class="summary">{$service.time}</span>
						{/if}
					{/foreach}
				{else}
					<span class="summary">No Services</span>
				{/if}
				<br />
			{/foreach}
			<div id="admin_serviceForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminServs', 'admin_serviceForm', '0');">+<span>Manage Services!</span></a>
		</div>

	<!--NEWS & EVENTS-->
	{elseif $section == 'admin_newsevents'}
		<div id="adminNews" class="adminHomeDiv" style="float:left;">
			<span class="head" style="margin-bottom:20px;">News</span>
			{if $news}
				{foreach $news as $n}
					<span class="date" style="margin-top:.5em;">{$n.postdate}</span>
					<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=news&nid={$n.ID}">{$n.title}</a></span>
					<span class="summary">{$n.summary}</span>
					<a class="editButton" onclick="popUpWindow('adminNews', 'admin_newsForm', {$n.ID});">+<span>Edit!</span></a>
					<a class="deleteButton" onclick="admin_deleteNews({$n.ID});">+<span>Delete!</span></a><br />
				{/foreach}
			{else}
				<br />
				<span class="summary">There is no news!</span>
			{/if}
			<div id="admin_newsForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminNews', 'admin_newsForm', '0');">+<span>Add News Item!</span></a><br />
		</div>

		<div id="adminEvents" class="adminHomeDiv" style="float:right;">
			<span class="head" style="margin-bottom:20px;">Events</span>
			{if $events}
				{foreach $events as $event}
					<span class="date" style="margin-top:1.5em;">{$event.date} @ {$event.time}</span>
					<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=events&eid={$event.ID}">{$event.title}</a></span>
					<span class="summary">{$event.summary}</span>
					<a class="editButton" onclick="popUpWindow('adminEvents', 'admin_eventsForm', {$event.ID});">+<span>Edit!</span></a>
					<a class="deleteButton" onclick="admin_deleteEvent({$event.ID});">+<span>Delete!</span></a><br />
				{/foreach}
			{else}
				<br />
				<span class="summary">No upcomming events</span>
			{/if}
			<div id="admin_eventsForm" style="position:absolute;display:none;"></div>
			<a class="addButton" onclick="popUpWindow('adminEvents', 'admin_eventsForm', '0');">+<span>Add Event!</span></a>
		</div>

	<!--DOCTRINE & VALUES-->
	{elseif $section == 'admin_docvals'}
		<!--Doctrines-->
		<div id="admin-topic:docs" class="adminHomeDiv" style="clear:both;float:left;width:870px;">
			<div style="float:left;width:150px;">
				<div style="float:left;">
					<span class="head" style="margin-bottom:20px;">Doctrine</span>
					{foreach $doctrine as $doc}
						<span class="title" onclick="showTopicDiv('{$doc.ID}', 'docs');" style="margin:0px 0px 12px 12px;cursor:pointer;font-size:.9em;">{$doc.title}</span>
					{/foreach}
				</div>
			</div>

			<div style="margin-left:200px;">
				{foreach from=$doctrine item=doc name=foo}
					<div id="docs:{$doc.ID}" style="{if $doc.ID != $docID}display:none;{/if}min-height:375px;position:relative;">

						<span class="title" style="clear:none;font-size:1.5em;margin-bottom:20px;">{$doc.title}</span>
						<div style="position:absolute;top:0;right:0;width:200px;">
							<a class="editButton" onclick="openDialog({$doc.ID}, 'docs');">+<span>Edit!</span></a>
							<a class="deleteButton" onclick="admin_deleteItem({$doc.ID}, 'docs');">+<span>Delete!</span></a>
						</div>

						<span class="title" style="font-size:.8em;clear:none;">Summary</span>
						<span class="summary" style="font-size:.8em;clear:none;margin-bottom:10px;">{$doc.summary}</span>

						<span class="title" style="font-size:.8em;clear:none;">Description</span>
						<span class="summary" style="clear:none;">{$doc.description}</span>

					</div>

				{/foreach}
			</div>
			<a class="addButton" onclick="openDialog('0', 'docs');" style="clear:both;float:left;">+<span>Add Doctrine!</span></a>
		</div>
		<div id="admin-dialog:docs" title="Two Rivers Doctrine"></div><!--This line must be outside of 'adminDocs'-->

		<!--Core Values-->
		<div id="admin-topic:vals" class="adminHomeDiv" style="clear:both;float:left;width:870px;margin-top:20px;">
			<div style="float:left;width:150px;">
				<div style="float:left;">
					<span class="head" style="margin-bottom:20px;">Core Values</span>
					{foreach $corevals as $coreval}
						<span class="title" onclick="showTopicDiv('{$coreval.ID}', 'vals');" style="margin:0px 0px 12px 12px;cursor:pointer;font-size:.9em;">{$coreval.title}</span>
					{/foreach}
				</div>
			</div>

			<div style="margin-left:200px;">
				{foreach from=$corevals item=coreval name=foo}
					<div id="vals:{$coreval.ID}" style="{if $smarty.foreach.foo.index != 0}display:none;{/if}min-height:375px;position:relative;">

						<span class="title" style="clear:none;font-size:1.5em;margin-bottom:20px;">{$coreval.title}</span>
						<div style="position:absolute;top:0;right:0;width:200px;">
							<a class="editButton" onclick="openDialog({$coreval.ID}, 'vals');">+<span>Edit!</span></a>
							<a class="deleteButton" onclick="admin_deleteItem({$coreval.ID}, 'vals');">+<span>Delete!</span></a>
						</div>

						<span class="title" style="font-size:.8em;clear:none;">Summary</span>
						<span class="summary" style="font-size:.8em;clear:none;margin-bottom:10px;">{$coreval.summary}</span>

						<span class="title" style="font-size:.8em;clear:none;">Description</span>
						<span class="summary" style="clear:none;">{$coreval.description}</span>

					</div>

				{/foreach}
			</div>
			<a class="addButton" onclick="openDialog('0', 'vals');" style="clear:both;float:left;">+<span>Add a Core Value!</span></a>
		</div>
		<div id="admin-dialog:vals" title="Two Rivers Core Values"></div><!--This line must be outside of 'adminVals'-->
	
	<!--SERMONS-->
	{elseif $section == 'admin_sermons'}
		<div id="constContainer">
			<div id="construction">
				This page is under construction!
			</div>
		</div>

	
	{/if}
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

{include file='footer.tpl'}
