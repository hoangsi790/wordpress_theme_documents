<?php
add_action( 'init', 'register_my_cpts_note' );
function register_my_cpts_note() {
	$labels = array(
		"name" => "Ghi chú",
		"singular_name" => "Ghi chú",
		"menu_name" => "Ghi chú",
		"all_items" => "Tất cả ghi chú",
		"add_new" => "Thêm mới",
		"add_new_item" => "Thêm mới ghi chú",
		"edit" => "Sửa",
		"edit_item" => "Sửa ghi chú",
		"new_item" => "ghi chú mới",
		"view" => "Hiển thị",
		"view_item" => "Hiển thị ghi chú",
		"search_items" => "Tìm kiếm ghi chú",
		"not_found" => "Không tìm thấy ghi chú",
		"not_found_in_trash" => "Không tìm thấy ghi chú trong thùng rác",
		"parent" => "Ghi chú cha",
		);
	$args = array(
		"labels" => $labels,
		"description" => "Custom post type ghi chú",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "note", "with_front" => true ),
        "supports" =>array(
            'title',
            'editor',
            
            'thumbnail',
            'comments',
           
            'custom-fields'),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-welcome-write-blog",				
		"taxonomies" => array( "note_tag" )
	);
	register_post_type( "note", $args );
// End of register_my_cpts()
}
 
// Register Taxonomies
add_action( 'init', 'register_my_taxes_note' );
function register_my_taxes_note() {
	
	
	$labels = array(
		"name" => "Từ khóa ghi chú",
		"label" => "Từ khóa ghi chú",
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
		"label" => "Từ khóa ghi chú",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'note_tag', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "note_tag", array( "note" ), $args );
}