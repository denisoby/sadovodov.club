<?php //netteCache[01]000463a:2:{s:4:"time";s:21:"0.19336300 1437883968";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:74:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/single.php";i:2;i:1437883843;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/single.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'd5y88trqyq')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc7cd963301_content')) { function _lbc7cd963301_content($_l, $_args) { extract($_args)
?>
<section class="section content-section blog-section">
	<div id="container" class="subpage clearfix <?php if(is_active_sidebar("post-sidebar")): else: ?>
onecolumn<?php endif ?>">
		<div class="wrapper">
			<div id="content" class="entry-content mainbar clearfix" role="main">
				<div class="content-wrapper clearfix">
<?php NCoreMacros::includeTemplate("parts/content-nav.php", array('location' => 'nav-above') + $template->getParams(), $_l->templates['d5y88trqyq'])->render() ?>
					<article id="post-<?php echo htmlSpecialChars($post->id) ?>"<?php if ($_l->tmp = trim(implode(" ", array_unique(array($post->htmlClasses, !$post->thumbnailSrc ? 'no-thumbnail':null, 'clearfix'))))) echo ' class="' . NTemplateHelpers::escapeHtml($_l->tmp) . '"' ?>>
<?php NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("parts/single-content", ""), array() + get_defined_vars(), $_l->templates['d5y88trqyq'])->render() ?>
					</article>
<?php NCoreMacros::includeTemplate("parts/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['d5y88trqyq'])->render() ?>
				</div>
			</div>

<?php if(is_active_sidebar("post-sidebar")): ?>
			<div class="page-sidebar post-sidebar right clearfix">
<?php dynamic_sidebar('post-sidebar') ?>
			</div>
<?php endif ?>

<?php if ($post->isSingle): NCoreMacros::includeTemplate(WpLatteMacros::getTemplatePart("comments", ""), array() + get_defined_vars(), $_l->templates['d5y88trqyq'])->render() ;endif ?>
		</div>
	</div>
</section>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = true; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
$_l->extends = $layout ?>


<?php if (isset($post)): $sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null ?>

<?php isset($post->options('service-boxes')->overrideGlobal) ? $sectionB = 'sectionB' : $sectionB = 'xb' ;//
// block $sectionB
//
if (!function_exists($_l->blocks[$sectionB][] = '_lbec66d2dd9d__sectionB')) { function _lbec66d2dd9d__sectionB($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/service-boxes.php", array('options' => $post->options('service-boxes')) + $template->getParams(), $_l->templates['d5y88trqyq'])->render() ;}} call_user_func(reset($_l->blocks[$sectionB]), $_l, get_defined_vars()) ?>

<?php isset($post->options('testimonials')->overrideGlobal) ? $sectionC = 'sectionC' : $sectionC = 'xc' ;//
// block $sectionC
//
if (!function_exists($_l->blocks[$sectionC][] = '_lb82626b32b7__sectionC')) { function _lb82626b32b7__sectionC($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/testimonials.php", array('options' => $post->options('testimonials')) + $template->getParams(), $_l->templates['d5y88trqyq'])->render() ;}} call_user_func(reset($_l->blocks[$sectionC]), $_l, get_defined_vars()) ?>

<?php isset($post->options('icon-menu')->overrideGlobal) ? $sectionD = 'sectionD' : $sectionD = 'xd' ;//
// block $sectionD
//
if (!function_exists($_l->blocks[$sectionD][] = '_lbfee644c21b__sectionD')) { function _lbfee644c21b__sectionD($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/icon-menu.php", array('options' => $post->options('icon-menu')) + $template->getParams(), $_l->templates['d5y88trqyq'])->render() ;}} call_user_func(reset($_l->blocks[$sectionD]), $_l, get_defined_vars()) ?>

<?php isset($post->options('partners')->overrideGlobal) ? $sectionE = 'sectionE' : $sectionE = 'xe' ;//
// block $sectionE
//
if (!function_exists($_l->blocks[$sectionE][] = '_lb93d95485fb__sectionE')) { function _lb93d95485fb__sectionE($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/partners.php", array('options' => $post->options('partners')) + $template->getParams(), $_l->templates['d5y88trqyq'])->render() ;}} call_user_func(reset($_l->blocks[$sectionE]), $_l, get_defined_vars()) ;endif ;
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
