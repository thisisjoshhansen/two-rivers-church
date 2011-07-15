{include file='header.tpl'}
<div id="loginContainer">
	{if $msg}
		{if $msg == 'bad'}
			<div style="width:100%;text-align:center;margin-bottom:40px;">
				Failed attempt!
			</div>
		{elseif $msg == 'redir'}
			<div style="width:100%;text-align:center;margin-bottom:40px;">
				You must be logged in to view this page!
			</div>
		{/if}
	{/if}

	{if $sessionType == 'none'}
	<div id="logFormDiv">
		<form action="controls/login.php" id="login" name="login" method="POST">
			<span class="head" style="font-size:1em; margin:0px;">user name</span>
			<input type="text" id="login_userName" name="login_userName" style="margin-bottom:10px;border:#000 2px inset"><br />
			<span class="head" style="font-size:1em; margin-bottom:0px">password</span>
			<input type="password" id="login_userPass" name="login_userPass" style="margin-bottom:20px;border:#000 2px inset">
			<input type="submit" value="login">
		</form>
	</div>

	{elseif $sessionType == 'admin'}
	<div id="logFormDiv">
		<form action="controls/logout.php" id="logout" name="logout" method="POST">
			<center>
			<span class="head" style="font-size:1em; margin-bottom:0px; white-space:pre-wrap;">Would you like to logout of the admin page?</span>
			<input type="submit" value="logout" style="margin-top:20px">
			</center>
		</form>
	</div>
	{/if}
</div>
{include file='footer.tpl'}
