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

        $dafwbtb = $this->budayamodel->getJenisCB();
        
        $data['daftarkategori'] = $dafwbtb->getResult();
        $data['kategori'] = $kategori;
		
        return view('cagarbudaya', $data);
    }

    public function objek($kode)
    {
        $query = $this->budayamodel->getObjCB($kode);
        $data['detailcb'] = $query->getRow();
        $query2 = $this->budayamodel->getPicObjCB($kode);
        $data['fotocb'] = $query2->getResult();
        return view('obj_cagarbudaya', $data);
    }

}
