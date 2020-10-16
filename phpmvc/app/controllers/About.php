<?php

class About extends Controller {
    public function index($nama = 'dzul', $pekerjaan = 'dorong awan', $umur = 1032)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'Data';
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Halaman';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}