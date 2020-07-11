<?php

use Sirius\Admin\Installer as InstallManager;


class Installer extends InstallManager
{
    public $routes = array(
        'tr' => array(
            'route' => array(
                '@uri/[a-zA-Z0-9_-]+/([0-9]+)' => 'CategoryController/view/$1',
                '@uri' => 'CategoryController/index',
            ),
            'uri' => 'kategoriler'
        ),
        'en' => array(
            'route' => array(
                '@uri/[a-zA-Z0-9_-]+/([0-9]+)' => 'CategoryController/view/$1',
                '@uri' => 'CategoryController/index',
            ),
            'uri' => 'categories'
        ),
    );


    public function insertData()
    {
        $languages = $this->config->item('languages');
        $insert = array();

        foreach ($languages as $language => $label) {
            $data = array(
                array(
                    'module' => 'category',
                    'name' => 'title',
                    'title' => 'Sayfa Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array('required' => true)),
                    'language' => $language,
                ),
                array(
                    'module' => 'category',
                    'name' => 'metaTitle',
                    'title' => 'Meta Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'category',
                    'name' => 'metaDescription',
                    'title' => 'Meta Tanımı',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'category',
                    'name' => 'metaKeywords',
                    'title' => 'Meta Anahtar Kelimeleri',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),

            );


            $insert = array_merge($insert, $data);
        }

        $this->db->insert_batch('module_arguments', $insert);


    }
}