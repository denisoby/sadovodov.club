<?php //netteCache[01]000463a:2:{s:4:"time";s:21:"0.13493500 1438709280";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:74:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/footer.php";i:2;i:1438709276;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/footer.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '3cw5mcgmfl')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
			<footer class="page-footer clearfix">
				<div class="footer-wrapper clearfix">
					<div class="wrapper">
<?php if(is_active_sidebar("footer-sidebar")): ?>
						<aside class="footer-sidebar clearfix">
<?php dynamic_sidebar('footer-sidebar') ?>
						</aside>
<?php endif ?>
					</div>
				</div>
				<aside class="footer-line">
					<div class="wrapper">
						<div class="footer-text left"><?php echo $themeOptions->general->footerText ?></div>
						<!--
						<div class="footer-menu right clearfix">
<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => 'nav', 'container_class' => 'footer-menu', 'menu_class' => 'menu clear', 'depth' => 1)) ?>
						</div>
						-->
					</div>
				</aside>
			</footer>

<?php wp_footer() ?>
			<?php echo WpLatteMacros::googleAnalyticsCode($themeOptions->general->gaCode) ?>

		</div>
	</body>
</html>