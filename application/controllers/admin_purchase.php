<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_purchase extends CI_Controller {



	function create_purchase()
	{
		

			$check=true;
			
			if($check==true)
			{

			

			//$query=mysql_query("UPDATE $old_table SET quantity=quantity-'$old_quantity' WHERE product_code='$old_product_code'")

			$count=count($this->input->post('product_name'));
			$product_name=$this->input->post('product_name');
			$product_code=$this->input->post('product_code');
			$type=$this->input->post("type");		
			$price=$this->input->post('price');	
			$quantity=$this->input->post('quantity');
			$unit=$this->input->post('unit');
			$total=$this->input->post('total');
			$nettotal=$this->input->post('nettotal');		
			$totaldebt=$this->input->post('totaldebt');		
			$smallitemcount=$this->input->post('item_count_hidden');
			$transportationcharges=$this->input->post('transportationchargess');
			$totaltransferrate=$this->input->post('totaltransferrate');
			$totaldiscount=$this->input->post("totaldiscount");
			$category=$this->input->post('category');		
			$voucherno=$this->input->post('voucherno');
			$supplier=explode("#",$this->input->post('supplier'));	
			$received=$this->input->post("received");
			$balance=$this->input->post("balance");
			//$warehouse=$this->input->post("warehouse");
			$table="tbl_showroom_stock";
			$id=1;


			$amount=0;
			$totalqty=0;
			// $authority=$this->input->post('authority');
			// $totalamount=$this->input->post('totalamount');
			$exceedamount=$this->input->post('exceedamount');
			$date=date("Y-m-d",strtotime($this->input->post("date")));

			$voucherno=$this->input->post('voucherno');
			
			if(!$this->input->post('supplier'))
			{
				$supplier="";
			}
			else
			{
			$supplier=explode("#",$this->input->post('supplier'));		
			}
			
					
					for($i=0;$i<$count;$i++)
					{

					
						
						if($product_code[$i] !="" && $product_name[$i] !="")

						{
						

						$totalqty+=$quantity[$i];

	$check_stock=$this->admin_model->check_shop_code("tbl_showroom_stock","showroom_id",$id,$product_code[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
							$updqty=$quantity[$i]+$row->quantity;							
							
								$data=array(
									
									'quantity'=>$updqty,
										'price'=>$price[$i],
										'category'=>$category[$i],

										'date'=>$date
									
										);

							$this->db->where('product_code',$product_code[$i]);
							$query=$this->db->update($table,$data);


							
						}

						else
						{
						
					
						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>"pcs",
								'quantity'=>$quantity[$i],
								'type'=>$type[$i],

								'category'=>$category[$i],
								'showroom_id'=>$id,
						
								'price'=>$price[$i],
								'date'=>$date		
																	
								);

						$query=$this->db->insert($table,$data);
						
										
							}
							
							
						}

						
						$data=array(
									
									'product_name'=>$product_name[$i],									
									'product_code'=>$product_code[$i],
									'price'=>$price[$i],
									'type'=>$type[$i],
									'category'=>$category[$i],
									'quantity'=>$quantity[$i],
								//	'unit'=>$unit[$i],
									'total'=>$total[$i],									
									'voucherno'=>$voucherno,
									'date'=>$date
									
									);						

						$query=$this->db->insert('tbl_purchase',$data);
					
					}

					
						if($query)
						{

						
							$data=array(

									'voucherno'=>$voucherno,									
									'supplier_id'=>$supplier[1],
									'supplier'=>$supplier[0],
									'totalqty'=>$totalqty,
									'total_debt'=>$totaldebt,
									'nettotal'=>$nettotal,	
									'received'=>$received,
									'balance'=>$balance,															
									'date'=>$date

										);

							$query=$this->db->insert("tbl_purchase_header",$data);
							if($query)
							{


								
								$vdata=array("voucherno"=>"");
							$this->db->insert("tbl_p",$vdata);


						
							if($this->input->post("supplier"))
							{
								$data=array(							 	
								'supplier'=>$supplier[0],
								'supplier_id'=>$supplier[1],								
								'total_debt'=>$totaldebt,
								'voucher_amount'=>$nettotal,
								'paidamount'=>$received,
								'returnamount'=>0,
								'balance'=>$balance,
								'paymethod'=>"Voucher",
								'payname'=>$voucherno,		
								'date'=>$date
													
								);

							$this->db->insert("tbl_supplier_balance_sheet",$data);

							// $query=$this->db->query("UPDATE tbl_supplier SET total_debt=total_debt-'$nettotal' WHERE id='$supplier[1]'");
							$query=$this->db->query("UPDATE tbl_supplier SET total_debt='$balance' WHERE id='$supplier[1]'");
							}


								$status=1;
							}
							else
							{
								$status=0;
							}



							
						}

							
			}

			else
			{
				$status=2;
				
			}


		echo $status;
		
	}//Purchasing Form Data Insert finish here





	function update_purchase()
	{
			$check=true;
			
			if($check==true)

			{


				$old_count=count($this->input->post('old_product_code'));
				
				$old_quantity=$this->input->post('old_quantity');
				$old_product_code=$this->input->post('old_product_code');
				$old_voucherno=$this->input->post('old_voucherno');
				$old_nettotal=$this->input->post('old_nettotal');
				$id=1;


				for($i=0;$i<$old_count;$i++)
				{
					$query=mysql_query("UPDATE tbl_showroom_stock SET quantity=quantity-'$old_quantity[$i]' WHERE product_code='$old_product_code[$i]'");
				
				}


				$this->db->where("voucherno",$old_voucherno);
				$query=$this->db->delete("tbl_purchase");
				


				$count=count($this->input->post('product_name'));
				$product_name=$this->input->post('product_name');
				$product_code=$this->input->post('product_code');
				$type=$this->input->post("type");		
				$price=$this->input->post('price');	
				$quantity=$this->input->post('quantity');
				$unit=$this->input->post('unit');
				$total=$this->input->post('total');
				$nettotal=$this->input->post('nettotal');		
				$smallitemcount=$this->input->post('item_count_hidden');
				$category=$this->input->post('category');		
			
				$totaldebt=$this->input->post('totaldebt');		
		
				$warehouse=$this->input->post("warehouse");
				$table="tbl_showroom_stock";
				$amount=0;
				$totalqty=0;
				$authority=$this->input->post('authority');
				$totalamount=$this->input->post('totalamount');
				$exceedamount=$this->input->post('exceedamount');
				$date=date("Y-m-d",strtotime($this->input->post("date")));

				$voucherno=$this->input->post('voucherno');
				if(!$this->input->post('supplier'))
				{
					$supplier="";
				}
				else
				{
				$supplier=explode("#",$this->input->post('supplier'));		
				}			
					
					for($i=0;$i<$count;$i++)
					{


					
						
						if($product_code[$i] !="" && $product_name[$i] !="")
						{
						

						$totalqty+=$quantity[$i];

							$check_stock=$this->admin_model->check_shop_code("tbl_showroom_stock","showroom_id",$id,$product_code[$i]);

						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
							$previousprice=$row->price;						
							$updqty=$quantity[$i]+$row->quantity;
							
							$balance_qty=$row->quantity;							

								$data=array(
									
									'quantity'=>$updqty,
									'price'=>$price[$i],
									//'type'=>$type[$i],

									'date'=>$date
									
										);

							$this->db->where('product_code',$product_code[$i]);
							$query=$this->db->update($table,$data);


							
						}

						else
						{
						
						//$balance_qty=0;
					
						$data=array(
							'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>"pcs",
								'quantity'=>$quantity[$i],
								//'type'=>$type[$i],

								'category'=>$category[$i],
								'showroom_id'=>$id,
						
								'price'=>$price[$i],
								'date'=>$date																
																	
								);
						
						$query=$this->db->insert($table,$data);

											

						
							}
							
							
						}

						$data=array(
									
									'product_name'=>$product_name[$i],
									'product_code'=>$product_code[$i],
									'price'=>$price[$i],
									'quantity'=>$quantity[$i],
									//'unit'=>$unit[$i],
									'type'=>$type[$i],
									'category'=>$category[$i],
									'total'=>$total[$i],									
									'voucherno'=>$voucherno,
									'date'=>$date
									
									);	

						$query=$this->db->insert('tbl_purchase',$data);
					}

					
						if($query)
						{

						
							$data=array(

									'voucherno'=>$voucherno,
									'supplier'=>$supplier[0],
									'supplier_id'=>$supplier[1],
									'totalqty'=>$totalqty,
									'total_debt'=>$totaldebt,
									'nettotal'=>$nettotal,																		
									'date'=>$date,
									'warehouse'=>$warehouse						

										);

								$this->db->where("voucherno",$old_voucherno);
							$query=$this->db->update("tbl_purchase_header",$data);
							if($query)
							{

								if($this->input->post("supplier"))
								{
								$data=array(							 	
								'supplier'=>$supplier[0],
								'total_debt'=>$totaldebt,
								'voucher_amount'=>$nettotal,
								'returnamount'=>0,
								'paidamount'=>$received,
								'balance'=>$balance,
								'paymethod'=>"Voucher",
								'payname'=>$old_voucherno,		
								'date'=>$date
													
								);

								$this->db->where("payname",$old_voucherno);

								$this->db->update("tbl_supplier_balance_sheet",$data);


								$query=$this->db->query("UPDATE tbl_supplier SET total_debt=$balance WHERE id='$supplier[1]'");


								
								$status=1;
								}
								$status=1;
							}
							else
							{
								$status=0;
							}




							
						}

							
			}

			else
			{
				$status=2;
				
			}


		echo $status;
		
	}//Purchasing Form Data Insert finish here



}

 ?>