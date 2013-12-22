<?php
if (!isset($vars['plaintext']) || !$vars['plaintext']) {
    elgg_load_js('tinymce');
    elgg_load_js('elgg.tinymce');
}