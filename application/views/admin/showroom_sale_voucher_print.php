<html moznomarginboxes mozdisallowselectionprint>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Smart Sale  | Backend Data Administrator</title>
	<base href="<?=base_url()?>"></base>
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
	.address
	{
		font-size: 14px;
	}

	@page 
	    {
	        size:  auto;   /* auto is the initial value */
	        margin: 0mm;  /* this affects the margin in the printer settings */
	    }

    html
    {
        background-color: #FFFFFF; 
        margin: 1in;  /* this affects the margin on the html before sending to printer */
        border: 1px;
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

	.mywrapper{
		border: 2px solid black;
		height: 86%;
		border-top-left-radius: 18px 16px;
		border-top-right-radius: 16px 18px;
		border-bottom-right-radius: 10px 10px;
		border-bottom-left-radius: 10px 10px;
	}

	.header{
		width: 100%;
		height: 2.5cm;
		background-color: #d85555 !important;
		text-align: center;
		padding-top: 6mm;
		font-size: 34px;
		font-weight: bold;
		border-top-right-radius: 16px 14px;
		border-top-left-radius: 16px 14px;
	}
	.eng{
		width: 100%;
		height: 1cm;
		background-color: #e5c1c7 !important;
		text-align: center;
		padding-top: 1mm;
		font-size: 22px;
		font-weight: bold;
	}
	.addr{
		width: 100%;
		height: 1cm;
		background-color: #e5cfff !important;
		text-align:center;
		padding-top: 2mm;
		font-style: italic;
		border-bottom: 1px solid black;
	}
	th,td{
		border: 1px solid black;
		text-align: center;
		height: 24px;
	}
	.thno{
		width: 34px;
	}
	.thcode{
		width: 88px;
	}
	.thparticular{
		width: 220px;
	}
	.thquantity{
		width: 80px;
	}
	.thprice{
		width: 88px;
	}
	.thamount{
		width: 88px;
	}
	.mytotal{
		height: 34px;
	}
	.footertd,table{
		border-bottom-right-radius: 4px 4px;
		border-bottom-left-radius: 4px 4px;
	}
	.mysign{
		margin-top: 42px;
	}
	.myleft{
		float: left;
		padding-left: 12px; 
		text-align: center !important;
	}
	.myright{
		float: right;
		padding-right: 12px;
		text-align: center !important;
	}
	.customer{
		float: left;
		padding-left: 10px;
	}
	.date{
		float: right;
		padding-right: 10px;
	}
   </style>
</head>
<body onload="javascript:window.print()">
	<div class="mywrapper">
		<div class="header">
			A.S.TEAM
		</div>
		<div class="eng">
			Engineering Co.,Ltd.
		</div>
		<div class="addr">
			Ph :09-450013793,09-423333285,09-423333286 | Website: http://www.asteamengineering.com
		</div>
		<center>
			<span class="customer">Customer : <?php echo $cus->customer_name; ?></span> <span class="date">Voucher No.<?php echo $cus->voucherno; ?> | Date : <?php echo $cus->date; ?></span>
			<table>
				<tr>
					<th class="thno">No</th>
					<th class="thcode">Code No</th>
					<th class="thparticular">Particular</th>
					<th class="thquantity">Quantity</th>
					<th class="thprice">Price</th>
					<th class="thamount">Amount</th>
				</tr>
				<?php
					$no=1;
					$totalfoc=0;
					$subtotal = 0;
					foreach($lists->result() as $list):
						if($list->quantity>0) {
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$list->product_code?></td>
					<td><?=$list->product_name?></td>
					<td><?=$list->quantity?></td>
					<td><?=$list->price?></td>
					<td><?=($sub=$list->quantity*$list->price)?></td>
				</tr>
				<?php  
					}
					$no++;
					$totalfoc+=$list->foc;
					$subtotal += $sub;
					endforeach;
				?>
				<?php  
					for ($i=$no; $i <=22-$no ; $i++) { 
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<td colspan="5" class="mytotal">Sub Total</td>
					<td><?php echo $subtotal; ?></td>
				</tr>
				<tr>
					<td colspan="5" class="mytotal">Discount</td>
					<td><?php echo $dis = $list->discount; ?></td>
				</tr>
				<tr class="footertd">
					<td colspan="5" class="mytotal footertd">All Total</td>
					<td class="footertd"><?php echo $subtotal - $dis ; ?></td>
				</tr>
			</table>
			<div class="mysign">
				<span class="myleft"> Customer Signature : </span><!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
				<span class="myright">Authorized Signature : </span>
				<br><br><br>
				<span class="myleft">__________________</span><!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
				<span class="myright">__________________</span>
			</div>
	 	</center> 
	 </div>
</body>
</html>