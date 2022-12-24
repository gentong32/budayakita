<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Sanggar extends BaseController
{
	function __construct() {
        $this->budayamodel = new BudayaModel();
    }

    public function index()
    {

		$query = $this->budayamodel->getAllSanggar();
        $data['daftarsanggar'] = $query->getResult();
		
        return view('sanggar', $data);
    }

    public function objek($kode)
    {
        $query = $this->budayamodel->getObjSanggar($kode);
        $data['detailsanggar'] = $query->getRow();
        return view('obj_sanggar', $data);
    }

}
