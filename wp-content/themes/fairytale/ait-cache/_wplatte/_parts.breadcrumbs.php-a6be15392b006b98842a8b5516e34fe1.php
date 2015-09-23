<?php //netteCache[01]000474a:2:{s:4:"time";s:21:"0.51668800 1441808008";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:85:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/breadcrumbs.php";i:2;i:1438849900;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/breadcrumbs.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '4y4axp78z9')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div class="toolbar clearfix">
	<div class="wrapper">
		<span class="breadcrumbs"><?php echo WpLatteFunctions::breadcrumbs(array('delimiter' => "")) ?></span>
	</div>
</div>
