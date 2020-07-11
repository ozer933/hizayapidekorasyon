<?php

class Tapu extends CI_Model
{
    public function insert()
    {
        $data = array(
            'fullname'   => $this->input->post('fullname'),
            'email'      => $this->input->post('email'),
            'phone'      => $this->input->post('phone'),
            'city'       => $this->input->post('city'),
            'town'       => $this->input->post('town'),
            'district'   => $this->input->post('district'),
            'pafta'      => $this->input->post('pafta'),
            'ada'        => $this->input->post('ada'),
            'parsel'     => $this->input->post('parsel'),
            'arsa_alani' => $this->input->post('arsa_alani'),
            'comment'    => $this->input->post('comment'),
            'date'       => $this->date->set()->mysqlDatetime(),
            'ip'         => $this->input->ip_address()
        );

        $this->db->insert('tapus', $data);
        $success = $this->db->insert_id();


        if ($success && $this->module->arguments->notification == true) {
            $this->load->library('email');
            $this->email->initialize(array(
                'smtp_host' => $this->site->get('smtpHost'),
                'smtp_port' => $this->site->get('smtpPort'),
                'smtp_user' => $this->site->get('smtpUser'),
                'smtp_pass' => $this->site->get('smtpPass'),
            ));

            $this->email->from($this->input->post('email'), htmlspecialchars($this->input->post('fullname')));
            $this->email->to($this->module->arguments->notificationMail);
            $this->email->subject('Rsamı Değerlendir Formu Bildirimi');
            $this->email->message($this->load->view('tapu/mail', $data, true));
            $this->email->send();
        }

        return $success;
    }


}