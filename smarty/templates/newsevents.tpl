{include file='header.tpl'}

<img src="images/header_images/Header_D.png" alt="image D" />
<div id="colcontent">
	<div class="twoCol" id="col1">
		<span class="head">Latest News</span>
		{if $news}
			{foreach $news as $n}
				<span class="date" style="margin-top:.5em;">{$n.postdate}</span>
				<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=news&nid={$n.ID}">{$n.title}</a></span>
				<span class="summary">{$n.summary}</span>
			{/foreach}
		{else}
			<br />
			<span class="summary">There is no news!</span>
		{/if}
	</div>
	
	<div class="twoColLast"  id="col2">
		<span class="head">Upcomming Events</span>
		{if $events}
			{foreach $events as $event}
				<span class="date" style="margin-top:.5em;">{$event.date} @ {$event.time}</span>
				<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=events&eid={$event.ID}">{$event.title}</a></span>
				<span class="summary">{$event.summary}</span>
			{/foreach}
		{else}
			<br />
			<span class="summary">No upcomming events</span>
		{/if}
	</div>
</div>

{include file='footer.tpl'}
