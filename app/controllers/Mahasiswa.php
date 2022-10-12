<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('m_mahasiswa')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('m_mahasiswa')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('m_mahasiswa')->tambahMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil ', 'Ditambahkan', 'success');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('m_mahasiswa')->hapusMahasiswa($id) > 0) {
            Flasher::setFlash('Berhasil ', 'Dihapus', 'success');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getupdate()
    {
        echo json_encode($this->model('m_mahasiswa')->getMahasiswaById($_POST['id']));
    }

    public function update()
    {
        if ($this->model('m_mahasiswa')->updateMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil ', 'diubah', 'success');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
