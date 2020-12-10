<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_shworoom extends CI_Controller {


	/*Add shworoom Information */

	function create_showroom()
	{

		
				//validation check
				//$check=$this->admin_model->validate_showroom();
			$check=true;
				$id=$this->input->post('id');
				$location=$this->input->post('location');
				$name=$this->input->post('name');

						
							 	$data=array(
							 	
								'name'=>$name,
								'location'=>$location								
								
								);

								 $query=$this->db->insert('tbl_showroom',$data);
							
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



function update_showroom()
	{

		
				//validation check
				//$check=$this->admin_model->validate_showroom();
			$check=true;
				$id=$this->input->post('id');
				$location=$this->input->post('location');
				$name=$this->input->post('name');

						
							 	$data=array(
							 	
								'name'=>$name,
								'location'=>$location								
								
								);

							 	$this->db->where("id",$id);
								 $query=$this->db->update('tbl_showroom',$data);
							
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

}

 ?>