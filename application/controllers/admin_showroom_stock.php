<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_showroom_stock extends CI_Controller {

/*Create Stock*/
	

	function create_showroom_stock()
	{
				//validation check
				$check=$this->admin_model->validate_showroom_stock();

				if($check==true)
				{

					$count=count($this->input->post('product_name'));
					$product_name=$this->input->post('product_name');	
				 	$product_code=$this->input->post('product_code');		
					//$unit=$this->input->post('unit');
					$type=$this->input->post('type');

					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$category=$this->input->post('category');
					$id=1;

					$totalqty=0;
					$table="tbl_showroom_stock";
					$date=date("Y-m-d",strtotime($this->input->post("date")));
					
					
					for($i=0;$i<$count;$i++)
					{

						if($product_code[$i] !="" && $product_name[$i] !="")
						{

						$check_showroom_stock=$this->admin_model->check_shop_code("tbl_showroom_stock","showroom_id",$id,$product_code[$i]);


						if($check_showroom_stock->num_rows()==1)
							{
					
						$subquery=$this->db->query("UPDATE tbl_showroom_stock SET quantity=quantity+$quantity[$i] WHERE showroom_id='$id' AND product_code='$product_code[$i]'");

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

						if($query)

								{
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



				}

				echo $status;

			}

		
	}


	/**/




	/*Update Stock*/

	function update_showroom_stock()
	{
				$id=$this->input->post('id');



				
					$product_name=$this->input->post('product_name');	
					$product_code=$this->input->post('product_code');		
					$unit=$this->input->post('unit');
					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$category=$this->input->post('category');
					$type=$this->input->post('type');

					$totalqty=0;
					$table="tbl_showroom_stock";
					$date=date("Y-m-d",strtotime($this->input->post("date")));
					
				
						$data=array(
							
								'product_code'=>$product_code,
								'product_name'=>$product_name,								
								'quantity'=>$quantity,
								'category'=>$category,
								'type'=>$type,
								'price'=>$price,
								'date'=>$date																	
																	
								);
						
						$this->db->where('id',$id);
						$query=$this->db->update('tbl_showroom_stock',$data) or die(mysql_error());
			
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

				

			

}

 ?>