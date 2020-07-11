<?php

use Sirius\Admin\Installer as InstallManager;


class Installer extends InstallManager
{


    public $routes = array(
        'tr' => array(
            'route' => array(
                '@uri' => 'TapuController/index',
            ),
            'uri' => 'arsami-degerlendir'
        ),
        'en' => array(
            'route' => array(
                '@uri' => 'TapuController/index',
            ),
            'uri' => 'tapu'
        ),
    );




    public function insertData()
    {
        $languages = $this->config->item('languages');
        $insert = array();

        foreach ($languages as $language => $label) {
            $data = array(
                array(
                    'module' => 'tapu',
                    'name' => 'title',
                    'title' => 'Sayfa Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array('required' => true)),
                    'language' => $language,
                ),
                array(
                    'module' => 'tapu',
                    'name' => 'metaTitle',
                    'title' => 'Meta Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'tapu',
                    'name' => 'metaDescription',
                    'title' => 'Meta Tanımı',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'tapu',
                    'name' => 'metaKeywords',
                    'title' => 'Meta Anahtar Kelimeleri',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'module' => 'tapu',
                    'name' => 'notification',
                    'title' => 'Bildirim Gönderimi',
                    'value' => 0,
                    'type' => 'dropdown',
                    'arguments' => json_encode(array('required' => true, 'options' => array('0' => 'Bildirim Gönderme', '1' => 'Bildirim Gönder'))),
                    'language' => $language,
                ),
                array(
                    'module' => 'tapu',
                    'name' => 'notificationMail',
                    'title' => 'Bildirim Maili',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
            );


            $insert = array_merge($insert, $data);
        }

        $this->db->insert_batch('module_arguments', $insert);


    }

}
