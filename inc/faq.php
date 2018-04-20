<?php
add_action( 'init', 'register_my_cpts_faq' );
function register_my_cpts_faq() {
	$labels = array(
		"name" => "Hỏi đáp",
		"singular_name" => "Hỏi đáp",
		"menu_name" => "Hỏi đáp",
		"all_items" => "Tất cả Hỏi đáp",
		"add_new" => "Thêm mới",
		"add_new_item" => "Thêm mới Hỏi đáp",
		"edit" => "Sửa",
		"edit_item" => "Sửa Hỏi đáp",
		"new_item" => "Hỏi đáp mới",
		"view" => "Hiển thị",
		"view_item" => "Hiển thị Hỏi đáp",
		"search_items" => "Tìm kiếm Hỏi đáp",
		"not_found" => "Không tìm thấy Hỏi đáp",
		"not_found_in_trash" => "Không tìm thấy Hỏi đáp trong thùng rác",
		"parent" => "Hỏi đáp cha",
		);
	$args = array(
		"labels" => $labels,
		"description" => "Custom post type Hỏi đáp",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "hoi-dap", "with_front" => true ),
        "supports" =>array('title', 'editor',  'custom-fields'),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-format-chat",				
		
	);
	register_post_type( "hoi-dap", $args );
	}
	// Register Taxonomies
add_action( 'init', 'register_my_taxes_faq' );
function register_my_taxes_faq() {
	$labels = array(
		"name" => "Tình trạng Hỏi đáp",
		"label" => "Tình trạng Hỏi đáp",
		"menu_name" => "Tình trạng",
		"all_items" => "Tất cả Tình trạng",
		"edit_item" => "Chỉnh sửa Tình trạng",
		"view_item" => "Hiển thị Tình trạng",
		"update_item" => "Cập nhật tên Tình trạng",
		"add_new_item" => "Thêm mới Tình trạng",
		"new_item_name" => "Tên Tình trạng mới",
		"parent_item" => "Tình trạng cha",
		"parent_item_colon" => "Tình trạng cha:",
		"search_items" => "Tìm kiếm Tình trạng",
		"popular_items" => "Tình trạng phổ biến",
		"separate_items_with_commas" => "Ngăn cách chuyên mục bằng dấu phẩy",
		"add_or_remove_items" => "Thêm hoặc xóa Tình trạng",
		"choose_from_most_used" => "Chọn Tình trạng được sử dụng nhiều nhất",
		"not_found" => "Không tìm thấy Tình trạng"
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => true,
		"label" => "Tình trạng Hỏi đáp",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'tinh-trang-hoi-dap', 'with_front' => true ),
		"show_admin_column" => true
	);
	register_taxonomy( "tinh-trang-hoi-dap", array( "hoi-dap" ), $args );
}

