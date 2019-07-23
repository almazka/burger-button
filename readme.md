__*Attention!*__

I do not use this plugin because it has a bug. The bug is that if you repeatedly press the burger button, the animation of the open and closed buttons becomes incorrect.
This problem is solved by adding the `.stop()` method to the `$('.hmbrgr')` element in the click handler function.
But here, the click handler for the jQuery element `$('.hmbrgr')` is in the plugin file.

In my opinion - this is a big inconvenience - to use the whole jQuery plugin to animate such a small thing as the movement of a burger button when it pressed.

The appearance of the mobile menu is still prescribed separately in the js file manually, so I no longer use this plugin and the plug-in files are here as a relic of the old times, for research purposes.

Instead of jQuery for animating a burger button, I use css animation from here - https://jonsuh.com/hamburgers/

---

### This is a jquery hamburger button library from Moreno Di Domenico v0.0.2 which earlier located on <a href="https://github.com/MorenoDiDomenico/jquery-hmbrgr" target="_blank">https://github.com/MorenoDiDomenico/jquery-hmbrgr</a>

# Burger Button
Burger Button for responsive menu

##### Create the element in your HTML:

```html
<a href="#" class="hmbrgr"></a>
```

##### Include jQuery:

```html
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
```

##### Include html:

```html
<link rel="stylesheet" type="text/css" href="/css/animate.css" />
<link rel="stylesheet" type="text/css" href="/css/hmbrgr.min.css" />
<script src="/js/jquery.hmbrgr.min.js"></script>
```

##### Or Sass:
```css
@import url(../css/animate.css);
@import url(../css/hmbrgr.min.css);
```

##### In your main.js:

```javascript
$('.hmbrgr').hmbrgr({
	width     : 60, 		// optional - set hamburger width
	height    : 50, 		// optional - set hamburger height
	speed     : 200,		// optional - set animation speed
	barHeight : 8,			// optional - set bars height
	barRadius : 0,			// optional - set bars border radius
	barColor  : '#ffffff',	// optional - set bars color
	onInit    : function(){},	// optional - callback when the hamburger is initialize
	onOpen    : function(){},	// optional - callback when the hamburger is opening
	onClose   : function(){}	// optional - callback when the hamburger is closing
});
```

---

## For WP

#### Add to WP functions.php:

```php
/* include styles */
wp_register_style( 'animateStyles', get_stylesheet_directory_uri() . '/css/animate.css' );
wp_register_style( 'hmbrgrStyles', get_stylesheet_directory_uri() . '/css/hmbrgr.min.css' );

/* include scripts */
wp_register_script( 'hmbrgrScripts', get_stylesheet_directory_uri() . '/js/jquery.hmbrgr.min.js', array('jquery') );

wp_enqueue_style( 'animateStyles' );
wp_enqueue_style( 'hmbrgrStyles' );

wp_enqueue_script( 'hmbrgrScripts' );
```

#### Add WP Menu structure

```php
wp_nav_menu(
	array(
		'menu'              => 'primary',
		'theme_location'    => 'primary',
		'depth'             => 2,
		'container'         => 'div',
		'container_class'   => 'collapse navbar-collapse',
		'container_id'      => 'primary-navbar-collapse',
		'menu_class'        => 'nav navbar-nav',
		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		'walker'            => new wp_bootstrap_navwalker(),
	)
);
```

##### In your main.js:

```javascript
$('.hmbrgr').hmbrgr({
	width     : 60, 		// optional - set hamburger width
	height    : 50, 		// optional - set hamburger height
	speed     : 200,		// optional - set animation speed
	barHeight : 8,			// optional - set bars height
	barRadius : 0,			// optional - set bars border radius
	barColor  : '#ffffff',	// optional - set bars color
	onInit    : function(){},	// optional - callback when the hamburger is initialize
	onOpen    : function(){},	// optional - callback when the hamburger is opening
	onClose   : function(){}	// optional - callback when the hamburger is closing
});

$('.hmbrgr').click(function() {
	$('#primary-navbar-collapse').stop().slideToggle().toggleClass('animated slideInTop');
});
```
