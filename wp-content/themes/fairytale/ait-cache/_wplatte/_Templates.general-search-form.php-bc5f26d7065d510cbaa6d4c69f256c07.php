<?php //netteCache[01]000476a:2:{s:4:"time";s:21:"0.66507200 1438763132";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:87:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/general-search-form.php";i:2;i:1438763107;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/general-search-form.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'fmlwz6jreu')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<form action="<?php echo htmlSpecialChars($homeUrl) ?>" id="search-form" method="get" class="searchform">
	<div>
	   	<input type="text" name="s" placeholder="Поиск..." class="searchinput" />
		<input type="submit" name="submit"  value="Search" class="searchsubmit" />
		
	</div>
</form>

