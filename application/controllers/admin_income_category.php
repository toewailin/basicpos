<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_income_category extends CI_Controller {

function create_income_category()
	{
		
		
				//validation check
				$check=$this->admin_model->validate_outcome_category();

						if($check==true)
						{
							
							 	$data=array(
							 
								'title'=>$this->input->post('title'),
								'amount'=>0
								
								);
								 $query=$this->db->insert('tbl_income_category',$data);
							
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
		
	



	/*Update income Category*/

	function update_income_category()
	{
		
			//validation check
				$check=$this->admin_model->validate_outcome_category();
					$id=$this->input->post('id');

						if($check==true)
						{
							
							 	$data=array(
							 
								'title'=>$this->input->post('title'),
								'amount'=>0
								
								);

								$this->db->where('id',$id);
								 $query=$this->db->update('tbl_income_category',$data);
							
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

}

 ?>