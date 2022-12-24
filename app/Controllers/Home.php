<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Home extends BaseController
{
	function __construct() {
        $this->budayamodel = new BudayaModel();
    }

    public function index()
    {
		$query = $this->budayamodel->getAllObject();
        $data['datakota'] = $query->getResult();
		
        return view('home', $data);
    }

    public function getAuto()
    {		
		$request = service('request');
		$postData = $request->getPost();
  
		$response = array();
		$response['token'] = csrf_hash();

		$data = array();
  
		if(isset($postData['search']))
		{
		   	$search = $postData['search'];
			$kodewilayah = $postData['kodwil'];
		   	if ($kodewilayah=='000000')
			{
				$wer = " where nama like '%".$search."%'";
				$wer1 = " where nama like '%".$search."%'";
				$wer2 = " where nama like '%".$search."%'";
			}
			else if (substr($kodewilayah,2,2)==00)
			{
				$nleft = 2;
				$kodwil = substr($kodewilayah,0,2);
				$wer = "where (left(cb.kode_wilayah,2)='".$kodwil."' AND nama like '%".$search."%')";
				$wer1 = "where (left(wt.kode_prov,2)='".$kodwil."' AND nama like '%".$search."%')";
				$wer2 = "where (left(ms.kode_wilayah,2)='".$kodwil."' AND nama like '%".$search."%')";
			}
			else 
			{
				$nleft = 4;
				$kodwil = substr($kodewilayah,0,4);
				$wer = "where (left(cb.kode_wilayah,4)='".$kodwil."' AND nama like '%".$search."%')";
				$wer1 = "where (left(wt.kode_prov,4)='".$kodwil."' AND nama like '%".$search."%')";
				$wer2 = "where (left(ms.kode_wilayah,4)='".$kodwil."' AND nama like '%".$search."%')";
			}

			$query1 = "select top 10 kode_pengelolaan, nama, jenis_id as jenis, kode_wilayah as kode_prov from 
			Kebudayaan.dbo.cagar_budaya cb ".$wer." AND soft_delete=0 
			UNION 
			select top 10 kode_pengelolaan, nama, jenis, kode_prov from 
			Kebudayaan.dbo.wbtb wt ".$wer1. " AND soft_delete=0 
			UNION 
			select top 10 kode_pengelolaan, nama, 1 as jenis, kode_wilayah as kode_prov from 
			Kebudayaan.dbo.museum ms ".$wer2. " AND soft_delete=0";

			$query = $this->db->query($query1);
			$hasil = $query->getResult();
			$data = array();

			foreach ($hasil as $row){
				$data[] = array(
					"value" => $row->kode_pengelolaan,
					"label" => $row->nama
				);
			}
		}
  
		$response['data'] = $data;
  
		return $this->response->setJSON($response);
  
    }

	public function objek($kode)
    {	
		$data['prefiks']  = $prefiks = substr($kode,0,2);
		if ($prefiks == "KB")
			return redirect()->to(site_url('cagarbudaya/objek/'.$kode));
		else if ($prefiks == "AA")
			return redirect()->to(site_url('wbtb/objek/'.$kode));
		else if ($prefiks == "MS")
			return redirect()->to(site_url('museum/objek/'.$kode));
	}
}
