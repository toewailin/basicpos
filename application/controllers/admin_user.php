<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_user extends CI_Controller {


	
function create_user()
	{
		
		

						$check=true;
						if($check==true)
						{

						$data=array(
									'display_name'=>$this->input->post("staff_name"),
									'username'=>$this->input->post('username'),
									'password'=>md5($this->input->post('password')),							
									'ip_address'=>$this->input->post('ip_address'),
									'computer_name'=>$this->input->post('computer_name'),
									'user_role'=>$this->input->post('user_role'),
									'date'=>date("Y-m-d")							
									);	

						$query=$this->db->insert('tbl_user',$data);
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
			


	}//



	function update_user()
	{
		
		
			$id=$this->input->post('id');

						$check=true;
						if($check==true)
						{

						$data=array(
									'display_name'=>$this->input->post("staff_name"),
									'username'=>$this->input->post('username'),		
									'ip_address'=>$this->input->post('ip_address'),
									'computer_name'=>$this->input->post('computer_name'),
									'user_role'=>$this->input->post('user_role')
									);	

						$this->db->where('id',$id);
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
			


	}//





}

 ?>