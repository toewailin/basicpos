<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_model extends CI_Model{

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('tbl_user');
		
		if($query->num_rows == 1)
		{
			return true;
			$data['user_role']=$row->user_role;
		}
	}// 

	/*function get_etc($pcode)
	{
		$etcs=$this->db->query("SELECT SUM(quantity) as totalqty, price, unit, SUM(total) as total FROM tbl_sale WHERE tbl_sale.date=CURDATE() AND tbl_sale.product_code='$pcode' GROUP BY tbl_sale.product_code,tbl_sale.unit,tbl_sale.date  ORDER BY tbl_sale.date");
		
		return $etcs;
	}
*/
/*
function get_purchase_price($table,$code)
	{
		$query=$this->db->get_where('tbl_'.$table,array('product_code'=>$code));
		return $query;
	}*/


/**/

function validate_showroom_stock()
{
	$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean|trim");
		$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean|trim");
		$this->form_validation->set_rules("price[]","Price","required|xss_clean|trim");	
		$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean|trim");
		$this->form_validation->set_rules("date","Date","required|xss_clean|trim");
		
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
}

function grab_wname($wh,$wh_id)
{
	$qry=$this->db->query("SELECT name FROM tbl_".$wh." WHERE id='$wh_id'")->row();
	return $qry->name;
}


function getpurchase($type)
{
	$qry=$this->db->query("SELECT * FROM tbl_purchase WHERE type='$type' ORDER BY category,voucherno  DESC");
	return $qry;
}


/**/




	function update_purchase_orderstatus($voucherno)
	{
		$row=$this->db->select("totalqty")->get_where("tbl_purchase_order_header",array("voucherno"=>$voucherno))->row();
		
		$row2=$this->db->select_sum('quantity')->get_where("tbl_deliver",array("voucherno"=>$voucherno))->row();

		if($row2->quantity >= $row->totalqty)
		{
			$this->db->where("voucherno",$voucherno);
			$this->db->update("tbl_purchase_order_header",array("status"=>1));
		}
	}

	/**/

	function update_sale_orderstatus($voucherno)
	{
		$row=$this->db->select("totalqty")->get_where("tbl_sale_order_header",array("voucherno"=>$voucherno))->row();
		
		$row2=$this->db->select_sum('quantity')->get_where("tbl_deliver",array("voucherno"=>$voucherno))->row();

		if($row2->quantity >= $row->totalqty)
		{
			$this->db->where("voucherno",$voucherno);
			$this->db->update("tbl_sale_order_header",array("status"=>1));
		}
	}


	function get_etc($pcode,$date)
	{
		/*$startdate=date("Y-m-d",strtotime($ostartdate));
		$enddate=date("Y-m-d",strtotime($oenddate));
*/
		$etcs=$this->db->query("SELECT SUM(quantity) as totalqty, price, unit, SUM(total) as total FROM tbl_sale WHERE tbl_sale.date='$date' AND tbl_sale.product_code='$pcode' GROUP BY tbl_sale.product_code,tbl_sale.unit,tbl_sale.date  ORDER BY tbl_sale.date");
		
		return $etcs;
	}


/**/

		function grab_staff()
		{
		$this->db->cache_on();
		$this->db->group_by("staff");
		$this->db->order_by("staff");
		$query = $this->db->get("tbl_staff");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->staff]=$row->staff;
		endforeach;
		return $tags;
		}

		/*function grab_category()
		{
		$query = $this->db->query("SELECT DISTINCT category FROM tbl_unit");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->category]=$row->category;
		endforeach;
		return $tags;
		}*/






/**/

		function grab_bank_account()
		{
		$this->db->cache_on();
		$this->db->group_by("account_name");
		$this->db->order_by("account_name");
		$query = $this->db->get("tbl_bank_account");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->account_name."#".$row->id]=$row->account_name." (".$row->bank_name.")";
		endforeach;
		return $tags;
		}




		function grab_family()
		{
		$this->db->cache_on();
		$this->db->group_by("family");
		$this->db->order_by("family");
		$query = $this->db->get("tbl_family");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->family."#".$row->id]=$row->family;
		endforeach;
		return $tags;
		}



		function grab_debt_staff()
		{
		$this->db->cache_on();
		$this->db->group_by("staff");
		$this->db->order_by("staff");
		$query = $this->db->get("tbl_staff");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->staff."#".$row->id]=$row->staff;
		endforeach;
		return $tags;
		}
