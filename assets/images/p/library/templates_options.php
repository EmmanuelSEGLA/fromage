<?php theme_add_template_option('Blog Template', 'blogTemplate', __('Blog Template', 'default')); ?>
<?php theme_add_template_query_option('Blog Template', 'blogTemplate', __('Blog Template', 'default')); ?>
<?php theme_add_template_option('Post Template', 'postTemplate', __('Post Template', 'default')); ?>
<?php theme_add_template_query_option('Post Template', 'postTemplate', __('Post Template', 'default')); ?>
<?php theme_add_template_option('404 Template', 'page404Template', __('404 Not Found Template', 'default')); ?>
<?php theme_add_template_query_option('404 Template', 'page404Template', __('404 Not Found Template', 'default')); ?>
<?php theme_add_template_option('Login Template', 'pageLoginTemplate', __('Login Template', 'default')); ?>
<?php theme_add_template_query_option('Login Template', 'pageLoginTemplate', __('Login Template', 'default')); ?>
<?php if (theme_woocommerce_enabled()) theme_add_template_option('Product Template', 'productTemplate', __('Product Details Template', 'default')); ?>
<?php if (theme_woocommerce_enabled()) theme_add_template_option('Products Template', 'productsTemplate', __('Product List Template', 'default')); ?>
<?php if (theme_woocommerce_enabled()) theme_add_template_option('Shopping Cart Template', 'shoppingCartTemplate', __('Shopping Cart Template', 'default')); ?>
<?php if (theme_woocommerce_enabled()) theme_add_template_option('Checkout Template', 'checkoutTemplate', __('Checkout Template', 'default')); ?>