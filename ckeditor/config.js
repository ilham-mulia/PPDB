/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
  config.filebrowserBrowseUrl = '/codeigniter_ppdb/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
  config.filebrowserImageBrowserUrl = '/codeigniter_ppdb/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
  config.filebrowserFlashBrowseUrl = '/codeigniter_ppdb/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
  config.filebrowserUploadUrl = '/codeigniter_ppdb/admin/kcfinder/upload.php?opener=ckeditor&type=files';
  config.filebrowserImageUploadUrl = '/codeigniter_ppdb/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
  config.filebrowserFlashUploadUrl = '/codeigniter_ppdb/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

};
