<?php
 /**
  * TinyMCE wysiwyg editor
  * @package ElggTinyMCE
  **/

function tinymce_init() {
    global $CONFIG;
    set_view_location('embed/addcontentjs', $CONFIG->pluginspath . 'tinymce/views/');
}

register_elgg_event_handler('init', 'system', 'tinymce_init', 9999);
