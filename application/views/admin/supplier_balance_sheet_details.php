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





 <div class="row">

            

             

            <div class="panel panel-primary">



              <div class="panel-heading">

                   <div class="container">



              <div class="col-md-3">

                <h3 class="panel-title"><i class="fa fa-bars"></i> 

               <?php



$show=$lists->row();

?>

                <?=" Supplier : ".$show->supplier?></h3>

              </div>



              <div class="col-md-8">

                 <form name="getreport" id="supplier_balance_sheet_details">

                   <input type="hidden" name="supplier_id" value="<?=$this->uri->segment(4);?>"/>

             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>

              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>

          <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('supplier_balance_sheet_details')">

            </form> 



              </div>  



              <div class="col-md-1">



              <?=anchor("admin_sale_print/supplier_balance_sheet_print/".$this->uri->segment(4),"<i class='fa fa-print'></i> print","class='btn btn-default'")?>



              </div>

</div>

              </div>









              <div class="panel-body" id="content">

                <div class="table-responsive">



                 <div class="col-md-6">

                 <div class="row">

  <table class="table table-bordered table-hover table-striped tablesorter">

                    <thead class="thead-over">

                      <tr>

                       <th>No</th>

                        <th>ရက္စြဲ</th>



                        <th><?=$product_code?></th>

                       <th>အမ်ိဳးအစား</th>

  <th>အိတ္</th>                       

 <th>ပိသာ ပို</th>

                       

                         <th>စုစုေပါင္းပိသာ</th>

                         <th>ႏႈန္း</th>

                        <th> သင့္ေငြ</th>

                      </tr>

                    </thead>

                      

                    <tbody>

                    <?php

                    $count=1;

                    $total=0;

                 

              foreach($plists->result() as $list):

              

                     ?>

                      <tr>

                      <td><?=$count?></td>

                              <td><?=$list->date?></td>



                        <td><?=$list->product_code?></td>

                        <td><?=$list->product_name?></td>            

                       <td><?=number_format($list->quantity)?> </td>  

 <?php 



$mod=$list->total_smallitemcount%$list->item_count;

  ?>

                         <td><?=number_format($mod)?> </td>  

                         <td><?=number_format($list->total_smallitemcount)?> </td>  

                        <td><?=number_format($list->price)?></td>

                        <td><?=number_format($list->total)?></td>

                      

                     

                      </tr>

                     <?php

                     $count++;

                    $total+=$list->total;

                  endforeach;

                  ?>

                  <tr>

                    <td align="right" colspan="8">All Total </td> <td align="center"> <?=number_format($total)?></td></td>

                    </tr>

                  </tbody>

                  </table>

                

               </div>

</div>



                 <div class="col-md-6" align="right">

                 <div class="row">

                  <table class="table table-bordered table-hover table-striped tablesorter">

                    <thead class="thead-over">

                       <tr>

                        <th> <?=$no?></th>

                         <th><?=$date?></th>





                        <th>ေပးရန္ရွိေသာေငြ</th>

                        <th>ေဘာက္ခ်ာက်သင့္ေငြ  </th>

                        <th>ေပးေငြ</th>

<!--                         <th>ေပးရန္က်န္ေငြ</th>
 -->
                                         

                      </tr>

                    </thead>

                      

                    <tbody id="content">

                    <?php

                    $count=1;

                $totalreturn=0;
                    $totalvamount=0;

                        foreach($lists->result() as $list):

                      ?>

                                  <tr>

                        <td><?=$count?></td>

                     <td><?=$list->date?></td>  



                         <td><?=($list->total_debt<0? number_format(abs($list->total_debt)) : "" )?></td>
                                   



                           <td><?=number_format($list->voucher_amount)?></td>

 

                        <td><?=number_format($list->returnamount)?></td>

<!--                        <td><?=number_format(abs($list->balance))  ?></td>
 -->
                        

                                      </tr>

                                       <?php

                         $count++;

                       $totalreturn+=abs($list->returnamount);
                         $totalvamount+=abs($list->voucher_amount);
                          endforeach;

                        

                        ?>

                   <tr>

                    <td align="center" colspan="3"> All Total </td> 
                        <td align="center" > <?=number_format($totalvamount)?></td> 
                               <td align="center" >
                                    <?=number_format($totalreturn)?>

                    </td>

                    </tr>

                  </tbody>

                  </table>

                 </div>

                 </div>    





                </div>



              

               

              </div>

            </div>

          </div>

    </body>

<script type="text/javascript" src="js/template.js"></script>

</html>

