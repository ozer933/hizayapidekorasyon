<?php

use Sirius\Admin\Installer as InstallManager;


class Installer extends InstallManager
{

    public $routes = array(
        'tr' => array(
            'uri' => './'
        ),
        'en' => array(
            'route' => array(
                '' => 'HomeController/index',
            ),
            'uri' => './'
        ),
    );


    public function insertData()
    {
        $languages = $this->config->item('languages');
        $insert = array();

        foreach ($languages as $language => $label) {
            $data = array(
                array(
                    'name' => 'metaTitle',
                    'title' => 'Site Başlığı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array('required' => true)),
                    'language' => $language,
                ),
                array(
                    'name' => 'metaDescription',
                    'title' => 'Site Tanımı',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array('required' => true)),
                    'language' => $language,
                ),
                array(
                    'name' => 'metaKeywords',
                    'title' => 'Site Anahtar Kelimeleri',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array('required' => true)),
                    'language' => $language,
                ),
                array(
                    'name' => 'customMeta',
                    'title' => 'Özel Metalar',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'smtpHost',
                    'title' => 'Smtp Sunucusu',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'smtpPort',
                    'title' => 'Smtp Port',
                    'value' => '587',
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'smtpUser',
                    'title' => 'Smtp Kullanıcı Adı',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'smtpPass',
                    'title' => 'Smtp Parola',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'sitePhone',
                    'title' => 'Site Telefon Numarası',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'siteAddress',
                    'title' => 'Site Adres',
                    'value' => null,
                    'type' => 'text',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
                array(
                    'name' => 'aboutText',
                    'title' => 'Hakkında Yazısı',
                    'value' => null,
                    'type' => 'textarea',
                    'arguments' => json_encode(array()),
                    'language' => $language,
                ),
            );


            $insert = array_merge($insert, $data);
        }

        $this->db->insert_batch('options', $insert);
    }

}