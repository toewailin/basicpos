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

                  <div class="col-lg-2 col-md-2">  
    <h3 class="panel-title"><i class="fa fa-bars"></i> Purchase Lists ( <?php  echo $suppliers->supplier_name?> )</h3>
                  </div>

                  <div class="col-lg-9 col-md-9">  
                        <form name="singlesearch" id="voucher_by_supplier">
               <input type="hidden" name="cust_id" value="<?=$this->uri->segment(4)?>">
<?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
         
          
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('voucher_by_supplier')">
           
            </form> 
                  </div>
                  
                <div class="col-lg-1 col-md-1 text-right">  
    
                                       

                     
                  </div>

              </div>  
                
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                   <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th width="20"> <?=$no?></th>

                        <th>Payable Amount</th>
                        <th>Receivable Amount</th>
                        <th><?="By"?></th>
                        <th>Pay Name</th>
                        <th>Voucher Amount  </th>
                        <th>Paid Amount</th>
                        <th>Payable Balance</th>
                        <th>Receivable Balance</th>
                        <th>Note</th>
                        <th><?=$date?></th>
                        <th>View Details</th>                 
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
                    $totalvoucheramount=0;
                    $totalreturnamount=0;
                    $totalpayable=0;
                    $totalreceivable=0;

                    $total=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                         <td><?=($list->total_debt<0? number_format(abs($list->total_debt)) : "0" )?></td>
                         <td><?=($list->total_debt>0? number_format(abs($list->total_debt)) : "0" )?></td>
                

                            <td><?=$list->paymethod?></td>  
                             <td><?=$list->payname?></td> 
                           <td><?=number_format($list->voucher_amount)?></td>
 
                        <td><?=number_format($list->returnamount)?></td>
                       <td><?=($list->balance<0? number_format(abs($list->balance)) : "0" )?></td>
                         <td><?=($list->balance>0? number_format(abs($list->balance)) : "0" )?></td>


                         <td><?=$list->note?></td>   
                          
                              <td><?=$list->date?></td>  
                                
                                                                
                       <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->payname?>','pvoucher','')">View Details </a>
                       </td> 
                                      </tr>
                                       <?php
                         $count++;
                          $totalvoucheramount+=$list->voucher_amount;
                        $totalreturnamount+=$list->returnamount;
                        if($list->balance<0)
                        {
                          $totalpayable+= abs($list->balance);
                        }
                        else
                        {
                          $totalreceivable+= abs($list->balance);

                        }
                        
                          endforeach;
                        
                        ?>
                    <tr>
                      
                      <td colspan="4" align="right"><?=$alltotal?></td>
                      <td></td>
                      <td  align="center"><br/><p> <?=number_format($totalvoucheramount)?></p></td>
                      <td  align="center"><br/><p> <?=number_format($totalreturnamount)?></p></td>
                      <td  align="center"><br/><p> <?=number_format($totalpayable)?></p></td>
                      <td  align="center"><br/><p> <?=number_format($totalreceivable)?></p></td>

                    </tr>

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
