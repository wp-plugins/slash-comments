<?php
/*
Plugin Name: Slash Comments
Description: Adds &lt;slash:comments&gt; to the post RSS feeds. <a href="http://web.resource.org/rss/1.0/modules/slash/">More information about <code>slash</code></a>.
Author: rob1n
Version: 1.0
*/

function slash_comments_rss_ns() {
	echo ' xmlns:slash="http://purl.org/rss/1.0/modules/slash/" ' . "\n";
}

add_action( 'rss2_ns', 'slash_comments_rss_ns' );

function slash_comments() {
	echo '<slash:comments>' . get_comments_number() . '</slash:comments>' . "\n";
}

add_action( 'rss2_item', 'slash_comments' );

?>
