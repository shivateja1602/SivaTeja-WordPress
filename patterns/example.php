<?php

register_block_pattern(
    'simple-theme/hero-section',
    array(
        'title'       => __('Hero Section', 'simple-theme'),
        'description' => _x('A hero section with title, description and call-to-action button.', 'Pattern description', 'simple-theme'),
        'content'     => '<!-- wp:group {"align":"full","style":{"color":{"background":"#2c3e50"},"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"textColor":"white"} -->
<div class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#2c3e50;padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
<h1 class="has-text-align-center has-large-font-size">Welcome to Our Website</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">We create amazing experiences for our users with clean design and powerful functionality.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"border":{"radius":"4px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" style="border-radius:4px">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
        'categories'  => array('simple-theme'),
        'keywords'    => array('hero', 'banner', 'header'),
    )
);

register_block_pattern_category(
    'simple-theme',
    array('label' => __('Simple Theme', 'simple-theme'))
);
?>
