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

$custom_post_types = [];
new EsCustomPostType(__FILE__, $custom_post_types);





