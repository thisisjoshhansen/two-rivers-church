
		<div id="footer">
			<div class="copywrite">&copy;2010 two rivers church</div>
	
			<div class="links"><a href="/?page=giving">giving</a></div>
			<div class="links"><a href="/?page=footer&sub=sitemap">site map</a></div>
			<div class="links"><a href="/?page=footer&sub=contactus">contact us</a></div>
			{if $sessionType == 'admin'}
			<div class="links"><a href="/?page=login">admin logout</a></div>
			<div class="links"><a href="/?page=home">admin page</a></div>
			{elseif $sessionType == 'none'}
			<div class="links"><a href="/?page=login">admin login</a></div>
			{/if}
		</div>

	</div>
</body>

</html>
