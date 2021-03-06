/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'jquery',
    "js/jquery.noconflict",
    'mage/smart-keyboard-handler',
    'mage/mage',
    'mage/ie-class-fixer',
    'domReady!'
], function ($,no, keyboardHandler) {
    'use strict';
    function calcright($floatBar,$main,rightPos,$header) {
        var rightSize = 0;
        if($floatBar.length == 0 || $main.length == 0) return;
        rightSize = $main.offset().left + $main.innerWidth() + rightPos;
        $floatBar.css({
            right: rightSize,
            top: $header.outerHeight() +30,
            visibility: 'hidden'
        });
    }
	function calcleft($floatBar,$main,rightPos,$header) {
        var leftSize = 0;
        if($floatBar.length == 0 || $main.length == 0) return;
        leftSize = $main.offset().left + $main.innerWidth() + rightPos;
        $floatBar.css({
            left: leftSize,
            top: $header.outerHeight() +30,
            visibility: 'hidden'
        });
    }
    if ($('body').hasClass('checkout-cart-index')) {
        if ($('#co-shipping-method-form .fieldset.rates').length > 0 && $('#co-shipping-method-form .fieldset.rates :checked').length === 0) {
            $('#block-shipping').on('collapsiblecreate', function () {
                $('#block-shipping').collapsible('forceActivate');
            });
        }
    }
    $('.cart-summary').mage('sticky', {
        container: '#zoo-main-content'
    });
    $('.panel.header > .header.links').clone().appendTo('#store\\.links');
    keyboardHandler.apply();
    //merge jsclevertheme.js
    function heightTabproduct() {
        var product_gird_left_top = $('.product-gird-left-top');
        var product_gird_left_bottom = $('.product-gird-left-bottom');
        var product_item_H = product_gird_left_bottom.find('.products-grid .product-item').outerHeight();
        product_gird_left_bottom.parents().find('.product-gird-left-top .pic').css('height',product_item_H);
    }
    window.shopSidebarLeftToggle = function() {
        var shopSidebarLeft = $( 'body' ).find( '#shop-sidebar-left' ),
			shopSidebarLeftWidth = shopSidebarLeft.outerWidth();
        if ( $( '#shop-sidebar-left' ).length ) {
            $('#layered-nav-toggle').on('click', function (e) {
                e.preventDefault();
				if ($('body').hasClass('rtl')) {
					$('body').toggleClass('hide-sidebar');
					if ($('body').hasClass('hide-sidebar')) {
						shopSidebarLeft.css('margin-right', -shopSidebarLeftWidth - 1);
					} else {
						shopSidebarLeft.removeAttr('style');
					}
				}
				else {
					$('body').toggleClass('hide-sidebar');
					if ($('body').hasClass('hide-sidebar')) {
						shopSidebarLeft.css('margin-left', -shopSidebarLeftWidth - 1);
					} else {
						shopSidebarLeft.removeAttr('style');
					}
				}
            });
        }
    }
    window.shopSidebarRightToggle = function() {
        var shopSidebarRight = $( 'body' ).find( '#shop-sidebar-right' ),
			shopSidebarRightWidth = shopSidebarRight.outerWidth();
        if ( $( '#shop-sidebar-right' ).length ) {
            $('#layered-nav-toggle').on('click', function (e) {
                e.preventDefault();
				if ($('body').hasClass('rtl')) {
					$('body').toggleClass('hide-sidebar');
					if ($('body').hasClass('hide-sidebar')) {
						shopSidebarRight.css('margin-left', -shopSidebarRightWidth - 1);
					} else {
						shopSidebarRight.removeAttr('style');
					}
				}
				else {
					$('body').toggleClass('hide-sidebar');
					if ($('body').hasClass('hide-sidebar')) {
						shopSidebarRight.css('margin-right', -shopSidebarRightWidth - 1);
					} else {
						shopSidebarRight.removeAttr('style');
					}
				}
            });
        }
    }
    function _floatBar() {
        var self = this;
        var $main = $("main .zoo-main-content-area");
        var $header = $("header");
        var $floatBar = $(".vertical-menu-one-page");
        var headerHeight = $header.outerHeight() + $header.offset().top;
        var rightPos = 30;
		if ( $('body').hasClass('rtl')) {
			calcleft($floatBar,$main,rightPos,$header);
		}else {
			calcright($floatBar,$main,rightPos,$header);
		}   
        $(window).resize(function (event) {
			event.preventDefault();
			if ( $('body').hasClass('rtl')) {
				calcleft($floatBar,$main,rightPos,$header);
			}
			else {
				calcright($floatBar,$main,rightPos,$header);
			}            
        });
        $(window).scroll(function (event) {
            event.preventDefault();
            var $win = $(window);
            var newHeight = 0;
            if($('.sticky-wrapper.is-sticky').length > 0 && $(".box-market").length > 0){
                newHeight = $('.sticky-wrapper.is-sticky').height();
                var curWinTop = $win.scrollTop() + newHeight;
                var boxmarket = $(".box-market").offset().top - $('.smooth-section').height();

                var hT = $(".box-market").offset().top,
                    hH = $(".box-market").outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();

                $floatBar.css({
                    top: newHeight + 30
                })

                if (curWinTop > boxmarket) {
                    $floatBar.css({
                        visibility: 'visible'
                    })
                }
                else{
                    $floatBar.css({
                        visibility: 'hidden'
                    })
                }
                if (  wS > (hT+hH-wH)) {
                    $floatBar.css({
                        visibility: 'hidden'
                    })
                }
            }
        });
    }
    $(function(){
        var ev = new $.Event('classadded'),
            orig = $.fn.addClass;
        $.fn.addClass = function() {
            $(this).trigger(ev, arguments);
            return orig.apply(this, arguments);
        };
        $.fn.equalboxes = function(){
            var maxheight = 0,
                rowheight = 0,
                rowstart = 0,
                height = 0,
                boxes = [],
                top = 0,
                jel = null;

            //all equalheight (item will not align like a mess)
            this.each(function(){
                jel = $(this);
                height = jel.css({'height': '', 'min-height': ''}).removeClass('eq-first').height();

                if(height > maxheight){
                    maxheight = height;
                }

                jel.data('orgHeight', height);

            }).css('min-height', maxheight);

            //per row equal-height
            this.each(function() {
                jel = $(this);
                height = jel.data('orgHeight');
                top = jel.position().top;

                if (rowstart != top) {
                    boxes.length && $(boxes).css('min-height', rowheight + 1).eq(0).addClass('eq-first');

                    // set the variables for the new row
                    boxes.length = 0;
                    rowstart = jel.position().top;
                    rowheight = height;
                    boxes.push(this);

                } else {
                    boxes.push(this);
                    if(height > rowheight){
                        rowheight = height;
                    }
                }
            });

            boxes.length && $(boxes).css('min-height', rowheight + 1).eq(0).addClass('eq-first');

            return this;
        };
        $.fn.eqboxs = function(){

            //should be more than two elements
            if(this.length < 2){
                return this;
            }

            var elms = this,
                rzid = null,
                resize = function () {
                    elms.equalboxes();
                };

            $(window).load(function(){
                //trigger one
                elms.equalboxes();

                clearTimeout(rzid);
                rzid = setTimeout(resize, 2000); //just in case something new loaded
            }).on('resize.eqb', function(){
                clearTimeout(rzid);
                rzid = setTimeout(resize, 200);
            });

            //trigger one
            elms.equalboxes();

            return this;
        };
        // equal height function
        $('.equal-height').children().eqboxs();
        //canvas menu close
        $('.close-canvas').click(function(){
            $('html').removeClass('nav-open');
        });
        $('.header.links').clone().appendTo('#store\\.links');
        $("#scroll-to-top").hide();
        $("#scroll-to-top").click(function () {
            $("body, html").animate({scrollTop: 0}, 500);
            return false;
        });
        $(window).scroll(function(e){
            if($(window).scrollTop() > 0){
                $("#scroll-to-top").fadeIn('slow');
                // Add class is-sticky to header-content :)
                if($('.sticky-wrapper').hasClass('is-sticky')){
                    $('.header-content').addClass('is-sticky');
                }
            }else{
                if($("#scroll-to-top").is(':visible')){
                    $("#scroll-to-top").fadeOut('slow');
                }
                // Remove class is-sticky to header-content :)
                $('.header-content').removeClass('is-sticky');
            }
			if ($('.minicart-wrapper').hasClass('active')){
				$('.nav-title-cart').css('z-index','5');
			}
			else{
				$('.nav-title-cart').css('z-index','48');
			}
        });
        //Menu One Page Home 09
        if($('.vertical-menu-one-page').length > 0 ) {
            $('.vertical-menu-one-page').onePageNav({
                currentClass: 'active',
                changeHash: false,
                scrollSpeed: 750
            });
        }
        var heightimg = $( window ).height();
        // Fix height Home 08
        $('.home08 .grid .figure').height(heightimg);
        /*$('.home-08 .block-search .action.search').on('click',function(e){
            $(this).prev().toggle("slide", { direction: "right" }, 1000);
            $(this).parent().toggleClass('active');
            $(this).parent().parent().parent().parent().toggleClass('active');
        });*/
        // jQuery show/hide MY CART when Add to cart(11/08/2016)
        $(".minicart-wrapper").append( "<div class='minicart-wrapper-main'></div>" );
        $('.minicart-wrapper .minicart-wrapper-main').click(function(){
            $(this).parent().removeClass('active');
            $('.action.showcart').removeClass('active');
            $('.ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-front.mage-dropdown-dialog').hide();
        });
        $('#mini-cart .action.delete').click(function(){
            $('.action-primary.action-accept').click();
        });
        //          End Show/hide My cart
        $('.home-08 .page-wrapper .page-header .top-menu .menu').addClass('container');
        $('.page-footer .copyright span').wrap('<div class="container"></div>');
        $(window).resize(function(){
            heightTabproduct();

            var windowWidth = $(window).width();
            if(windowWidth <= 767){
                if($('#layered-nav-toggle').hasClass('active')) $('#layered-nav-toggle').removeClass('active');
                if($('#zoo-layer-navigation .zoo-sidebar-additional').length != 1) {
                    $('.zoo-sidebar-additional').appendTo('#zoo-layer-navigation .block-content .filter-options');
                }
            }else{
                $('.zoo-sidebar-additional').appendTo('.wrap-additional');
            }
        });
        $('#zoo-layer-navigation .filter-title strong').on('click',function(e){
            $('#zoo-layer-navigation').removeClass('active').find('.filter').removeClass('active');
            $('body').removeClass('filter-active');
        });
        $('body.filter-active .transparent-bg').on('click',function(e){
            $('#zoo-layer-navigation').removeClass('active').find('.filter').removeClass('active');
            $('body').removeClass('filter-active');
        });
        $('#layered-nav-toggle').on('click',function(e){
            if($(window).width() < 768){
                $('#zoo-layer-navigation').addClass('active').find('.filter').addClass('active');
                $('body').addClass('filter-active');
            }

        });
    });
    $(window).load(function(){
        if($(window).width() <= 767){
            // cookielaw
            $("#v-cookielaw").addClass("zoo-accordion-show");
            $("#v-cookielaw h3").on('click',function(){
                if($(this).parent().find('.v-message').is(":visible")){
                    $(this).parent().addClass("zoo-accordion-show");
                }else{
                    $(this).parent().removeClass("zoo-accordion-show");
                }
                $(this).parent().find('.v-message').toggle(400);
            });
        }
        if($(window).width() > 1200 && $('.color-section .box-product-grid').length > 0){
            // equal height home 09 market
            $('.color-section').each(function(){
                var tab_style2 = $(this).find('.box-product-grid').outerHeight();
                $(this).find('.slide-home01 img').height(tab_style2 )
            })
        }
        $(".zoo-accordion-footer").addClass("zoo-accordion-show");
        $(".zoo-accordion-footer").on('click',function(){
            if($(this).parent().find('.zoo-footer-bottom-content').is(":visible")){
                $(this).addClass("zoo-accordion-show");
            }else{
                $(this).removeClass("zoo-accordion-show");
            }
            $(this).parent().find('.zoo-footer-bottom-content').toggle(400);
        });
        // search dropdown
        $('.search-dropdown').click(function(event) {
            event.stopPropagation();
            $(this).children('.search-option-list').slideToggle();
            $('.search-option-list span').click(function(){
                var select = $(this).text();
                var vs = $(this).parent("li").val();
                $('.search-option-list li').removeClass('selected');
                $(this).parent("li").addClass('selected');
                $(this).closest('.search-dropdown').children('.search-select').text(select);
                $('#cat-search').val(vs);
            });
        });
        // add title product sticky in product detail
        var title_product = jQuery('.catalog-product-view .page-title-wrapper.product').html();
        jQuery('.box-price').prepend(title_product);

        $(document).click(function(){
            $('.search-dropdown .search-option-list').slideUp();
        });
        //vertical menu
        var totalHeight = 0;
        $(".zoo-main-content-area .clever-vertical-menu > ul").children().each(function(){
            totalHeight = totalHeight + $(this).outerHeight(true);
            $(this).children('.clever-mega-menu-sub').css('top', -totalHeight);
        });
        heightTabproduct();
        _floatBar();
        shopSidebarLeftToggle();
        shopSidebarRightToggle();
    }(jQuery));
});