<?php
/*
Plugin Name: Slash Comments
Description: Adds &lt;slash:comments&gt; to the post RSS feeds. <a href="http://web.resource.org/rss/1.0/modules/slash/">More information about <code>slash</code></a>.
Author: Robin
Author URL: http://robinadr.com/
Version: 2.0
*/

/* function slash_comments_rss_ns() {
	echo ' xmlns:slash="http://purl.org/rss/1.0/modules/slash/" ' . "\n";
}

add_action( 'rss2_ns', 'slash_comments_rss_ns' );

function slash_comments() {
	echo '<slash:comments>' . get_comments_number() . '</slash:comments>' . "\n";
}

add_action( 'rss2_item', 'slash_comments' ); */

function slash_comments_warning() {
?>
	<div><p><strong>WARNING</strong>: You have the Slash Comments plugin enabled. The functionality is already in the core, 
		so you are essentially loading an useless plugin. Please <strong>uninstall</strong> by deleting anything related to 
		<code>slash-comments</code> in your <code>wp-content/plugins</code> folder.</p></div>
<?php
}

add_action( 'admin_notices', 'slash_comments_warning' );

?>