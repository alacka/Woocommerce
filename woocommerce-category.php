<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<div class="cataloge-title"><? echo gm_get_theme_menu_name(cataloge); ?></div>
					<?
					wp_nav_menu( array(
					'theme_location'  => 'cataloge',
					'menu'            => 'cataloge', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'cataloge',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="cataloge">%3$s</ul>',
					'depth'           => 0
					) );
					?>
					<div class="cataloge-footer"></div>

<div class="dostavka-sidebar">
<?php global $mytheme; ?>
<img src="<?php echo stripslashes($mytheme['kartinkadostavka']); ?>">
<div>
<div><?php echo $mytheme['titledostavka']; ?></div>
<div><?php echo $mytheme['textdostavka']; ?></div>
<a href="/delivery/">подробнее</a>
</div>
</div>
				</div>
			</div>
			<div class="col-md-9 woo-category">
				<div class="row">
				    <div class="woo-info-top">
<? if ( $_SERVER['REQUEST_URI'] == '/shop/') { ?>
<div class="col-sm-6">Магазин</div>
<div class="col-sm-6 bread"><div><? woocommerce_breadcrumb(); ?></div></div>
<? } else { ?>
<div class="col-sm-6"><? $term_object = get_queried_object(); echo $term_object->name; ?></div>
<div class="col-sm-6 bread"><div><? woocommerce_breadcrumb(); ?></div></div>
<? } ?>

				    </div>
					<?php while ( have_posts() ) : the_post(); ?>

                            <a href="<? the_permalink(); ?>" class="col-md-4 category-box-woo">
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
                    						<? $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
                    						<img src="<?php echo $image_url[0]; ?>" class="carusel-img">
                    					</div>
                    					<div class="woo-cat-info">
                    						<div><? the_title(); ?></div>
                    						<div><? the_field('тип'); ?></div>
                    						<div><? global $post, $product; echo $product->get_price_html(); ?></div>
                    					</div>
                    				</a>

                    <?php endwhile; ?>
                    <div style="clear:both;"></div>
                    <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
				</div>
				
			</div>
<div style="clear:both;"></div>
			<div class="textbeforefooter-woo-cat">
			<?php 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

the_field('текст_внизу', $taxonomy . '_' . $term_id);
	
?>
			</div>
		</div>		
	</div>
</section>
