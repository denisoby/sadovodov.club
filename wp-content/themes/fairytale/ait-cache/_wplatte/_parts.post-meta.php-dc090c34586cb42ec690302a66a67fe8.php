<?php //netteCache[01]000472a:2:{s:4:"time";s:21:"0.57477300 1441808008";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:83:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/post-meta.php";i:2;i:1437883843;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/post-meta.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '7b42t100qe')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if ($post->isSticky and !$site->isPaged and $site->isHome): ?>
<span class="featured-post"><?php echo NTemplateHelpers::escapeHtml(__('Featured post', 'ait'), ENT_NOQUOTES) ?></span>
<?php endif ?>
<span><strong><?php echo NTemplateHelpers::escapeHtml(__('Posted:', 'ait'), ENT_NOQUOTES) ?>
 </strong><a class="url fn n ln" href="<?php echo htmlSpecialChars($post->author->postsUrl) ?>
" title="<?php echo htmlSpecialChars(__('View all posts by', 'ait')) ?> <?php echo htmlSpecialChars($post->author->name) ?>
" rel="author"> <?php echo NTemplateHelpers::escapeHtml($post->author->name, ENT_NOQUOTES) ?></a></span>
	<span>
<?php if ($post->categories): ?>
			<strong><?php echo NTemplateHelpers::escapeHtml(__('Categories:', 'ait'), ENT_NOQUOTES) ?>
</strong> <?php echo $post->categories ?>

<?php endif ?>
		</span>

<?php if ($post->tags(', ')): ?>
<span class="tags-links"><strong><?php echo NTemplateHelpers::escapeHtml(__('Tags: ', 'ait'), ENT_NOQUOTES) ?>
</strong><?php echo $post->tags(', ') ?></span>
<?php endif ;
