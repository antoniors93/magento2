/**
 * Copyright © 2016. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
	map: {
		'*': {
			menuLayout: 'CleverSoft_MegaMenus/js/menu-layout',
			jqueryTmpl: "CleverSoft_MegaMenus/js/jquery.tmpl",
			cleverJqueryUi: "CleverSoft_MegaMenus/js/jquery-ui.min",
			categoryChooser: "CleverSoft_MegaMenus/js/categorychooser",
			wysiwygEditor: 'CleverSoft_MegaMenus/js/wysiwyg-editor'
		}
	},
	shim:{
		"CleverSoft_MegaMenus/js/menu-layout": ["jqueryTmpl","cleverJqueryUi","categoryChooser","wysiwygEditor"],
		"CleverSoft_MegaMenus/js/jquery.tmpl": ["jquery"],
		"CleverSoft_MegaMenus/js/jquery-ui.min": ["jquery/jquery-ui"],
		"CleverSoft_MegaMenus/js/wysiwyg-editor": ["jquery"]
	}
};
