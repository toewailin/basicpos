<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_sale_print extends CI_Controller {


function showroom_sale_voucher_print()
	{	
	
			$voucherno=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.* FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno' ");
			$data["cus"] = $this->db->query("SELECT tbl_sale.*,tbl_sale_header.customer_name FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno' ")->row();
 			$this->load->view("admin/showroom_sale_voucher_print",$data);
		
		
	}//


function unit_print()
	{	
	
			//$voucherno=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT * FROM tbl_unit");
			$this->load->view("admin/unit_print",$data);
		
		
	}//


function purchase_print()
	{	
	
			//$voucherno=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE MONTH(date)=MONTH(Now()) ORDER By date DESC ");
			$this->load->view("admin/purchase_print",$data);
		
	}//


function pvoucher_print()
	{	
	
			//$voucherno=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$data["lists"]=$this->db->query("SELECT tbl_purchase.*,tbl_purchase_header.* FROM tbl_purchase LEFT JOIN tbl_purchase_header ON tbl_purchase.voucherno=tbl_purchase_header.voucherno WHERE tbl_purchase.voucherno='$voucherno'");
			$this->load->view("admin/pvoucher_print",$data);
	}//



function monthly_cash_book_print()
	{	
	
				$data["dateinterval"]=date("m-Y");
				$startdate=$this->uri->segment(3);
				$enddate=$this->uri->segment(4);

				if(!$this->uri->segment(3) && !$this->uri->segment(4))
				{
				$data["incomes"]=$this->db->query("SELECT SUM(tbl_general_income.total) as total,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id where MONTH(tbl_general_income.date)=MONTH(NOW()) and YEAR(tbl_general_income.date)=YEAR(NOW()) group by income_category ");
				$data["creditsale"]=$this->db->query("SELECT SUM(tbl_sale_header.nettotal-tbl_sale_header.received) as total_debt FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND paytype='credit' ")->row();

					$data["outcomes"]=$this->db->query("SELECT SUM(tbl_general_outcome.total) as total,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id where MONTH(tbl_general_outcome.date)=MONTH(NOW()) and YEAR(tbl_general_outcome.date)=YEAR(NOW()) group by outcome_category ");
				$data["purchases"]=$this->db->query("SELECT SUM(tbl_purchase_header.nettotal) as total FROM tbl_purchase_header where MONTH(tbl_purchase_header.date)=MONTH(NOW()) and YEAR(tbl_purchase_header.date)=YEAR(NOW())");
				$data["sale"]=$this->db->query("SELECT SUM(tbl_sale_header.received) as total_received FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND received !=0 ")->row();
				}
				
				else
				{
					$data["outcomes"]=$this->db->query("SELECT SUM(tbl_general_outcome.total) as total,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id where date BETWEEN '$startdate' AND '$enddate' group by outcome_category ");
				$data["incomes"]=$this->db->query("SELECT SUM(tbl_general_income.total) as total,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id where date BETWEEN '$startdate' AND '$enddate' group by income_category ");

				$data["purchases"]=$this->db->query("SELECT SUM(tbl_purchase_header.nettotal) as total FROM tbl_purchase_header where date BETWEEN '$startdate' AND '$enddate'");
				$data["creditsale"]=$this->db->query("SELECT SUM(tbl_sale_header.nettotal-tbl_sale_header.received) as total_debt FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND paytype='credit' ")->row();

				$data["sale"]=$this->db->query("SELECT SUM(tbl_sale_header.received) as total_received FROM tbl_sale_header WHERE  date BETWEEN '$startdate' AND '$enddate' AND received !=0 ")->row();
				}

						
				$this->load->view("admin/monthly_cash_book_print",$data);

						
	}//




function showroom_stock_history_print()
	{	
	
				$startdate=$this->uri->segment(3);
				$enddate=$this->uri->segment(4);				
		
				$data["dateinterval"]=$startdate." - ".$enddate;
				$data["sdate"]=$startdate;
				$data["edate"]=$enddate;


			if(!$this->uri->segment(3) && !$this->uri->segment(4))
				{

				$this->db->select("tbl_showroom.*,tbl_showroom_stock_history.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock_history.showroom_id");
					$this->db->where('date',date("Y-m-d"));
					$this->db->order_by("tbl_showroom_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_showroom_stock_history");
				}
				
				else
				{

				$this->db->select("tbl_showroom.*,tbl_showroom_stock_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock_history.showroom_id");
				$this->db->where("date >=",$startdate);
				$this->db->where("date <=",$enddate);
				$this->db->order_by("tbl_showroom_stock_history.product_code","DESC");
				
				$data["lists"]=$this->db->get("tbl_showroom_stock_history");

				}


				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock_history order by category ASC");	
					
				$this->load->view("admin/showroom_stock_history_print",$data);

				
		
		
	}//


function consinement_transfer_voucher_print()
	{	
	
			$voucherno=$this->uri->segment(3);
			$this->db->select("tbl_consinement_transfer_history.*,tbl_consinement_stock_header.*,tbl_consinement.*");
			$this->db->join("tbl_consinement_transfer_history","tbl_consinement_transfer_history.voucherno=tbl_consinement_stock_header.voucherno");
			$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_header.consinement_id");
			$this->db->where("tbl_consinement_transfer_history.voucherno",$voucherno);
			$data["lists"]=$this->db->get("tbl_consinement_stock_header");
			//$data["lists"]=$this->db->query("SELECT tbl_consinement_transfer_history.*,tbl_consinement_stock_header.* FROM tbl_consinement_transfer_history LEFT JOIN tbl_consinement_stock_header ON tbl_consinement_transfer_history.voucherno=tbl_consinement_stock_header.id WHERE tbl_consinement_transfer_history.voucherno='$voucherno' ");
			$this->load->view("admin/consinement_transfer_voucher_print",$data);
		
		
	}//


function subwarehouse_sale_voucher_print()
	{	
	
			$sale_id=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_subwarehouse_sale_header.* FROM tbl_sale LEFT JOIN tbl_subwarehouse_sale_header ON tbl_sale.sale_id=tbl_subwarehouse_sale_header.sale_id WHERE tbl_sale.sale_id='$sale_id' ");
			$this->load->view("admin/subwarehouse_sale_voucher_print",$data);
		
		
	}//


function other_customer_sale_voucher_print()
	{	
	
			$sale_id=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_other_customer_sale_header.* FROM tbl_sale LEFT JOIN tbl_other_customer_sale_header ON tbl_sale.sale_id=tbl_other_customer_sale_header.sale_id WHERE tbl_sale.sale_id='$sale_id' ");
			$this->load->view("admin/other_customer_sale_voucher_print",$data);
		
		
	}//


function family_sale_voucher_print()
	{	
	
			$sale_id=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_family_sale_header.* FROM tbl_sale LEFT JOIN tbl_family_sale_header ON tbl_sale.sale_id=tbl_family_sale_header.sale_id WHERE tbl_sale.sale_id='$sale_id' ");
			$this->load->view("admin/family_sale_voucher_print",$data);
		
		
	}//


function staff_sale_voucher_print()
	{	
	
			$sale_id=$this->uri->segment(3);
			$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_staff_sale_header.* FROM tbl_sale LEFT JOIN tbl_staff_sale_header ON tbl_sale.sale_id=tbl_staff_sale_header.sale_id WHERE tbl_sale.sale_id='$sale_id' ");
			$this->load->view("admin/staff_sale_voucher_print",$data);
		
		
	}//


	
}

 ?>