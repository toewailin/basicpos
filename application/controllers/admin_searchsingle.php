<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_searchsingle extends CI_Controller {

var $data;

	function __construct()
	{
		error_reporting(0);
		parent::__construct();
		$this->load->model('admin_model');
		

		
			

		$this->data=array(


			'today'=>date("d-m-Y"),
			'store'=>"SHWE KYEE STORE",
			'shop_stock'=>"Shop Stock Lists",

			'no'=>"No",
			'alert'=>"Product Balance Alert",
			'debtalert'=>"Debt Alert",
			'user'=>"User Lists",
			'username'=>"User Name",
			'staffname'=>"Staff Name",
			'ipaddress'=>"IP Address",
			'computername'=>"Computer Name",
			'newusername'=>'New Username',
			'newpassword'=>'New Password',
			'cnewpassword'=>'Comfirm New Password',
			'oldpassword'=>'Old Password',
			'userrole'=>"User Role",			
			'promotion'=>"Promotion Lists",
			'product_arrive'=>"Order Receive Lists",
			'deliver'=>"Delivery Lists",
			'edit'=>"Edit",
			'delete'=>"Delete",
			'transfer'=>"Transfer",
			'date'=>"Date",
			'phone'=>"Phone",
			'contact_person'=>"Contact Person",
			'advance'=>"Advance",
			'balance'=>"Balance",
			'stock'=>"Home Stock Lists",
			'authority'=>"Authority",
			'currentprice'=>"Current Prices",
			'lastprice'=>"Last Prices",
			'sale'=>"Sale List",
			'purchase'=>"Order Lists",
			'product_price'=>"Product Pricing Lists",
			'runout_remind_alert'=>"Run Out Remind Alert",
			'atleastqty'=>"Quantity Must Be At Least",
			'damage'=>"Damage Lists",
			'jackpot'=>"Jackpot Percentage Lists",
			'amount'=>"Amount",
			'unit'=>"Unit Lists",
			'unitname'=>"Unit",
			'discountpercent'=>"Percentage (%)",
			'discountamount'=>"Amount",
			'startdate'=>"Start Date",
			'enddate'=>"End Date",
			'discountbydate'=>"Discount By Date",
			'discountlist'=>"Discount List",
			'remark'=>"Remark",
			'targetvalue'=>"Target Amount",
			'arrivevalue'=>'Getting Value',
			'category'=>"Product Category Lists",
			'incomeoutcome'=>"Income and Outcome Lists",
			'income'=>"Income List",
			'outcome'=>"Outcome Lists",
			'profitandlosses'=>"Profit From Sale",
			'generaloutcome'=>"General Outcome Lists",
			'debttosupplier'=>"Payable List",
			'debtfromcustomer'=>"Receivable List",
			'debttocustomer'=>"Debt To Customer",
			'product_code'=>"Code No",
			'product_name'=>"Product Name",
			'unitname'=>"Unit",
			'save'=>"Save",
			'smallitemcount'=>"Containing Items Count",
			'price'=>"Price",
			'quantity'=>"Quantity",
			'discount'=>"Discount Per Item",
			'total'=>"Total",
			'customer'=>"Customer Name",
			'customername'=>"Customer Name",
			'alltotal'=>"All Total",
			'discountfromall'=>"Discount From All Total",
			'tax'=>"Tax",
			'netamount'=>"Net Amount",
			'receive'=>"Receive",
			'refund'=>"Refund",
			'slipnumber'=>"Slip Number",
			'usertitle'=>"User Lists",
			'suppliertitle'=>"Supplier Lists",
			'customertitle'=>"Customer Lists",
			'stocktitle'=>"Home Stock Lists",
			'saletitle'=>"Sale Lists",
			'promotiontitle'=>"Promotion Lists",
			'supplierordertitle'=>"Purchase Order Lists",
			'customerordertitle'=>"Sale Order Lists",
			'purchasetitle'=>"Purchase Lists",
			'productpricetitle'=>"Product Pricing Lists",
			'runoutalerttitle'=>"Run Out Stock Lists",
			'damagetitle'=>"Damage Product Lists",
			'jackpotchange'=>"Jackpot Lists",
			'unittitle'=>"Code And Prices",
			'discountbydatetitle'=>"Discount By Date Lists",
			'discountbyamounttitle'=>"Discount By Amount Lists",
			'categorytitle'=>"Product Category Lists",
			'incomeoutcometitle'=>"Income and Outcome Lists",
			'generaloutcometitle'=>"General Outcome Lists",
			'debttosuppliertitle'=>"Debt To Supplier Lists",
			'debtfromsuppliertitle'=>"Debt From Supplier List",
			'debtfromcustomertitle'=>"Debt From Customer Lists",
			'profit'=>"Profit",
			'losses'=>"Losses",
			'purchase_price'=>"Purchase Price",
			'selling_price'=>"Selling Price",
			'totalgeneraloutcome'=>"Total General Outcomes",
			'totalincome'=>"Total General Incomes",
			'totaldamage'=>"Total Damage Amount",
			'totalpurchase'=>"Total Purchasing Amount",
			'totaloutcome'=>"Total Outcomes",
			'description'=>"Description",
			'addnew'=>"Add New",
			'suppliername'=>"Supplier Name",
			'status'=>"Status",
			'address'=>"Address",
			'purchasedelivertitle'=>"Purchase Delivery Lists",
			'saledelivertitle'=>"Sale Delivery Lists",
			'voucher'=>"Voucher Number",
			'amountforeachunit'=>"Amount For Each Unit",
			'transportationcharges'=>'Transportation Charges',
			'transferrate'=>"Transfer Rate",
			'totaltransportationcharges'=>'Total Transportation Charges',
			'totaltransferrate'=>"Total Transfer Rate",
			'totalcustomfee'=>'Total Custom Fees',
			'netamounttosupplier'=>'Net Amount To Supplier',
			'totaldiscount'=>"Total Discount",
			'paidamounttosupplier'=>'Paid Amount To Supplier',
			'balancetosupplier'=>"Balance To Supplier",
			'refundtosupplier'=>"Refunt Amount From Supplier",
			'requierdamounttopayment'=>"Requierd Amout To Payment",
			'exceedamounttopayment'=>"Exceed Amount To Payment",

			"exceed"=>"Exceed Amount",
			'required'=>"Requierd Amount",
			'sellingpriceforeachunit'=>"Selling Price For Each Unit",
			'amountforsmallitem'=>"Amount For Small Item",
			'sellingpriceforeachitem'=>"Selling Price For Each Item",
			'outcome_categories'=>"Outcome Categories",
			'requiredamount'=>"Required Amount",
			'title'=>"Title",
			'from'=>"From",
			'to'=>"To",
			'saledtotal'=>"Saled Amount Total",
			'purchasetotal'=>"Purchased Amount Total",
			'totalprofit'=>"Total Profit",
			'search'=>"Search",
			'paidby'=>"Paid By",
			'receivedby'=>"Received By",
			'returnamount'=>"Return Amount",
			'current_purchase_price'=>"Current Purchase Price",
			'previous_purchase_price'=>"Previous Purchase Price",
			'average_purchase_price'=>"Average Purchase Price",
			'ownmoney'=>"Own Money",
			'supplier_unseen_promotion'=>"Unseen Promotion From Supplier",
			'customer_unseen_promotion'=>'Unseen Promotion To Customer',
			'bysaleamount'=>'bysaleamount',
			'byqtyamount'=>'Saled Amount By Quantity',
			'wholesalejackpot'=>"Wholesale +",
			'retailjackpot'=>"Retai//l +",
			'customerjackpot'=>"Jackpot Percetage To Customer",
			'itemchange'=>"Item Changed Lists",
			'depositmoney'=>"Estimated Deposit Money",
			'depositamount'=>"Deposit Amount",
			'year'=>"Year",
			'money_transaction'=>"Cash Transfer / Receipt"
			);
		
		
		}


		/*****************/

	function searchsingle()
	{

		 $data = $this->data;

		$check=$this->admin_model->validate_search();
		
		if($check==true)
		{

			
		$value=$this->input->post("search");
		$colunm=$this->input->post("colunm");
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		$table=$this->uri->segment(3);			

		if($table=="sale")
		{
			$table="sale_header";
		}


		if($table=="staff_sale")
		{
			$table="staff_sale_header";
		}

		if($table=="family_sale")
		{
			$table="family_sale_header";
		}
		/*if($table=="unit")
		{
			$query=$this->db->get("tbl_unit");

		}*/
	/*	else
		{
*/


		if(empty($value) && empty($ostartdate) && empty($oenddate))
		{
			switch ($table) {
				case "discount" :
				$query=$this->db->get("tbl_discount");
				break;

				case "debt_from_customer" :
				$query=$this->db->get("tbl_customer");
				break;

				case "debt_to_supplier" :
				$query=$this->db->get("tbl_supplier");
				break;


				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_".$table."");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE()");
				break;

				

				
				default:
			//	$this->db->where('date','CURDATE()');
				$query=$this->db->get("tbl_".$table);
				break;


			}
			
		
		}
		
		elseif(!empty($value) && empty($ostartdate) && empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE $colunm LIKE '$value%'");
				break;

				case "customer_balance_sheet":
				$query=$this->db->query("SELECT tbl_customer_balance_sheet.* FROM tbl_customer_balance_sheet  WHERE tbl_customer_balance_sheet.$colunm LIKE '$value%' ORDER BY tbl_customer_balance_sheet.date,tbl_customer_balance_sheet.id DESC");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE $colunm='$value'");
				break;


				case "factory_outcome" : 	
				$query=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE $colunm='$value'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value%'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE $colunm='$value'");
				break;



				case "unit" :
				

				if($this->input->post("category") !="")
				{
					$this->db->like($colunm,$value,"after");
					$this->db->where('category',urldecode($this->input->post("category")));

					$query=$this->db->order_by("product_code","DESC")->get("tbl_unit");
				
				}
				else
				{
					$query=$this->db->like($colunm,$value,"after")->order_by("product_code","ASC")->get("tbl_".$table);
				}

				break;




				case "warehouse1" : 
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				$query=$this->db->like($colunm,$value,"after")->order_by("product_code","ASC")->get("tbl_warehouse1");
				break;


				case "showroom_stock" : 
				
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->like("tbl_showroom_stock.".$colunm,$value,"after");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$query=$this->db->get("tbl_".$table);
				//	$data["subwarehouse_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");


				break;



					case "consinement_stock" : 
				
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->like("tbl_consinement_stock.".$colunm,$value,"after");

					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$query=$this->db->get("tbl_".$table);
					break;



					case "subwarehouse_stock" : 
				
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->like("tbl_subwarehouse_stock.".$colunm,$value,"after");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");

					$query=$this->db->get("tbl_".$table);

					$data["showroom_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");
					$data["consinement_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");
					$data["subwarehouse_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

					break;


					case "damage_subwarehouse" : 
				
					$this->db->select("tbl_subwarehouse.*,tbl_damage_subwarehouse.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_damage_subwarehouse.subwarehouse_id");
					$this->db->order_by("tbl_damage_subwarehouse.product_code","DESC");
					$this->db->like("tbl_damage_subwarehouse.".$colunm,$value,"after");
					$query=$this->db->get("tbl_".$table);			


					break;



					case "damage_consinement" : 
				
					$this->db->select("tbl_consinement.*,tbl_damage_consinement.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_damage_consinement.consinement_id");
					$this->db->order_by("tbl_damage_consinement.product_code","DESC");
					$this->db->like("tbl_damage_consinement.".$colunm,$value,"after");
					$query=$this->db->get("tbl_".$table);			

					break;

					case "damage_showroom" : 
				
					$this->db->select("tbl_showroom.*,tbl_damage_showroom.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_damage_showroom.showroom_id");
					$this->db->order_by("tbl_damage_showroom.product_code","DESC");
					$this->db->like("tbl_damage_showroom.".$colunm,$value,"after");
					$query=$this->db->get("tbl_".$table);			

					break;


					case "consinement_sale_header" : 

					$this->db->select("tbl_consinement.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalc,tbl_sale.discount,tbl_sale.discount2,tbl_consinement_sale_header.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale_header.consinement_id");
					$this->db->join("tbl_sale","tbl_consinement_sale_header.voucherno=tbl_sale.voucherno");
					$this->db->like("tbl_consinement_sale_header.".$colunm,$value,"after");

					$this->db->group_by("tbl_sale.voucherno");

					$this->db->order_by("tbl_consinement_sale_header.date","DESC");
					$query=$this->db->get("tbl_consinement_sale_header");

				
					break;

					case 'other_customer_sale' :
					$query=$this->db->query("SELECT * FROM tbl_other_customer_sale_header WHERE $colunm='$value' AND type='other' ORDER BY voucherno DESC");
					break;

				/*
			
				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;*/


				default:
				$this->db->like($colunm,$value,'after');
				$query=$this->db->get("tbl_".$table);
				echo $this->db->last_query();
				break;


				
			}
					
		}

		
		elseif(!empty($value) && !empty($ostartdate) && empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE $colunm LIKE '$value%' AND date='$startdate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE $colunm LIKE '$value%' AND last_date='$startdate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE $colunm LIKE '$value%' AND last_date='$startdate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE $colunm='$value' AND date='$startdate'");
				break;
				
				case "factory_outcome" : 	
				$query=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE $colunm='$value' AND date='$startdate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value%' AND date='$startdate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE $colunm='$value' AND startdate='$startdate'");
				break;

				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm LIKE '%$value%' and date='$startdate'");
				break;

				
			}
					
		}

		elseif(!empty($value) && empty($ostartdate) && !empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE $colunm LIKE '$value%' AND date='$enddate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE $colunm LIKE '$value%' AND last_date='$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE $colunm LIKE '$value%' AND last_date='$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE $colunm='$value' AND date='$enddate'");
				break;

				case "factory_outcome" : 	
				$query=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE $colunm='$value' AND date='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE $colunm='$value' AND enddate='$enddate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value%' AND date='$enddate'");
				break;


				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm LIKE '%$value%' and date='$enddate'");
				break;
				
			}
		
		}

		elseif(empty($value) && !empty($ostartdate) && empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE date='$startdate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE last_date='$startdate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE last_date='$startdate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE date='$startdate'");
				break;


				case "factory_outcome" : 	
				$query=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE date='$startdate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE startdate='$startdate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE  date='$startdate'");
				break;

				default:
				$query=$this->db->get("tbl_".$table,array('date'=>$startdate));
				break;
				
			}

		}



		elseif(empty($value) && empty($ostartdate) && !empty($oenddate))
		{
			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE date='$enddate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE last_date='$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE last_date='$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE date='$enddate'");
				break;

				case "factory_outcome" : 	
				$query=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE date='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE enddate='$enddate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date='$enddate'");
				break;

				default:
				$query=$this->db->get("tbl_".$table,array('date'=>$enddate));
				break;
				
			}

		}


		elseif(empty($value) && !empty($ostartdate) && !empty($oenddate))
		{

			switch($table)
			{

			
				case "foc":
				$query=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type !='consinement' AND tbl_sale.date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "consinement_foc":
				$query=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type ='consinement' AND tbl_sale.date BETWEEN '$startdate' AND '$enddate'");
				break;

			
				case "discount":
				$query=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND date BETWEEN '$startdate' AND '$enddate'");
				break;


				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "customer_balance_sheet":
				$query=$this->db->query("SELECT tbl_customer.customer_name ,tbl_customer_balance_sheet.* FROM tbl_customer_balance_sheet LEFT JOIN tbl_customer ON tbl_customer_balance_sheet.customer_id=tbl_customer.id WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_customer_balance_sheet.date,tbl_customer_balance_sheet.id DESC");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE tbl_general_outcome.date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "factory_outcome" : 	
				$query=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE tbl_factory_outcome.date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE startdate>='$startdate' AND enddate<='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "bysaleamount":
				$query=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` WHERE date BETWEEN '$startdate' AND '$enddate' GROUP BY customer_name ORDER by total desc");
				break;

				case "byqtyamount":
				$query=$this->db->query("SELECT SUM(quantity)as totalqty,SUM(price)as total,product_name,product_code,date FROM `tbl_sale` WHERE date BETWEEN '$startdate' AND '$enddate' GROUP BY product_code ORDER by totalqty desc");
				
				break;

				case "damage_subwarehouse" : 
				$query=$this->db->query("SELECT tbl_damage_subwarehouse.*, tbl_subwarehouse.* FROM tbl_damage_subwarehouse JOIN tbl_subwarehouse ON tbl_damage_subwarehouse.subwarehouse_id=tbl_subwarehouse.id WHERE tbl_damage_subwarehouse.date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_damage_subwarehouse.date DESC");
				
				break;



				case "damage_consinement" : 
				$query=$this->db->query("SELECT tbl_damage_consinement.*, tbl_consinement.* FROM tbl_damage_consinement JOIN tbl_consinement ON tbl_damage_consinement.consinement_id=tbl_consinement.id WHERE tbl_damage_consinement.date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_damage_consinement.date DESC");
			
				break;

				case "damage_showroom" : 
				$query=$this->db->query("SELECT tbl_damage_showroom.*, tbl_showroom.* FROM tbl_damage_showroom JOIN tbl_showroom ON tbl_damage_showroom.showroom_id=tbl_showroom.id WHERE tbl_damage_showroom.date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_damage_showroom.date DESC");
			
				break;

		

				case "consinement_center_sale_info":
				$this->db->select("tbl_sale.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalsale,SUM(tbl_sale.total) as netsale,tbl_consinement.*") ;
				$this->db->join("tbl_consinement","tbl_sale.customer=tbl_consinement.id");
				$this->db->where("tbl_sale.date >=",$startdate);
				$this->db->where("tbl_sale.date <=",$enddate);
				$this->db->group_by("tbl_sale.customer");
				$this->db->where("tbl_sale.sale_type","consinement");
				$query=$this->db->get("tbl_sale");
				break;

				

				case "purchase_from_factory":
				$query=$this->db->query("SELECT DISTINCT type FROM tbl_purchase WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY voucherno DESC");
				break;
				
				case 'family_sale' :
				$query=$this->db->query("SELECT * FROM tbl_family_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY voucherno DESC");
				break;

				case 'staff_sale' :
				$query=$this->db->query("SELECT * FROM tbl_staff_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY voucherno DESC");
				break;

				case 'subwarehouse_sale' :
				$query=$this->db->query("SELECT * FROM tbl_subwarehouse_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY voucherno DESC");
				break;

				case 'other_customer_sale' :
				$query=$this->db->query("SELECT * FROM tbl_other_customer_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY voucherno DESC");
				break;

				case 'sale' :
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY voucherno DESC");
				break;

				case 'voucher_by_customer' :

				 $id=$this->input->post("cust_id");
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE tbl_sale_header.customer_id='$id' AND date>='$startdate' AND date<='$enddate'");
				
				break;

				case 'consinement_sale' :
				$this->db->select("tbl_consinement.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalc,tbl_sale.discount,tbl_sale.discount2,tbl_consinement_sale_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale_header.consinement_id");
				$this->db->join("tbl_sale","tbl_consinement_sale_header.voucherno=tbl_sale.voucherno");
				$this->db->where("tbl_consinement_sale_header.date >=",$startdate);
				$this->db->where("tbl_consinement_sale_header.date <=",$enddate);
				$this->db->group_by("tbl_sale.voucherno");
				$this->db->order_by("tbl_consinement_sale_header.date","DESC");
				$query=$this->db->get("tbl_consinement_sale_header");
				break;


				


				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE date BETWEEN '$startdate' AND '$enddate'");
				break;
				
				
				
			}
				
		}


		elseif(!empty($value) && !empty($ostartdate) && !empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				if($colunm=='supplier')
				{
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE tbl_debt_to_supplier.$colunm='$value' AND date BETWEEN '$startdate' AND '$enddate'");
				}
				else
				{
					$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE tbl_purchase.$colunm='$value' AND date BETWEEN '$startdate' AND '$enddate'");
				}

				break;


				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE WHERE $colunm LIKE '$value%' ANDlast_date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE WHERE $colunm LIKE '$value%' ANDlast_date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE tbl_general_outcome.$colunm='$value' AND tbl_general_outcome.date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm='$value' AND startdate>='$startdate' AND enddate<='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value' AND date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "damage_subwarehouse" : 
				$query=$this->db->query("SELECT tbl_damage_subwarehouse.*, tbl_subwarehouse.* FROM tbl_damage_subwarehouse JOIN tbl_subwarehouse ON tbl_damage_subwarehouse.subwarehouse_id=tbl_subwarehouse.id WHERE tbl_damage_subwarehouse.$colunm LIKE '$value' AND tbl_damage_subwarehouse.date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_damage_subwarehouse.date DESC");
				
				break;



				case "damage_consinement" : 
				$query=$this->db->query("SELECT tbl_damage_consinement.*, tbl_consinement.* FROM tbl_damage_consinement JOIN tbl_consinement ON tbl_damage_consinement.consinement_id=tbl_consinement.id WHERE tbl_damage_consinement.$colunm LIKE '$value' AND tbl_damage_consinement.date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_damage_consinement.date DESC");
			
				break;

				case "damage_showroom" : 
				$query=$this->db->query("SELECT tbl_damage_showroom.*, tbl_showroom.* FROM tbl_damage_showroom JOIN tbl_showroom ON tbl_damage_showroom.showroom_id=tbl_showroom.id WHERE tbl_damage_showroom.$colunm LIKE '$value' AND tbl_damage_showroom.date BETWEEN '$startdate' AND '$enddate' ORDER BY tbl_damage_showroom.date DESC");
			
				break;


				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm LIKE '$value%' AND date BETWEEN '$startdate' AND '$enddate'");
				break;
				
			}
			
		}
	//}

	

		if($query->num_rows()>=1)
		{
			$data["lists"]=$query;	
			if($table=="damage_subwarehouse" || $table=="damage_consinement" || $table=="damage_showroom" || $table=="damage_warehouse1"  )
			{

			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			}

			$this->load->view("admin/".$table."_list",$data);
		}

		else
		{
			echo "<h3>No result found matched with your search</h3>";
		}
		
		}
	}
	
}

 ?>