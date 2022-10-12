<?php

class Home extends Controller
{

    public function index()
    {
        $data['nama'] = $this->model('m_user')->getUser();
        $data['judul'] = 'Halaman Home';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
