<html moznomarginboxes mozdisallowselectionprint>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Smart Sale  | Backend Data Administrator</title>
	<base href="<?=base_url()?>"></base>


<link href="css/jquery-ui.css" rel="stylesheet">
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

   
    
  
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <style type="text/css">
.address
{
	font-size: 11px;
}

 @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
        margin: 0mm 15mm 10mm 15mm; /* margin you want for the content */
    }
    td h3 ,h2
    {
      color:blue !important;
      margin: 0;
    }

    th
    {
      border-bottom:1px solid gray;
    }

    table 
    {
     width: 100%;

text-align: center;
margin-bottom: 20px;
padding: 3px;
  line-height: 1.428571429;
  vertical-align: top;
    }

    p
    {
    	margin: 2px;
    }
    p:last-child
    {
    	margin-bottom: 10px;
    }

.font1
{
  color:red !important;
}

.font2
{
  color:blue !important;
}

.footer
{
  font-family:Zawgyi-One;
  font-size:11px;
  color:blue !important;
  position:absolute;
  bottom:0;
  text-align:center;
  width:100%
}

   </style>

</head>
<body onload="javascript:window.print()">
<center>
<?php 
	$show=$lists->row();
 ?>

   <h1 style="margin-top: 86px">A.S.TEAM</h1>
   <h3> Engineering Co.,Ltd.</h3>
   <h4>Ph :09-450013793,09-423333285,09-423333285 Website: http://www.asteamengineering.com</h4>
<?php $show = $lists->row(); ?>
   <span>Customer : <?php echo $show->customer_name; ?>
   </span>
   <br>
<table class="table">
	<tr>
	<th>No</th>
		<th>Code No</th>
		<th>Description</th>
		<th>Qty</th>
		<th>Rate</th>
		<th>Discount</th>
		<th>Amount</th>
	</tr>

	<?php
	$no=1;
	$totalfoc=0;
	foreach($lists->result() as $list):
		if($list->quantity>0)
		{
	?>

	<tr>
		<td><?=$no?></td>
		<td><?=$list->product_code?></td>
		<td><?=$list->product_name?></td>

		<td><?=$list->quantity?></td>

		<td><?=$list->price?></td>
		<td><?=$list->discount?></td>									 

		<td><?=$list->total?></td>

	</tr>

	<?php
		}

	$no++;
	$totalfoc+=$list->foc;
	endforeach;
	?>

	<tr>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				</tr>
					<tr>

					   <td rowspan="8" valign="top" colspan="5"><?=nl2br($list->note)?>
					   <br/>
					   <?php 
             if($totalfoc>0)
             {
              echo "FOC : <br/>";
             foreach ($lists->result() as $list):
              if($list->foc>0)
                        {
                          echo $list->product_code." ".$list->product_name." ".$list->foc." pcs"."<br/>";
                        }
              endforeach;

             }
              ?>
					   </td>

					   <td align="right">သင့္ေငြ</td>
					    <td ><?=$list->totalamount?></td>
					  </tr>

					  <?php 
					 if($list->deliveryfees>0)
					{

						?>
					 <tr>
					   <tr>				  
					  
					      <td align="right">ပို႕ခ</td>
					  
					    <td ><?=$list->deliveryfees?></td>
					  </tr>
					  <?php 
					}

					 if($list->jackpot>0)
					{
						?>
					 <tr>
					  
					   
					  

					   		
					      <td align="right">Discount ေပးေငြ</td>			   
					    <td ><?=$list->jackpot?> % </td>
					  </tr>
					  
						<?php 
						}
						 ?>


					     <tr>			   	   
					  

					  
					    <td align="right">စုစုေပါင္း </td>
					    <td><?=$list->nettotal?></td>
					  </tr>

					<?php 
					  if($list->paytype=="credit")
					  {
					  	?>
					  
					 <tr>					  

					    
					  
					  <td align="right">ယခင္က်န္ေငြ (-) / ပိုေငြ</td>
					    
					    <td><?=$list->totaldebt?></td>
					  </tr>

					  <?php 
					  } ?>
					 
					 <!--   <tr>
					  
										    <td>&nbsp;</td>

					  
					   <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">စုစုေပါင္း က်သင့္ေငြ</td>
					    
					    <td align="right"><?=$list->alltotal?></td>
					  </tr>
					 
					
					  <tr> -->
					  
					
					   	<tr> 

					   
					    <td align="right">ေပးေငြ</td>
					   
					    <td ><?=$list->received?></td>
					  </tr>

					  <tr>
					  

					  
					    <td align="right">
					    <?php 

					    if($list->exceedamount <0 )
			{
				echo $debtstring="က်န္ေငြ";
			}
			elseif($list->exceedamount>0)
			{
				echo $debtstring="ပိုေငြ";
			} ?>
					    </td>
					   
					    <td ><?=abs($list->exceedamount)?></td>
					  </tr>
					    
					 
						
					  </table>

					
					 <center style="font-family:Zawgyi-One;font-size:14px;color:gray;position:absolute;text-align:center;bottom:99px;margin-left:25%;width:350px">
					 	 No.(205), Satmuk (1) Road, Myaungtagar Industrial estate, Hmawbi, Yangon.
					 </center>
					 <center style="font-family:Zawgyi-One;font-size:12px;color:gray;position:absolute;bottom:79px;text-align:center;margin-left:37%;width:150px">ေက်းဇူးတင္ပါသည္။
					 </center> 
					</div>
</table>
</center>
</body>
</html>