elgg.provide('elgg.tinymce');

elgg.tinymce.init = function() {
    tinyMCE.init({
        selector: '.elgg-input-longtext',
        language: elgg.get_language(),
        relative_urls : false,
        remove_script_host : false,
        document_base_url : elgg.get_site_url(),
        plugins: 'autolink autosave code image link lists paste preview table visualblocks',
        menubar: false,
        toolbar_items_size: "small",
        browser_spellcheck : true,
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | link image | visualblocks code",
        style_formats: [
            { title: 'Header 1', block: 'h1' },
            { title: 'Header 2', block: 'h2' },
            { title: 'Header 3', block: 'h3' },
            { title: 'Header 4', block: 'h4' },
            { title: 'Header 5', block: 'h5' },
            { title: 'Paragraph', block: 'p' }
        ]
    });
};

elgg.register_hook_handler('init', 'system', elgg.tinymce.init);