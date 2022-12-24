<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {		
        return view('tes');
    }

    public function getAuto()
    {		
		$request = service('request');
		$postData = $request->getPost();
  
		$response = array();
		$response['token'] = csrf_hash();

		$data = array();
  
		if(isset($postData['search'])){
  
		   $search = $postData['search'];
			$kodewilayah = '000000';
		   	if ($kodewilayah=='000000')
			{
				$wer = " where nama like '%".$search."%'";
				$wer1 = " where nama like '%".$search."%'";
			}
			else 
			{
				$nleft = 2;
				$kodwil = substr($kodewilayah,0,2);
				$wer = "where (left(cb.kode_wilayah,2)='".$kodwil."' AND nama like '%".$filter."%')";
				$wer1 = "where (left(wt.kode_prov,2)='".$kodwil."' AND nama like '%".$filter."%')";
			}

			$query1 = "select top 10 kode_pengelolaan, nama, jenis_id as jenis, kode_wilayah as kode_prov from 
			Kebudayaan.dbo.cagar_budaya cb ".$wer." 
			UNION 
			select top 10 kode_pengelolaan, nama, jenis, kode_prov from 
			Kebudayaan.dbo.wbtb wt ".$wer1;

			$query = $this->db->query($query1);
			$hasil = $query->getResult();
			$data = array();

			foreach ($hasil as $row){
				$data[] = array(
					"value" => $row->kode_prov,
					"label" => $row->nama
				);
			}
		}
  
		$response['data'] = $data;
  
		return $this->response->setJSON($response);
  
    }
}
