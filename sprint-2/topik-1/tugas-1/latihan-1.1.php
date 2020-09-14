<?php
class Perpustakaan 
{
    protected $judul= "Bulughul Maram";
    protected $isbn = "A2412";
   
    public function pinjam_buku() 
    {
        return "pengunjung meminjam buku $this->judul nomor $this->isbn";
    }
   
    public function kembalikan_buku()
    {
        return "pengunjung mengembalikan buku $this->judul nomor $this->isbn";
    }
 }

 $Perpustakaan = new Perpustakaan();
   
 echo $Perpustakaan->pinjam_buku();
 echo "\n";
 echo $Perpustakaan->kembalikan_buku();
 echo "\n";