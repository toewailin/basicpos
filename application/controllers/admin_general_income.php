<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_general_income extends CI_Controller {

	/*Create New General incomes*/

	function create_general_income()
	{
		
				//$check=$this->admin_model->validate_general_income();
					$check=true;

						if($check==true)
						{
							 
							$count=count($this->input->post('description'));
							 $description=$this->input->post('description');
							 $total=$this->input->post('total');
							 $date=date("Y-m-d",strtotime($this->input->post("date")));
							$income_category=$this->input->post('income_category');				

						
						for($i=0;$i<$count;$i++)
							{
								$data=array(
								
								'description'=>$description[$i],
								'total'=>$total[$i],						
								'date'=>$date,
								'income_category'=>$income_category[$i]

								);

								$query=$this->db->insert('tbl_general_income',$data);
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


				echo $status;
		

	}//
	

	
	/*Update General income*/


	function update_general_income()
	{
			
		
			$id=$this->input->post('id');

						$data=array(
									'description'=>$this->input->post("description"),														
									'total'=>$this->input->post("total"),
									'income_category'=>$this->input->post("income_category"),
									'date'=>date("Y-m-d",strtotime($this->input->post("date")))
															
									);	


						$this->db->where('id',$id);
						$query=$this->db->update('tbl_general_income',$data);
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