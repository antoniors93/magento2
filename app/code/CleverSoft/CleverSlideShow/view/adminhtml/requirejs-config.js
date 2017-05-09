/**
 * Copyright © 2016 Codazon. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
	map: {
		'*': {
			slideLayout: 'CleverSoft_CleverSlideShow/js/slider-layout',
			flexsliderJS: 'CleverSoft_CleverSlideShow/js/jquery.flexslider',
			jqueryTmpl: "CleverSoft_CleverSlideShow/js/jquery.tmpl",
			cleverJqueryUi: "CleverSoft_CleverSlideShow/js/jquery-ui.min",
			wysiwygEditorImg: 'CleverSoft_CleverSlideShow/js/wysiwyg-editor-img'
		}
	},
	shim:{
		"CleverSoft_CleverSlideShow/js/slider-layout": ["jqueryTmpl","cleverJqueryUi","wysiwygEditorImg"],
		"CleverSoft_CleverSlideShow/js/jquery.tmpl": ["jquery"],
		"CleverSoft_CleverSlideShow/js/jquery.flexslider": ["jquery"],
		"CleverSoft_CleverSlideShow/js/jquery-ui.min": ["jquery/jquery-ui"],
		"CleverSoft_CleverSlideShow/js/wysiwyg-editor-img": ["jquery"]
	}
};
