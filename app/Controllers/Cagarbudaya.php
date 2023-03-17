<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Cagarbudaya extends BaseController
{
	function __construct() {
        $this->budayamodel = new BudayaModel();
    }

    public function index()
    {
        $kategori=0;
        if(isset($_GET['kategori']))
            $kategori=$_GET['kategori'];

		$query = $this->budayamodel->getAllCB($kategori);
        $data['daftarcb'] = $query->getResult();

        // echo var_dump($data['daftarcb']);

        $dafwbtb = $this->budayamodel->getJenisCB();
        
        $data['daftarkategori'] = $dafwbtb->getResult();
        $data['kategori'] = $kategori;
		
        return view('cagarbudaya', $data);
    }

    public function objek($kode)
    {
        $query = $this->budayamodel->getObjCB($kode);
        $datacb = $query->getRow();
        $data['detailcb'] = $datacb;
        $query2 = $this->budayamodel->getPicObjCB($kode);
        $data['fotocb'] = $query2->getResult();
        $lintang = $datacb->lintang;
        $bujur = $datacb->bujur;
        $kodewilayah = substr($datacb->kode_wilayah,0,4);
        $query3 = $this->budayamodel->getSekolahTerdekat($lintang,$bujur,$kodewilayah);
        $data['sekolahterdekat'] = $query3->getResult();

        // echo var_dump($data['sekolahterdekat']);
        
        return view('obj_cagarbudaya', $data);
    }

}
