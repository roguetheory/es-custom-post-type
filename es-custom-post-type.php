<?php
/*
Plugin Name: ES Custom Post Type
Description: Add custom post types and taxonomies to your WordPress site.
Version: 1.0
Author: Ethersense Development
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

require 'includes/EsCustomPostType.php';
use Ethersense\EsCustomPostType\EsCustomPostType;

//$project_labels = [
//    'name' => 'Projects',
//    'singular_name' => 'Project',
//    'menu_name' => 'Projects',
//    'add_new' => 'Add New',
//    'add_new_item' => 'Add New Project',
//    'edit_item' => 'Edit Project',
//    'new_item' => 'New Project',
//    'view_item' => 'View Project',
//    'search_items' => 'Search Projects',
//    'not_found' => 'No projects found',
//    'not_found_in_trash' => 'No projects found in Trash',
//    'parent_item_colon' => '',
//    'all_items' => 'All Projects'
//];
//$project_args = [
//    'public' => true,
//    'has_archive' => true,
//    'publicly_queryable' => true,
//    'show_ui' => true,
//    'show_in_menu' => true,
//    'query_var' => true,
//    'rewrite' => ['slug' => 'projects'],
//    'capability_type' => 'post',
//    'hierarchical' => false,
//    'menu_position' => 5,
//    'menu_icon' => 'dashicons-portfolio',
//    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields']
//];
//
//$project_category_labels = [
//    'name' => 'Project Categories',
//    'singular_name' => 'Project Category',
//    'menu_name' => 'Project Categories',
//    'all_items' => 'All Project Categories',
//    'edit_item' => 'Edit Project Category',
//    'view_item' => 'View Project Category',
//    'update_item' => 'Update Project Category',
//    'add_new_item' => 'Add New Project Category',
//    'new_item_name' => 'New Project Category Name',
//    'search_items' => 'Search Project Categories',
//    'popular_items' => 'Popular Project Categories',
//    'separate_items_with_commas' => 'Separate project categories with commas',
//    'add_or_remove_items' => 'Add or remove project categories',
//    'choose_from_most_used' => 'Choose from the most used project categories'
//];
//
//$project_category_args = [
//    'hierarchical' => true,
//    'public' => true,
//    'show_admin_column' => true,
//    'show_in_rest' => true,
//    'rewrite' => ['slug' => 'project-category']
//];
//
//$project_category_taxonomy = [
//    'labels' => $project_category_labels,
//    'args' => $project_category_args
//];
//
//$project_tag_labels = [
//    'name'              => 'Project Tags',
//    'singular_name'     => 'Project Tag',
//    'search_items'      => 'Search Project Tags',
//    'all_items'         => 'All Project Tags',
//    'edit_item'         => 'Edit Project Tag',
//    'update_item'       => 'Update Project Tag',
//    'add_new_item'      => 'Add New Project Tag',
//    'new_item_name'     => 'New Project Tag Name',
//    'menu_name'         => 'Tags'
//];
//
//$project_tag_args = [
//    'hierarchical'      => false,
//    'labels'            => $project_tag_labels,
//    'show_ui'           => true,
//    'show_admin_column' => true,
//    'query_var'         => true,
//    'rewrite'           => array('slug' => 'project-tag')
//];
//
//$project_tag_taxonomy = [
//    'labels' => $project_tag_labels,
//    'args' => $project_tag_args
//];
//
//$project_taxonomies = [
//    'project_category' => $project_category_taxonomy,
//    'project_tag' => $project_tag_taxonomy
//];
//
//$custom_post_types['project'] = [
//    'labels' => $project_labels,
//    'args' => $project_args,
//    'taxonomies' => $project_taxonomies
//];

$custom_post_types = [];
new EsCustomPostType($custom_post_types, __FILE__);





