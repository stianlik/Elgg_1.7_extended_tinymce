<?php

/**
 * TinyMCE wysiwyg editor
 * @package ElggTinyMCE
 */
function tinymce_init() {

    // Add TinyMCE support for longtext field
    elgg_extend_view('input/longtext', 'tinymce/init');
    elgg_register_js('tinymce', elgg_normalize_url('mod/tinymce/vendor/tinymce/js/tinymce/tinymce.min.js'), 'head', 500);
    elgg_register_js('elgg.tinymce', elgg_normalize_url('mod/tinymce/views/default/tinymce/init.js'), 'footer', 501);

    // Support embed pluign
    elgg_extend_view('embed/custom_insert_js', 'tinymce/embed_custom_insert_js');
}

register_elgg_event_handler('init', 'system', 'tinymce_init', 9999);