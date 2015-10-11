<?php
/**
* Plugin Name: Feed Funnel
* Plugin URI: http://andrew.ahead4.biz/feedfunnel
* Description: Imports RSS feeds and allows management of them
* Version: 0.1
* Author: Andrew Fielden
* Author URI: http://andrew.ahead4.biz/f
* License: A "Slug" license name e.g. GPL12
*/

require_once('custom_types.php');

require_once('feed_manager.php');

add_action('admin_menu', 'add_blog_manage_menu');

function add_blog_manage_menu(){
	add_submenu_page( 'edit.php?post_type=blog', 'Manage Feeds', 'Manage Feeds', 'edit_pages' , 'manage_feeds', 'manage_feeds'); 
}

function manage_feeds(){
	send
	echo <<<END
<div class="wrap"><div id="icon-tools" class="icon32"></div>
<h2>Load A Feed</h2>
<form method="post">
Feed URI <input type="text" name="feed_uri"><br>
<input type="submit" value="Go">
</form>
</div
END;


	
}