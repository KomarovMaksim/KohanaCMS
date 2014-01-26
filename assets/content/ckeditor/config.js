/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.toolbar = [
        { name: 'tools', items: [ 'Source', '-', 'ShowBlocks' ] },
        ['Maximize'],
        { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley' ] },
        { name: 'links', items: [ 'Link', 'Unlink'] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
//        [ 'Styles'],
        [ 'Format'],
        [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ],
        {
            name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ],
            items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ]
        }
    ];

    config.filebrowserBrowseUrl = '/content/elfinder';
    config.filebrowserImageBrowseLinkUrl = '/content/elfinder';
    config.filebrowserImageBrowseUrl = '/content/elfinder';

    config.extraPlugins = 'richcombo,stylescombo';

    config.stylesSet = 'default';
    config.format_tags = 'h1;h2;div;p';

};


