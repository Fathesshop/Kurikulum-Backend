<?php
class Anaklangit extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Anak Langit';
        $data['al'] = $this->model('Anaklangit_model')->getAllAnaklangit();
        $this->view('templates/header', $data);
        $this->view('anaklangit/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Anak Langit';
        $data['al'] = $this->model('Anaklangit_model')->getAnaklangitById($id);
        $this->view('templates/header', $data);
        $this->view('anaklangit/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Anaklangit_model')->tambahDataAnaklangit($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:'.BASEURL.'/anaklangit');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:'.BASEURL.'/anaklangit');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Anaklangit_model')->hapusDataAnaklangit($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:'.BASEURL.'/anaklangit');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:'.BASEURL.'/anaklangit');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Anaklangit_model')->getAnaklangitById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Anaklangit_model')->ubahDataAnaklangit($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:'.BASEURL.'/anaklangit');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:'.BASEURL.'/anaklangit');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Anak Langit';
        $data['al'] = $this->model('Anaklangit_model')->cariDataAnaklangit();
        $this->view('templates/header', $data);
        $this->view('anaklangit/index', $data);
        $this->view('templates/footer');
    }
}