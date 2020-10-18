<?php

class Admin extends Controller {

    public function index()
    {
        if(!isset($_SESSION['user'])) {
            header('Location: ' .BASEURL. '/login');
        }
        $data['judul'] = 'Admin';
        $data['artikel'] = $this->model('Artikel_model')->readAllArtikel();
        $this->view('templates/header', $data);
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model('Artikel_model')->createArtikel($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:'.BASEURL.'/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:'.BASEURL.'/admin');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Artikel_model')->deleteArtikel($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:'.BASEURL.'/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:'.BASEURL.'/admin');
            exit;
        }
    }

    public function id()
    {
        echo json_encode($this->model('Artikel_model')->readArtikelById($_POST['id']));
    }

    public function update()
    {
        if ($this->model('Artikel_model')->updateArtikel($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:'.BASEURL.'/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:'.BASEURL.'/admin');
            exit;
        }
    }

    public function logout()
    {
        $this->view('admin/logout');
    }
}