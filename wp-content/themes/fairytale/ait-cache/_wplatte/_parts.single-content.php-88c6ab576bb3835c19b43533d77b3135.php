<?php //netteCache[01]000477a:2:{s:4:"time";s:21:"0.24586600 1438718609";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:88:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/single-content.php";i:2;i:1438718605;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/single-content.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'iyajx0rx4c')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<header class="entry-header clearfix">
<?php if (!$site->isSearch): ?>
		<div class="left-meta clearfix">
<?php if (!$post->hasFormat('aside') and !$post->hasFormat('link') and $post->type == 'post'): NCoreMacros::includeTemplate("entry-date.php", $template->getParams(), $_l->templates['iyajx0rx4c'])->render() ;endif ?>
			<div class="comments-count clearfix">
				<span class="comments-count"><?php echo $post->commentsCount ?></span>
			</div>
		</div>
		<div class="tool-buttons">
			<span class="post-links"><a href="<?php if (isset($post)): echo htmlSpecialChars($post->permalink) ;endif ?>
" class="share-link" rel="prettySociable"><?php echo NTemplateHelpers::escapeHtml(_x('share', 'share button', 'ait'), ENT_NOQUOTES) ?></a></span>
<?php edit_post_link(__("Edit", "ait"), "<span class=\"edit-link\">", "</span>", $post->id) ?>
		</div>
<?php if ($post->thumbnailUrl): ?>
			<div class="entry-thumbnail clearfix">
<?php if ($site->isSingle): if (($site->isActiveWidgetArea('post-sidebar'))): ?>
					<img src="<?php echo AitImageResizer::resize($post->thumbnailUrl, array('w' => 723, 'h' => 280)) ?>
" alt="<?php echo htmlSpecialChars($post->title) ?>" />
<?php else: ?>
					<img src="<?php echo AitImageResizer::resize($post->thumbnailUrl, array('w' => 1000, 'h' => 500)) ?>
" alt="<?php echo htmlSpecialChars($post->title) ?>" />
<?php endif ;else: if (($site->isActiveWidgetArea('blog-sidebar'))): ?>
					<img src="<?php echo AitImageResizer::resize($post->thumbnailUrl, array('w' => 623, 'h' => 280)) ?>
" alt="<?php echo htmlSpecialChars($post->title) ?>" />
<?php else: ?>
					<img src="<?php echo AitImageResizer::resize($post->thumbnailUrl, array('w' => 900, 'h' => 500)) ?>
" alt="<?php echo htmlSpecialChars($post->title) ?>" />
<?php endif ;endif ?>
			</div>
<?php endif ;endif ?>

<?php if (!$site->isSearch): if (!$site->isSingle): ?>
		<h2 class="entry-title <?php if ($post->thumbnailUrl != ''): ?>image-present<?php endif ?>">
			<a class="<?php if ($post->thumbnailUrl != ''): ?>image-present<?php endif ?>
" href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars($template->printf(__('Permalink to %s', 'ait'), $post->title)) ?>
" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
		</h2>
<?php endif ;else: ?>
		<h2 class="entry-title">
			<a class="<?php if ($post->thumbnailUrl != ''): ?>image-present<?php endif ?>
" href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars($template->printf(__('Permalink to %s', 'ait'), $post->title)) ?>
" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
		</h2>
<?php endif ?>
</header>

<?php if ($site->isSingle): ?>
<div class="entry-content">
	<?php echo $post->content ?>

</div><!-- .entry-content -->
<?php else: ?>
<div class="entry-content">
	<?php echo $post->excerpt ?>

</div><!-- .entry-summary -->
<?php endif ?>
<!--
<?php if (!$site->isSearch): if (!$site->isSingle): ?>
	<footer class="entry-meta">
<?php NCoreMacros::includeTemplate("post-meta.php", $template->getParams(), $_l->templates['iyajx0rx4c'])->render() ;if ($post->isSingle and $post->author->bio and $post->isMultiAuthor): NCoreMacros::includeTemplate("author-bio.php", $template->getParams(), $_l->templates['iyajx0rx4c'])->render() ;endif ?>
	</footer>
<?php endif ;endif ?>
-->
