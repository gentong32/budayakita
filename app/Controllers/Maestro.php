<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Maestro extends BaseController
{
	function __construct() {
        $this->budayamodel = new BudayaModel();
    }

    public function index()
    {

		$query = $this->budayamodel->getAllMaestro();
        $data['daftarmaestro'] = $query->getResult();

        return view('maestro', $data);
    }

    public function objek($kode)
    {
        $query = $this->budayamodel->getObjMaestro($kode);
        $data['detailmaestro'] = $query->getRow();
        return view('obj_maestro', $data);
    }

}
