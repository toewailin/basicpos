<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Smart Sale  | Backend Data Administrator</title>
  <base href="<?=base_url()?>"></base>
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
<!--  <link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/jquery.ui.all.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <script type="text/javascript" src="js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
    <script>
  $(function() {
    $( "#date1" ).datepicker();
    $( "#date2" ).datepicker();
   
  });
  </script>
   <link rel="stylesheet" type="text/css" href="css/main.css">
    
</head>

 <div class="container">

          
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 

                  <div class="col-lg-6 col-md-6">  
    <h3 class="panel-title"><i class="fa fa-bars"></i>   <?=$saletitle?> ( <?php echo $customers->customer_name?> )</h3>
                  </div>

                  <div class="col-lg-6 col-md-6">  
                        <form name="singlesearch" id="voucher_by_customer">
               <input type="hidden" name="cust_id" value="<?=$this->uri->segment(4)?>">
<?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
         
          
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('voucher_by_customer')">
           
            </form> 
                  </div>
                  
                <div class="col-lg-1 col-md-1 text-right">  
    
                                       

                     
                  </div>

              </div>  
                
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>                        
                        <th ><?=$no?></th>
                        <th >Date</th>

                        <th ><?=$voucher?></th>                       
                        <th ><?=$total?></th>
                          <th >Discount</th>
                        <th ><?=$netamount?></th>
                        <th>Receivable</th>
                        <th>Payable</th>
                        <th ><?=$receive?></th>

                        <th >Receivable Amount</th>
                        <th >Payable Amount</th>
                        <th >Pay Type</th>
                        <th>Salesman</th>
                      

                        <th >View Details</th>
 <th>Print <i class="fa fa-print"></i></th>     
                </tr>


 
                    </thead>                 
                  
                    <tbody id="content">
                  <?php
                    $count=1;
                    $totalamount=0;
                    $totalreceive=0;
                    $totaldeliveryfees=0;
                    $totalreqamt=0;
                    $totaljackpot=0;
                    $totaldebt=0;
                    $totalnettotal=0;
                     $totalreceivable=0;
                     $totalpayable=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td ><?=$count?></td>
                          <td ><?=$list->date?></td>                                      

                        <td ><?=$list->voucherno?></td>
                        <td ><?=number_format($list->totalamount)?></td>
                         <td ><?=number_format($list->jackpot)?></td>
                           <td ><?=number_format($list->nettotal)?></td>
                        <td ><?php if($list->totaldebt<0 && $list->paytype=="credit") echo abs($list->totaldebt);?></td>  
                        <td ><?php if($list->totaldebt>0  && $list->paytype=="credit") echo abs($list->totaldebt);?></td> 
                         <td ><?=number_format($list->received)?></td> 
  <td ><?php if($list->exceedamount<0 && $list->paytype=="credit") echo abs($list->exceedamount);?></td>  
 <td ><?php if($list->exceedamount>0 && $list->paytype=="credit") echo abs($list->exceedamount);?></td> 
                         <td ><?=$list->paytype?></td>
<!--                          <td ><?php if($list->exceedamount>0) echo $list->exceedamount;?></td> 
 -->                        <td><?=$list->authority?></td>
                           
                       
                      <td >
                      <a onclick="viewdetails('<?=$list->voucherno?>','voucher','')">View Details </a>
                 
                        </td>
                        <td> 
                        <?=anchor("admin_sale_print/showroom_sale_voucher_print/".$list->voucherno,'<i class="fa fa-print"',' class="btn btn-info" target="_blank"')?>
                      </td>
                  
                                      </tr>
                                       <?php
                                       $count++;
                                       $totalamount+=$list->totalamount;
                                      $totalreceive+=$list->received;
                                      $totaldeliveryfees+=$list->deliveryfees;
                                       $totalnettotal+=$list->nettotal;
                                       $totaldebt+=abs($list->totaldebt);
                                       if($list->exceedamount>0)
                                        {  $totalpayable+=$list->exceedamount;}
                                      if($list->exceedamount<0)
                                        {  $totalreceivable+=$list->exceedamount;}
                                        $totaljackpot+=$list->jackpot;
                          endforeach;
                        
                        ?>

                        <tr>

                        <td ></td>
                        <td ></td>
                        <td>Total</td>
                        <td ><?=number_format(abs($totalamount))?></td>
                         <td ><?=number_format(abs($totaljackpot))?></td>
                           <td ><?=number_format(abs($totalnettotal))?></td>
                           <td></td>
                            <td></td>

                        <td ><?=number_format(abs($totalreceive))?></td> 
                        
                           <td ><?=number_format(abs($totalreceivable))?></td>
                           <td ><?=number_format(abs($totalpayable))?></td>

                      
                        <td ></td>                                      
                        <td >
                      
                        </td>
                        </tr>
                  <tr><td colspan="12" align="center"> <?="အသားတင္ရရွိေသာေငြသား (၀ယ္သူမွေပးေငြ (".number_format($totalreceive).")  +   စုစုေပါင္းပို႕ခ (".number_format($totaldeliveryfees).")) = ".number_format($totalreceive-$totaldeliveryfees)?></td></tr>


                     
                    </tbody>
                  </table>
                    <?php
                /*  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";*/
                  ?>
                </div>
                
              </div>
            </div>


          </div>
  </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
