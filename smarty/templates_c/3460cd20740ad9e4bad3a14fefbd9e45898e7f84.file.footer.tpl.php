<?php /* Smarty version Smarty-3.0.7, created on 2011-06-30 08:49:50
         compiled from "/var/trc/smarty/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96020904e0c9b1e793d82-01433713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3460cd20740ad9e4bad3a14fefbd9e45898e7f84' => 
    array (
      0 => '/var/trc/smarty/templates/footer.tpl',
      1 => 1309448937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96020904e0c9b1e793d82-01433713',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

		<div id="footer">
			<div class="copywrite">&copy;2010 two rivers church</div>
	
			<div class="links"><a href="/?page=giving">giving</a></div>
			<div class="links"><a href="/?page=footer&sub=sitemap">site map</a></div>
			<div class="links"><a href="/?page=footer&sub=contactus">contact us</a></div>
			<?php if ($_smarty_tpl->getVariable('sessionType')->value=='admin'){?>
			<div class="links"><a href="/?page=login">admin logout</a></div>
			<div class="links"><a href="/?page=home">admin page</a></div>
			<?php }elseif($_smarty_tpl->getVariable('sessionType')->value=='none'){?>
			<div class="links"><a href="/?page=login">admin login</a></div>
			<?php }?>
		</div>

	</div>
</body>

</html>
