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

##### Include plugin's code:

```html
	<link rel="stylesheet" type="text/css" href="/css/hmbrgr.min.css" />
	<script src="/js/jquery.hmbrgr.min.js"></script>
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

### Add to WP functions.php:

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

### Add WP Menu structure

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
```