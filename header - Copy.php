<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/master.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon"/>
<?php wp_head(); ?>
<title>
<?php wp_title(''); ?>
</title>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="  top-line">
    <div class="container">
      <div class="row">
        <div class="top-left pull-left">
         <a href="<?php bloginfo( 'home' ); ?>/chuyen-muc/phan-cung/"># Xử lý lỗi phần cứng</a>
         
         <a href="<?php bloginfo( 'home' ); ?>/chuyen-muc/mang-internet-lan/"># Xử lý sự cố mạng</a>
         
        <a href="<?php bloginfo( 'home' ); ?>/chuyen-muc/phan-mem/"  style="color: #337ab7;"># Hướng dẫn cài đặt phần mềm</a>
        </div>
        <div class="top-right pull-right">
        
          <a href="http://192.168.100.7/" target="_blank"  style="color: #337ab7;"><i class="fa fa-search" aria-hidden="true"></i> Từ điển Nhật Việt</a>
           <a href="<?php bloginfo( 'home' ); ?>/chuyen-muc/meo-thu-thuat/"># Mẹo & Thủ thuật</a>
          
          <a href="#"># Phản hồi & góp ý</a>
           <a href="<?php bloginfo( 'home' ); ?>/wp-admin/"   style="color: #337ab7;"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <div class="row">
          <a style="margin-top:5px;display:block;font-size:25px;max-width:139px;" href="<?php bloginfo( 'home' ); ?>" title="<?php bloginfo( 'name' ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
         </a>
        </div>
      </div>
      <div class="col-sm-10">
        <div class="row">
          <nav id="primary-menu" class="navigation ">
            <ul id="nav" class="nav">
              <li class="<?php if(is_front_page()) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>">Trang chủ
                <span>Home Info</span>
                </a>
              </li>
              
           
              
              <li class="<?php if(is_page('sentences')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/sentences">Mẫu câu chat Tiếng Nhật
                <span>Sentences info</span>
                </a>
              </li>
            
           
              
               <li class="<?php if(is_page('faq')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/faq">Hỏi đáp & Tư vấn
                <span>Support info</span>
                </a>
              </li>
              
              <li class="<?php if(is_page('accounts')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/accounts" >Thông tin tài khoản
                <span>Account info</span>
                </a>
              </li>
              
                 <li class="<?php if(is_page('notes')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/notes">Ghi chú của IT
                <span>Notes info</span>
                </a>
              </li>
              
                 <li class="<?php if(is_page('check-list')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/check-list">Check List
                <span>Check info</span>
                </a>
              </li>
              
          
              
            </ul>
          </nav>
        </div>
      </div>
      <div class="clearfix"></div>
      
    </div>
  </div>
  <div class="container-fluid">
  <div class="row">
  <hr style="margin:0;">
  </div>
  </div>
  <div class="container">
    <div class="row">
      <form role="search" method="get" id="form-search" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
        <div class="input-group" style="margin-top:20px;" id="search-wrapper">
          <input type="text" autocomplete="off" style=" border-color: #337ab7" class="form-control biginput" name="s" id="s" placeholder="Xin vui lòng nhập từ khóa tìm kiếm..." value="<?php echo get_search_query(); ?>" required>
          <span class="input-group-btn">
          <button class="btn btn-default submit_search" type="submit" style="color: #fff;
    background: #337ab7;
    color:#fff;
    border-color: #337ab7;"> &nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp; </button>
          </span>
        </div>
        <!-- /input-group -->
        
      </form>
    </div>
    <hr>
  </div>

</header>
