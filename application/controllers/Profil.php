<?php

class Profil extends CI_Controller
{
    public function index()
    {
        // $data['judul'] = 'Beranda Page';
        $this->load->view('profil/index');
    }

    public function pengurus()
    {
        // $data['judul'] = 'Beranda Page';
        $this->load->view('profil/pengurus');
    }
}
