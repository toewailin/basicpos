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


   <h3 style="margin-top: 10px">ASTEAM</h3>
   <h4> Engineering Co.Ltd,</h4>
   <h5>Ph :09-450013793,09-423333285 Website: http://www.asteamengineering.com</h5>
<!-- <p>ဆိုင္-တိုက္(91/C)၊ ေျမညီထပ္၊ သီရိလမ္းမ၊ လိႈင္ျမိဳ႕နယ္၊ ရန္ကုန္ျမိဳ႕။</p>
<p>ဂိုေဒါင္ - တိုက္(88/A)၊ ေျမညီထပ္၊ သီရိလမ္းသြယ္(၅)၊ လိႈင္ျမိဳ႕နယ္၊ ရန္ကုန္ျမိဳ႕။</p>
<p>ဖုန္း - 09 256156186, 09 761286891, 09 790136546</p>
<p>E-mail : dnkdistribution2017@gmail.com</p>
<br/> -->
<?php 

//$month=array(1=>"Jan",2=>"Feb",3=>"Mar",4=>"Apr",5=>"May",6=>"Jun",7=>"July",8=>"Aug",9=>"Sept",10=>"Oct",11=>"Nov",12=>"Dec");

 ?>

                <div class="panel panel-primary" >
       
              <div class="panel-body">
              <div class="table-responsive">
           <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6"><h3 <h3 align="center">Incomes</h3>

<?php 
$totalincome=0;
$totaloutcome=0;
?>
<table class="table">




<tr bgcolor="gray"><th>Sale Voucher</th><td></td></tr>
<?php 
//foreach($sale->result() as $s):
 ?>
<tr><td>Cash Sale</td><td><?php echo $sale->total_received?></td></tr>
<?php 
$totalincome +=$sale->total_received;

//endforeach;
 ?>



<tr bgcolor="gray"><th>Credit Voucher</th><td></td></tr>
<?php 
//foreach($sale->result() as $s):
 ?>
<tr><td>Credit Sale</td><td><?php echo $creditsale->total_debt?></td></tr>
<?php 
$totalincome +=$creditsale->total_debt;

//endforeach;
 ?>


<tr bgcolor="gray"><th>General Incomes</th><th></th></tr>
  <?php 

  $genralintotal=0;
  foreach($incomes->result() as $income):

    ?>

  <tr>
    <td>
      <?php echo $income->title ?>
    </td>
    <td><?php echo $income->total ?></td>
  </tr>
  <?php
  $genralintotal +=$income->total;
$totalincome +=$income->total;

    endforeach;
   ?>


     <tr><th>Sub Total</th><th><?=$genralintotal?></th></tr>



<tr>  <td>  </td><td> </td></tr>
<tr>  <th> All Total </th> <th> <?=$totalincome?></th></tr>

</table>

           </div>

           <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6"><h3 align="center">Expenses</h3>

<table class="table">
 



<tr bgcolor="gray"><th>Purchases</th><th></th></tr>
  <?php 

  $totalpurchase=0;
  foreach($purchases->result() as $purchase):

    ?>

  <tr>
    <td>
      <?php //echo $purchase->title ?>
    </td>
    <td><?php echo $purchase->total ?></td>
  </tr>
  <?php
  $totalpurchase +=$purchase->total;
  $totaloutcome +=$purchase->total;

    endforeach;
   ?>


     <tr><th>Sub Total</th><th><?=$totalpurchase?></th></tr>




<tr bgcolor="gray"><th>General Outcomes</th><th></th></tr>
  <?php 

  $genralouttotal=0;
  foreach($outcomes->result() as $outcome):

    ?>

  <tr>
    <td>
      <?php echo $outcome->title ?>
    </td>
    <td><?php echo $outcome->total ?></td>
  </tr>
  <?php
  $genralouttotal +=$outcome->total;
  $totaloutcome +=$outcome->total;

    endforeach;
   ?>


     <tr><th>Sub Total</th><th><?=$genralouttotal?></th></tr>




<tr>  <td>  </td><td> </td></tr>
<tr>  <th> All Total </th><th><?=$totaloutcome?> </th></tr>
</table>
           </div>

          

                </div>

                <div class="container">
                  <div class="col-md-4">
                  </div>
                   <div class="col-md-4">
                   <?php 
                    $netincome=$totalincome-$totaloutcome;
                   if($netincome>0)
                   {
                      $cl='style="background:green;color:white;float:left"';
                   }
                   else
                   {
                      $cl='style="background:red;color:white;float:left"';

                   }
                   ?>
                 <h3 align="center" <?=$cl?>> Net Income : (<?=$totalincome?>-<?=$totaloutcome?>) = <?=($totalincome-$totaloutcome)?></h3>
                  </div>
                   <div class="col-md-4">
                  </div>

                </div>
              </div>

            </div>
          </div>
     




</table>
</center>
</body>
</html>