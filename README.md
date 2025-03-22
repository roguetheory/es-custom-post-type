# es-custom-post-type
A WordPress plugin that lets you quickly add custom post types to themes
Requires PHP 8.0 or higher

## Custom Post Type Array Format
$custom_post_types = [
    'post_type_name' => [
       'labels' => [], // An array of labels for the custom post type
        'args' => [], // An array of arguments for the custom post type, labels will be appended
        'taxonomies' => [
            'taxonomy_name' => [
                'labels' => [], // An array of labels for the taxonomy
                'args' => [], // An array of arguments for the taxonomy, labels will be appended
            ]
        ]
    ],
];