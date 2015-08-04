<?php
/**
 * AIT WordPress Theme
 *
 * Copyright (c) 2012, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */
$latteParams['post'] = WpLatte::createPostEntity($post, array('meta' => $pageOptions,));
$latteParams['post']->classes = implode(' ', get_post_class());
WpLatte::createTemplate(basename(__FILE__, '.php'), $latteParams)->render();