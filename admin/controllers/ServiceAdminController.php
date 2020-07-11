<?php

use Sirius\Admin\Manager;

class ServiceAdminController extends Manager
{
    public $moduleTitle = 'Hizmetler';
    public $module = 'service';
    public $table = 'services';
    public $model = 'service';
    public $type = 'public';
    public $menuPattern = array(
        'title' => 'title',
        'hint' => 'title',
        'link' => array('slug', 'id'),
        'moduleLink' => true,
        'language' => true
    );

    // Arama yapılacak kolonlar.
    public $search = array('title');


    // Filtreleme yapılacak querystring/kolonlar.
    // public $filter = array('type');

    public $actions = array(
        'records' => 'list',
        'order' => 'list',
        'insert' => 'insert',
        'update' => 'update',
        'delete' => 'delete',
    );


    protected function insertRequest()
    {
        $this->load->vars('public', array('js' => array(
            '../public/admin/plugin/ckeditor/ckeditor.js',
            '../public/admin/plugin/ckfinder/ckfinder.js'
        )));
    }

    protected function insertValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');
        $this->form_validation->set_rules('summary', 'Lütfen Özet yazınız.', 'required');
        $this->form_validation->set_rules('detail', 'Lütfen Detay yazınız.', 'required');

        if ($this->input->post('autoSlug') !== 'true') {
            $this->form_validation->set_rules('slug', 'Lütfen slug yazınız.', 'required');
        }
    }

    protected function insertAfterValidate()
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(480, 360)
            ->addProcessSize('normal', 480, 360, 'service', 'thumbnail');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(true, $this->input->post('imageUrl'));
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(true);
        }

        $this->load->library('upload');
        $this->upload->initialize(array(
            'upload_path' => '../public/upload/service/svg/',
            'allowed_types' => 'svg',
            'encrypt_name' => true,
        ));

        if (! empty($_FILES['file']['name'])) {
            if (! $this->upload->do_upload('file')) {
                $this->utils->setAlert('danger', $this->upload->display_errors('<div>&bull; ', '</div>'));
            }
            $this->modelData['file'] = $this->upload->data();
        }
    }


    protected function updateRequest($record)
    {
        $this->load->vars('public', array('js' => array(
            '../public/admin/plugin/ckeditor/ckeditor.js',
            '../public/admin/plugin/ckfinder/ckfinder.js'
        )));
    }

    protected function updateValidateRules()
    {
        $this->form_validation->set_rules('title', 'Lütfen Başlık yazınız.', 'required');
        $this->form_validation->set_rules('summary', 'Lütfen Özet yazınız.', 'required');
        $this->form_validation->set_rules('detail', 'Lütfen Detay yazınız.', 'required');

        if ($this->input->post('autoSlug') !== 'true') {
            $this->form_validation->set_rules('slug', 'Lütfen slug yazınız.', 'required');
        }
    }

    protected function updateAfterValidate($record)
    {
        $this->utils
            ->uploadInput('imageFile')
            ->minSizes(480, 360)
            ->addProcessSize('normal', 480, 360, 'service', 'thumbnail');


        if ($this->input->post('imageUrl')) {
            $this->modelData['image'] = $this->utils->imageDownload(false, $this->input->post('imageUrl'), $record->image);
        } else {
            $this->modelData['image'] = $this->utils->imageUpload(false, $record->image);
        }


        $this->load->library('upload');
        $this->upload->initialize(array(
            'upload_path' => '../public/upload/service/svg/',
            'allowed_types' => 'svg',
            'encrypt_name' => true,
        ));

        if (! empty($_FILES['file']['name'])) {
            if (! $this->upload->do_upload('file')) {
                $this->utils->setAlert('danger', $this->upload->display_errors('<div>&bull; ', '</div>'));
            }
            $this->modelData['file'] = $this->upload->data();
        }
    }

}