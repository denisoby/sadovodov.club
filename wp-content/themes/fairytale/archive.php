<?php
/**
 * AIT WordPress Theme
 *
 * Copyright (c) 2012, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */
$latteParams['archive'] = new WpLatteArchiveEntity();
$latteParams['posts'] = WpLatte::createPostEntity($wp_query->posts);
WpLatte::createTemplate(__FILE__, $latteParams)->render();