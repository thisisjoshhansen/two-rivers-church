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
				{foreach $topNavObjs as $topNavObj}
				<li onmouseover="dispHoverUL();" onmouseout="dispActiveUL();"><a href="/?page={$topNavObj.link}" {if $page eq $topNavObj.link}id="topNav_active"{/if} class="{$topNavObj.link}">{$topNavObj.title}</a>
					{if $topNavObj.subs}
					<ul {if $page eq $topNavObj.link} id="id_subNav_activeUL" class="subNav_activeUL" {/if}>
					{foreach from=$topNavObj.subs key=subTitle item=subLink}
						<li><a href="/?page={$topNavObj.link}&sub={$subLink}" {if $sub eq $subLink}id="subNav_active"{/if} class="{$subLink}">{$subTitle}</a></li>
					{/foreach}
					</ul>
					{/if}
				</li>
				{/foreach}
			</ul>
		</div>

