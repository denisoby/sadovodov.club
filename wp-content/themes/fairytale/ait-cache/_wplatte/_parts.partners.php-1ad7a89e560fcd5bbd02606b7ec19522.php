<?php //netteCache[01]000471a:2:{s:4:"time";s:21:"0.53821500 1437883955";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:82:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/partners.php";i:2;i:1437883843;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/partners.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'udeq4la20h')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($options->partnersDisplay) and $options->partnersDisplay): $partners = $site->create('partners', $options->partnersCategory) ;if ($partners): ?>
	<section class="section partners-section" style="background-color: <?php echo $options->partnersBackgroundColor ?>">
		<div class="partners-container wrapper">
			<ul id="partners-list" class="partners clearfix">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($partners) as $partner): ?>
					<li>
						<a href="<?php echo htmlSpecialChars($partner->options->partnersLink) ?>" title="<?php echo htmlSpecialChars($partner->title) ?>">
							<span class="thumb"><img src="<?php echo htmlSpecialChars($partner->thumbnailSrc) ?>
" alt="<?php echo htmlSpecialChars($partner->title) ?>" /></span>
						</a>
					</li>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
			</ul>
		</div>
	</section>
<?php endif ;endif ;
