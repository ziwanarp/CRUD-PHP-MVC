<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login Admin';
        // $data['mhs'] = $this->model('m_mahasiswa')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Register Admin';
        $this->view('templates/header', $data);
        $this->view('admin/register', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('m_admin')->tambahAdmin($_POST) > 0) {
            Flasher::setFlash('Berhasil ', 'Ditambahkan', 'success');
            header('Location:' . BASEURL . '/admin/register');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location:' . BASEURL . '/admin/register');
            exit;
        }
    }
}
