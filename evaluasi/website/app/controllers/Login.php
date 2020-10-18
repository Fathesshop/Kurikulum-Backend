<?php


class Login extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . '/admin');
        }
        $data['judul'] = "Sign In";
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }


    public function done()
    {
        if ($this->model('User_model')->loginUser($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Login', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Login', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }
}
