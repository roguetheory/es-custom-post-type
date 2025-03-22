<?php

namespace Ethersense\EsCustomPostType;

class EsCustomPostType
{
    protected array $postTypes = [];

    public function __construct(array $postTypes = [], string $filename)
    {
        $this->postTypes = $postTypes;
        add_action('init', array($this, 'registerPostTypes'));
        add_action('init', array($this, 'registerTaxonomies'));
        register_activation_hook($filename, array($this, 'activation'));
        register_deactivation_hook($filename, array($this, 'deactivation'));
    }

    public function registerPostTypes()
    {
        foreach($this->postTypes as $postTypeName => $postTypeConfig) {
            $args = $postTypeConfig['args'];
            $args['labels'] = $postTypeConfig['labels'];
            register_post_type($postTypeName, $args);
        }
    }

    public function registerTaxonomies()
    {
        foreach($this->postTypes as $postTypeName => $postTypeConfig) {
           if(isset($postTypeConfig['taxonomies'])) {
                foreach($postTypeConfig['taxonomies'] as $taxonomyName => $taxonomyConfig) {
                    $args = $taxonomyConfig['args'];
                    $args['labels'] = $taxonomyConfig['labels'];
                    register_taxonomy($taxonomyName, $postTypeName, $args);
                }
            }
        }
    }

    public function activation()
    {
        $this->registerPostTypes();
        $this->registerTaxonomies();
        flush_rewrite_rules();
    }

    public function deactivation()
    {
        flush_rewrite_rules();
    }
}