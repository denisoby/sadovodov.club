<?php //netteCache[01]000473a:2:{s:4:"time";s:21:"0.52233800 1441808008";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:84:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/posts-loop.php";i:2;i:1437883843;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/posts-loop.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'vysvvst3wc')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>

<section class="blog clearfix">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($posts) as $post): ?>
	<article id="post-<?php echo htmlSpecialChars($post->id) ?>"<?php if ($_l->tmp = trim(implode(" ", array_unique(array($post->htmlClasses, !$post->thumbnailSrc ? 'no-thumbnail':null, 'clearfix'))))) echo ' class="' . NTemplateHelpers::escapeHtml($_l->tmp) . '"' ?>>
<?php NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/single-content", ""), array() + get_defined_vars(), $_l->templates['vysvvst3wc'])->render() ?>
	</article>

<?php if ($post->isSingle): NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("comments", ""), array() + get_defined_vars(), $_l->templates['vysvvst3wc'])->render() ;endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
</section>
