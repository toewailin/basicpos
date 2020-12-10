<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Admin_sale extends CI_Controller{


	function create_sale() 
	{
	
		
			$date=date("Y-m-d",strtotime($this->input->post("date")));
			$this->load->model("cashier_model");
			$check=$this->cashier_model->validate_sale();
		//	$check=true;
			if($check==true)
			{
			$count=count($this->input->post('product_name'));
			$product_name=$this->input->post('product_name');
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$type=$this->input->post('type');	

			$quantity=$this->input->post('quantity');
			$category=$this->input->post('category');
			$type=$this->input->post('type');

			$alltotal=$this->input->post('alltotal');
			$note=nl2br($this->input->post("note"));

			$unit=$this->input->post("unit");
			$total=$this->input->post('total');
			$discount=$this->input->post('discount');
		
			$amount=0;
			$totqty=0;

			$totalamount=$this->input->post('totalamount');
			$totaldebt=$this->input->post('totaldebt');
			$staff=$this->input->post("staff");
			$nettotal=$this->input->post('nettotal');
			$received=$this->input->post('received');
			$jackpot=$this->input->post('jackpot');				
			$deliveryfees=$this->input->post('deliveryfees');		
			$exceedamount=$this->input->post('exceedamount');
		
			 $pcname=get_cookie("admin_cookie");		
			
			
			if($this->input->post("customer")=="")
			{
				
				$customer=" #0";
			}
			else
			{
				$customer=$this->input->post('customer');
			
			}
			
			if ($this->input->post('new_customer')) {
				$nc = $this->input->post('new_customer');
				$ph = $this->input->post('phone');
				$this->db->query("INSERT INTO tbl_customer (customer_name,phone,total_debt) VALUES ('$nc','$ph',0)");
				$customer=$this->input->post('new_customer');
			}

			$customer=$customer;
			$authority=$pcname;//$this->session->userdata('DisplayName');
			$debtstring="";
			$paytype=$this->input->post("paytype");
			if($paytype=="cashdown")
			{
				$received=$nettotal;
				$exceedamount=0;
			}
			else
			{
				$received=$this->input->post('received');
				$exceedamount=$this->input->post('exceedamount');
			}
			
			$discounttotal=0;


			$saledata=array(
						"voucherno"=>"",
						"customer_id"=>$customer[1],
						"customer_name"=>$customer,
						"totalamount"=>$totalamount,						
						"totaldebt"=>$totaldebt,						
						"nettotal"=>$nettotal,
						"received"=>$received,	
						"jackpot"=>$jackpot,
						"deliveryfees"=>$deliveryfees,
						"exceedamount"=>$exceedamount,
						'authority'=>$authority,						
						'staff'=>$staff,
						'date'=>$date,
						'paytype'=>$paytype,
						'note'=>$note
					
						);
						
					$query=$this->db->insert("tbl_sale_header",$saledata);

				
				$voucherno=$this->db->insert_id();

				 	for($i=0;$i<$count;$i++)
						{

							$amount+=$total[$i];
							$totqty+=$quantity[$i];
							
						
						
							$data=array(
						
							'product_code'=>$product_code[$i],
							'product_name'=>$product_name[$i],
							'category'=>$category[$i],
							'type'=>$type[$i],
							'price'=>$price[$i],
							'quantity'=>$quantity[$i],							
							'total'=>$total[$i],						
							'voucherno'=>$voucherno,
							'customer'=>$customer[0],
							'customer_id'=>$customer[1],
							'date'=>$date

							);
							
							$query=$this->db->insert('tbl_sale',$data);
							
						
						if($query)
							{

					
								/*7-5-2-17 update */
								
								$updquery=$this->db->query("UPDATE tbl_showroom_stock SET quantity=quantity-'$quantity[$i]' WHERE product_code='$product_code[$i]'");// 

								$status=1;
							}

							else 
							{
								$status=0;
							}

						}

						if($status==1)
						{

						


					
				if($paytype=="credit")
					{
					
					$data=array(							 	
					'customer'=>$customer[0],
					'customer_id'=>$customer[1],
					'total_debt'=>$totaldebt,
					'voucher_amount'=>$nettotal,
					'returnamount'=>$received,
					'balance'=>$exceedamount,
					'paymethod'=>"Voucher",
					'payname'=>str_pad($voucherno,10,0,STR_PAD_LEFT),		
					'note'=>$note,						
					'date'=>$date
										
					);

					$this->db->insert("tbl_customer_balance_sheet",$data);

					$this->db->query("UPDATE tbl_customer SET total_debt='$exceedamount', last_date='$date' WHERE id='$customer[1]'");



					}


					
				
				}

						
			}

			else
			{
				
					$status=2;
			}

	
	echo $status;		
							

		
	}//




}
 ?>