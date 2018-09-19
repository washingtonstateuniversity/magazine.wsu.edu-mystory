<?php

add_filter( 'spine_child_theme_version', 'wsm_my_story_theme_version' );

/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function wsm_my_story_theme_version() {
	return '0.0.1';
}
