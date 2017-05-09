/**
 * Copyright © 2016 Codazon. All rights reserved.
 * See COPYING.txt for license details.
 */

var config = {
    map: {
        '*': {
            flexsliderJS: 'CleverSoft_CleverSlideShow/js/jquery.flexslider',
            froogaLoop: 'CleverSoft_CleverSlideShow/js/froogaloop2.min'
        }
    },
    shim:{
        "CleverSoft_CleverSlideShow/js/jquery.flexslider": ["jquery"],
        "CleverSoft_CleverSlideShow/js/froogaloop2.min": ["jquery"]
    }
};
