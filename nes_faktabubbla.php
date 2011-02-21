<?php
/*
Plugin Name: NE:s faktabubbla
Plugin URI: http://www.ne.se/static/tools/bubbla.jsp
Description: Aktiverar NE:s faktabubbla på din sida. Faktabubblan dyker upp när muspekaren förs över ett ord som du länkat till i den fria delen av NE.se.
Version: 1.0
Author: Nationalencyklopedin
Plugin URI:  http://wordpress.org/extend/plugins/nes-faktabubbla/
Author URI: http://www.ne.se/
*/

function nebubble_add_bubble(){
   
        echo '<script src="http://media.ne.se/lib/js/external/jquery/jquery-current.js" type="text/javascript"></script>
<script src="http://widgets.ne.se/bubbla/nebubbla-min.js" type="text/javascript"></script>
<script type="text/javascript">NEBubbla.showSearch=true;</script>'; // add script tag to <head>
        
}


add_action('wp_head','nebubble_add_bubble'); // add ne bubble insertion code to wp_head function

?>