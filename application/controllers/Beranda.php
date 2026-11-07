<?php

class Beranda extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda Page';
        $this->load->view('beranda/index', $data);
    }
}
