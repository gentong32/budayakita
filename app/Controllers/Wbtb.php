<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Wbtb extends BaseController
{
	function __construct() {
        $this->budayamodel = new BudayaModel();
    }

    public function index()
    {
        $kategori=0;
        if(isset($_GET['kategori']))
            $kategori=$_GET['kategori'];
		$query = $this->budayamodel->getAllWbtb($kategori);

        $dafwbtb = $this->budayamodel->getJenisWbtb();
        
        $data['daftarwbtb'] = $query->getResult();
        $data['daftarkategori'] = $dafwbtb->getResult();
        $data['kategori'] = $kategori;

        // echo $data['kategori'];
		
        return view('wbtb', $data);
    }

    public function objek($kode)
    {
        $query = $this->budayamodel->getObjWbtb($kode);
        $data['detailcb'] = $query->getRow();
        $query2 = $this->budayamodel->getPicObjWbtb($kode);
        
        $data['fotowbtb'] = $query2->getResult();
        return view('obj_wbtb', $data);
    }

    function hex_str($hex){
        $string='';
        for ($i=0; $i < strlen($hex)-1; $i+=2){
            $string .= chr(hexdec($hex[$i].$hex[$i+1]));
        }
        return $string;
    }

    function displayImage($image)
    {
        header ('Content-Type: image/jpg');
        imagejpeg(imagecreatefromstring($image), null,100);
    }

}
