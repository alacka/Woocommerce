<section class="slider woo-product ">
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				    <?php wc_print_notices();?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="woo-info-top col-md-12">
				        <div class="col-sm-6"><? $term_object = get_queried_object(); the_title(); ?></div>
				        <div class="col-sm-6 bread"><div> <? woocommerce_breadcrumb(); ?>
<? /* ?>
<a href="/">Главная</a> / 
<?
global $post;
$terms = get_the_terms( $post->ID, 'product_cat' );
foreach ( $terms as $term ) {
    $term_link = get_term_link( $term );
    echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';
}
?>
/ <span><? the_title(); ?></span>
<? */ ?>


</div>
</div><? /* END bread */ ?>
</div><? /* END woo-info-top */ ?>

<div class="col-md-4 woo-prod-img">

<div>
<div class="stiker">
<? $new = get_field('new');  if ( $new == '' ) { } else { ?>
							<div class="stiker-new"></div>
<? } ?>
<? $hot = get_field('hot'); if ( $hot == '' ) { } else { ?>
							<div class="stiker-hot"></div>
<? } ?>
<? $sale = get_field('sale'); if ( $sale == '' ) { } else { ?>
							<div class="stiker-sale"></div>
<? } ?>
						</div>



<? woocommerce_show_product_images(); ?>


</div>
<div class="seetreed">Посмотреть коляску в 3D</div>
</div>

<div class="col-md-8">
<div class="woo-title-page"><? the_title(); ?></div>
<div class="woo-tup-page"><? the_field('тип'); ?></div>


<div class="price-box-product">
<div><? global $post, $product; echo $product->get_price_html(); ?></div>
<a href="" class="buyinoneclick">Купить в 1 клик</a>
<? woocommerce_template_single_add_to_cart();  ?>
</div>
<div class="choicecolortitle">Выбор цвета</div>

<? /* do_action( 'woocommerce_single_product_summary' ); */ 

 



woocommerce_template_single_excerpt (); 

?>
	
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp,skype,telegram" data-counter=""></div>	
</div>
<div class="col-md-12">

<div class="tabs-footer">
  <div class="tabheader">    </div>
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Характеристики</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Описание</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Отзывы</label>

  <section id="content1">
    <?php $attributes = $product->get_attributes(); foreach ( $attributes as $attribute ) :
 
		if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) ) 
			continue;
 
		$values = wc_get_product_terms( $product->get_id(), $attribute['name'], array( 'fields' => 'names' ) );
		$att_val = apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
 
		if( empty( $att_val ) )
			continue;
 
		$has_row = true;
		?>
 
	<div class="col">
		<div class="att_label col-md-6"><div><p><?php echo wc_attribute_label( $attribute['name'] ); ?></p></div></div>
		<div class="att_value col-md-6"><div><?php echo $att_val; ?></div></div><!-- .att_value -->
	</div><!-- .col -->
 
	<?php endforeach; ?>
  </section>
    
  <section id="content2">
    <div><? the_content(); ?></div>
  </section>
    
  <section id="content3">
<div class="woocommerce">
    <? comments_template(); ?>
</div>
  </section>
    
</div>

    





</div>

					<?php endwhile; ?>
				</div>
			</div>		
		</div>		
	</div>
</div>
</section>

<div class="codfortreed"><div><div><div class="codfortreedclose">X</div><? the_field('код_для_3d_модели'); ?></div></div></div>
