<?php

use Sirius\Admin\Installer as InstallManager;


class Installer extends InstallManager
{

    public $routes = array(
        'tr' => array(
            'route' => array(
                '@uri' => 'ReferenceController/index',
            ),
            'uri' => 'referans'
        ),
        'en' => array(
            'route' => array(
                '@uri' => 'ReferenceController/index',
            ),
            'uri' => 'reference'
        ),
    );

    public function insertData()
    {
        $languages = $this->config->item('languages');
        $insert = array();

        foreach ($languages as $language => $label) {
            $data = array(
                array(
                    'module' => 'reference',
                    'name' => 'title',
                    'title' => 'Sayfa Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array('required' => true)),
                    'language' => $language,
                ),
                array(
                    'module' => 'reference',
                    'name' => 'metaTitle',
                    'title' => 'Meta Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'reference',
                    'name' => 'metaDescription',
                    'title' => 'Meta Tanımı',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'reference',
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