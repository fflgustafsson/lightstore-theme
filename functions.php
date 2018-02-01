<?php
    include('settings.php');
    add_theme_support( 'woocommerce' );

    if (function_exists('add_theme_support')) {
	   add_theme_support('menus');
	   register_nav_menu('header-menu','Header Menu');
    //	register_nav_menu('footer-menu','Footer Menu');
	   add_theme_support( 'post-thumbnails' );
	   add_image_size('home-small-box',360,360,true);
	   add_image_size('st-blog-image',930,400,true);
    }

    /*
     * Remove excerpt from single product
     */
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
    add_action( 'woocommerce_single_product_summary', 'the_content', 20 );

    // Remove product category/tag meta from its original position
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 25 );

    //Remove thumbnail and add product-image
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
    add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_images', 10 );


    function custom_my_account_menu_items( $items ) {
        unset($items['downloads']);
        return $items;
    }
    add_filter( 'woocommerce_account_menu_items', 'custom_my_account_menu_items' );

    /*
    add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );
     
    function custom_woocommerce_get_catalog_ordering_args( $args ) {
    	$orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
    	 
    	if ( 'price-desc' == $orderby_value ) {
    		$args['orderby'] = 'meta_value_num';
    		$args['order'] = 'desc';
    		$args['meta_key'] = '_price';
    	} elseif ( 'price' == $orderby_value ) {
    		$args['orderby'] = 'meta_value_num';
    		$args['order'] = 'asc';
    		$args['meta_key'] = '_price';
    	}
    	 
    	return $args;
    }*/

    function ds_get_excerpt($num_chars) {
        $temp_str = substr(strip_tags(strip_shortcodes(get_the_content())),0,$num_chars);
        $temp_parts = explode(" ",$temp_str);
        $temp_parts[(count($temp_parts) - 1)] = '';
        
        if(strlen(strip_tags(strip_shortcodes(get_the_content()))) > $num_chars)
          return implode(" ",$temp_parts) . '...';
        else
          return implode(" ",$temp_parts);
    }

    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
            'name'=>'Sidebar',
    		'before_widget' => '<div class="side_box">',
    		'after_widget' => '</div>',
    		'before_title' => '<h3 class="side_title">',
    		'after_title' => '</h3>',
    	));
        register_sidebar(array(
            'name'=>'Footer Widget 1',
            'before_widget' => '<div class="footer_box">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer_title">',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name'=>'Footer Widget 2',
            'before_widget' => '<div class="footer_box">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer_title">',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name'=>'Footer Widget 3',
            'before_widget' => '<div class="footer_box">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer_title">',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'name'=>'Shop header 1',
            'before_widget' => '<div class="filter__box">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="filter_title">',
            'after_title' => '</h3>',
        ));  

        register_sidebar(array(
            'name'=>'Shop header 2',
            'before_widget' => '<div class="cat__box">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="cat_title">',
            'after_title' => '</h3>',
        ));  

        register_sidebar(array(
            'name'=>'Shop header 3',
            'before_widget' => '<div class="search__box">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="search_title">',
            'after_title' => '</h3>',
        ));          
    }

?>