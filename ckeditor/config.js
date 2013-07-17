/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

    config.uiColor = '#AADC6E';
    config.resize_enabled = false;

    config.toolbar = 'MyToolbar';

    config.toolbar_MyToolbar = [
        ['Ajaxsave'],
        ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Scayt'],
        ['Undo','Redo','-','RemoveFormat'],
        ['Table','HorizontalRule','SpecialChar'],
        '/',
        ['Styles','Format'],
        ['Bold','Italic','Strike'],
        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
        ['Link','Unlink','Anchor'],
        ['Maximize','-','About']
    ];

    config.extraPlugins = 'ajaxsave';

};
