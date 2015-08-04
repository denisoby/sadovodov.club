<?php
/**
 * AIT WordPress Theme
 *
 * Copyright (c) 2013, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */
$latteParams['post'] = WpLatte::createPostEntity($GLOBALS['wp_query']->post, array('meta' => $GLOBALS['pageOptions']));
$latteParams['post']->classes = implode(' ', get_post_class());
WpLatte::createTemplate(basename(__FILE__, '.php'), $latteParams)->render();