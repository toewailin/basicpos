<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Admin_supplier_balance_sheet extends CI_Controller{

	function create_supplier_balance_sheet() 
	{

		
			$supplier=explode("#", $this->input->post('supplier'));
			
			
			$row=$this->db->query("SELECT total_debt FROM tbl_supplier WHERE id='$supplier[1]'")->row();
			$totaldebt=$row->total_debt;

			$returnamount=$this->input->post('returnamount');
			$balance=$totaldebt+$returnamount;
			$payname=$this->input->post('payname');

			$note=$this->input->post('note');
			$date=date("Y-m-d",strtotime($this->input->post('date')));


		
					$query=$this->db->query("UPDATE tbl_supplier SET total_debt='$balance', last_date='$date' WHERE id='$supplier[1]'");

			

				$data=array(							 	
					'supplier'=>$supplier[0],
					'supplier_id'=>$supplier[1],
					'total_debt'=>$totaldebt,
					'returnamount'=>$returnamount,
					'balance'=>$balance,
					'paymethod'=>"",
					'payname'=>$payname,		
					'note'=>$note,						
					'date'=>$date
										
					);

					$query=$this->db->insert("tbl_supplier_balance_sheet",$data);

				

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