<?php
add_action( 'init', 'register_my_cpts' );
function register_my_cpts() {
	$labels = array(
		"name" => "Mẫu câu",
		"singular_name" => "Mẫu câu",
		"menu_name" => "Mẫu câu",
		"all_items" => "Tất cả mẫu câu",
		"add_new" => "Thêm mới",
		"add_new_item" => "Thêm mới mẫu câu",
		"edit" => "Sửa",
		"edit_item" => "Sửa mẫu câu",
		"new_item" => "mẫu câu mới",
		"view" => "Hiển thị",
		"view_item" => "Hiển thị mẫu câu",
		"search_items" => "Tìm kiếm mẫu câu",
		"not_found" => "Không tìm thấy mẫu câu",
		"not_found_in_trash" => "Không tìm thấy mẫu câu trong thùng rác",
		"parent" => "mẫu câu cha",
		);
	$args = array(
		"labels" => $labels,
		"description" => "Custom post type mẫu câu",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "sentence", "with_front" => true ),
        "supports" =>array(
            'title',
            'editor',
            
            'thumbnail',
            'comments',
           
            'custom-fields'),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-format-quote",				
		"taxonomies" => array( "tu-khoa", "danh-muc-sentence" )
	);
	register_post_type( "sentence", $args );
// End of register_my_cpts()
}
 
// Register Taxonomies
add_action( 'init', 'register_my_taxes' );
function register_my_taxes() {
	$labels = array(
		"name" => "Danh mục mẫu câu",
		"label" => "Danh mục mẫu câu",
		"menu_name" => "Danh mục",
		"all_items" => "Tất cả danh mục",
		"edit_item" => "Chỉnh sửa danh mục",
		"view_item" => "Hiển thị danh mục",
		"update_item" => "Cập nhật tên danh mục",
		"add_new_item" => "Thêm mới danh mục",
		"new_item_name" => "Tên danh mục mới",
		"parent_item" => "Danh mục cha",
		"parent_item_colon" => "Danh mục cha:",
		"search_items" => "Tìm kiếm danh mục",
		"popular_items" => "Danh mục phổ biến",
		"separate_items_with_commas" => "Ngăn cách chuyên mục bằng dấu phẩy",
		"add_or_remove_items" => "Thêm hoặc xóa danh mục",
		"choose_from_most_used" => "Chọn danh mục được sử dụng nhiều nhất",
		"not_found" => "Không tìm thấy danh mục",
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => true,
		"label" => "Danh mục mẫu câu",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'danh-muc-sentence', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "danh-muc-sentence", array( "sentence" ), $args );
	
	$labels = array(
		"name" => "Từ khóa mẫu câu",
		"label" => "Từ khóa mẫu câu",
		"menu_name" => "Từ khóa",
		"all_items" => "Tất cả Từ khóa",
		"edit_item" => "Chỉnh sửa Từ khóa",
		"view_item" => "Hiển thị Từ khóa",
		"update_item" => "Cập nhật tên Từ khóa",
		"add_new_item" => "Thêm Từ khóa mới",
		"new_item_name" => "Tên Từ khóa mới",
		"parent_item" => "Từ khóa cha",
		"parent_item_colon" => "Từ khóa cha:",
		"search_items" => "Tìm kiếm Từ khóa",
		"popular_items" => "Từ khóa phổ biến",
		"separate_items_with_commas" => "Ngăn cách Từ khóa bằng dấu phẩy",
		"add_or_remove_items" => "Thêm hoặc xóa Từ khóa",
		"choose_from_most_used" => "Chọn Từ khóa được sử dụng nhiều nhất",
		"not_found" => "Không tìm thấy Từ khóa",
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => false,
		"label" => "Từ khóa mẫu câu",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'tu-khoa', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "tu-khoa", array( "sentence" ), $args );
}