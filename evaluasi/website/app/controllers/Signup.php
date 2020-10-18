<?php


class Signup extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . '/admin');
        }
        $data['judul'] = "Sign Up";
        $this->view('templates/header', $data);
        $this->view('signup/index');
        $this->view('templates/footer');
    }

    public function done()
    {
        if ($this->model('User_model')->registerUser($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'didaftarkan!', 'success');
            header('Location: ' . BASEURL . '/login');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'didaftar!', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }
}
