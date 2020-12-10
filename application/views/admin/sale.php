
 <div class="container">
          
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 

                  <div class="col-lg-2 col-md-2">  
    <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$saletitle?> </h3>
                  </div>

                  <div class="col-lg-9 col-md-9">  
                        <form name="singlesearch" id="sale">
               
<?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
         
              Colunm <select name="colunm" class="form-control-sale" >
                     
                        <option value="voucherno">Voucherno</option>
                        <option value="customer_name">Customer Name</option>
                        <option value="received">Received</option>
                        <option value="nettotal">Net Total</option>
                        <option value="balance">Balance </option>
                         <option value="authority">Authority</option>
              </select>
            
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('sale')"/>
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('sale')">
           
            </form> 
                  </div>
                  
                <div class="col-lg-1 col-md-1 text-right">  
    
                                              <?=anchor("admin/insert_form/sale_form",$addnew,'class="btn btn-default active"')?>


                     
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
                         <th ><?=$customer?></th>
                        <th ><?=$total?></th>
                          <th >Discount</th>
                        <th ><?=$netamount?></th>
                        <th>Previous Receivable</th>
                        <th>Previous Payable</th>
                        <th ><?=$receive?></th>

                        <th >Current Receivable</th>
                        <th >Current Payable </th>
                        <th >Pay Type</th>
                        <th>Salesman</th>
                      

                        <th >View Details</th>
 <th>Print <i class="fa fa-print"></i></th>     
 <th>Delete</th>                 </tr>


 
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
                        <td><?=$list->customer_name?></td>
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
                       <td>
                      

                       
                       
                         <a href="javascript:makedelete('<?=$list->voucherno?>','sale','<?=$this->uri->segment(4)?>')"><?=$delete?></a>

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
                        <td ></td>
                        <td>Total</td>
                        <td ><?=number_format(abs($totalamount))?></td>
                         <td ><?=number_format(abs($totaljackpot))?></td>
                           <td ><?=number_format(abs($totalnettotal))?></td>
                           <td></td>
                            <td></td>

                        <td ><?=number_format(abs($totalreceive))?></td> 
                        
                           <td><?=number_format(abs($totalreceivable))?></td>
                           <td ><?=number_format(abs($totalpayable))?></td>

                      
                        <td ></td>                                      
                        <td >
                      
                        </td>
                        </tr>
                

					<tr><td colspan="17"> <h4 align="center"> <br/><strong><?="အသားတင္ရရွိေသာေငြသား = ".number_format($totalreceive)?></strong></h4></td></tr>
                     
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
 