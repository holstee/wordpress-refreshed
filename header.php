<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head> 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
	<title>
		<?php
			global $page, $paged;
	
			wp_title( '|', true, 'right' );
	
			bloginfo( 'name' );
	
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
			if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?>
	</title>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- OLD bookmark icon 
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
	-->
	<!-- bookmark icon -->
	<link rel="shortcut icon" href="http://refreshed.is/wp-content/themes/author-child/images/favicon.png" />
	
	<!-- main stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<!-- media queries -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/media-queries.css" type="text/css" media="screen" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
	
	<!-- old google font 
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css' />
	-->
	<!-- new google font -->
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<!-- load scripts -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!-- conditional css -->
	<style type="text/css">
		a {
			color:<?php echo of_get_option('of_colorpicker', 'no entry' ); ?>;
		}
		.scroll .flex-control-nav li a.active {
			background:<?php echo of_get_option('of_colorpicker', 'no entry' ); ?>;
		}
		
		<?php if ( of_get_option('of_theme_css') ) { ?>
			<?php echo of_get_option('of_theme_css'); ?>
		<?php } ?>
	</style>

<!-- javascript for fixedside -->

	<script type='text/javascript'>
//<![CDATA[ 

  
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
/**
************************************************************
*************** THIS IS THE NAVIGATION CODE ****************
************************************************************
**/

$(function() {
    // Stick the #nav to the top of the window
    var nav = $('#nav');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
});


/**
************************************************************
*** THIS IS THE ADD-IN SMOOTH SCROLLING CODE ***************
*** (see: http://www.dwuser.com/education/content/quick-guide-adding-smooth-scrolling-to-your-webpages/ )
************************************************************
**/


/**
 * SmoothScroll
 * This helper script created by DWUser.com.  Copyright 2012 DWUser.com.  
 * Dual-licensed under the GPL and MIT licenses.  
 * All individual scripts remain property of their copyrighters.
 * Date: 10-Feb-2012
 * Version: 1.0.0
 */
if (!window['jQuery']) alert('The jQuery library must be included before the smoothscroll.js file.  The plugin will not work propery.');

/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 3/9/2009
 * @author Ariel Flesler
 * @version 1.4.1
 *
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 */
;
(function($) {
    var m = $.scrollTo = function(b, h, f) {
        $(window).scrollTo(b, h, f)
    };
    m.defaults = {
        axis: 'xy',
        duration: parseFloat($.fn.jquery) >= 1.3 ? 0 : 1
    };
    m.window = function(b) {
        return $(window).scrollable()
    };
    $.fn.scrollable = function() {
        return this.map(function() {
            var b = this,
                h = !b.nodeName || $.inArray(b.nodeName.toLowerCase(), ['iframe', '#document', 'html', 'body']) != -1;
            if (!h) return b;
            var f = (b.contentWindow || b).document || b.ownerDocument || b;
            return $.browser.safari || f.compatMode == 'BackCompat' ? f.body : f.documentElement
        })
    };
    $.fn.scrollTo = function(l, j, a) {
        if (typeof j == 'object') {
            a = j;
            j = 0
        }
        if (typeof a == 'function') a = {
            onAfter: a
        };
        if (l == 'max') l = 9e9;
        a = $.extend({}, m.defaults, a);
        j = j || a.speed || a.duration;
        a.queue = a.queue && a.axis.length > 1;
        if (a.queue) j /= 2;
        a.offset = n(a.offset);
        a.over = n(a.over);
        return this.scrollable().each(function() {
            var k = this,
                o = $(k),
                d = l,
                p, g = {},
                q = o.is('html,body');
            switch (typeof d) {
            case 'number':
            case 'string':
                if (/^([+-]=)?\d+(\.\d+)?(px)?$/.test(d)) {
                    d = n(d);
                    break
                }
                d = $(d, this);
            case 'object':
                if (d.is || d.style) p = (d = $(d)).offset()
            }
            $.each(a.axis.split(''), function(b, h) {
                var f = h == 'x' ? 'Left' : 'Top',
                    i = f.toLowerCase(),
                    c = 'scroll' + f,
                    r = k[c],
                    s = h == 'x' ? 'Width' : 'Height';
                if (p) {
                    g[c] = p[i] + (q ? 0 : r - o.offset()[i]);
                    if (a.margin) {
                        g[c] -= parseInt(d.css('margin' + f)) || 0;
                        g[c] -= parseInt(d.css('border' + f + 'Width')) || 0
                    }
                    g[c] += a.offset[i] || 0;
                    if (a.over[i]) g[c] += d[s.toLowerCase()]() * a.over[i]
                } else g[c] = d[i];
                if (/^\d+$/.test(g[c])) g[c] = g[c] <= 0 ? 0 : Math.min(g[c], u(s));
                if (!b && a.queue) {
                    if (r != g[c]) t(a.onAfterFirst);
                    delete g[c]
                }
            });
            t(a.onAfter);

            function t(b) {
                o.animate(g, j, a.easing, b &&
                function() {
                    b.call(this, l, a)
                })
            };

            function u(b) {
                var h = 'scroll' + b;
                if (!q) return k[h];
                var f = 'client' + b,
                    i = k.ownerDocument.documentElement,
                    c = k.ownerDocument.body;
                return Math.max(i[h], c[h]) - Math.min(i[f], c[f])
            }
        }).end()
    };

    function n(b) {
        return typeof b == 'object' ? b : {
            top: b,
            left: b
        }
    }
})(jQuery);

