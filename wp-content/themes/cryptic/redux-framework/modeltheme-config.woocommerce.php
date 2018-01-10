<?php 
$woocommerce_tab =  array(
                'icon' => 'el-icon-shopping-cart-sign',
                'title' => esc_html__('Shop Settings', 'cryptic'),
                'fields' => array(
                     array(
                            'id'       => 'cryptic_shop_layout',
                            'type'     => 'image_select',
                            'compiler' => true,
                            'title'    => esc_html__( 'Shop List Products Layout', 'cryptic' ),
                            'subtitle' => esc_html__( 'Select Shop List Products layout.', 'cryptic' ),
                            'options'  => array(
                                'cryptic_shop_left_sidebar' => array(
                                    'alt' => '2 Columns - Left sidebar',
                                    'img' => get_template_directory_uri().'/redux-framework/assets/sidebar-left.jpg'
                                ),
                                'cryptic_shop_fullwidth' => array(
                                    'alt' => '1 Column - Full width',
                                    'img' => get_template_directory_uri().'/redux-framework/assets/sidebar-no.jpg'
                                ),
                                'cryptic_shop_right_sidebar' => array(
                                    'alt' => '2 Columns - Right sidebar',
                                    'img' => get_template_directory_uri().'/redux-framework/assets/sidebar-right.jpg'
                                )
                            ),
                            'default'  => 'cryptic_shop_left_sidebar'
                        ),
                    array(
                        'id'       => 'cryptic_shop_layout_sidebar',
                        'type'     => 'select',
                        'data'     => 'sidebars',
                        'title'    => esc_html__( 'Shop List Sidebar', 'cryptic' ),
                        'subtitle' => esc_html__( 'Select Shop List Sidebar.', 'cryptic' ),
                        'default'   => 'woocommerce',
                        'required' => array('cryptic_shop_layout', '!=', 'cryptic_shop_fullwidth'),
                    ),
                    array(
                        'id'        => 'cryptic-shop-columns',
                        'type'      => 'select',
                        'title'     => esc_html__('Number of shop columns', 'cryptic'),
                        'subtitle'  => esc_html__('Number of products per column to show on shop list template.', 'cryptic'),
                        'options'   => array(
                            '2'   => '2 columns',
                            '3'   => '3 columns',
                            '4'   => '4 columns'
                        ),
                        'default'   => '3',
                    ),
                     array(
                        'id'       => 'cryptic_single_product_layout',
                        'type'     => 'image_select',
                        'compiler' => true,
                        'title'    => esc_html__( 'Single Product Layout', 'cryptic' ),
                        'subtitle' => esc_html__( 'Select Single Product Layout.', 'cryptic' ),
                        'options'  => array(
                            'cryptic_shop_left_sidebar' => array(
                                'alt' => '2 Columns - Left sidebar',
                                'img' => get_template_directory_uri().'/redux-framework/assets/sidebar-left.jpg'
                            ),
                            'cryptic_shop_fullwidth' => array(
                                'alt' => '1 Column - Full width',
                                'img' => get_template_directory_uri().'/redux-framework/assets/sidebar-no.jpg'
                            ),
                            'cryptic_shop_right_sidebar' => array(
                                'alt' => '2 Columns - Right sidebar',
                                'img' => get_template_directory_uri().'/redux-framework/assets/sidebar-right.jpg'
                            )
                        ),
                        'default'  => 'cryptic_shop_right_sidebar'
                    ),
                    array(
                        'id'       => 'cryptic_single_shop_sidebar',
                        'type'     => 'select',
                        'data'     => 'sidebars',
                        'title'    => esc_html__( 'Shop Single Product Sidebar', 'cryptic' ),
                        'subtitle' => esc_html__( 'Select Shop List Sidebar.', 'cryptic' ),
                        'default'   => 'woocommerce',
                        'required' => array('cryptic_single_product_layout', '!=', 'cryptic_shop_fullwidth'),
                    ),
                    array(
                        'id'       => 'is_add_to_compare_active',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Enable/disable compare products feature', 'cryptic'),
                        'subtitle' => esc_html__('Show or Hide "Add to Compare" button for shop".', 'cryptic'),
                        'default'  => true,
                    ),
                    array(
                        'id'       => 'is_add_to_wishlist_active',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Enable/disable wishlist feature', 'cryptic'),
                        'subtitle' => esc_html__('Show or Hide "Add to Wishlist" button and Header Wishlist link".', 'cryptic'),
                        'default'  => true,
                    ),
                    array(
                        'id'       => 'is_quick_view_active',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Enable/disable shop Quick View', 'cryptic'),
                        'subtitle' => esc_html__('Show or Hide "Quick View" button from the shop".', 'cryptic'),
                        'default'  => true,
                    ),
                    array(
                        'id'       => 'cryptic-enable-related-products',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Related Products', 'cryptic'),
                        'subtitle' => esc_html__('Enable or disable related products on single product', 'cryptic'),
                        'default'  => true,
                    ),
                    array(
                        'id'        => 'cryptic-related-products-number',
                        'type'      => 'select',
                        'title'     => esc_html__('Number of related products', 'cryptic'),
                        'subtitle'  => esc_html__('Number of related products to show on single product template.', 'cryptic'),
                        'options'   => array(
                            '2'   => '3',
                            '3'   => '6',
                            '4'   => '9'
                        ),
                        'default'   => '3',
                        'required' => array('cryptic-enable-related-products', '=', true),
                    ),
                )
            );