/**/


//unit option 
function grab_tbl_id($tbl)
	{
		$this->db->cache_on();
		//$this->db->group_by("name");
		$this->db->order_by("name");
		$query = $this->db->get($tbl);
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->name."(".$row->location.")";

		endforeach;
		return $tags;

	}//


//unit option 
function grab_for_balance_sheet($tbl)
	{
		$this->db->cache_on();
		//$this->db->group_by("name");
		$this->db->order_by("name");
		$query = $this->db->get($tbl);
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->name."#".$row->id."#".$row->location]=$row->name."(".$row->location.")";
		endforeach;
		return $tags;

	}//


	function grab_other_receivables()
	{
		$this->db->cache_on();
		$this->db->order_by("description");
		$query = $this->db->get("tbl_other_receivable");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->description."#".$row->id]=$row->description;
		endforeach;
		return $tags;

	}//

	//category option
function grab_category()
	{
		$this->db->cache_on();
		$query = $this->db->get("tbl_category");
		if($query->num_rows()<=0)
		{
			$tags['select']="..Select..";
		}
		else
		{
		$tags['']=".. Select ..";
		foreach($query->result() as $row):
			$tags[$row->category]=$row->category;
		endforeach;
		}
		return $tags;
	}
	//



	function grab_jackpotcustomer()
	{
		
		$this->db->cache_on();
		$query = $this->db->query("SELECT DISTINCT customer FROM tbl_jackpotchange WHERE customer!='' GROUP BY customer");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->customer]=$row->customer;
		endforeach;
		return $tags;	

	}


	/*------------*/

	function check_shop_code($wh,$wh_id,$id,$code)
	{
		$query=$this->db->query("SELECT * FROM $wh WHERE $wh_id='$id' AND product_code='$code'");
		return $query;
	}

	


	function check_stock($table,$code)
	{

		$query=$this->db->query("SELECT * FROM ".$table." WHERE product_code='$code'");
		return $query;	
	}

	/*----------------------*/

	function check_shop_stock($code,$unit)
	{
		//echo $code;

		$query=$this->db->query("SELECT * FROM tbl_shop_stock WHERE product_code='$code' AND unit='$unit'");
		return $query;	
	}

	///
	function check_stock_remind()
	{

		$query=$this->db->query("SELECT *,s.quantity as l,s.product_code,s.product_name as pname,s.unit as unit FROM tbl_showroom_stock as s LEFT JOIN tbl_remind_purchase as r ON s.product_code=r.product_code  AND s.unit=r.unit WHERE s.quantity<=r.atleastqty");
		return $query;
	}


