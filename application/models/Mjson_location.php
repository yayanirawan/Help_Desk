<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mjson_location extends Rsbt_model 
{
	//public $user;
	
	public function __construct()
	{
		parent::__construct();
		
	}


	// public function all_location()
	// {
	// 	$this->db->select('*');

	// 	$this->db->from('penduduk');

	// 	$this->db->join('tanah', 'tanah.nik = penduduk.nik');

	// 	$this->db->join('rumah', 'rumah.nik = tanah.nik');

	// 	foreach($this->db->get()->result() as $get)
	// 	{
	// 			$data[] = array(
	// 			'id' => md5(sha1($get->nik)),
	// 			'lat' => $get->latitude,
	// 			'lng' => $get->longitude,
	// 			'icon' => $get->icon,
	// 			'description'=>$get->deskripsi,
				
	// 		);
	// 	} 
	// 	return $data;
	// }


}

