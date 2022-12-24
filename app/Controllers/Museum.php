<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Museum extends BaseController
{
	function __construct() {
        $this->budayamodel = new BudayaModel();
    }

    public function index()
    {
        $jenis = isset($_GET['jenis']) ? $_GET['jenis'] : "all";
      
		$query = $this->budayamodel->getAllMuseum($jenis);
        $data['daftarmuseum'] = $query->getResult();

		$query2 = $this->budayamodel->dafJenisLK();
        $data['jenislembaga'] = $query2->getResult();
        $data['idjenis'] = $jenis;
		
        return view('museum', $data);
    }

    public function objek($kode)
    {
        $query = $this->budayamodel->getObjMuseum($kode);
        $data['detailmuseum'] = $query->getRow();
        $query2 = $this->budayamodel->getPicObjMuseum($kode);
        $data['fotomuseum'] = $query2->getResult();
        return view('obj_museum', $data);
    }

}
