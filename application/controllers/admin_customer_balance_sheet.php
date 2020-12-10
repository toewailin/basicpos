<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 



class Admin_customer_balance_sheet extends CI_Controller{



	function create_customer_balance_sheet() 
	{

		
			$customer=explode("#", $this->input->post('customer'));
			
			
			$row=$this->db->query("SELECT total_debt FROM tbl_customer WHERE id='$customer[1]'")->row();
			$totaldebt=$row->total_debt;
			$returnamount=$this->input->post('returnamount');
			$balance=$totaldebt+$returnamount;
			$payname=$this->input->post('payname');
			$note=$this->input->post('note');
			$date=date("Y-m-d",strtotime($this->input->post('date')));		
			$query=$this->db->query("UPDATE tbl_customer SET total_debt='$balance', last_date='$date' WHERE id='$customer[1]'");
				

				$data=array(							 	
					'customer'=>$customer[0],
					'customer_id'=>$customer[1],
					'total_debt'=>$totaldebt,
					'returnamount'=>$returnamount,
					'balance'=>$balance,
					'paymethod'=>"",
					'payname'=>$payname,		
					'note'=>$note,						
					'date'=>$date
										
					);

					$query=$this->db->insert("tbl_customer_balance_sheet",$data);


			

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