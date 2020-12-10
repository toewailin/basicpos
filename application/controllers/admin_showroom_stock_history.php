<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_showroom_stock_history extends CI_Controller {

/*Create Stock*/
	

function index()
	{
				

		$qry=$this->db->query("INSERT INTO tbl_showroom_stock_history (product_code,product_name,type,category,remainqty,unit,price,showroom_id,date) SELECT product_code,product_name,type,category,quantity,unit,price,showroom_id,CURDATE() FROM tbl_showroom_stock");

		if($qry)
		{
			$data["message"]="successfully backup the remaining stock lists";
		}
		else
		{
			$data["message"]="fail backup the remaining stock lists. Please try again";

		}


		$data["main_content"]="stock_history_success";
		$this->load->view('admin/template',$data);		
	}
	

}

 ?>