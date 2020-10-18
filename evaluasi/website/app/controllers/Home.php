<?php

class Home extends Controller{

    public function index()
    {
        $data['judul'] = 'Home';
        $data['artikel'] = $this->model('Artikel_model')->readAllArtikel();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function search()
    {
        $data['judul'] = 'Search';
        $data['search'] = $this->model('Artikel_model')->searchArtikel();
        $this->view('templates/header', $data);
        $this->view('home/search', $data);
        $this->view('templates/footer');
    }
}