/**
 * jQuery.LocalScroll - Animated scrolling navigation, using anchors.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 3/11/2009
 * @author Ariel Flesler
 * @version 1.2.7
 **/
;
(function($) {
    var l = location.href.replace(/#.*/, '');
    var g = $.localScroll = function(a) {
        $('body').localScroll(a)
    };
    g.defaults = {
        duration: 1e3,
        axis: 'y',
        event: 'click',
        stop: true,
        target: window,
        reset: true
    };
    g.hash = function(a) {
        if (location.hash) {
            a = $.extend({}, g.defaults, a);
            a.hash = false;
            if (a.reset) {
                var e = a.duration;
                delete a.duration;
                $(a.target).scrollTo(0, a);
                a.duration = e
            }
            i(0, location, a)
        }
    };
    $.fn.localScroll = function(b) {
        b = $.extend({}, g.defaults, b);
        return b.lazy ? this.bind(b.event, function(a) {
            var e = $([a.target, a.target.parentNode]).filter(d)[0];
            if (e) i(a, e, b)
        }) : this.find('a,area').filter(d).bind(b.event, function(a) {
            i(a, this, b)
        }).end().end();

        function d() {
            return !!this.href && !! this.hash && this.href.replace(this.hash, '') == l && (!b.filter || $(this).is(b.filter))
        }
    };

    function i(a, e, b) {
        var d = e.hash.slice(1),
            f = document.getElementById(d) || document.getElementsByName(d)[0];
        if (!f) return;
        if (a) a.preventDefault();
        var h = $(b.target);
        if (b.lock && h.is(':animated') || b.onBefore && b.onBefore.call(b, a, f, h) === false) return;
        if (b.stop) h.stop(true);
        if (b.hash) {
            var j = f.id == d ? 'id' : 'name',
                k = $('<a> </a>').attr(j, d).css({
                    position: 'absolute',
                    top: $(window).scrollTop(),
                    left: $(window).scrollLeft()
                });
            f[j] = '';
            $('body').prepend(k);
            location = e.hash;
            k.remove();
            f[j] = d
        }
        h.scrollTo(f, b).trigger('notify.serialScroll', [f])
    }
})(jQuery);

// Initialize all .smoothScroll links
jQuery(function($) {
    $.localScroll({
        filter: '.smoothScroll'
    });
});
});//]]>  

</script>


	
</head>

<body <?php body_class(); ?>>
	
	<div id="wrapper" class="clearfix">
		
		<div id="main" class="clearfix">
			<div class="header-wrapper clearfix">
				<!-- grab the logo -->
				<?php if ( of_get_option('of_logo') ) { ?>
		        	<div class="logo-img">
						<a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php echo of_get_option('of_logo'); ?>" alt="<?php the_title(); ?>" /></a>
					</div>
				<!-- otherwise show the site title and description -->	
		        <?php } else { ?>
		        	
	            <div class="logo-default">
		            <div class="logo-text">
		            	<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a>
		            	<br />
		            	<span><?php bloginfo('description') ?></span>
		            </div>
	            </div>
		        <?php } ?>    
				
				<div class="top-bar">			
		        	<div class="menu-wrap">
		            	<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?>	
		            </div>
				</div><!-- top bar -->
			</div><!-- header wrapper -->
			
			<!-- secondary menu -->
			<?php if ( has_nav_menu( 'secondary' ) ) { ?>
				<div class="secondary-menu-wrap">
					<?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'secondary-menu')); ?>
				</div>
			<?php } ?>