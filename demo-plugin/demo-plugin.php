<?php
/*
* Plugin Name: Demo Plugin
* Plugin URI:
* Description: Nothing, this is just a demo
* Version: 1.0
* Author: Steven Roh
* Author URI: https://stevenroh.ch
* Text Domain: demo-plugin
*/

function demo_register_cpt()
{
  /**
   * Post Type: Jobs.
   */

  $labels = [
    "name" => esc_html__("Jobs", "demo-plugin"),
    "singular_name" => esc_html__("Job", "demo-plugin"),
    "menu_name" => esc_html__("My Jobs", "demo-plugin"),
    "all_items" => esc_html__("All Jobs", "demo-plugin"),
    "add_new" => esc_html__("Add new", "demo-plugin"),
    "add_new_item" => esc_html__("Add new Job", "demo-plugin"),
    "edit_item" => esc_html__("Edit Job", "demo-plugin"),
    "new_item" => esc_html__("New Job", "demo-plugin"),
    "view_item" => esc_html__("View Job", "demo-plugin"),
    "view_items" => esc_html__("View Jobs", "demo-plugin"),
    "search_items" => esc_html__("Search Jobs", "demo-plugin"),
    "not_found" => esc_html__("No Jobs found", "demo-plugin"),
    "not_found_in_trash" => esc_html__("No Jobs found in trash", "demo-plugin"),
    "parent" => esc_html__("Parent Job:", "demo-plugin"),
    "featured_image" => esc_html__("Featured image for this Job", "demo-plugin"),
    "set_featured_image" => esc_html__("Set featured image for this Job", "demo-plugin"),
    "remove_featured_image" => esc_html__("Remove featured image for this Job", "demo-plugin"),
    "use_featured_image" => esc_html__("Use as featured image for this Job", "demo-plugin"),
    "archives" => esc_html__("Job archives", "demo-plugin"),
    "insert_into_item" => esc_html__("Insert into Job", "demo-plugin"),
    "uploaded_to_this_item" => esc_html__("Upload to this Job", "demo-plugin"),
    "filter_items_list" => esc_html__("Filter Jobs list", "demo-plugin"),
    "items_list_navigation" => esc_html__("Jobs list navigation", "demo-plugin"),
    "items_list" => esc_html__("Jobs list", "demo-plugin"),
    "attributes" => esc_html__("Jobs attributes", "demo-plugin"),
    "name_admin_bar" => esc_html__("Job", "demo-plugin"),
    "item_published" => esc_html__("Job published", "demo-plugin"),
    "item_published_privately" => esc_html__("Job published privately.", "demo-plugin"),
    "item_reverted_to_draft" => esc_html__("Job reverted to draft.", "demo-plugin"),
    "item_trashed" => esc_html__("Job trashed.", "demo-plugin"),
    "item_scheduled" => esc_html__("Job scheduled", "demo-plugin"),
    "item_updated" => esc_html__("Job updated.", "demo-plugin"),
    "parent_item_colon" => esc_html__("Parent Job:", "demo-plugin"),
  ];

  $args = [
    "label" => esc_html__("Jobs", "demo-plugin"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "job", "with_front" => true],
    "query_var" => true,
    "supports" => ["title", "editor", "thumbnail"],
    "show_in_graphql" => false,
  ];

  register_post_type("job", $args);
}

add_action('init', 'demo_register_cpt');
