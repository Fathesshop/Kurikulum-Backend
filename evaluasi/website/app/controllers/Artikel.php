<?php

class Artikel extends Controller {
    public function index($id)
    {
        $data['judul'] = 'Artikel';
        $data['artikel'] = $this->model('Artikel_model')->readArtikelById($id);
        $data['newartikel'] = $this->model('Artikel_model')->newAllArtikel();
        
        $this->view('templates/header', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/footer');
    }
}