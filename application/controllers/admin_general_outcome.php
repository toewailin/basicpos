<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_general_outcome extends CI_Controller {

	/*Create New General Outcomes*/

	function create_general_outcome()
	{
		
				//$check=$this->admin_model->validate_general_outcome();
					$check=true;

						if($check==true)
						{
							 
							$count=count($this->input->post('description'));
							 $description=$this->input->post('description');
							 $total=$this->input->post('total');
							 $date=date("Y-m-d",strtotime($this->input->post("date")));
							$outcome_category=$this->input->post('outcome_category');				

						
						for($i=0;$i<$count;$i++)
							{
								$data=array(
								
								'description'=>$description[$i],
								'total'=>$total[$i],						
								'date'=>$date,
								'outcome_category'=>$outcome_category[$i]

								);

								$query=$this->db->insert('tbl_general_outcome',$data);
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
	

	
	/*Update General Outcome*/


	function update_general_outcome()
	{
			
		
			$id=$this->input->post('id');

						$data=array(
									'description'=>$this->input->post("description"),														
									'total'=>$this->input->post("total"),
									'outcome_category'=>$this->input->post("outcome_category"),
									'date'=>date("Y-m-d",strtotime($this->input->post("date")))
															
									);	


						$this->db->where('id',$id);
						$query=$this->db->update('tbl_general_outcome',$data);
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