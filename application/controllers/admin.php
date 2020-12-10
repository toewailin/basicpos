<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller
{

	var $data;

	function __construct()
	{
		//error_reporting(0);
		parent::__construct();
		$this->load->model('admin_model');

		
			

		$this->data=array(


			'today'=>date("d-m-Y",strtotime(date("Y-m-d"))),
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

	
	/**/

	function change_language()
	{
		
			$userdata=array(
							'language'=>$this->uri->segment(3)
											
							);			
			
			redirect('admin/index');
	}


	



	function index()
	{	
		
		if(get_cookie("admin_cookie"))
		{


				 $data = $this->data;

				 $this->load->model("cashier_model");

				 //$check_promotion=$this->cashier_model->check_promotion();
				// $data["alert"]=$this->db->count_all_results('tbl_');
				 $data["main_content"]="main";
				// $data["lists"]=$this->admin_model->check_stock_remind();

				 $this->load->view("admin/template",$data);

		}

		else
			{
				$data["message"]="Login to access this page";
				$this->load->view("login_form",$data);
			}
	
	}


	


	function shopstockalert()
	{
			 $data = $this->data;
            $check_remind=$this->admin_model->check_shop_stock_remind();
            echo $check_remind->num_rows();
	}

	/* check_stock_remind*/

	function stockalert()
	{
			$data = $this->data;
            $check_remind=$this->admin_model->check_stock_remind();
            echo $check_remind->num_rows();
         
             /*echo ' <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> '.$data["alert"].' <span class="badge"> '.$check_remind->num_rows().' </span> <b class="caret"></b></a>
              <ul class="dropdown-menu">';
              
              $no=1;
            
              foreach($check_remind->result() as $remind):

            
               echo '<li><a href="#"><span class="badge">'.$remind->product_code.'</span>'.$remind->pname.' <span class="label label-danger"> '.$remind->l." ".$remind->unit;' </span></a></li>';
                
          
            		$no++;     
                  endforeach;
                
                echo '<li class="divider"></li>
                </ul>';
	*/
	}



/**/
function get_dropunit()
	{
		$unit=trim($this->input->post("unit"));
		

		$query2=$this->db->like("unit",$unit)->group_by("unit")->get("tbl_unit");
		echo "<ul>";
		foreach($query2->result() as $row):
	?>
		<li onclick="fill_unit('<?=$row->unit?>',event)"> <?=$row->unit?></li>
		<?php
		endforeach;
		echo "</ul>";
	}

/**/


function get_dropcategory()
	{
		$category=trim($this->input->post("category"));
		

		$query2=$this->db->like("category",$category)->group_by("category")->get("tbl_unit");
		echo "<ul>";
		foreach($query2->result() as $row):
	?>
		<li onclick="fill_category('<?=$row->category?>',event)"> <?=$row->category?></li>
		<?php
		endforeach;
		echo "</ul>";
	}


/**/


	function get_droplist()
	{
		$pcode=trim($this->input->post("pcode"));
		$query2=$this->db->like("product_code",$pcode,'after')->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
	//	$query2=$this->db->query("SELECT * FROM tbl_unit WHERE product_code like "%$pcode% ORDER BY PATINDEX('%$pcode%', product_code) ASC, LEN(product_code) ASC");
		echo "<ul>";
		foreach($query2->result() as $row):
	?>
		<li onclick="fill('<?=$row->product_code?>',event)"> <?=$row->product_code." (".$row->product_name.")"?></li>
		<?php
		endforeach;
		echo "</ul>";
	}

	/**/

	function debtalert()
	{
		 $data = $this->data;
            $check_debt=$this->admin_model->check_debt_alert();
            echo $check_debt->num_rows();
	}


	function promotion_alert()
	{
		$qry=$this->db->query("SELECT targetamount FROM tbl_promotion WHERE targetamount >=(amount*(3/4)) AND status=1");
		if($qry->num_rows()==1)
		{
			$row=$qry->row();
			echo "<a style='opacity:1'><i class='fa fa-bell'></i> Promotion Alarm : <span class='badge'>".$row->targetamount."</span></a>";
		}
		//echo "<a>hello</a>";
	}





	function checkqty()
	{
		$pcode=$this->input->post("pcode");
		/*$grab_tbl_id=$this->input->post('grab_tbl_id');
		$tbl_id=$this->input->post('tbl_id');*/
		$grab_tbl_id=1;
		$tbl_id="showroom_id";
		$tbl="tbl_showroom_stock";
		$qu=$this->input->post("qu");
		

		$query=$this->db->query("SELECT quantity FROM $tbl WHERE product_code='$pcode' and $tbl_id='$grab_tbl_id'");


		 if($query->num_rows()==1)
		{
			$row=$query->row();								
			echo $row->quantity;
				
		}
		else if($query->num_rows()>1)
		{
			echo "more";
		}      

		else if($query->num_rows()<1)
		{
			echo "no";
		}		

		else
		{
			echo 0;
		}
	}

	

		/*Account setting form*/
function account_setting()
	{
		$data = $this->data;
		
			$username=get_cookie("admin_cookie");
			 $oldpass=md5($this->input->post('opassword'));
			 $password=md5($this->input->post('password'));
			 $cpassword=md5($this->input->post('cpassword'));

			$data=array(
						'password'=>$password
						);
			$check=$this->admin_model->check_account($username,$oldpass);
			
		//	echo $check->num_rows();

			if($check->num_rows()==1)
			{

		

			$this->db->where('username',$username);
			$query=$this->db->update('tbl_user',$data);

				if($query)
				{
					$status=1;
				}
				else
				{
					$status=0;
				}
			}


			else
			{
				$status=2;
			}

			echo $status;
			
		
				
	}





/**/


function delete()
	{	
		

			$id=$this->uri->segment(5);
			$table=$this->uri->segment(3);	
			$pageno=$this->uri->segment(4);	

			switch ($table) {

				case 'purchase':
					
						$this->db->query("UPDATE tbl_showroom_stock INNER JOIN tbl_purchase ON 
						 tbl_showroom_stock.product_code=tbl_purchase.product_code SET
						 tbl_showroom_stock.quantity=tbl_showroom_stock.quantity-tbl_purchase.quantity
						 WHERE tbl_purchase.voucherno='$id'");
							
						$query=$this->db->query("UPDATE tbl_supplier INNER JOIN tbl_purchase_header ON 
						 tbl_supplier.id=tbl_purchase_header.supplier_id SET
						 tbl_supplier.total_debt=tbl_supplier.total_debt+tbl_purchase_header.nettotal
						 WHERE tbl_purchase_header.voucherno='$id'");


						$this->db->delete('tbl_purchase', array('voucherno' => $id)); 
						$this->db->delete('tbl_purchase_header', array('voucherno' => $id)); 
						$this->db->delete('tbl_supplier_balance_sheet', array('payname' => $id)); 


						break;
		
						
				


					case 'sale':

			

				$this->db->query("UPDATE tbl_showroom_stock INNER JOIN tbl_sale ON 
						 tbl_showroom_stock.product_code=tbl_sale.product_code SET
						 tbl_showroom_stock.quantity=tbl_showroom_stock.quantity+tbl_sale.quantity
						 WHERE tbl_sale.voucherno='$id'");


					$query=$this->db->query("UPDATE tbl_customer INNER JOIN tbl_sale_header ON 
						 tbl_customer.id=tbl_sale_header.customer_id SET
						 tbl_customer.total_debt=tbl_customer.total_debt+tbl_sale_header.nettotal
						 WHERE tbl_sale_header.voucherno='$id'");

					
					$this->db->delete('tbl_sale', array('voucherno' => $id)); 
					$this->db->delete('tbl_sale_header', array('voucherno' => $id)); 
					$this->db->delete('tbl_customer_balance_sheet', array('payname' => $id)); 


				break;


				
				


				case 'sale_return':
				
				$this->db->select("tbl_sale_return_header.*,tbl_sale_return.*");
				$this->db->join("tbl_sale_return_header","tbl_sale_return_header.voucherno=tbl_sale_return.voucherno","LEFT");
				$this->db->where("tbl_sale_return.voucherno",$id);
				$this->db->where("tbl_sale_return.sale_type","sale");
				$qry=$this->db->get("tbl_sale_return");

				foreach ($qry->result() as $k) {
					$product_code=$k->product_code;
					$quantity=$k->quantity+$k->foc;
					$subwarehouse_id=$k->subwarehouse_id;
					$showroom_id=$k->showroom_id;
					$warehouse1=$k->warehouse1;

					if($subwarehouse_id !=0)
					{

					$this->db->query("UPDATE tbl_subwarehouse_stock set quantity=quantity-'$quantity' WHERE subwarehouse_id='$subwarehouse_id' AND product_code='$product_code'");

					}

					if($showroom_id !=0)
					{

					$this->db->query("UPDATE tbl_showroom_stock set quantity=quantity-'$quantity' WHERE showroom_id='$showroom_id' AND product_code='$product_code'");

					}

					if($warehouse1 !="")
					{

					$this->db->query("UPDATE tbl_warehouse1 set quantity=quantity-'$quantity' WHERE product_code='$product_code'");

					}

				}

				$row=$qry->row();
				if($row->return_type=="credit")
				{
					$customer_id=$row->customer_id;
					$nettotal=$row->nettotal;

				$query=$this->db->query("UPDATE tbl_customer SET total_debt=total_debt-'$nettotal' WHERE id='$customer_id'");

				}
							$this->db->delete('tbl_sale_return', array('voucherno' => $id,'sale_type'=>'sale')); 
							$this->db->delete('tbl_sale_return_header', array('voucherno' => $id)); 
							$this->db->delete('tbl_customer_balance_sheet', array('payname' => $id)); 


				break;	




				case 'consinement_sale_return':
				
				$this->db->select("tbl_sale_return_header.*,tbl_sale_return.*");
				$this->db->join("tbl_sale_return_header","tbl_sale_return_header.voucherno=tbl_sale_return.voucherno","LEFT");
				$this->db->where("tbl_sale_return.voucherno",$id);
				$this->db->where("tbl_sale_return.sale_type","consinement");
				$qry=$this->db->get("tbl_sale_return");

				foreach ($qry->result() as $k) {
					$product_code=$k->product_code;
					$quantity=$k->quantity+$k->foc;
					$consinement_id=$k->consinement_id;
					$subwarehouse_id=$k->subwarehouse_id;
					$showroom_id=$k->showroom_id;
					$warehouse1=$k->warehouse1;

					$this->db->query("UPDATE tbl_consinement_stock set quantity=quantity+'$quantity' WHERE consinement_id='$consinement_id' AND product_code='$product_code'");


					if($subwarehouse_id !=0)
					{

					$this->db->query("UPDATE tbl_subwarehouse_stock set quantity=quantity-'$quantity' WHERE subwarehouse_id='$subwarehouse_id' AND product_code='$product_code'");

					}

					if($showroom_id !=0)
					{

					$this->db->query("UPDATE tbl_showroom_stock set quantity=quantity-'$quantity' WHERE showroom_id='$showroom_id' AND product_code='$product_code'");

					}

					if($warehouse1 !="")
					{

					$this->db->query("UPDATE tbl_warehouse1 set quantity=quantity-'$quantity' WHERE product_code='$product_code'");

					}

				}

				$row=$qry->row();
				if($row->return_type=="credit")
				{
					$consinement_id=$row->consinement_id;
					$nettotal=$row->nettotal;

				$query=$this->db->query("UPDATE tbl_consinement SET balance=balance-'$nettotal' WHERE id='$consinement_id'");

				}
							$this->db->delete('tbl_sale_return', array('voucherno' => $id,'sale_type'=>'consinement')); 
							$this->db->delete('tbl_sale_return_header', array('voucherno' => $id,'consinement_id !='=>"")); 
							$this->db->delete('tbl_consinement_balance_sheet', array('payname' => $id)); 


				break;	



				case 'bank_balance_sheet':

						$this->db->query("UPDATE tbl_bank_account INNER JOIN tbl_bank_balance_sheet ON 
						 tbl_bank_account.id=tbl_bank_balance_sheet.bank_account_id SET
						 tbl_bank_account.amount=tbl_bank_account.amount-(tbl_bank_balance_sheet.income -tbl_bank_balance_sheet.outcome )
						 WHERE tbl_bank_balance_sheet.id='$id'");

						$query=$this->db->delete('tbl_'.$table,array('id'=>$id));

						
				break;

				
				case 'family_balance_sheet':
						$this->db->query("UPDATE tbl_family INNER JOIN tbl_family_balance_sheet ON 
						 tbl_family.id=tbl_family_balance_sheet.family_id SET
						 tbl_family.total_debt=tbl_family.total_debt-(tbl_family_balance_sheet.returnamount -tbl_family_balance_sheet.loanamount )
						 WHERE tbl_family_balance_sheet.id='$id'");	
						$query=$this->db->delete('tbl_'.$table,array('id'=>$id));

						 break;

				case 'staff_balance_sheet':
						$this->db->query("UPDATE tbl_staff INNER JOIN tbl_staff_balance_sheet ON 
						 tbl_staff.id=tbl_staff_balance_sheet.staff_id SET
						 tbl_staff.total_debt=tbl_staff.total_debt-(tbl_staff_balance_sheet.returnamount -tbl_staff_balance_sheet.loanamount )
						 WHERE tbl_staff_balance_sheet.id='$id'");	
						$query=$this->db->delete('tbl_'.$table,array('id'=>$id));

						 break;



				case 'other_receivable_balance_sheet':
						$this->db->query("UPDATE tbl_other_receivable INNER JOIN tbl_other_receivable_balance_sheet ON 
						 tbl_other_receivable.id=tbl_other_receivable_balance_sheet.other_receivable_id SET
						 tbl_other_receivable.amount=tbl_other_receivable.amount+(tbl_other_receivable_balance_sheet.returnamount -tbl_other_receivable_balance_sheet.voucher_amount )
						 WHERE tbl_other_receivable_balance_sheet.id='$id'");	
						$query=$this->db->delete('tbl_'.$table,array('id'=>$id));

						 break;



				case 'customer_balance_sheet':
			
							$row=$this->db->query("SELECT tbl_customer.total_debt,tbl_customer_balance_sheet.returnamount FROM tbl_customer_balance_sheet LEFT JOIN tbl_customer  ON tbl_customer.id=tbl_customer_balance_sheet.customer_id WHERE tbl_customer_balance_sheet.id='$id'")->row();
							$totaldebt=$row->total_debt;
							if($totaldebt<0 || $totaldebt==0)
							 {

							 echo	$balance=$totaldebt-$row->returnamount;

							 }

							 else
							 {
							 	
							 echo	$balance=$totaldebt+$row->returnamount;

							 }
							


						$this->db->query("UPDATE tbl_customer INNER JOIN tbl_customer_balance_sheet ON 
						 tbl_customer.id=tbl_customer_balance_sheet.customer_id SET
						 tbl_customer.total_debt='$balance'
						 WHERE tbl_customer_balance_sheet.id='$id'");	

						$query=$this->db->delete('tbl_'.$table,array('id'=>$id));
	
						 break;



 
				case 'supplier_balance_sheet':
						$this->db->query("UPDATE tbl_supplier INNER JOIN tbl_supplier_balance_sheet ON 
						 tbl_supplier.id=tbl_supplier_balance_sheet.supplier_id SET
						 tbl_supplier.total_debt=tbl_supplier.total_debt-(tbl_supplier_balance_sheet.returnamount)
						 WHERE tbl_supplier_balance_sheet.id='$id'");		
						$query=$this->db->delete('tbl_'.$table,array('id'=>$id));

						 break;

				case 'consinement_balance_sheet':
						$this->db->query("UPDATE tbl_consinement INNER JOIN tbl_consinement_balance_sheet ON 
						 tbl_consinement.id=tbl_consinement_balance_sheet.consinement_id SET
						 tbl_consinement.balance=tbl_consinement.balance+(tbl_consinement_balance_sheet.returnamount)
						 WHERE tbl_consinement_balance_sheet.id='$id'");
						 $query=$this->db->delete('tbl_'.$table,array('id'=>$id));
		
						 break;				


				case 'damage_showroom':
				$this->db->query("UPDATE tbl_showroom_stock INNER JOIN tbl_damage_showroom ON 
						 tbl_showroom_stock.product_code=tbl_damage_showroom.product_code SET
						 tbl_showroom_stock.quantity=tbl_showroom_stock.quantity+tbl_damage_showroom.quantity
						 WHERE tbl_damage_showroom.id='$id' AND tbl_damage_showroom.showroom_id=tbl_showroom_stock.showroom_id");
						$this->db->delete('tbl_damage_showroom', array('id' => $id)); 
							
				break;

				case 'damage_subwarehouse':
				$this->db->query("UPDATE tbl_subwarehouse_stock INNER JOIN tbl_damage_subwarehouse ON 
						 tbl_subwarehouse_stock.product_code=tbl_damage_subwarehouse.product_code SET
						 tbl_subwarehouse_stock.quantity=tbl_subwarehouse_stock.quantity+tbl_damage_subwarehouse.quantity
						 WHERE tbl_damage_subwarehouse.id='$id' AND tbl_damage_subwarehouse.subwarehouse_id=tbl_subwarehouse_stock.subwarehouse_id");
						$this->db->delete('tbl_damage_subwarehouse', array('id' => $id)); 
							
				break;


				case 'damage_consinement':
				$this->db->query("UPDATE tbl_consinement_stock INNER JOIN tbl_damage_consinement ON 
						 tbl_consinement_stock.product_code=tbl_damage_consinement.product_code SET
						 tbl_consinement_stock.quantity=tbl_consinement_stock.quantity+tbl_damage_consinement.quantity
						 WHERE tbl_damage_consinement.id='$id' AND tbl_damage_consinement.consinement_id=tbl_consinement_stock.consinement_id");
						$this->db->delete('tbl_damage_consinement', array('id' => $id)); 
							
				break;

				case 'damage_warehouse1':
				$this->db->query("UPDATE tbl_warehouse1 INNER JOIN tbl_damage_warehouse1 ON 
						 tbl_warehouse1.product_code=tbl_damage_warehouse1.product_code SET
						 tbl_warehouse1.quantity=tbl_warehouse1.quantity+tbl_damage_warehouse1.quantity
						 WHERE tbl_damage_warehouse1.id='$id'");
						$this->db->delete('tbl_damage_warehouse1', array('id' => $id)); 
							
				break;



				case 'present':
				$row=$this->db->query("SELECT * FROM tbl_present WHERE id='$id'")->row();
				$tbl_name=$row->tbl_name;
				$tbl_id=$row->tbl_id;

				if($tbl_name=="showroom_stock")
				{
					$this->db->query("UPDATE tbl_showroom_stock INNER JOIN tbl_present ON 
						 tbl_showroom_stock.product_code=tbl_present.product_code SET
						 tbl_showroom_stock.quantity=tbl_showroom_stock.quantity+tbl_present.quantity
						 WHERE tbl_showroom_stock.showroom_id='$tbl_id' AND tbl_present.id='$id'");
				}
				else if($tbl_name=="subwarehouse_stock")
				{
					$this->db->query("UPDATE tbl_subwarehousestock INNER JOIN tbl_present ON 
						 tbl_subwarehousestock.product_code=tbl_present.product_code SET
						 tbl_subwarehousestock.quantity=tbl_subwarehousestock.quantity+tbl_present.quantity
						 WHERE tbl_subwarehousestock.subwarehouseid='$tbl_id' AND tbl_present.id='$id'");
				}

				else 
				{
					$this->db->query("UPDATE tbl_warehouse1 INNER JOIN tbl_present ON 
						 tbl_warehouse1.product_code=tbl_present.product_code SET
						 tbl_warehouse1.quantity=tbl_warehouse1.quantity+tbl_present.quantity
						 WHERE tbl_present.id='$id'");
				}

				
						$this->db->delete('tbl_present', array('id' => $id)); 
							
				break;


				case 'sample_stock':
				$row=$this->db->query("SELECT * FROM tbl_sample_stock WHERE id='$id'")->row();
				$tbl_name=$row->tbl_name;
				$tbl_id=$row->tbl_id;

				if($tbl_name=="showroom_stock")
				{
					$this->db->query("UPDATE tbl_showroom_stock INNER JOIN tbl_sample_stock ON 
						 tbl_showroom_stock.product_code=tbl_sample_stock.product_code SET
						 tbl_showroom_stock.quantity=tbl_showroom_stock.quantity+tbl_sample_stock.balance_quantity
						 WHERE tbl_showroom_stock.showroom_id='$tbl_id' AND tbl_sample_stock.id='$id'");
				}
				else if($tbl_name=="subwarehouse_stock")
				{
					$this->db->query("UPDATE tbl_subwarehouse_stock INNER JOIN tbl_sample_stock ON 
						 tbl_subwarehouse_stock.product_code=tbl_sample_stock.product_code SET
						 tbl_subwarehouse_stock.quantity=tbl_subwarehouse_stock.quantity+tbl_sample_stock.balance_quantity
						 WHERE tbl_subwarehouse_stock.subwarehouse_id='$tbl_id' AND tbl_sample_stock.id='$id'");
				}

				else 
				{
					$this->db->query("UPDATE tbl_warehouse1 INNER JOIN tbl_sample_stock ON 
						 tbl_warehouse1.product_code=tbl_sample_stock.product_code SET
						 tbl_warehouse1.quantity=tbl_warehouse1.quantity+tbl_sample_stock.balance_quantity
						 WHERE tbl_sample_stock.id='$id'");
				}

				
						$this->db->delete('tbl_sample_stock', array('id' => $id)); 
							
				break;



				default:
				$query=$this->db->delete('tbl_'.$table,array('id'=>$id));
				break;

			}					
			

			$this->delete_left_data_list($table);
		
		
	}//





function makecancel()
	{	
				

			$voucherno=$this->uri->segment(5);
			$table=$this->uri->segment(3);	
			if($table=="purchase_order")
			{
				$this->db->delete('tbl_purchase_order',array('voucherno'=>$voucherno));
				$this->db->delete('tbl_purchase_order_header',array('voucherno'=>$voucherno));

			}

			if($table=="sale_order")
			{
				$this->db->delete('tbl_sale_order',array('voucherno'=>$voucherno));
				$this->db->delete('tbl_sale_order_header',array('voucherno'=>$voucherno));


			}
			
			$this->delete_left_data_list($table);
		
		
	}//
	
	/*logout*/
	function logout()
	{
			
				delete_cookie("admin_cookie");
				$array_items=array("AdminUser"=>"","AdminPass"=>"");
		
				redirect('site');

	}

	
	/*Show Data Lists Start*/



	function check_remind()
	{
		 $data = $this->data;
		$data['main_content']="remind_purchase";
			$data["lists"]=$this->admin_model->check_remind();
			$this->load->view("admin/template",$data);		
	}

/**/



function checkshowroomqty()
	{
		$pcode=$this->input->post("pcode");
		$unit=$this->input->post('unit');
		$qu=$this->input->post("qu");
		$sale=$this->input->post("sale");
		//$table="tbl_".$sale."_stock";
		
		$grab_tbl_id=$this->input->post("grab_tbl_id");
		$id=$sale."_id";


		//$query=$this->db->query("SELECT * FROM $table WHERE product_code='$pcode' AND $id='$grab_tbl_id'");
		$query=$this->db->query("SELECT * FROM tbl_showroom_stock WHERE product_code='$pcode' AND showroom_id=1");
		
		if($query->num_rows() ==1)
		{
			$unitquery=$query->row();

			 $mqu1=$unitquery->quantity;

					if($mqu1<$qu)
					{
						echo $mqu1+$psrow->total_smallitemcount;
					}
					else
					{
						echo $mqu1;
					}

			

		}

	

		else
		{
			echo 0;
		}		

	}


/**/

function checksubwarehouseqty()
{
		$pcode=$this->input->post("pcode");
		$unit=$this->input->post('unit');
		$qu=$this->input->post("qu");
		$sale=$this->input->post("sale");
		$subwarehouse_id=$this->input->post("subwarehouse_id");
		
		$grab_tbl_id=$this->input->post("grab_tbl_id");
		$id=$sale."_id";


		//$query=$this->db->query("SELECT * FROM $table WHERE product_code='$pcode' AND $id='$grab_tbl_id'");
		$query=$this->db->query("SELECT * FROM tbl_subwarehouse_stock WHERE product_code='$pcode' AND subwarehouse_id='$subwarehouse_id'");
		
		if($query->num_rows() ==1)
		{
			$unitquery=$query->row();

			 $mqu1=$unitquery->quantity;

					if($mqu1<$qu)
					{
						echo $mqu1+$psrow->total_smallitemcount;
					}
					else
					{
						echo $mqu1;
					}

			

		}

	

		else
		{
			echo 0;
		}		

	}
/**/

	
	function admingrabdata()
	{

		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->input->post("pcode");
			$myunits="";
			$punits=$this->db->query("SELECT unit FROM tbl_unit WHERE product_code='$pcode'");
			foreach($punits->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;

			$query=$this->db->query("SELECT * FROM tbl_unit where tbl_unit.product_code='$pcode' ORDER BY smallest_itemcount ASC LIMIT 1");
		//	echo $query->num_rows();
			if($query->num_rows()==1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('discount', $row->discount);	
			$xml->addNode('myunits',$myunits);
			$xml->addNode('price', $row->price);	
			$xml->addNode('type', $row->type);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('item_count',$row->smallest_itemcount);		
			$xml->endBranch();		
			
			$xml->getXml(true);
			}
		
	}


	/*Get Sale Price*/
	function getsaleprice()
	{

			ob_clean();

		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->uri->segment(3);
			$query=$this->db->query("SELECT product_name,price FROM tbl_shop_stock where product_code='$pcode'");
		//	echo $query->num_rows();
			if($query->num_rows()==1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('type', $row->type);	
			$xml->addNode('price', $row->price);			
			$xml->endBranch();		
			
			$xml->getXml(true);
			}
		
	}


/**/



/**/



	function fillWithoutPrice()
	{
		ob_clean();
		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->input->post("pcode");
			$myunits="";
			$query=$this->db->query("SELECT * FROM tbl_unit WHERE product_code='$pcode' order by price DESC");
			foreach($query->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;
		if($query->num_rows()>=1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('type', $row->type);	
			$xml->addNode('myunits',$myunits);
			$xml->addNode('item_count',$row->smallest_itemcount);		
			$xml->endBranch();		
			
			$xml->getXml(true);


			}
		
	}


/**/




	function fillWithPrice()
	{


			ob_clean();
		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->uri->segment(3);
			$myunits="";
			$query=$this->db->query("SELECT * FROM tbl_unit WHERE product_code='$pcode' order by price DESC");
			foreach($query->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;
		if($query->num_rows()>=1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('type', $row->type);	

			$xml->addNode('myunits',$myunits);
			$xml->addNode('price', $row->price);	

			$xml->addNode('item_count',$row->smallest_itemcount);		
			$xml->endBranch();		
			
			$xml->getXml(true);


			}
		
	}


/**/






	function fillWithPurchase()
	{
		ob_clean();
		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->input->post("pcode");
			$warehouse=$this->input->post("warehouse");

			$myunits="";
			$query=$this->db->query("SELECT * FROM tbl_".$warehouse." WHERE product_code='$pcode' order by smallitemcount DESC");

			foreach($query->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;
		if($query->num_rows()>=1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('type', $row->type);	

			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('price', $row->price);	
			$xml->endBranch();		
			
			$xml->getXml(true);


			}
		
	}

	/**/
	

	function search()
	{

		$pcode = trim(strip_tags($_GET['term']));
		$query2=$this->db->like("product_code",$pcode,'after')->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
	
		foreach($query2->result_array() as $row):
			$row['label']=htmlentities(stripslashes($row["product_code"]))." ( ".htmlentities(stripslashes($row["product_name"]))." - ".$row["type"].") ";
			$row['value']=htmlentities(stripslashes($row["product_code"]));
			$row['id']=(int)$row['id'];

			$row_set[] = $row;
	
		endforeach;

		echo json_encode($row_set);
	
	

	}

/*title_autocomplete*/

	function title_search()
	{
		$tbl=$this->uri->segment(3);
		$description = trim(strip_tags($_GET['term']));
		$query2=$this->db->like("description",$description,'after')->group_by("description")->order_by("description","ASC")->get("tbl_".$tbl);
	
		foreach($query2->result_array() as $row):
			$row['label']=htmlentities(stripslashes($row["description"]));
			$row['value']=htmlentities(stripslashes($row["description"]));
			$row['id']=(int)$row['id'];

			$row_set[] = $row;
	
		endforeach;

		echo json_encode($row_set);
	
	

	}


	/*Price Search*/


	function price_search()
	{
		 $pcode=html_entity_decode($this->uri->segment(3)); 
		$description = trim(strip_tags($_GET['term']));
		//$query2=$this->db->where("product_code",$pcode)->group_by("price")->order_by("price","ASC")->get("tbl_unit");
		$query2=$this->db->select("price")->where("product_code",$pcode)->get("tbl_unit");
		foreach($query2->result_array() as $row):
			$row['label']=htmlentities(stripslashes($row["price"]));
			$row['value']=htmlentities(stripslashes($row["price"]));
			//$row['id']=(int)$row['id'];

			$row_set[] = $row;
	
		endforeach;

		echo json_encode($row_set);
	
	

	}

	
	/*Grab Unit*/
	function grabunit()
	{
		
		ob_clean();
		
		$xml = new MY_Xml_writer;
		$xml->setRootName('items');
		$xml->initiate();			
		
		$pcode=$this->uri->segment(3);
		$query=$this->db->query("SELECT unit,product_name FROM tbl_shop_stock where tbl_shop_stock.product_code='$pcode' order by smallest_itemcount ASC");

		if($query->num_rows()==1)
		{
		$row=$query->row();
		$xml->startBranch('data');	
		$xml->addNode('product_name', $row->product_name);	
		$xml->addNode('unit', $row->unit);				
		$xml->endBranch();		
		
		$xml->getXml(true);
		}
		
				
	}


	/*insert form*/
	function insert_form($form)
	{

		if(get_cookie("admin_cookie"))
		{
		
		$data = $this->data;
		
		
		
		$data["unit"]=array(""=>"... select ...");
		$data["supplier"]=$this->admin_model->grab_supplier();
		$data["customer"]=$this->admin_model->grab_customer();
		$data["staff"]=$this->admin_model->grab_staff();
		$data["outcome_category"]=$this->admin_model->grab_outcome_category();
		$data["income_category"]=$this->admin_model->grab_income_category();
		//$data['category'] = $this->admin_model->grab_category();
		$data["errmessage"]="";	

		
		
		if($this->uri->segment(4))
		{
			$data["main_content"]=$form."_".$this->uri->segment(4);
				//$this->load->view("admin/template".$form."_".$this->uri->segment(4),$data);
		} 
		else
		{	

			$data["main_content"]=$form;
			
		}


			//$this->load->view("admin/".$form,$data);
			$this->load->view("admin/template",$data);	

		}
		else
		{

		redirect("site");
	}
	
	}//


	/**/

	function data_list($table)
	{
		if(get_cookie("admin_cookie"))
		{
		
		$data = $this->data;
		
			$table=$this->uri->segment(3);
			$data["unit"]=$this->admin_model->grab_unit();
			switch($table)
			{

				case'customer_returnlist':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer_debt_return WHERE date=CURDATE()");
				break;
				
				case "product_price":
				$data["lists"]=$this->db->query("SELECT tbl_product_price.* FROM tbl_product_price");
				break;


				case "foc":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type !='consinement'");
				break;

				/*case "foc":
				$data["lists"]=$this->db->query("SELECT tbl_sale.*, tbl_unit.capital FROM tbl_sale
					LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code  
									WHERE sale_type !='consinement' AND  foc !=0 ORDER BY tbl_sale.voucherno DESC");
				break;*/

				case "consinement_foc":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type ='consinement'");
				break;

				case "discount":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND sale_type !='consinement'");
				break;

				case "consinement_discount":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND sale_type ='consinement'");
				break;

				case "saleby_voucher":
				$data["lists"]=$this->db->query("SELECT tbl_staff_sale_header.voucherno,tbl_staff_sale_header.date,tbl_staff_sale_header.nettotal FROM tbl_staff_sale_header

					UNION ALL

					SELECT tbl_sale_header.voucherno,tbl_sale_header.date,tbl_sale_header.nettotal  FROM tbl_sale_header

					UNION ALL

					SELECT tbl_family_sale_header.voucherno,tbl_family_sale_header.date,tbl_family_sale_header.nettotal  FROM tbl_family_sale_header

					UNION ALL

					SELECT tbl_subwarehouse_sale_header.voucherno,tbl_subwarehouse_sale_header.date,tbl_subwarehouse_sale_header.nettotal FROM tbl_subwarehouse_sale_header

					UNION ALL
					SELECT tbl_other_customer_sale_header.voucherno,tbl_other_customer_sale_header.date,tbl_other_customer_sale_header.nettotal FROM tbl_other_customer_sale_header

					UNION ALL

					SELECT tbl_consinement_sale_header.voucherno,tbl_consinement_sale_header.date,tbl_consinement_sale_header.nettotal FROM tbl_consinement_sale_header			

					");
				break;
				

			
				case "debt_to_supplier" :
				$data["lists"]=$this->db->order_by("supplier_name,last_date","DESC")->get_where("tbl_supplier",array('total_debt !='=>0));
				break;

				case "debt_from_customer":			
				$data["lists"]=$this->db->order_by("customer_name,last_date","DESC")->get_where("tbl_customer",array('total_debt !='=>0));
				break;

				case "debt_from_staff":			
				$data["lists"]=$this->db->order_by("staff,last_date","DESC")->get_where("tbl_staff",array('total_debt !='=>0));
				break;

				case "debt_from_family":			
				$data["lists"]=$this->db->order_by("family,last_date","DESC")->get_where("tbl_family",array('total_debt !='=>0));
				break;

				
				case "saleby_location" :
				$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");
				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				break;
				

				case "saleby_location_code" :

				$data["product_codes"]=$this->db->query("SELECT DISTINCT product_code FROM tbl_sale where sale_type='subwarehouse' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) ");

				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				break;

			/*	case "saleby_location_code" :
				$data["product_codes"]=$this->db->query("SELECT DISTINCT product_code FROM tbl_sale where sale_type='subwarehouse'  ");

				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' ");

				break;
*/

				case "daily_income_outcome" :
				$data["dateinterval"]=date("Y-m-d");
				$data["totalsale"]=$this->db->query("SELECT SUM(received) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income WHERE date=CURDATE()")->row();
				$data["totalgeneraloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date=CURDATE()")->row();
				$data["deliverycost"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["totalpurchase"]=$this->db->query("SELECT SUM(total) as total FROM tbl_purchase WHERE date=CURDATE() ")->row();

				break;

				case "cash_book" :
				$data["dateinterval"]=date("Y-m-d");
				$data["outcomes"]=$this->db->query("SELECT * FROM tbl_general_outcome WHERE date=CURDATE()");
				$data["factory_outcomes"]=$this->db->query("SELECT * FROM tbl_factory_outcome WHERE date=CURDATE()");
				$data["opening_balance"]=$this->db->query("SELECT * FROM tbl_opening_balance_sheet WHERE date=CURDATE()");
				$data["bank_outcome"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where  outcome !=0 AND date=CURDATE()");
				$data["bank_income"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where income !=0 AND date=CURDATE()");
				$data["sale"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() AND received !=0");
				$data["subwarehouse_sale"]=$this->db->query("SELECT * FROM tbl_subwarehouse_sale_header WHERE date=CURDATE() AND received !=0");
				$data["sale_return"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE return_type='cash' AND date=CURDATE()");
				$data["customer_debt_returns"]=$this->db->query("SELECT * FROM tbl_customer_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["other_receivables_income"]=$this->db->query("SELECT * FROM tbl_other_receivable_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["other_receivables_outcome"]=$this->db->query("SELECT * FROM tbl_other_receivable_balance_sheet WHERE date=CURDATE() AND voucher_amount>0");

				$data["staff_debt_return"]=$this->db->query("SELECT * FROM tbl_staff_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["family_debt_return"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date=CURDATE() AND returnamount!=0 AND paymethod !='showroom'");
				$data["showroom_debt_return"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date=CURDATE() AND returnamount!=0 AND paymethod='showroom'");
				$data["staff_debt_loan"]=$this->db->query("SELECT * FROM tbl_staff_balance_sheet WHERE date=CURDATE() AND loanamount>0");
				$data["family_debt_loan"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date=CURDATE() AND loanamount>0");
				$data["consine_debt_return"]=$this->db->query("SELECT * FROM tbl_consinement_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["generalincome"]=$this->db->query("SELECT * FROM tbl_general_income WHERE date=CURDATE()");
				$data["supplier_debt_return"]=$this->db->query("SELECT * FROM tbl_supplier_balance_sheet WHERE date=CURDATE() AND returnamount>0");

				
				break;



				case "monthly_cash_book" :
				$data["dateinterval"]=date("m-Y");
				$data["sdate"]="";
				$data["edate"]="";
				$data["outcomes"]=$this->db->query("SELECT SUM(tbl_general_outcome.total) as total,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id where MONTH(tbl_general_outcome.date)=MONTH(NOW()) and YEAR(tbl_general_outcome.date)=YEAR(NOW()) group by outcome_category ");
				$data["incomes"]=$this->db->query("SELECT SUM(tbl_general_income.total) as total,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id where MONTH(tbl_general_income.date)=MONTH(NOW()) and YEAR(tbl_general_income.date)=YEAR(NOW()) group by income_category ");
				$data["purchases"]=$this->db->query("SELECT SUM(tbl_purchase_header.nettotal) as total FROM tbl_purchase_header where MONTH(tbl_purchase_header.date)=MONTH(NOW()) and YEAR(tbl_purchase_header.date)=YEAR(NOW())");
				$data["sale"]=$this->db->query("SELECT SUM(tbl_sale_header.received) as total_received FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND received !=0 ")->row();
				$data["creditsale"]=$this->db->query("SELECT SUM(tbl_sale_header.nettotal-tbl_sale_header.received) as total_debt FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND paytype='credit' ")->row();
				
				

				break;


				case "factory_balance_sheet" :
							
				$data["lists"]=$this->db->query("SELECT SUM(tbl_factory_outcome.total) as total,tbl_factory_outcome_category.title,tbl_factory_outcome.date FROM tbl_factory_outcome
				 LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				$data["purchases"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE supplier_id=2 AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				break;
				

				$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			//	$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
			////	$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				break;

				case "other_customer" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer WHERE type='other'");
				break;

				case 'sale_profit' :
				$data["dateinterval"]=date("Y-m-d");	
				//$data["lists"]=$this->db->query("SELECT DISTINCT(tbl_sale.product_code), SUM(tbal_sale.total) as total");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type !='consinement' GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;


				case 'profit' :
				$data["dateinterval"]=date("Y-m-d");	
				if($this->uri->segment(4))
				{
					$sale_type=$this->uri->segment(4);

					if($sale_type=="consinement")
					{

				$data["dateinterval"]=date("Y-m-d");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, 
					sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name
					 FROM tbl_sale WHERE  tbl_sale.sale_type ='consinement'  GROUP BY 
					  tbl_sale.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				$table=$sale_type."_sale_profit";
					}

					else
					{
							$data["dateinterval"]=date("Y-m-d");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, 
					sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name
					 FROM tbl_sale WHERE  tbl_sale.sale_type !='consinement'  GROUP BY 
					  tbl_sale.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				$table="sale_profit";
					}
			}

			else
			{
				$data["dateinterval"]=date("Y-m-d");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, 
					sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name
					 FROM tbl_sale WHERE
					  tbl_sale.date=CURDATE() GROUP BY 
					  tbl_sale.product_code, tbl_sale.date ORDER BY tbl_sale.date");
			}

				break;


				case 'consinement_sale_profit' :
				$data["dateinterval"]=date("Y-m-d");	
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type ='consinement' GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				//$data['lists']=$this->db->query("SELECT DISTINCT (tbl_consinement_sale.product_code), SUM(tbl_consinement_sale.total) as total, sum(tbl_consinement_sale.quantity) as total_quantity,tbl_consinement_sale.date,tbl_consinement_sale.unit,tbl_consinement_sale.product_name,tbl_unit.price as purchase_price,tbl_consinement.* FROM tbl_consinement_sale LEFT JOIN tbl_warehouse1 ON tbl_consinement_sale.product_code=tbl_warehouse1.product_code  JOIN tbl_consinement ON tbl_consinement_sale.consinement_id=tbl_consinement.id GROUP BY tbl_consinement_sale.product_code,tbl_warehouse1.product_code, tbl_consinement_sale.date ORDER BY tbl_consinement_sale.date");
				break;

				case "consinement_center_sale_info":
				$this->db->select("tbl_sale.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalsale,SUM(tbl_sale.total) as netsale,tbl_consinement.*") ;
				$this->db->join("tbl_consinement","tbl_sale.customer=tbl_consinement.id");
				$this->db->group_by("tbl_sale.customer");
				$this->db->where("tbl_sale.sale_type","consinement");
				$data["lists"]=$this->db->get("tbl_sale");
				break;


				case "saleby_itemtype":
				$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");

				/*$this->db->select("tbl_consinement_sale.*,SUM(tbl_consinement_sale.quantity*tbl_consinement_sale.price) as totalsale,SUM(tbl_consinement_sale.total) as netsale,tbl_consinement.*") ;
				$this->db->join("tbl_consinement","tbl_consinement_sale.consinement_id=tbl_consinement.id");
				$this->db->group_by("tbl_consinement_sale.consinement_id");
				$data["lists"]=$this->db->get("tbl_consinement_sale");*/
				break;



				case "general_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE MONTH(date)=MONTH(Now())");
				break;

				case "factory_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id");
				break;

				case "general_income":
				$data["lists"]=$this->db->query("SELECT tbl_general_income.*,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id");
				break;


				case "sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;


				case "other_customer_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_other_customer_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				

				case "subwarehouse_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_subwarehouse_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "staff_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_staff_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "family_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_family_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "sale_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "purchase_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "sale_return_code":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*,tbl_sale_return.total as sprice, tbl_showroom_stock.price as p_price,tbl_sale_return_header.*,tbl_showroom_stock.price FROM tbl_sale_return
				 LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno 
					LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  
					LEFT JOIN tbl_showroom_stock ON tbl_sale_return.product_code=tbl_showroom_stock.product_code  
									WHERE sale_type !='consinement' ORDER BY tbl_sale_return_header.voucherno DESC");
				break;

				case "consinement_sale_return_code":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*,tbl_sale_return.total as sprice,tbl_consinement.*,tbl_consinement_stock.price as p_price,tbl_sale_return_header.*,tbl_consinement_stock.price FROM tbl_sale_return
				 LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno 
					LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  
					LEFT JOIN tbl_consinement_stock ON tbl_sale_return.product_code=tbl_consinement_stock.product_code  
					WHERE tbl_sale_return.sale_type ='consinement' ORDER BY tbl_sale_return_header.voucherno DESC");
				break;

				case "purchase_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_return_header ORDER BY voucherno DESC");
				break;


				case "purchase_multiple_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_multiple_return_header ORDER BY voucherno DESC");
				break;

				case "sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE consinement_id=0 ORDER BY voucherno DESC");
				break;

				case "consinement_sale_return":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return_header.*,tbl_consinement.* FROM tbl_sale_return_header LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  WHERE consinement_id !=0 ORDER BY voucherno DESC");
				break;

				case "cash_sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE return_type <>'credit' ORDER BY voucherno DESC");
				break;

				case "credit_sale_return" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE  return_type='credit' ORDER BY voucherno DESC");
				break;

				case "total":
				$data["lists"]=$this->db->query("SELECT total FROM tbl_total")->row();
				break;

				case "bysaleamount":
				$data['lists']=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` GROUP BY customer_name ORDER by total desc");
				break;

				case "byqtyamount":
				//$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE customer !='' AND date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				$data['lists']=$this->db->query("SELECT SUM(quantity)as totalqty,SUM(price)as total,product_name,product_code,date FROM `tbl_sale` GROUP BY product_code ORDER by totalqty desc");
				
				break;

				

				case "stock_alert":
				$data["lists"]=$this->admin_model->check_stock_remind();
				break;

				case "shop_stock_alert":
				$data["lists"]=$this->admin_model->check_shop_stock_remind();
				break;

				

				case "debt_alert":
				$data["lists"]=$this->admin_model->check_debt_alert();
				break;

				case "sale_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_deliver_header ORDER BY voucherno ASC");
				break;


				case "purchase_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_deliver_header ORDER By voucherno DESC ");
				break;

				/*case "unit":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_unit order by product_code");
				break;*/

				case "purchase":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE MONTH(date)=MONTH(Now()) ORDER By date DESC ");
				break;


			case "purchase_multiple":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header ORDER By voucherno DESC ");
				break;


				case "purchase_from_factory":
				$data["types"]=$this->db->query("SELECT DISTINCT type FROM tbl_purchase ORDER BY voucherno DESC");
				break;


				case "unit" :
				

				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_unit",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				

			case "consinement_stock_history" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock_history.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_history.consinement_id");

					$this->db->order_by("tbl_consinement_stock_history.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock_history.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock_history",array('tbl_consinement_stock_history.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock_history.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_history.consinement_id");

					$this->db->order_by("tbl_consinement_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock_history ON tbl_consinement.id=tbl_consinement_stock_history.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				break;




				case "subwarehouse_stock_history" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock_history.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock_history.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock_history.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock_history.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock_history",array('tbl_subwarehouse_stock_history.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock_history.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock_history.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock_history ON tbl_subwarehouse.id=tbl_subwarehouse_stock_history.subwarehouse_id group by tbl_subwarehouse_stock_history.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				break;


			case "showroom_stock_history" : 
				$data["sdate"]="";
				$data["edate"]="";
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock_history.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock_history.showroom_id");
					$this->db->where('date',date("Y-m-d"));
					$this->db->order_by("tbl_showroom_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
					//$data["lists"] = $this->db->query("SELECT tbl_showroom.*,tbl_showroom_stock_history.* FROM tbl_showroom JOIN tbl_showroom_stock_history ON tbl_showroom.id=tbl_showroom_stock_history.showroom_id WHERE tbl_showroom.date='CURDATE'")
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock_history order by category ASC");
			

				break;


				


					
				case "warehouse1_stock_history" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_warehouse1_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1_stock_history order by category ASC");
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;



				case "warehouse1" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_warehouse1",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "showroom_stock" : 
				if($this->uri->segment(4))
				{
					
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom_stock.*");
					$this->db->order_by("tbl_showroom_stock.id","ASC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
			//	$data["showrooms"]=$this->db->query("SELECT tbl_showroom.* FROM tbl_showroom right join tbl_showroom_stock ON tbl_showroom.id=tbl_showroom_stock.showroom_id group by tbl_showroom_stock.showroom_id order by tbl_showroom.name ASC ");
				

				break;



				case "consinement_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");

					$this->db->order_by("tbl_consinement_stock.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock",array('tbl_consinement_stock.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");

					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock ON tbl_consinement.id=tbl_consinement_stock.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				$data["subwarehouse_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");
				
				break;

				case "consinement_stock_header" : 
				$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_consinement_stock_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_header.consinement_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_consinement_stock_header.subwarehouse_id");

				$this->db->order_by("tbl_consinement_stock_header.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_consinement_stock_header");
				break;




				case "subwarehouse_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock",array('tbl_subwarehouse_stock.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock ON tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id group by tbl_subwarehouse_stock.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				$data["showroom_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");
				$data["subwarehouse_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "consinement_transfer_history" : 
				$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_consinement_transfer_history.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_transfer_history.consinement_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_consinement_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_consinement_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_consinement_transfer_history");
				break;


				case "showroom_transfer_history" : 
				$this->db->select("tbl_showroom.name as cname,tbl_showroom.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_showroom_transfer_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_transfer_history.showroom_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_showroom_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_showroom_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_showroom_transfer_history");
				break;


				case "showroom_to_subwarehouse_transfer_history" : 
				$this->db->select("tbl_showroom.name as cname,tbl_showroom.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_showroom_to_subwarehouse_transfer_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_to_subwarehouse_transfer_history.showroom_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_showroom_to_subwarehouse_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_showroom_to_subwarehouse_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_showroom_to_subwarehouse_transfer_history");
				break;



				case "subwarehouse_transfer_history" : 
				$this->db->select("tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_subwarehouse_transfer_history.*");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_subwarehouse_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_subwarehouse_transfer_history");
				break;


				case "warehouse1_transfer_history" : 
				$this->db->select("tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_warehouse1_transfer_history.*");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_warehouse1_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_warehouse1_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_warehouse1_transfer_history");
				break;



				case "showroom_to_warehouse1_transfer_history" : 
				$this->db->select("tbl_showroom.name as sname,tbl_showroom.location as slocation,tbl_showroom_to_warehouse1_transfer_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_to_warehouse1_transfer_history.showroom_id");

				$this->db->order_by("tbl_showroom_to_warehouse1_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_showroom_to_warehouse1_transfer_history");
				break;


				case "subwarehouse_to_subwarehouse_transfer_history" : 
				$data["lists"]=$this->db->query("select t1.name as s1name, t2.name as s2name, t.* from tbl_subwarehouse_to_subwarehouse_transfer_history t inner join tbl_subwarehouse t1 on t1.id = t.subwarehouse_id
								inner join tbl_subwarehouse t2 on t2.id = t.subwarehouse2_id;");
				break;


				case"damage_subwarehouse" :
				$this->db->select("tbl_subwarehouse.*,tbl_damage_subwarehouse.*");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_damage_subwarehouse.subwarehouse_id");
				$this->db->order_by("tbl_damage_subwarehouse.product_code","DESC");
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;

				case"damage_showroom" :
				$this->db->select("tbl_showroom.*,tbl_damage_showroom.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_damage_showroom.showroom_id");
				$this->db->order_by("tbl_damage_showroom.product_code","DESC");
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;

				

				case"damage_warehouse1" :
				
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;




				case"damage_consinement" :
				$this->db->select("tbl_consinement.*,tbl_damage_consinement.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_damage_consinement.consinement_id");
				$this->db->order_by("tbl_damage_consinement.product_code","DESC");
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "category" :
				$data["lists"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse1" :
				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;

				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;


				case "consinement_sale":
				$this->db->select("tbl_consinement.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalc,tbl_sale.discount,tbl_sale.discount2,tbl_consinement_sale_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale_header.consinement_id");
				$this->db->join("tbl_sale","tbl_consinement_sale_header.voucherno=tbl_sale.voucherno");
				$this->db->group_by("tbl_sale.voucherno");

				$this->db->order_by("tbl_consinement_sale_header.date","DESC");
				$data["lists"]=$this->db->get("tbl_consinement_sale_header");
				break;

				case "check_stocks":
				$data["codes"]=$this->db->select("product_code")->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
				$data["clists"]=$this->db->query("SELECT tbl_consinement.name,tbl_consinement.location,tbl_consinement_stock.* FROM tbl_consinement JOIN tbl_consinement_stock ON tbl_consinement_stock.consinement_id=tbl_consinement.id GROUP BY tbl_consinement_stock.consinement_id");
				$data["sublists"]=$this->db->query("SELECT tbl_subwarehouse.name,tbl_subwarehouse.location,tbl_subwarehouse_stock.* FROM tbl_subwarehouse JOIN tbl_subwarehouse_stock ON tbl_subwarehouse_stock.subwarehouse_id=tbl_subwarehouse.id GROUP BY tbl_subwarehouse_stock.subwarehouse_id");
				$data["showlists"]=$this->db->query("SELECT tbl_showroom.name,tbl_showroom.location,tbl_showroom_stock.* FROM tbl_showroom JOIN tbl_showroom_stock ON tbl_showroom_stock.showroom_id=tbl_showroom.id GROUP BY tbl_showroom_stock.showroom_id");

				break;

				case "other_customer" :
				$data["lists"]= $this->db->get_where("tbl_customer",array("type"=>"other"));
				break;

case "supplier":

		$data["locations"]=$this->db->query("SELECT DISTINCT address as location FROM tbl_supplier");

		if($this->uri->segment(4))
		{
		$data["lists"]=$this->db->order_by("id","DESC")->get_where("tbl_supplier",array('address'=>urldecode($this->uri->segment(4))));
		}
		else
		{
		$data["lists"]=$this->db->query("SELECT * FROM tbl_supplier ORDER BY id DESC");
		}			

		break;

				case "consinement_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_consinement.name as cname,tbl_consinement.location as cl,tbl_consinement_balance_sheet.* FROM tbl_consinement_balance_sheet LEFT JOIN tbl_consinement ON tbl_consinement_balance_sheet.consinement_id=tbl_consinement.id ORDER BY tbl_consinement_balance_sheet.date,tbl_consinement_balance_sheet.id DESC");
				break;


				case "customer_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_customer.customer_name as cname,tbl_customer.address as clocation,tbl_customer_balance_sheet.* FROM tbl_customer_balance_sheet LEFT JOIN tbl_customer ON tbl_customer_balance_sheet.customer_id=tbl_customer.id ORDER BY tbl_customer_balance_sheet.date,tbl_customer_balance_sheet.id DESC");
				break;

				case "supplier_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_supplier.supplier_name as sname,tbl_supplier.address as address,tbl_supplier_balance_sheet.* FROM tbl_supplier_balance_sheet LEFT JOIN tbl_supplier ON tbl_supplier_balance_sheet.supplier_id=tbl_supplier.id ORDER BY tbl_supplier_balance_sheet.date,tbl_supplier_balance_sheet.id DESC");
				break;



				default:
				$data["lists"]=$this->db->order_by("id","DESC")->get("tbl_".$table);
				break;
			
			}			

			
			$data["main_content"]=$table;
			$this->load->view("admin/template",$data);		
		}
		else
		{
			redirect("site");
		}
	}


/*Updated Data Lists*/


function updated_data_list($table)
	{
		
		$data = $this->data;
		
			$table=$this->uri->segment(3);
			$data["unit"]=$this->admin_model->grab_unit();
			switch($table)
			{

				case'customer_returnlist':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer_debt_return WHERE date=CURDATE()");
				break;
				
				case "product_price":
				$data["lists"]=$this->db->query("SELECT tbl_product_price.* FROM tbl_product_price");
				break;


				case "foc":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type !='consinement'");
				break;

				/*case "foc":
				$data["lists"]=$this->db->query("SELECT tbl_sale.*, tbl_unit.capital FROM tbl_sale
					LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code  
									WHERE sale_type !='consinement' AND  foc !=0 ORDER BY tbl_sale.voucherno DESC");
				break;*/

				case "consinement_foc":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type ='consinement'");
				break;

				case "discount":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND sale_type !='consinement'");
				break;

				case "consinement_discount":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND sale_type ='consinement'");
				break;


				

			
				case "debt_to_supplier" :
				$data["lists"]=$this->db->order_by("supplier_name,last_date","DESC")->get_where("tbl_supplier",array('total_debt !='=>0));
				break;

				case "debt_from_customer":			
				$data["lists"]=$this->db->order_by("customer_name,last_date","DESC")->get_where("tbl_customer",array('total_debt !='=>0));
				break;

				case "debt_from_staff":			
				$data["lists"]=$this->db->order_by("staff,last_date","DESC")->get_where("tbl_staff",array('total_debt !='=>0));
				break;

				case "debt_from_family":			
				$data["lists"]=$this->db->order_by("family,last_date","DESC")->get_where("tbl_family",array('total_debt !='=>0));
				break;

				
				case "saleby_location" :
				$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");
				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				break;
				

				case "saleby_location_code" :

				$data["product_codes"]=$this->db->query("SELECT DISTINCT product_code FROM tbl_sale where sale_type='subwarehouse' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) ");

				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				break;

			/*	case "saleby_location_code" :
				$data["product_codes"]=$this->db->query("SELECT DISTINCT product_code FROM tbl_sale where sale_type='subwarehouse'  ");

				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' ");

				break;
*/

				case "daily_income_outcome" :
				$data["dateinterval"]=date("Y-m-d");
				$data["totalsale"]=$this->db->query("SELECT SUM(received) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income WHERE date=CURDATE()")->row();
				$data["totalgeneraloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date=CURDATE()")->row();
				$data["deliverycost"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["totalpurchase"]=$this->db->query("SELECT SUM(total) as total FROM tbl_purchase WHERE date=CURDATE() ")->row();

				break;

				case "cash_book" :
				$data["dateinterval"]=date("Y-m-d");
				$data["outcomes"]=$this->db->query("SELECT * FROM tbl_general_outcome WHERE date=CURDATE()");
				$data["factory_outcomes"]=$this->db->query("SELECT * FROM tbl_factory_outcome WHERE date=CURDATE()");
				$data["opening_balance"]=$this->db->query("SELECT * FROM tbl_opening_balance_sheet WHERE date=CURDATE()");
				$data["bank_outcome"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where  outcome !=0 AND date=CURDATE()");
				$data["bank_income"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where income !=0 AND date=CURDATE()");
				$data["sale"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() AND received !=0");
				$data["subwarehouse_sale"]=$this->db->query("SELECT * FROM tbl_subwarehouse_sale_header WHERE date=CURDATE() AND received !=0");
				$data["sale_return"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE return_type='cash' AND date=CURDATE()");
				$data["customer_debt_returns"]=$this->db->query("SELECT * FROM tbl_customer_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["other_receivables_income"]=$this->db->query("SELECT * FROM tbl_other_receivable_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["other_receivables_outcome"]=$this->db->query("SELECT * FROM tbl_other_receivable_balance_sheet WHERE date=CURDATE() AND voucher_amount>0");

				$data["staff_debt_return"]=$this->db->query("SELECT * FROM tbl_staff_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["family_debt_return"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date=CURDATE() AND returnamount!=0 AND paymethod !='showroom'");
				$data["showroom_debt_return"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date=CURDATE() AND returnamount!=0 AND paymethod='showroom'");
				$data["staff_debt_loan"]=$this->db->query("SELECT * FROM tbl_staff_balance_sheet WHERE date=CURDATE() AND loanamount>0");
				$data["family_debt_loan"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date=CURDATE() AND loanamount>0");
				$data["consine_debt_return"]=$this->db->query("SELECT * FROM tbl_consinement_balance_sheet WHERE date=CURDATE() AND returnamount>0");
				$data["generalincome"]=$this->db->query("SELECT * FROM tbl_general_income WHERE date=CURDATE()");
				$data["supplier_debt_return"]=$this->db->query("SELECT * FROM tbl_supplier_balance_sheet WHERE date=CURDATE() AND returnamount>0");

				
				break;



				case "monthly_cash_book" :
				$data["dateinterval"]=date("Y-m-d");
				$data["outcomes"]=$this->db->query("SELECT SUM(tbl_general_outcome.total) as total,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id where MONTH(tbl_general_outcome.date)=MONTH(NOW()) and YEAR(tbl_general_outcome.date)=YEAR(NOW()) group by outcome_category ");
				$data["factory_outcomes"]=$this->db->query("SELECT SUM(tbl_factory_outcome.total) as total,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id where MONTH(tbl_factory_outcome.date)=MONTH(NOW()) and YEAR(tbl_factory_outcome.date)=YEAR(NOW()) group by outcome_category ");
				$data["opening_balance"]=$this->db->query("SELECT * FROM tbl_opening_balance_sheet WHERE date=CURDATE() ORDER BY date ASC LIMIT 1");
				$data["closing_balance"]=$this->db->query("SELECT * FROM tbl_opening_balance_sheet WHERE date=CURDATE() ORDER BY date DESC LIMIT 1");
				$data["bank_outcome"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where  outcome !=0 AND MONTH(tbl_bank_balance_sheet.date)=MONTH(NOW()) and YEAR(tbl_bank_balance_sheet.date)=YEAR(NOW())");
				$data["bank_income"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where income !=0 AND MONTH(tbl_bank_balance_sheet.date)=MONTH(NOW()) and YEAR(tbl_bank_balance_sheet.date)=YEAR(NOW())");
				$data["sale"]=$this->db->query("SELECT SUM(tbl_sale_header.received) as total_received FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND received !=0 ")->row();
				$data["subwarehouse_sale"]=$this->db->query("SELECT SUM(tbl_subwarehouse_sale_header.received) as total_received FROM tbl_subwarehouse_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND received !=0")->row();
				$data["sale_return"]=$this->db->query("SELECT SUM(tbl_sale_return_header.nettotal) as nettotal FROM tbl_sale_return_header WHERE return_type='cash' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				$data["customer_debt_returns"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount FROM tbl_customer_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount>0");
				$data["other_receivables_income"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount FROM tbl_other_receivable_balance_sheet WHERE  MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount>0");
				$data["other_receivables_outcome"]=$this->db->query("SELECT SUM(voucher_amount) as total_voucher_amount FROM tbl_other_receivable_balance_sheet WHERE  MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND voucher_amount>0");

				$data["staff_debt_return"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount FROM tbl_staff_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount>0");
				$data["family_debt_return"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount FROM tbl_family_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount !=0 AND paymethod !='showroom'");
				$data["showroom_debt_return"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount ,family FROM tbl_family_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount !=0 AND paymethod='showroom'");
				
				$data["staff_debt_loan"]=$this->db->query("SELECT SUM(loanamount) as total_loanamount FROM tbl_staff_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND loanamount>0");
				$data["family_debt_loan"]=$this->db->query("SELECT SUM(loanamount) as total_loanamount FROM tbl_family_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND loanamount>0");
				$data["consine_debt_return"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount FROM tbl_consinement_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount>0");
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				$data["supplier_debt_return"]=$this->db->query("SELECT SUM(returnamount) as total_returnamount FROM tbl_supplier_balance_sheet where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND returnamount>0");

				break;


				case "factory_balance_sheet" :
							
				$data["lists"]=$this->db->query("SELECT SUM(tbl_factory_outcome.total) as total,tbl_factory_outcome_category.title,tbl_factory_outcome.date FROM tbl_factory_outcome
				 LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				$data["purchases"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE supplier_id=2 AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				break;
				

				$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			//	$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
			////	$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				break;

				case "other_customer" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer WHERE type='other'");
				break;

				case 'sale_profit' :
				$data["dateinterval"]=date("Y-m-d");	
				//$data["lists"]=$this->db->query("SELECT DISTINCT(tbl_sale.product_code), SUM(tbal_sale.total) as total");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type !='consinement' GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'profit' :
				$data["dateinterval"]=date("Y-m-d");	
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				//$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_purchase_price,tbl_sale.unit FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_sale.date UNION SELECT DISTINCT (tbl_consinement_sale.product_code), SUM(tbl_consinement_sale.total) as total, tbl_consinement_sale.date,tbl_consinement_sale.product_name,tbl_product_price.average_purchase_price,tbl_consinement_sale.unit FROM tbl_consinement_sale LEFT JOIN tbl_product_price ON tbl_consinement_sale.product_code=tbl_product_price.product_code WHERE tbl_consinement_sale.date=CURDATE() GROUP BY tbl_consinement_sale.product_code,tbl_consinement_sale.date ");
				break;


				case 'consinement_sale_profit' :
				$data["dateinterval"]=date("Y-m-d");	
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type ='consinement' GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				//$data['lists']=$this->db->query("SELECT DISTINCT (tbl_consinement_sale.product_code), SUM(tbl_consinement_sale.total) as total, sum(tbl_consinement_sale.quantity) as total_quantity,tbl_consinement_sale.date,tbl_consinement_sale.unit,tbl_consinement_sale.product_name,tbl_unit.price as purchase_price,tbl_consinement.* FROM tbl_consinement_sale LEFT JOIN tbl_warehouse1 ON tbl_consinement_sale.product_code=tbl_warehouse1.product_code  JOIN tbl_consinement ON tbl_consinement_sale.consinement_id=tbl_consinement.id GROUP BY tbl_consinement_sale.product_code,tbl_warehouse1.product_code, tbl_consinement_sale.date ORDER BY tbl_consinement_sale.date");
				break;


				case "consinement_center_sale_info":
				$this->db->select("tbl_sale.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalsale,SUM(tbl_sale.total) as netsale,tbl_consinement.*") ;
				$this->db->join("tbl_consinement","tbl_sale.customer=tbl_consinement.id");
				$this->db->group_by("tbl_sale.customer");
				$this->db->where("tbl_sale.sale_type","consinement");
				$data["lists"]=$this->db->get("tbl_sale");
				break;


				case "saleby_itemtype":
				$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");

				/*$this->db->select("tbl_consinement_sale.*,SUM(tbl_consinement_sale.quantity*tbl_consinement_sale.price) as totalsale,SUM(tbl_consinement_sale.total) as netsale,tbl_consinement.*") ;
				$this->db->join("tbl_consinement","tbl_consinement_sale.consinement_id=tbl_consinement.id");
				$this->db->group_by("tbl_consinement_sale.consinement_id");
				$data["lists"]=$this->db->get("tbl_consinement_sale");*/
				break;



				case "general_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id");
				break;

				case "factory_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id");
				break;

				case "general_income":
				$data["lists"]=$this->db->query("SELECT tbl_general_income.*,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id");
				break;


				case "sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;


				case "other_customer_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_other_customer_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				

				case "subwarehouse_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_subwarehouse_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "staff_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_staff_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "family_sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_family_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "sale_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "purchase_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "sale_return_code":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*,tbl_sale_return.total as sprice, tbl_showroom_stock.price as p_price,tbl_sale_return_header.*,tbl_showroom_stock.price FROM tbl_sale_return
				 LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno 
					LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  
					LEFT JOIN tbl_showroom_stock ON tbl_sale_return.product_code=tbl_showroom_stock.product_code  
									WHERE sale_type !='consinement' ORDER BY tbl_sale_return_header.voucherno DESC");
				break;

				case "consinement_sale_return_code":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*,tbl_sale_return.total as sprice,tbl_consinement.*,tbl_consinement_stock.price as p_price,tbl_sale_return_header.*,tbl_consinement_stock.price FROM tbl_sale_return
				 LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno 
					LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  
					LEFT JOIN tbl_consinement_stock ON tbl_sale_return.product_code=tbl_consinement_stock.product_code  
					WHERE tbl_sale_return.sale_type ='consinement' ORDER BY tbl_sale_return_header.voucherno DESC");
				break;

				case "purchase_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_return_header ORDER BY voucherno DESC");
				break;


				case "purchase_multiple_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_multiple_return_header ORDER BY voucherno DESC");
				break;

				case "sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE consinement_id=0 ORDER BY voucherno DESC");
				break;

				case "consinement_sale_return":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return_header.*,tbl_consinement.* FROM tbl_sale_return_header LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  WHERE consinement_id !=0 ORDER BY voucherno DESC");
				break;

				case "cash_sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE return_type <>'credit' ORDER BY voucherno DESC");
				break;

				case "credit_sale_return" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE  return_type='credit' ORDER BY voucherno DESC");
				break;

				case "total":
				$data["lists"]=$this->db->query("SELECT total FROM tbl_total")->row();
				break;

				case "bysaleamount":
				$data['lists']=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` GROUP BY customer_name ORDER by total desc");
				break;

				case "byqtyamount":
				//$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE customer !='' AND date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				$data['lists']=$this->db->query("SELECT SUM(quantity)as totalqty,SUM(price)as total,product_name,product_code,date FROM `tbl_sale` GROUP BY product_code ORDER by totalqty desc");
				
				break;

				

				case "stock_alert":
				$data["lists"]=$this->admin_model->check_stock_remind();
				break;

				case "shop_stock_alert":
				$data["lists"]=$this->admin_model->check_shop_stock_remind();
				break;

				

				case "debt_alert":
				$data["lists"]=$this->admin_model->check_debt_alert();
				break;

				case "sale_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_deliver_header ORDER BY voucherno ASC");
				break;


				case "purchase_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_deliver_header ORDER By voucherno DESC ");
				break;

				/*case "unit":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_unit order by product_code");
				break;*/

				case "purchase":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE MONTH(date)=MONTH(Now()) ORDER By date DESC ");
				break;


			case "purchase_multiple":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header ORDER By voucherno DESC ");
				break;


				case "purchase_from_factory":
				$data["types"]=$this->db->query("SELECT DISTINCT type FROM tbl_purchase ORDER BY voucherno DESC");
				break;


				case "unit" :
				

				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_unit",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				


				case "showroom_stock" : 
				if($this->uri->segment(4))
				{
					
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom_stock.*");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
			//	$data["showrooms"]=$this->db->query("SELECT tbl_showroom.* FROM tbl_showroom right join tbl_showroom_stock ON tbl_showroom.id=tbl_showroom_stock.showroom_id group by tbl_showroom_stock.showroom_id order by tbl_showroom.name ASC ");
				

				break;

				case "category" :
				$data["lists"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse1" :
				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;

				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;


			

				case "check_stocks":
				$data["codes"]=$this->db->select("product_code")->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
				$data["clists"]=$this->db->query("SELECT tbl_consinement.name,tbl_consinement.location,tbl_consinement_stock.* FROM tbl_consinement JOIN tbl_consinement_stock ON tbl_consinement_stock.consinement_id=tbl_consinement.id GROUP BY tbl_consinement_stock.consinement_id");
				$data["sublists"]=$this->db->query("SELECT tbl_subwarehouse.name,tbl_subwarehouse.location,tbl_subwarehouse_stock.* FROM tbl_subwarehouse JOIN tbl_subwarehouse_stock ON tbl_subwarehouse_stock.subwarehouse_id=tbl_subwarehouse.id GROUP BY tbl_subwarehouse_stock.subwarehouse_id");
				$data["showlists"]=$this->db->query("SELECT tbl_showroom.name,tbl_showroom.location,tbl_showroom_stock.* FROM tbl_showroom JOIN tbl_showroom_stock ON tbl_showroom_stock.showroom_id=tbl_showroom.id GROUP BY tbl_showroom_stock.showroom_id");

				break;

				case "other_customer" :
				$data["lists"]= $this->db->get_where("tbl_customer",array("type"=>"other"));
				break;



				case "customer_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_customer.customer_name as cname,tbl_customer.address as clocation,tbl_customer_balance_sheet.* FROM tbl_customer_balance_sheet LEFT JOIN tbl_customer ON tbl_customer_balance_sheet.customer_id=tbl_customer.id ORDER BY tbl_customer_balance_sheet.date,tbl_customer_balance_sheet.id DESC");
				break;


				case "supplier_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_supplier.supplier_name as sname,tbl_supplier.address as slocation,tbl_supplier_balance_sheet.* FROM tbl_supplier_balance_sheet LEFT JOIN tbl_supplier ON tbl_supplier_balance_sheet.supplier_id=tbl_supplier.id ORDER BY tbl_supplier_balance_sheet.date,tbl_supplier_balance_sheet.id DESC");
				break;

				default:
				$data["lists"]=$this->db->order_by("id","DESC")->get("tbl_".$table);
				break;
			
			}			

			//$data["main_content"]=$table;
			$this->load->view("admin/".$table,$data);		
		
	}




/**/



	/**/
	function viewdetails_deliver()
	{
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$amount=$this->uri->segment(5);
			
				$this->load->model("cashier_model");
				
			
			switch($debttype)
			{
				case 'pdeliver':
				$data["supplier"]=$this->admin_model->grab_supplier();
				$data["lists"]=$this->db->query("SELECT tbl_purchase_order.*,tbl_purchase_order_header.*,tbl_supplier.total_debt FROM tbl_purchase_order LEFT JOIN tbl_purchase_order_header ON tbl_purchase_order.voucherno=tbl_purchase_order_header.voucherno JOIN tbl_supplier ON tbl_purchase_order_header.supplier_id=tbl_supplier.id WHERE tbl_purchase_order.voucherno='$voucherno' AND tbl_purchase_order.requirequantity !=0");
				break;

				case 'sdeliver':
				$data["staff"]=$this->admin_model->grab_staff();
				$data["customer"]=$this->admin_model->grab_customer();
				$data["lists"]=$this->db->query("SELECT tbl_sale_order.*,tbl_sale_order_header.*,tbl_customer.total_debt FROM tbl_sale_order LEFT JOIN tbl_sale_order_header ON tbl_sale_order.voucherno=tbl_sale_order_header.voucherno JOIN tbl_customer ON tbl_sale_order_header.customer_id=tbl_customer.id WHERE tbl_sale_order.voucherno='$voucherno'  AND tbl_sale_order.requirequantity !=0");
				break;

				
			}
			
			$data["main_content"]=$debttype."_details";
			$this->load->view("admin/template",$data);

	}


	/**/

	function viewdetails_list()
	{
		$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->input->post("voucherno");
			$amount=$this->uri->segment(5);

			switch($debttype)
			{

				case "consinement_sale":
				$this->db->select("tbl_consinement.*,tbl_consinement_sale.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale.consinement_id");
				$this->db->order_by("tbl_consinement_sale.date","DESC");
				$this->db->where("tbl_consinement_sale.voucherno",$voucherno);

				$data["lists"]=$this->db->get("tbl_consinement_sale");
				break;

			}


			switch($debttype)
			{

				case "sale":
				/*$this->db->select("tbl_consinement.*,tbl_sale.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_sale.id");*/
				$this->db->order_by("tbl_sale.date","DESC");
				$this->db->where("tbl_sale.voucherno",$voucherno);

				$data["lists"]=$this->db->get("tbl_sale");
				break;

			}

			$this->load->view("admin/".$debttype."_details_list",$data);

	}


	/**/


		function viewdetails()
		{
			
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$amount=$this->uri->segment(5);

			switch($debttype)
			{

				case 'preturnvoucher':
				$data["lists"]=$this->db->query("SELECT tbl_purchase_return.*, tbl_purchase_return_header.* FROM tbl_purchase_return  LEFT JOIN tbl_purchase_return_header ON tbl_purchase_return.voucherno=tbl_purchase_return_header.voucherno WHERE tbl_purchase_return.voucherno='$voucherno'");
				break;


				case 'sreturnvoucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*, tbl_sale_return_header.* FROM tbl_sale_return  LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno WHERE tbl_sale_return.voucherno='$voucherno'");
				break;


		case "supplier_balance_sheet":
		$data["lists"]=$this->db->query("SELECT tbl_supplier.supplier_name as sname,tbl_supplier.address as slocation,tbl_supplier_balance_sheet.* FROM tbl_supplier_balance_sheet LEFT JOIN tbl_supplier ON tbl_supplier_balance_sheet.supplier_id=tbl_supplier.id  WHERE tbl_supplier_balance_sheet.supplier_id='$voucherno' ORDER BY tbl_supplier_balance_sheet.date,tbl_supplier_balance_sheet.id DESC");

		$data["plists"]=$this->db->query("SELECT tbl_purchase.*,tbl_supplier_balance_sheet.* FROM tbl_purchase LEFT JOIN tbl_supplier_balance_sheet ON tbl_purchase.voucherno=tbl_supplier_balance_sheet.payname WHERE tbl_supplier_balance_sheet.supplier_id='$voucherno' ORDER BY tbl_purchase.date ASC");

		break;

				case 'debt_to_supplier':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE supplier_id='$voucherno' AND balance !=0");
			//	$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'debt_from_customer':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE customer_id='$voucherno'");
			//	$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'porder':
				$data["lists"]=$this->db->query("SELECT tbl_purchase_order.*,tbl_purchase_order_header.netamounttosupplier,tbl_purchase_order_header.advance FROM tbl_purchase_order LEFT JOIN tbl_purchase_order_header ON tbl_purchase_order.voucherno=tbl_purchase_order_header.voucherno WHERE tbl_purchase_order.voucherno='$voucherno'");
				break;

				case 'sorder':
				$data["lists"]=$this->db->query("SELECT tbl_sale_order.*,tbl_sale_order_header.netamount,tbl_sale_order_header.advance FROM tbl_sale_order LEFT JOIN tbl_sale_order_header ON tbl_sale_order.voucherno=tbl_sale_order_header.voucherno WHERE tbl_sale_order.voucherno='$voucherno'");
				break;

				
				case "consinement_sale":
				$this->db->select("tbl_consinement.*,tbl_sale.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_sale.customer","LEFT");
				$this->db->where("tbl_sale.voucherno",$voucherno);
				$this->db->where("tbl_sale.sale_type","consinement");
				$this->db->order_by("tbl_sale.date","DESC");
				$data["lists"]=$this->db->get("tbl_sale");
				break;

				

				case "consinement_transfer":
				$this->db->select("tbl_consinement.*,tbl_consinement_transfer_history.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_transfer_history.consinement_id");
				$this->db->where("tbl_consinement_transfer_history.voucherno",$voucherno);
				$this->db->order_by("tbl_consinement_transfer_history.date","DESC");
				$data["lists"]=$this->db->get("tbl_consinement_transfer_history");
				break;


				case 'other_customer_sale_voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_other_customer_sale_header.* FROM tbl_sale LEFT JOIN tbl_other_customer_sale_header ON tbl_sale.sale_id=tbl_other_customer_sale_header.sale_id WHERE tbl_sale.sale_id='$voucherno' AND sale_type='other'");
				break;

				case 'subwarehouse_sale_voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_subwarehouse_sale_header.* FROM tbl_sale LEFT JOIN tbl_subwarehouse_sale_header ON tbl_sale.sale_id=tbl_subwarehouse_sale_header.sale_id WHERE tbl_sale.sale_id='$voucherno' AND sale_type='subwarehouse'");
				break;

				case 'voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.* FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno' ");
				break;

				case 'pvoucher':
				$data["lists"]=$this->db->query("SELECT tbl_purchase.*,tbl_purchase_header.* FROM tbl_purchase LEFT JOIN tbl_purchase_header ON tbl_purchase.voucherno=tbl_purchase_header.voucherno WHERE tbl_purchase.voucherno='$voucherno'");
				break;

				case 'debt_voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount,tbl_sale_header.nettotal,tbl_sale_header.totaldebt,tbl_sale_header.deliveryfees FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'jackpotchange':
				$data["lists"]=$this->db->query("SELECT tbl_jackpotchange.* FROM tbl_jackpotchange WHERE tbl_jackpotchange.customer='".base64_decode($voucherno)."' AND amount='$amount'");
				break;

				case 'byqtyamount' :
				$data['lists']=$this->db->query("SELECT SUM(quantity)as totalqty,SUM(price)as total,product_name,product_code,date FROM `tbl_sale` GROUP BY product_code ORDER by totalqty desc");
				break;


				case 'voucher_by_customer':
				$data["customers"]=$this->db->get_where("tbl_customer",array("id"=>$voucherno))->row();
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE tbl_sale_header.customer_id='$voucherno' ");
				
				break;

				case 'voucher_by_supplier':
				$data["suppliers"]=$this->db->get_where("tbl_supplier",array("id"=>$voucherno))->row();
				$data["lists"]=$this->db->query("SELECT tbl_supplier.supplier_name as sname,tbl_supplier.address as slocation,tbl_supplier_balance_sheet.* FROM tbl_supplier_balance_sheet LEFT JOIN tbl_supplier ON tbl_supplier_balance_sheet.supplier_id=tbl_supplier.id  WHERE tbl_supplier_balance_sheet.supplier_id='$voucherno' ORDER BY tbl_supplier_balance_sheet.date,tbl_supplier_balance_sheet.id DESC");

				$data["plists"]=$this->db->query("SELECT tbl_purchase.*,tbl_supplier_balance_sheet.* FROM tbl_purchase LEFT JOIN tbl_supplier_balance_sheet ON tbl_purchase.voucherno=tbl_supplier_balance_sheet.payname WHERE tbl_supplier_balance_sheet.supplier_id='$voucherno' ORDER BY tbl_purchase.date ASC");

				break;

				
			}
			
			$this->load->view("admin/".$debttype."_details",$data);
		}


	/**/

		function viewreturns()
		{
			
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);

			if($debttype=="supplier_debt_returns")
			{
				$data["lists"]=$this->db->query("SELECT tbl_supplier_debt_return.* FROM tbl_supplier_debt_return WHERE tbl_supplier_debt_return.supplier_id='$voucherno'  ORDER BY date DESC");
			}
			

			elseif($debttype=="customer_debt_returns")
			{
				$data["lists"]=$this->db->query("SELECT tbl_customer_debt_return.* FROM tbl_customer_debt_return WHERE tbl_customer_debt_return.customer_id='$voucherno'  ORDER BY date DESC");
			}

			$this->load->view("admin/".$debttype,$data);
		}

		






function check_debt_withid()
	{
					 
				$id=$this->input->post("id");
				//print_r($name);

				$type=$this->input->post("type");
				$table="tbl_".$type;
			
				ob_clean();				
			
				$xml = new MY_Xml_writer;
				$xml->setRootName('items');
				$xml->initiate();	

				$query=$this->db->query("SELECT total_debt as totaldebt FROM $table WHERE id='$id'");
				/*echo $this->db->last_query();
				if($query->num_rows()==1)
				{*/
				
				$row=$query->row();		
				$xml->startBranch('data');
				$xml->addNode('totaldebt', $row->totaldebt);				
				$xml->endBranch();		
				
				/*
				}	
				else
				{
				$xml->startBranch('data');
				$xml->addNode('totaldebt', 0);				
				$xml->endBranch();	
				}
				*/
				$xml->getXml(true);		

		
	}

	/**/
	function search_factory_balance_sheet()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		


				$data["lists"]=$this->db->query("SELECT SUM(tbl_factory_outcome.total) as total,tbl_factory_outcome_category.title FROM tbl_factory_outcome 
					LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE 
					  date BETWEEN '$startdate' AND '$enddate' GROUP BY tbl_factory_outcome.outcome_category");

				$data["purchases"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE supplier_id=2 AND  date BETWEEN '$startdate' AND '$enddate' ");
			
			$this->load->view('admin/factory_balance_sheet_list',$data);

	}
/**/


/**/

	function search_saleby_location_code()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$data["start"]=$ostartdate;
		$data["end"]=$oenddate;
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		


				$data["product_codes"]=$this->db->query("SELECT DISTINCT product_code FROM tbl_sale where sale_type='subwarehouse'  AND date BETWEEN '$startdate' AND '$enddate'");

				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND date BETWEEN '$startdate' AND '$enddate'");
			
				$this->load->view('admin/saleby_location_code_list',$data);

	}
/**/


	function search_saleby_location()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$data["start"]=$ostartdate;
		$data["end"]=$oenddate;
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		


				
			$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");
			$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND date BETWEEN '$startdate' AND '$enddate'");

			$this->load->view('admin/saleby_location_list',$data);

	}
/**/






	function search_monthly_incomeoutcome()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		
		
				$data["dateinterval"]=$ostartdate." - ".$oenddate;
				$data["sdate"]=$startdate;
				$data["edate"]=$enddate;

				$data["outcomes"]=$this->db->query("SELECT SUM(tbl_general_outcome.total) as total,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id where date BETWEEN '$startdate' AND '$enddate' group by outcome_category ");
				$data["incomes"]=$this->db->query("SELECT SUM(tbl_general_income.total) as total,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id where date BETWEEN '$startdate' AND '$enddate' group by income_category ");

				$data["purchases"]=$this->db->query("SELECT SUM(tbl_purchase_header.nettotal) as total FROM tbl_purchase_header where date BETWEEN '$startdate' AND '$enddate'");
				
				$data["sale"]=$this->db->query("SELECT SUM(tbl_sale_header.received) as total_received FROM tbl_sale_header WHERE  date BETWEEN '$startdate' AND '$enddate' AND received !=0 ")->row();
				$data["creditsale"]=$this->db->query("SELECT SUM(tbl_sale_header.nettotal-tbl_sale_header.received) as total_debt FROM tbl_sale_header  where MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) AND paytype='credit' ")->row();

			

				
		$data["main_content"]="monthly_cash_book";
		$this->load->view('admin/template',$data);
					

	}


	function search_showroom_stock_history()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		
		
				$data["dateinterval"]=$ostartdate." - ".$oenddate;
				$data["sdate"]=$startdate;
				$data["edate"]=$enddate;

				$data["sdate"]="";
				$data["edate"]="";

			
				$this->db->select("tbl_showroom.*,tbl_showroom_stock_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock_history.showroom_id");
				$this->db->where("date >=",$startdate);
				$this->db->where("date <=",$enddate);
				$this->db->order_by("tbl_showroom_stock_history.product_code","DESC");
				
				$data["lists"]=$this->db->get("tbl_showroom_stock_history");
				

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock_history order by category ASC");
							
				
				$data["main_content"]="showroom_stock_history";
				$this->load->view('admin/template',$data);
							

	}

	function showreport()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		
		
				$data["dateinterval"]=$ostartdate." - ".$oenddate;
				$data["sdate"]=$startdate;
				$data["edate"]=$enddate;

				$data["sdate"]="";
				$data["edate"]="";

		
		/*case "bysaleamount":
		$data['lists']=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` GROUP BY customer_name ORDER by total desc");
		break;

		case "byqtyamount":
		//$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE customer !='' AND date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
		$data['lists']=$this->db->query("SELECT SUM(quantity)as totalqty,SUM(price)as total,product_name,product_code,date FROM `tbl_sale` GROUP BY product_code ORDER by totalqty desc");
		
		break;*/

		$data["main_content"]="showroom_stock_history";
		$this->load->view('admin/template',$data);

	}


	
	
	

/*Income outcome form*/

	function income_outcome()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));

		
				$data["dateinterval"]=$ostartdate." to ".$oenddate;
				$data["outcomes"]=$this->db->query("SELECT * FROM tbl_general_outcome WHERE date BETWEEN '$startdate' AND '$enddate'");
				$data["factory_outcomes"]=$this->db->query("SELECT * FROM tbl_factory_outcome WHERE date BETWEEN '$startdate' AND '$enddate'");

				$data["opening_balance"]=$this->db->query("SELECT * FROM tbl_opening_balance_sheet WHERE  date BETWEEN '$startdate' AND '$enddate' ORDER BY date ASC LIMIT 1");
				$data["closing_balance"]=$this->db->query("SELECT * FROM tbl_opening_balance_sheet WHERE  date BETWEEN '$startdate' AND '$enddate' ORDER BY date DESC LIMIT 1");
				$data["bank_outcome"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where  outcome !=0 AND  date BETWEEN '$startdate' AND '$enddate'");
				$data["bank_income"]=$this->db->query("SELECT tbl_bank_balance_sheet.*,tbl_bank_account.bank_name,tbl_bank_account.account_name FROM tbl_bank_balance_sheet LEFT JOIN tbl_bank_account ON tbl_bank_balance_sheet.bank_account_id=tbl_bank_account.id  where income !=0 AND  date BETWEEN '$startdate' AND '$enddate'");
				$data["other_receivables_income"]=$this->db->query("SELECT * FROM tbl_other_receivable_balance_sheet WHERE  date BETWEEN '$startdate' AND '$enddate' AND returnamount>0");
				$data["other_receivables_outcome"]=$this->db->query("SELECT * FROM tbl_other_receivable_balance_sheet WHERE  date BETWEEN '$startdate' AND '$enddate' AND voucher_amount>0");

				$data["sale"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' AND received !=0");
				$data["subwarehouse_sale"]=$this->db->query("SELECT * FROM tbl_subwarehouse_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' AND received !=0");
				$data["sale_return"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE return_type='cash' AND date BETWEEN '$startdate' AND '$enddate'");
				$data["customer_debt_returns"]=$this->db->query("SELECT * FROM tbl_customer_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND returnamount>0");
				$data["staff_debt_return"]=$this->db->query("SELECT * FROM tbl_staff_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND returnamount>0");
				$data["family_debt_return"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND returnamount!=0 AND paymethod !='showroom'");
				$data["showroom_debt_return"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND returnamount!=0 AND paymethod='showroom'");

				$data["staff_debt_loan"]=$this->db->query("SELECT * FROM tbl_staff_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND loanamount>0");
				$data["family_debt_loan"]=$this->db->query("SELECT * FROM tbl_family_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND loanamount>0");
				$data["consine_debt_return"]=$this->db->query("SELECT * FROM tbl_consinement_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND returnamount>0");
				
				$data["generalincome"]=$this->db->query("SELECT * FROM tbl_general_income WHERE date BETWEEN '$startdate' AND '$enddate'");
			
				$data["supplier_debt_return"]=$this->db->query("SELECT * FROM tbl_supplier_balance_sheet WHERE date BETWEEN '$startdate' AND '$enddate' AND returnamount>0");

				

				
		
		$this->load->view('admin/cash_book_list',$data);

	}


/**/

	function search_sale_profit()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));

		

		
			
			$data["dateinterval"]=date("Y-F-d",strtotime($startdate))." မွ ".date("Y-F-d",strtotime($enddate))." ထိ ";
			//$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_warehouse1.price as purchase_price FROM tbl_sale LEFT JOIN tbl_warehouse1 ON tbl_sale.product_code=tbl_warehouse1.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type !='consinement' GROUP BY tbl_sale.product_code,tbl_warehouse1.product_code, tbl_sale.date ORDER BY tbl_sale.date");

			$data['lists']=$this->db->query("SELECT tbl_sale.product_code, SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name FROM tbl_sale  WHERE tbl_sale.date BETWEEN '$startdate' AND '$enddate'  AND tbl_sale.sale_type !='consinement' GROUP BY tbl_sale.product_code,tbl_sale.date ORDER BY tbl_sale.date");
		
	
		$this->load->view('admin/profit_list',$data);
	}



	function search_consinement_sale_profit()
	{
				
			
				$data["dateinterval"]=date("Y-m-d");	
			
	
		$this->load->view('admin/profit_list',$data);
	}


/**/



	function search_profit()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));

		
				if($this->uri->segment(4))
				{
					$sale_type=$this->uri->segment(4);

					if($sale_type=="consinement")
					{

				$data["dateinterval"]=date("Y-m-d");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, 
					sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name
					 FROM tbl_sale WHERE  tbl_sale.sale_type ='consinement' AND
					  tbl_sale.date BETWEEN '$startdate' AND '$enddate' GROUP BY 
					  tbl_sale.product_code, tbl_sale.date ORDER BY tbl_sale.date");
					}

					else
					{
							$data["dateinterval"]=date("Y-m-d");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, 
					sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name
					 FROM tbl_sale WHERE  tbl_sale.sale_type !='consinement' AND
					  tbl_sale.date BETWEEN '$startdate' AND '$enddate' GROUP BY 
					  tbl_sale.product_code, tbl_sale.date ORDER BY tbl_sale.date");
					}
			}

			else
			{
				$data["dateinterval"]=date("Y-m-d");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, 
					sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name
					 FROM tbl_sale WHERE
					  tbl_sale.date BETWEEN '$startdate' AND '$enddate' GROUP BY 
					  tbl_sale.product_code, tbl_sale.date ORDER BY tbl_sale.date");
			}
	
			
		$this->load->view('admin/profit_list',$data);
	}






	/*Left Over list after deleted*/

	function delete_left_data_list($table)
	{
		
		$data = $this->data;
		
			$table=$this->uri->segment(3);
			
			
			$data["unit"]=$this->admin_model->grab_unit();
			switch($table)
			{

				case'customer_returnlist':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer_debt_return WHERE date=CURDATE()");
				break;
				
				

				case "foc":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type !='consinement'");
				break;

				/*case "foc":
				$data["lists"]=$this->db->query("SELECT tbl_sale.*, tbl_unit.capital FROM tbl_sale
					LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code  
									WHERE sale_type !='consinement' AND  foc !=0 ORDER BY tbl_sale.voucherno DESC");
				break;*/

				case "consinement_foc":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE tbl_sale.foc!=0 AND tbl_sale.sale_type ='consinement'");
				break;

				case "discount":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND sale_type !='consinement'");
				break;

				case "consinement_discount":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale WHERE discount!=0 AND sale_type ='consinement'");
				break;


				

			
				case "debt_to_supplier" :
				$data["lists"]=$this->db->order_by("supplier_name,last_date","DESC")->get_where("tbl_supplier",array('total_debt !='=>0));
				break;

				case "debt_from_customer":			
				$data["lists"]=$this->db->order_by("customer_name,last_date","DESC")->get_where("tbl_customer",array('total_debt !='=>0));
				break;

				case "debt_from_staff":			
				$data["lists"]=$this->db->order_by("staff,last_date","DESC")->get_where("tbl_staff",array('total_debt !='=>0));
				break;

				case "debt_from_family":			
				$data["lists"]=$this->db->order_by("family,last_date","DESC")->get_where("tbl_family",array('total_debt !='=>0));
				break;

				
				case "saleby_location" :
				$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");
				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				break;
				

				case "saleby_location_code" :

				$data["product_codes"]=$this->db->query("SELECT DISTINCT product_code FROM tbl_sale where sale_type='subwarehouse' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW()) ");

				$data["locations"]=$this->db->query("SELECT DISTINCT location FROM tbl_subwarehouse_sale_header WHERE location !='' AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");

				break;

			



				case "factory_balance_sheet" :
							
				$data["lists"]=$this->db->query("SELECT SUM(tbl_factory_outcome.total) as total,tbl_factory_outcome_category.title,tbl_factory_outcome.date FROM tbl_factory_outcome
				 LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id WHERE MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				$data["purchases"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE supplier_id=2 AND MONTH(`date`)=MONTH(NOW()) and YEAR(`date`)=YEAR(NOW())");
				break;
				

				$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			//	$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
			////	$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				break;

				case "other_customer" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer WHERE type='other'");
				break;

				case 'sale_profit' :
				$data["dateinterval"]=date("Y-m-d");	
				//$data["lists"]=$this->db->query("SELECT DISTINCT(tbl_sale.product_code), SUM(tbal_sale.total) as total");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type !='consinement' GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'profit' :
				$data["dateinterval"]=date("Y-m-d");	
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				
				break;


				case 'consinement_sale_profit' :
				$data["dateinterval"]=date("Y-m-d");	
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.unit,tbl_sale.product_name,tbl_unit.capital as purchase_price FROM tbl_sale LEFT JOIN tbl_unit ON tbl_sale.product_code=tbl_unit.product_code WHERE tbl_sale.date=CURDATE() AND tbl_sale.sale_type ='consinement' GROUP BY tbl_sale.product_code,tbl_unit.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				
				break;


				case "consinement_center_sale_info":
				$this->db->select("tbl_sale.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalsale,SUM(tbl_sale.total) as netsale,tbl_consinement.*") ;
				$this->db->join("tbl_consinement","tbl_sale.customer=tbl_consinement.id");
				$this->db->group_by("tbl_sale.customer");
				$this->db->where("tbl_sale.sale_type","consinement");
				$data["lists"]=$this->db->get("tbl_sale");
				break;


				case "saleby_itemtype":
				$data["itemtypes"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit");

			
				break;



				case "general_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id");
				break;

				case "factory_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_factory_outcome.*,tbl_factory_outcome_category.title FROM tbl_factory_outcome LEFT JOIN tbl_factory_outcome_category ON tbl_factory_outcome.outcome_category=tbl_factory_outcome_category.id");
				break;

				case "general_income":
				$data["lists"]=$this->db->query("SELECT tbl_general_income.*,tbl_income_category.title FROM tbl_general_income LEFT JOIN tbl_income_category ON tbl_general_income.income_category=tbl_income_category.id");
				break;


				case "sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;


				

				case "sale_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "purchase_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "sale_return_code":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*,tbl_sale_return.total as sprice, tbl_showroom_stock.price as p_price,tbl_sale_return_header.*,tbl_showroom_stock.price FROM tbl_sale_return
				 LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno 
					LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  
					LEFT JOIN tbl_showroom_stock ON tbl_sale_return.product_code=tbl_showroom_stock.product_code  
									WHERE sale_type !='consinement' ORDER BY tbl_sale_return_header.voucherno DESC");
				break;

				case "consinement_sale_return_code":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*,tbl_sale_return.total as sprice,tbl_consinement.*,tbl_consinement_stock.price as p_price,tbl_sale_return_header.*,tbl_consinement_stock.price FROM tbl_sale_return
				 LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno 
					LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  
					LEFT JOIN tbl_consinement_stock ON tbl_sale_return.product_code=tbl_consinement_stock.product_code  
					WHERE tbl_sale_return.sale_type ='consinement' ORDER BY tbl_sale_return_header.voucherno DESC");
				break;

				case "purchase_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_return_header ORDER BY voucherno DESC");
				break;


				case "purchase_multiple_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_multiple_return_header ORDER BY voucherno DESC");
				break;

				case "sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE consinement_id=0 ORDER BY voucherno DESC");
				break;

				case "consinement_sale_return":
				$data["lists"]=$this->db->query("SELECT tbl_sale_return_header.*,tbl_consinement.* FROM tbl_sale_return_header LEFT JOIN tbl_consinement ON tbl_sale_return_header.consinement_id=tbl_consinement.id  WHERE consinement_id !=0 ORDER BY voucherno DESC");
				break;

				case "cash_sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE return_type <>'credit' ORDER BY voucherno DESC");
				break;

				case "credit_sale_return" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header WHERE  return_type='credit' ORDER BY voucherno DESC");
				break;

				case "total":
				$data["lists"]=$this->db->query("SELECT total FROM tbl_total")->row();
				break;

				case "bysaleamount":
				$data['lists']=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` GROUP BY customer_name ORDER by total desc");
				break;

				case "byqtyamount":
				//$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE customer !='' AND date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				$data['lists']=$this->db->query("SELECT SUM(quantity)as totalqty,SUM(price)as total,product_name,product_code,date FROM `tbl_sale` GROUP BY product_code ORDER by totalqty desc");
				
				break;

				

				case "stock_alert":
				$data["lists"]=$this->admin_model->check_stock_remind();
				break;

				case "shop_stock_alert":
				$data["lists"]=$this->admin_model->check_shop_stock_remind();
				break;

				

				case "debt_alert":
				$data["lists"]=$this->admin_model->check_debt_alert();
				break;

				case "sale_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_deliver_header ORDER BY voucherno ASC");
				break;


				case "purchase_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_deliver_header ORDER By voucherno DESC ");
				break;

			

				case "purchase":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header ORDER By voucherno DESC ");
				break;


			case "purchase_multiple":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header ORDER By voucherno DESC ");
				break;


				case "purchase_from_factory":
				$data["types"]=$this->db->query("SELECT DISTINCT type FROM tbl_purchase ORDER BY voucherno DESC");
				break;


				case "unit" :
				

				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_unit",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				

			case "consinement_stock_history" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock_history.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_history.consinement_id");

					$this->db->order_by("tbl_consinement_stock_history.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock_history.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock_history",array('tbl_consinement_stock_history.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock_history.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_history.consinement_id");

					$this->db->order_by("tbl_consinement_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock_history ON tbl_consinement.id=tbl_consinement_stock_history.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				break;




				case "subwarehouse_stock_history" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock_history.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock_history.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock_history.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock_history.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock_history",array('tbl_subwarehouse_stock_history.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock_history.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock_history.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock_history ON tbl_subwarehouse.id=tbl_subwarehouse_stock_history.subwarehouse_id group by tbl_subwarehouse_stock_history.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				break;


				case "showroom_stock_history" : 
				$data["sdate"]="";
				$data["edate"]="";
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock_history.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock_history.showroom_id");
					$this->db->order_by("tbl_showroom_stock_history.showroom_id","DESC");
					$this->db->order_by("tbl_showroom_stock_history.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_showroom_stock_history",array('tbl_showroom_stock_history.showroom_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock_history.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock_history.showroom_id");
					$this->db->order_by("tbl_showroom_stock_history.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock_history order by category ASC");
				$data["showrooms"]=$this->db->query("SELECT tbl_showroom.* FROM tbl_showroom right join tbl_showroom_stock_history ON tbl_showroom.id=tbl_showroom_stock_history.showroom_id group by tbl_showroom_stock_history.showroom_id order by tbl_showroom.name ASC ");
				

				break;


				case "warehouse1_stock_history" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_warehouse1_stock_history",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1_stock_history order by category ASC");
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;





				case "warehouse1" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_warehouse1",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "showroom_stock" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
			

				break;



				case "consinement_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");

					$this->db->order_by("tbl_consinement_stock.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock",array('tbl_consinement_stock.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");

					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock ON tbl_consinement.id=tbl_consinement_stock.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				$data["subwarehouse_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");
				
				break;

				case "consinement_stock_header" : 
				$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_consinement_stock_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock_header.consinement_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_consinement_stock_header.subwarehouse_id");

				$this->db->order_by("tbl_consinement_stock_header.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_consinement_stock_header");
				break;




				case "subwarehouse_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock",array('tbl_subwarehouse_stock.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock ON tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id group by tbl_subwarehouse_stock.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				$data["showroom_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");
				$data["subwarehouse_grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "consinement_transfer_history" : 
				$this->db->select("tbl_consinement.name as cname,tbl_consinement.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_consinement_transfer_history.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_transfer_history.consinement_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_consinement_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_consinement_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_consinement_transfer_history");
				break;


				case "showroom_transfer_history" : 
				$this->db->select("tbl_showroom.name as cname,tbl_showroom.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_showroom_transfer_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_transfer_history.showroom_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_showroom_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_showroom_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_showroom_transfer_history");
				break;


				case "showroom_to_subwarehouse_transfer_history" : 
				$this->db->select("tbl_showroom.name as cname,tbl_showroom.location as clocation,tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_showroom_to_subwarehouse_transfer_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_to_subwarehouse_transfer_history.showroom_id");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_showroom_to_subwarehouse_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_showroom_to_subwarehouse_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_showroom_to_subwarehouse_transfer_history");
				break;



				case "subwarehouse_transfer_history" : 
				$this->db->select("tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_subwarehouse_transfer_history.*");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_subwarehouse_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_subwarehouse_transfer_history");
				break;


				case "warehouse1_transfer_history" : 
				$this->db->select("tbl_subwarehouse.name as sname,tbl_subwarehouse.location as slocation,tbl_warehouse1_transfer_history.*");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_warehouse1_transfer_history.subwarehouse_id");

				$this->db->order_by("tbl_warehouse1_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_warehouse1_transfer_history");
				break;



				case "showroom_to_warehouse1_transfer_history" : 
				$this->db->select("tbl_showroom.name as sname,tbl_showroom.location as slocation,tbl_showroom_to_warehouse1_transfer_history.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_to_warehouse1_transfer_history.showroom_id");

				$this->db->order_by("tbl_showroom_to_warehouse1_transfer_history.id","DESC");	

				
				$data["lists"]=$this->db->get("tbl_showroom_to_warehouse1_transfer_history");
				break;


				case "subwarehouse_to_subwarehouse_transfer_history" : 
				$data["lists"]=$this->db->query("select t1.name as s1name, t2.name as s2name, t.* from tbl_subwarehouse_to_subwarehouse_transfer_history t inner join tbl_subwarehouse t1 on t1.id = t.subwarehouse_id
								inner join tbl_subwarehouse t2 on t2.id = t.subwarehouse2_id;");
				break;


				case"damage_subwarehouse" :
				$this->db->select("tbl_subwarehouse.*,tbl_damage_subwarehouse.*");
				$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_damage_subwarehouse.subwarehouse_id");
				$this->db->order_by("tbl_damage_subwarehouse.product_code","DESC");
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;

				case"damage_showroom" :
				$this->db->select("tbl_showroom.*,tbl_damage_showroom.*");
				$this->db->join("tbl_showroom","tbl_showroom.id=tbl_damage_showroom.showroom_id");
				$this->db->order_by("tbl_damage_showroom.product_code","DESC");
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;

				

				case"damage_warehouse1" :
				
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;




				case"damage_consinement" :
				$this->db->select("tbl_consinement.*,tbl_damage_consinement.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_damage_consinement.consinement_id");
				$this->db->order_by("tbl_damage_consinement.product_code","DESC");
				$data["lists"]=$this->db->get("tbl_".$table);
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "category" :
				$data["lists"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse1" :
				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;

				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;


				case "consinement_sale":
				$this->db->select("tbl_consinement.*,SUM(tbl_sale.quantity*tbl_sale.price) as totalc,tbl_sale.discount,tbl_sale.discount2,tbl_consinement_sale_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale_header.consinement_id");
				$this->db->join("tbl_sale","tbl_consinement_sale_header.voucherno=tbl_sale.voucherno");
				$this->db->group_by("tbl_sale.voucherno");

				$this->db->order_by("tbl_consinement_sale_header.date","DESC");
				$data["lists"]=$this->db->get("tbl_consinement_sale_header");
				break;

				case "check_stocks":
				$data["codes"]=$this->db->select("product_code")->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
				$data["clists"]=$this->db->query("SELECT tbl_consinement.name,tbl_consinement.location,tbl_consinement_stock.* FROM tbl_consinement JOIN tbl_consinement_stock ON tbl_consinement_stock.consinement_id=tbl_consinement.id GROUP BY tbl_consinement_stock.consinement_id");
				$data["sublists"]=$this->db->query("SELECT tbl_subwarehouse.name,tbl_subwarehouse.location,tbl_subwarehouse_stock.* FROM tbl_subwarehouse JOIN tbl_subwarehouse_stock ON tbl_subwarehouse_stock.subwarehouse_id=tbl_subwarehouse.id GROUP BY tbl_subwarehouse_stock.subwarehouse_id");
				$data["showlists"]=$this->db->query("SELECT tbl_showroom.name,tbl_showroom.location,tbl_showroom_stock.* FROM tbl_showroom JOIN tbl_showroom_stock ON tbl_showroom_stock.showroom_id=tbl_showroom.id GROUP BY tbl_showroom_stock.showroom_id");

				break;

				case "other_customer" :
				$data["lists"]= $this->db->get_where("tbl_customer",array("type"=>"other"));
				break;



				case "consinement_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_consinement.name as cname,tbl_consinement.location as cl,tbl_consinement_balance_sheet.* FROM tbl_consinement_balance_sheet LEFT JOIN tbl_consinement ON tbl_consinement_balance_sheet.consinement_id=tbl_consinement.id ORDER BY tbl_consinement_balance_sheet.date,tbl_consinement_balance_sheet.id DESC");
				break;


				case "customer_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_customer.customer_name as cname,tbl_customer.address as clocation,tbl_customer_balance_sheet.* FROM tbl_customer_balance_sheet LEFT JOIN tbl_customer ON tbl_customer_balance_sheet.customer_id=tbl_customer.id ORDER BY tbl_customer_balance_sheet.date,tbl_customer_balance_sheet.id DESC");
				break;

				case "supplier_balance_sheet":
				$data["lists"]=$this->db->query("SELECT tbl_supplier.supplier_name as sname,tbl_supplier.address as address,tbl_supplier_balance_sheet.* FROM tbl_supplier_balance_sheet LEFT JOIN tbl_supplier ON tbl_supplier_balance_sheet.supplier_id=tbl_supplier.id ORDER BY tbl_supplier_balance_sheet.date,tbl_supplier_balance_sheet.id DESC");
				break;

				default:
				$data["lists"]=$this->db->order_by("id","DESC")->get("tbl_".$table);
				break;
			
			}			

			//$data["main_content"]=$table;
			$this->load->view("admin/".$table."_list",$data);		
		
	}





	




	/*Edit form*/

	function edit_form()
	{

		if(get_cookie("admin_cookie"))
		{
		
		 $data = $this->data;
		$data["errmessage"]="";
		$form=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		//$data["category"]=$this->admin_model->grab_category();

		switch ($form) {
				case 'general_income':
				$data["income_category"]=$this->admin_model->grab_income_category();
				break;
				case 'general_outcome':
				$data["outcome_category"]=$this->admin_model->grab_outcome_category();
				break;
				case 'factory_outcome':
				$data["factory_outcome_category"]=$this->admin_model->grab_factory_outcome_category();
				break;
				case 'family_balance_sheet':
				$data["family"]=$this->admin_model->grab_family();
				break;

				case 'bank_balance_sheet':
				$data["bank_account"]=$this->admin_model->grab_bank_account();
				break;


				case 'consinement_balance_sheet':
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");
				break;

				case 'supplier_balance_sheet':
				$data["supplier"]=$this->admin_model->grab_supplier();
				break;
				
				case 'customer_balance_sheet':
				$data["customer"]=$this->admin_model->grab_customer();
				break;

				case 'staff_balance_sheet':
				$data["staff"]=$this->admin_model->grab_staff();
				break;

				case 'consinement_sale' :
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");
				break;

			 	case 'consinement_stock' :
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");
				break;

				case 'consinement_stock_header':
				$data["subwarehouses"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");
				break;

				case "sale":
				// /$data["staff"]=$this->admin_model->grab_staff();
				$data["customer"]=$this->admin_model->grab_customer_id();

				break;

				case "subwarehouse_sale":
				$data["staff"]=$this->admin_model->grab_staff();
				$data["customer"]=$this->admin_model->grab_customer_id();
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;

				case "other_customer_sale":
				$data["staff"]=$this->admin_model->grab_staff();

				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");
				$data["customer"]=$this->admin_model->grab_other_customer_id();

				break;

				case "staff_sale":
				$data["staff"]=$this->admin_model->grab_staff_id();

				break;
			

				case "family_sale":
				$data["family"]=$this->admin_model->grab_family_id();

				break;
			
				default:
				$data["unit"]=$this->admin_model->grab_unit();
				$data["supplier"]=$this->admin_model->grab_supplier_id();
				$data["customer"]=$this->admin_model->grab_customer();

				break;
		}



		//$data["main_content"]="edit_".$form."_form";
		
		$data["row"]=$this->admin_model->get_data($id,$form);
		$form="edit_".$form."_form";
		$this->load->view("admin/".$form,$data);	
		//$this->load->view("admin/template",$data);

	}
	else
	{
		redirect("site");
	}
	}//



	





	
// Stock Form Data Insert finish here

/*Create Debt From Customer*/


	function create_debt_from_customer()
	{
		$today=date("Y-m-d");
		
			
			$customer=explode("#", $this->input->post('customer_name'));
			if($this->input->post("require") !="" || $this->input->post("require") !=0)
			{
				$total=$this->input->post("require")*-1;
			}
			if($this->input->post("exceed") !="" || $this->input->post("exceed") !=0 )
			{
				$total=$this->input->post("exceed");
			}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));
		
			$query=$this->db->query("UPDATE tbl_customer set total_debt=total_debt+'$total', last_date='$date' WHERE id='$customer[1]'");
	
							
			if($query)
			{

				$status=1;
				
			}

			else
			{
				
				$status=0;							

			}

			echo $status;


		
		
	}//


/*Create Debt to Supplier*/




	function create_debt_to_supplier()
	{
		$today=date("Y-m-d");
		
			
			$supplier=explode("#", $this->input->post('supplier_name'));
			if($this->input->post("require") !="" || $this->input->post("require") !=0)
			{
				$total=$this->input->post("require")*-1;
			}
			if($this->input->post("exceed") !="" || $this->input->post("exceed") !=0 )
			{
				$total=$this->input->post("exceed");
			}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));
		
			$query=$this->db->query("UPDATE tbl_supplier set total_debt=total_debt+'$total', last_date='$date' WHERE id='$supplier[1]'");
	
							
			if($query)
			{

				$status=1;
				
			}

			else
			{
				
				$status=0;							

			}

			echo $status;


		
		
	}


	/**/


	function backup_data()
	{
		
$table=$this->uri->segment(3);
$xls_filename = $table.'_'.date('Y-m-d').'.xls'; 

		
header("Content-Type: application/doc;charset=utf-8");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");

 
// Start of printing column names as names of MySQL fields
$result = mysql_query("Select * from tbl_$table");
 
$sep = "\t"; // tabbed character
 
// Start of printing column names as names of MySQL fields
for ($i = 0; $i<mysql_num_fields($result); $i++) {
  echo strtoupper(mysql_field_name($result, $i)) . "\t";
}
print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = mysql_fetch_row($result))
{
  $schema_insert = "";
  for($j=0; $j<mysql_num_fields($result); $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
		
		}




	
	}

}



