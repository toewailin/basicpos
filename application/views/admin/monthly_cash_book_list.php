   <div class="panel panel-primary" >
              <div class="panel-heading heading-over">

                  <div class="container"> 

          <div class="col-md-6">          
          <h3 class="panel-title"><i class="fa fa-bars"></i> Monthly Cash Book for <?=$dateinterval?> </h3>
</div>

  <div class="col-md-6">
                    <form name="getreport"  id="monthly_income_outcome">
           <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="search_monthly_incomeoutcome()">

                <?=anchor("admin_sale_print/monthly_cash_book_print/",'<i class="fa fa-print"></i> Print',' class="btn btn-default" target="_blank" style="float:right"')?>

           
            </form>
                </div>
              
              </div>
              </div>
             
              <div class="panel-body">
              <div class="table-responsive panel-over">
           <div class="col-md-6"><h3 <h3 align="center">Incomes</h3>

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




<tr>  <td>  </td><td> </td></tr>
<tr>  <th> All Total </th> <th> <?=$totalincome?></th></tr>

</table>

           </div>

           <div class="col-md-6"><h3 align="center">Expenses</h3>

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