/**/
		function check_shop_stock_remind()
	{

		$query=$this->db->query("SELECT *,s.quantity as l,s.product_code,s.product_name as pname FROM tbl_showroom_stock as s LEFT JOIN tbl_remind_purchase as r ON s.product_code=r.product_code  WHERE s.quantity<=r.atleastqty");
		return $query;
	}


	


	function check_debt_alert()
	{
		$today=date("Y-m-d");
		 $std=date("Y-m-d",strtotime($today)-1296000);
   	 $query=$this->db->query("SELECT * FROM tbl_customer WHERE total_debt<0 AND last_date<='$std'");
   	 return $query;
	}
	/**/  
     
	function get_purchase_price($table,$code)
	{
		$query=$this->db->get_where('tbl_'.$table,array('product_code'=>$code));
		return $query;
	}



	function get_stock($code,$unit)
	{
		$this->db->select("tbl_shop_stock.*,tbl_product_price.purchase_price");
		$this->db->join("tbl_product_price","tbl_shop_stock.product_code=tbl_product_price.product_code");
		$this->db->where("tbl_product_price.unit",$unit);
		$query=$this->db->get_where('tbl_shop_stock',array('tbl_shop_stock.product_code'=>$code));
		return $query;
	}

	
		/*Account Check*/
	function check_account($username,$oldpass)
	{

		//$this->db->where("computer_name",gethostbyaddr($this->input->ip_address()));
		$check=$this->db->get_where('tbl_user',array('username'=>$username,'password'=>$oldpass));
		return $check;

	}

	/*check ownmoney account*/

	function check_ownmoney_account($oldpass)
	{

		
		$check=$this->db->get_where('tbl_total',array('upass'=>$oldpass));
		return $check;

	}
	
	/*Get All Data*/	
	function data_list($table)
	{

	$config["base_url"]=base_url()."index.php/admin/stock_list/".$table;
	$config['total_rows'] = $this->db->get('tbl_'.$table)->num_rows;
	$config['per_page'] = 20;
	$config['uri_segment'] = 3;
	$config['num_links'] = 10;
	$config['full_tag_open'] = '<ul>';
	$config['full_tag_close'] = '</ul>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li><a class="current">';
	$config['cur_tag_close'] = '</a></li>';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';
	$config['prev_link'] = 'Prev';
	$config['next_link'] = 'Next';

	$this->pagination->initialize($config);	
	$this->db->order_by('id','DESC');
	/*if($table=="product_price")
	{
		$this->db->where('iscurrent',1);
	}*/
	$query = $this->db->get('tbl_'.$table,$config['per_page'],$this->uri->segment(4));
	
	return $query;
	}



	// get data by individual id

	function get_data($id,$form)
	{

			
			switch($form)
			{
				case 'purchase':
				//$data["supplier"]=$this->admin_model->grab_supplier();
				$row=$this->db->query("SELECT tbl_purchase.*,tbl_purchase_header.* FROM tbl_purchase_header 
					LEFT JOIN tbl_purchase ON tbl_purchase.voucherno=tbl_purchase_header.voucherno WHERE tbl_purchase_header.voucherno='$id'");
				break;

				case 'sale':
				//$data["supplier"]=$this->admin_model->grab_supplier();
				$row=$this->db->query("SELECT tbl_customer.total_debt,tbl_sale.*,tbl_sale_header.* FROM tbl_sale_header 
					LEFT JOIN tbl_sale ON tbl_sale.sale_id=tbl_sale_header.sale_id LEFT JOIN tbl_customer ON tbl_customer.id=tbl_sale_header.customer_id WHERE tbl_sale_header.sale_id='$id' AND tbl_sale.sale_type='showroom'");
				break;

				case 'other_customer_sale':
				//$data["supplier"]=$this->admin_model->grab_supplier();
				$row=$this->db->query("SELECT tbl_customer.total_debt,tbl_sale.*,tbl_other_customer_sale_header.* FROM tbl_other_customer_sale_header 
					LEFT JOIN tbl_sale ON tbl_sale.sale_id=tbl_other_customer_sale_header.sale_id LEFT JOIN tbl_customer ON tbl_customer.id=tbl_other_customer_sale_header.customer_id WHERE tbl_other_customer_sale_header.sale_id='$id' AND tbl_sale.sale_type='other'");
				break;

				case 'subwarehouse_sale':
				//$data["supplier"]=$this->admin_model->grab_supplier();
				$row=$this->db->query("SELECT tbl_customer.total_debt,tbl_sale.*,tbl_subwarehouse_sale_header.* FROM tbl_subwarehouse_sale_header 
					LEFT JOIN tbl_sale ON tbl_sale.sale_id=tbl_subwarehouse_sale_header.sale_id LEFT JOIN tbl_customer ON tbl_customer.id=tbl_subwarehouse_sale_header.customer_id WHERE tbl_subwarehouse_sale_header.sale_id='$id'  AND tbl_sale.sale_type='subwarehouse'");
				break;

				case 'staff_sale':
				//$data["supplier"]=$this->admin_model->grab_supplier();
				$row=$this->db->query("SELECT tbl_staff.total_debt,tbl_sale.*,tbl_staff_sale_header.* FROM tbl_staff_sale_header 
					LEFT JOIN tbl_sale ON tbl_sale.sale_id=tbl_staff_sale_header.sale_id LEFT JOIN tbl_staff ON tbl_staff.id=tbl_staff_sale_header.staff_id WHERE tbl_staff_sale_header.sale_id='$id'  AND tbl_sale.sale_type='staff'");
				break;

				case 'family_sale':
				//$data["supplier"]=$this->admin_model->grab_supplier();
				$row=$this->db->query("SELECT tbl_family.total_debt,tbl_sale.*,tbl_family_sale_header.* FROM tbl_family_sale_header
				 LEFT JOIN tbl_sale ON tbl_sale.sale_id=tbl_family_sale_header.sale_id LEFT JOIN tbl_family ON tbl_family.id=tbl_family_sale_header.family_id WHERE tbl_family_sale_header.sale_id='$id'  AND sale_type='family'");
				break;

				case 'consinement_sale':
				$row=$this->db->query("SELECT tbl_sale.*,tbl_consinement_sale_header.* FROM tbl_consinement_sale_header 
					LEFT JOIN tbl_sale ON tbl_sale.voucherno=tbl_consinement_sale_header.voucherno WHERE tbl_consinement_sale_header.voucherno='$id'  AND sale_type='consinement'");
				break;

				case "consinement_stock_header":
				$row=$this->db->query("SELECT tbl_consinement_stock_header.*,tbl_consinement_transfer_history.* FROM tbl_consinement_transfer_history 
					LEFT JOIN tbl_consinement_stock_header ON tbl_consinement_transfer_history.voucherno=tbl_consinement_stock_header.voucherno JOIN tbl_consinement ON tbl_consinement_stock_header.consinement_id=tbl_consinement.id WHERE tbl_consinement_transfer_history.voucherno='$id'");

				break;

				case "supplier_balance_sheet":
				$row=$this->db->query("SELECT tbl_supplier.*,tbl_supplier_balance_sheet.* FROM tbl_supplier_balance_sheet LEFT JOIN tbl_supplier ON tbl_supplier_balance_sheet.supplier_id=tbl_supplier.id WHERE tbl_supplier_balance_sheet.id='$id'")->row();
				break;

				
				default:
				$row=$this->db->get_where("tbl_".$form,array('id'=>$id))->row();
				break;
			}
			
		
			return $row;
	
	}//


	function get_saled_data($id,$voucherno,$form)
	{

			$row=$this->db->$this->db->query("SELECT tbl_sale.*,tbl_sale_header.* FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.id='$id'")->row();		
			return $row;
	
	}//
	


	function validate_search()
	{
		$this->form_validation->set_rules("data","Value","xss_clean|trim");
		$this->form_validation->set_rules("colunm","Colunm Name","xss_clean|trim");
		$this->form_validation->set_rules("startdate","Start Date","xss_clean|trim");
		$this->form_validation->set_rules("enddate","End Date","xss_clean|trim");
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}


/**/

function validate_sale_return()
	{
		
		$this->form_validation->set_rules("return_type","return_type","required|xss_clean|trim");
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
/**/

/**/

function validate_consinement_sale_return()
	{
		
		$this->form_validation->set_rules("consinement","consinement","required|xss_clean|trim");
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
/**/



/**/

function validate_purchase_return()
	{
		
		$this->form_validation->set_rules("supplier","supplier","required|xss_clean|trim");
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
/**/




	function create_unseen_promotion()
	{
		
		$this->form_validation->set_rules("customer","customer Name","xss_clean|trim");
		$this->form_validation->set_rules("amount","Amount","xss_clean|trim");
	
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}


/*Validate validate_supplier_order*/

	function validate_purchase_order()
	{
		$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean|trim");
		$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean|trim");
		$this->form_validation->set_rules("unit[]","Unit","required|xss_clean|trim");	
		$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean|trim");
		$this->form_validation->set_rules("supplier","Supplier Name","required|xss_clean|trim");
		
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}



/*Validate validate_customer_order*/

	function validate_sale_order()
	{
		$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean|trim");
		$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean|trim");
		
		$this->form_validation->set_rules("unit[]","Unit","required|xss_clean|trim");	
		$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean|trim");
		$this->form_validation->set_rules("customer","Customer Name","required|xss_clean|trim");
		
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

/*Validate Deliver*/

	function validate_deliver()
	{
		$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean|trim");
		$this->form_validation->set_rules("unit[]","Unit","required|xss_clean|trim");
		$this->form_validation->set_rules("price[]","Price","required|xss_clean|trim");
		$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean|trim");
		$this->form_validation->set_rules("customer[]","Customer","required|xss_clean|trim");
		$this->form_validation->set_rules("address[]","address","required|xss_clean|trim");
		$this->form_validation->set_rules("authority[]","Authority","xss_clean|trim");
		
		if($this->form_validation->run()==FALSE)
		{
			return false;
		}
		else
		{
			return true;
		}
	}


	function outcome($y)
	{
		$query=$this->db->query("SELECT SUM(total_purchase) as total, SUM(total_general_outcome) as totalG, SUM(total_damage) as totalD, SUM(total_sale) as totalIncome, date FROM tbl_income_outcome WHERE year='$y' GROUP BY month");
	/*	$this->db->select('tbl_purchase.date');
		$this->db->select_sum('tbl_purchase.total');
		$this->db->select_sum("tbl_sale.alltotal");
		$this->db->join('tbl_purchase','tbl_purchase.month=tbl_sale.month','LEFT');
		$this->db->where('tbl_purchase.year',$y);
		$this->db->where('tbl_sale.year',$y);
		$this->db->group_by('tbl_purchase.year');
		$query=$this->db->get('tbl_sale');*/
		
		return $query;
	}

	function income($y)
	{
		$query=$this->db->query("SELECT SUM(tbl_sale.alltotal) as alltotal,tbl_sale.date FROM tbl_sale WHERE tbl_sale.year='$y' GROUP BY tbl_sale.month");
	/*	$this->db->select('tbl_purchase.date');
		$this->db->select_sum('tbl_purchase.total');
		$this->db->select_sum("tbl_sale.alltotal");
		$this->db->join('tbl_purchase','tbl_purchase.month=tbl_sale.month','LEFT');
		$this->db->where('tbl_purchase.year',$y);
		$this->db->where('tbl_sale.year',$y);
		$this->db->group_by('tbl_purchase.year');
		$query=$this->db->get('tbl_sale');*/
		
		return $query;
		
	}

		


		/*get_fullyears*/

		function get_fullyears()
		{
			
			$query=$this->db->query('SELECT DISTINCT(year) FROM tbl_income_outcome ORDER BY year DESC');
			return $query;
		}


		

		function validate_outcome_category()
		{
			$this->form_validation->set_rules("title","Title","required|xss_clean");

			if($this->form_validation->run()==false)
			{
				return FALSE;
			}
			
			else
			{
				return true;
			}
		}

		/**/

		function validate_stock()
		{

			$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");
			$this->form_validation->set_rules("price[]","Price","required|xss_clean");
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");
			
		

		  	if($this->form_validation->run()==FALSE)
				 {
	
					return false;

				 }    
	   		else
				 {
			
					return true;
			
	  			 }
		}//
		/*Validate Stock*/

		function validate_consinement_stock()
		{

			$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");
			$this->form_validation->set_rules("price[]","Price","required|xss_clean");
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");
			$this->form_validation->set_rules("consinement_id","Consinement","required|required|xss_clean");
		

		  	if($this->form_validation->run()==FALSE)
				 {
	
					return false;

				 }    
	   		else
				 {
			
					return true;
			
	  			 }
		}//






		


		/*Validate Purchase*/

		function validate_purchase()
		
		{

			//$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");
			$this->form_validation->set_rules("unit[]","Unit","required|xss_clean");
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");
			$this->form_validation->set_rules("price[]","Price","required|xss_clean");
			$this->form_validation->set_rules("voucherno","Voucher Number","xss_clean");
			$this->form_validation->set_rules("supplier","Supplier","xss_clean");
		//	$this->form_validation->set_rules("address","address","xss_clean");

		  	if($this->form_validation->run()==FALSE)
				 {
	
					return false;

				 }    
	   		else
				 {
			
					return true;
			
	  			 }
		}//


	
		/**/

	function validate_damage()
		{

			$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");		
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");

		  	if($this->form_validation->run()==FALSE)
				 {	
					return false;
				 }    
	   		else
				 {			
					return true;			
	  			 }
		}//


		/**/


	function validate_user()
		{

			$this->form_validation->set_rules("username","User Name","required|xss_clean");
			$this->form_validation->set_rules("password","Password","required|xss_clean");
			$this->form_validation->set_rules("ip_address","IP Address","required|xss_clean");
			$this->form_validation->set_rules("computer_name","Computer Name","required|xss_clean");
			$this->form_validation->set_rules("user_role","User Role","required|xss_clean");
		  	if($this->form_validation->run()==FALSE)
				 {	
					return false;
				 }    
	   		else
				 {			
					return true;			
	  			 }
		}//


		/**/

		function validate_supplier()
		{

			$this->form_validation->set_rules("supplier","Supplier name","required|xss_clean");
			$this->form_validation->set_rules("address","Address","xss_clean");
			$this->form_validation->set_rules("phone","Phone","xss_clean");
			$this->form_validation->set_rules("contact_person","Contact Person","xss_clean");
			$this->form_validation->set_rules("date","Date","xss_clean");
		  	if($this->form_validation->run()==FALSE)
				 {	
					return false;
				 }    
	   		else
				 {			
					return true;			
	  			 }
		}//

			/**/

		function validate_customer()
		{

			$this->form_validation->set_rules("customer","customer name","required|xss_clean");
			$this->form_validation->set_rules("address","Address","xss_clean");
			$this->form_validation->set_rules("phone","Phone","xss_clean");
			$this->form_validation->set_rules("contact_person","Contact Person","xss_clean");
			$this->form_validation->set_rules("date","Date","xss_clean");
		  	if($this->form_validation->run()==FALSE)
				 {	
					return false;
				 }    
	   		else
				 {			
					return true;			
	  			 }
		}//


		/**/

	function validate_unit()
		{
			$this->form_validation->set_rules("product_code","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name","Product Name","required|xss_clean");
			$this->form_validation->set_rules("category","category","required|xss_clean");
			
			$this->form_validation->set_rules("price","Price","required|xss_clean");
			
			if($this->form_validation->run()==false)
			{
				return false;
			}
			else
			{
				return true;
			}
		}//


		/**/
	function validate_general_outcome()
		{
			$this->form_validation->set_rules("description[]","description","required|xss_clean");
			$this->form_validation->set_rules("price[]","Amount","required|xss_clean");
		//	$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");
		//	$this->form_validation->set_rules("total[]","Total","required|xss_clean");
		//	$this->form_validation->set_rules("date[]","Date","xss_clean");
		//	$this->form_validation->set_rules("authority[]","Authority","required|xss_clean");

			if($this->form_validation->run()==false)
			{
				return false;
			}
			else
			{
				return true;
			}

		}


	

function validate_remind_purchase()
	{
		$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
		$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");
		$this->form_validation->set_rules("quantity[]","Atleast Quantity","required|xss_clean");
		if($this->form_validation->run()==false)
		{
			return false;
		}
		else
		{
			return true;
		}
	}//

	//unit option 
function grab_unit()
	{
		$this->db->cache_on();
		$query = $this->db->query("SELECT DISTINCT(unit) FROM tbl_unit");
		if($query->num_rows()<=0)
		{
			$tags['select']="..Select..";
		}
			$tags['']=".. Select ..";
		foreach($query->result() as $row):
			$tags[$row->unit]=$row->unit;
		endforeach;
		return $tags;

	}//


//unit option 
function grab_supplier()
	{
		$this->db->cache_on();
		$query = $this->db->get("tbl_supplier");
		if($query->num_rows()<=0)
		{
			$tags['select']="..Select..";
		}
			$tags['']=".. Select ..";
		foreach($query->result() as $row):
			$tags[$row->supplier_name."#".$row->id]=$row->supplier_name;
		endforeach;
		return $tags;

	}//


/*Grab Product Code*/


//unit option 
function grab_customer()
	{
		//$this->db->cache_on();
		//$this->db->group_by("customer_name");
		$this->db->order_by("customer_name");
		$query = $this->db->get("tbl_customer");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->customer_name."( ".$row->address." )".$row->id]=$row->customer_name."( ".$row->address." )";
		endforeach;
		return $tags;

	}

/**/

	function grab_customer_id()
	{
		$this->db->cache_on();
		//$this->db->group_by("customer_name");
		$this->db->order_by("customer_name");
		$query = $this->db->get("tbl_customer");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->customer_name."( ".$row->address." )";
		endforeach;
		return $tags;

	}//


	function grab_supplier_id()
	{
		$this->db->cache_on();
		//$this->db->group_by("supplier_name");
		$this->db->order_by("supplier_name");
		$query = $this->db->get_where("tbl_supplier");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->supplier_name."( ".$row->address." )";
		endforeach;
		return $tags;

	}//


	function grab_family_id()
	{
		$this->db->cache_on();
		//$this->db->group_by("family_name");
		$this->db->order_by("family");
		$query = $this->db->get("tbl_family");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->family;
		endforeach;
		return $tags;

	}//


	function grab_staff_id()
	{
		$this->db->cache_on();
		//$this->db->group_by("staff_name");
		$this->db->order_by("staff");
		$query = $this->db->get("tbl_staff");
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->staff;
		endforeach;
		return $tags;

	}//


//unit option 
function grab_other_customer()
	{
		$this->db->cache_on();
		//$this->db->group_by("customer_name");
		$this->db->order_by("customer_name");
		$query = $this->db->get_where("tbl_customer",array("type"=>"other"));
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->customer_name."( ".$row->address." ) #".$row->id]=$row->customer_name."( ".$row->address." )";
		endforeach;
		return $tags;

	}//



//unit option 
function grab_other_customer_id()
	{
		$this->db->cache_on();
		//$this->db->group_by("customer_name");
		$this->db->order_by("customer_name");
		$query = $this->db->get_where("tbl_customer",array("type"=>"other"));
		if($query->num_rows()<=0)
		{
			$tags['']="..Select..";
		}
		$tags['']="..select..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->customer_name."( ".$row->address." )";
		endforeach;
		return $tags;

	}//


	

//category option
function grab_outcome_category()
	{
		$this->db->cache_on();
		$query = $this->db->get("tbl_outcome_category");
		if($query->num_rows()<=0)
		{
			$tags['select']="..Select..";
		}
		else
		{
		$tags['']=".. Select ..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->title;
		endforeach;
		}
		return $tags;
	}//



//category option
function grab_factory_outcome_category()
	{
		$this->db->cache_on();
		$query = $this->db->get("tbl_factory_outcome_category");
		if($query->num_rows()<=0)
		{
			$tags['select']="..Select..";
		}
		else
		{
		$tags['']=".. Select ..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->title;
		endforeach;
		}
		return $tags;
	}//

	



function grab_income_category()
	{
		$this->db->cache_on();
		$query = $this->db->get("tbl_income_category");
		if($query->num_rows()<=0)
		{
			$tags['select']="..Select..";
		}
		else
		{
		$tags['']=".. Select ..";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->title;
		endforeach;
		}
		return $tags;
	}//


	
	function img_upload($files,$folder)
		{
		
		
		if(!$files)
		{
		return false;
		}
		
		else{
					
		
				$path='images/'.$folder.'/full/';
			
			//$config['file_ext']	=
			$config['overwrite']=TRUE;
		 	$config['upload_path']=$path;		  
		   $config['allowed_types'] = 'gif|jpg|png|jpeg';
			/*$config['max_width'] = '960';
			$config['max_height'] = '450';*/

		 
			
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload())
				{
											
					echo $this->upload->display_errors();
					exit;
					
				}

				else
				{
				
				$image = $this->upload->data();
				$config['image_library'] = 'gd2';				
				$config['source_image'] = $image["full_path"];
				$config['new_image'] = 'images/photo/thumbs/'.$image['file_name'];
				$config['width'] = 100;
				$config['height'] = 100;				
				$config['maintain_ratio'] = TRUE;	
		
			
				
				$this->load->library('image_lib', $config);
				if(!$this->image_lib->resize()) echo $this->image_lib->display_errors();
					return $image;
				}
					
				
			
			}
		}



}/*admin_model end here*/