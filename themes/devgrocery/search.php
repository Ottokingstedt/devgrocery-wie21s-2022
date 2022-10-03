<?php


add_filter( 'get_product_search_form' , 'me_custom_product_searchform' );

/**
 * Filter WooCommerce  Search Field
 *
 */
function me_custom_product_searchform( $form ) {
	
	$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
                        <div>
                                <label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
                                <button type="submit" id="searchsubmit" />
                                        <span class="icon"><i class="fa fa-search"></i></span>   
                                </button>  
                                <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search products...', 'woocommerce' ) . '" />                           
                                 <input type="hidden" name="post_type" value="product" />
                        </div>
                </form>';
return $form;


}