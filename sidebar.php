<div class="col-sm-2">
  <aside class="sidebar">

  
  
  <!--<h2 style="margin-top:0;"># Danh mục </h2>-->
  <ul class="list-group sidebar-blog">
   <?php
   $args_terms = array( 
	'taxonomy' => 'category',
	'hide_empty' => 0,
	'parent' => 0
); 
$terms = get_terms( $args_terms );
if ( $terms && ! is_wp_error( $terms ) ) :  
foreach ( $terms as $term ) { ?>
          <li class="list-group-item" style="padding-bottom:0;"> <a href="<?php echo esc_url(get_term_link($term));?>" style="text-transform:uppercase;font-weight:bold;"># <?php echo $term->name; ?> <small>(<?php echo $term->count; ?>)</small></a> 
            <ul class="list-group" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
<?php
   $args_terms_child = array( 
	'taxonomy' => 'category',
	'hide_empty' => 0,
	'parent' => $term->term_id
); 
$terms_child = get_terms( $args_terms_child );
if ( $terms_child && ! is_wp_error( $terms_child ) ) :  
foreach ( $terms_child as $term_child ) { ?>
          <li class="list-group-item"> <a href="<?php echo esc_url(get_term_link($term_child));?>" style="color:#222;"><?php echo $term_child->name; ?> <small>(<?php echo $term_child->count; ?>)</small></a> </li>
<?php } endif; ?>
          </ul>
          </li>
          
          
    <?php }
endif; ?>

   
   
  </ul>


</aside>

</div>
