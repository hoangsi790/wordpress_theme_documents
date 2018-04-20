<article class="article-item" id="<?php the_ID(); ?>">
  <div class="article-info" style="padding-left:15px;border-left:2px solid #337ab7;margin-top:10px;">
    <?php /*?><div class="article-datetime">
      <span>
      <?php the_time('d') ; ?>
      </span>
      <p>
        <?php the_time('m/Y') ; ?>
      </p>
      <div class="post_cat"><?php the_category( ' ' ); ?></div>
    </div><?php */?>
    <h2> <?php   if ( get_post_status ( $ID ) == 'private' ) {?>
	 <img style="width:20px;" src="https://loading.io/spinners/reload/lg.ajax-syncing-loading-icon.gif"> <span class="label label-danger" style="position:relative;top:-1px;text-transform:none;font-weight:lighter;padding: 3px 7px;"> Đang soạn thảo...</span>
	<?php } ?> 
    
    <?php
	if(!empty($post->post_password)){ ?>
  <span class="label label-danger" style="position:relative;top:-1px;text-transform:none;font-weight:lighter;padding: 3px 7px;"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp; Bảo mật</span>
<?php }
	 ?>
    
    <a href="<?php the_permalink(); ?>" > <?php the_title(); ?></a></h2>
    <div class="article-terms">
    <i class="fa fa-calendar" aria-hidden="true"></i>  <span style="font-size:13px;"><?php the_time('d/m/Y') ; ?></span> &nbsp; &nbsp; 
      <span href="javascript:void(0);" class="label label-success">
      <?php the_author(); ?>
      </span>   &nbsp;&nbsp; 
    
      <i class="fa fa-tags" aria-hidden="true"></i>
     <span style="text-transform:lowercase"> <?php the_tags( '', ', ', '' ); ?></span></div>
       <div class="content-blog" style="margin:10px 0;">
    <?php if(get_the_excerpt()) { the_excerpt(); } else { echo 'Xin lỗi, bài viết này chưa được cập nhật mô tả...'; } ?>
    </div>
    <a href="<?php the_permalink(); ?>"># Xem chi tiết...</a>
  </div>
  <hr style="border-color:#d2e9f9">
</article>
