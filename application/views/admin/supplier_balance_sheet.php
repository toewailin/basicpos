 <div class="panel panel-primary">
              <div class="panel-heading heading-over">
               <div class="container">


                  <div class="col-lg-2 col-md-2">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> Supplier Balance Sheet</h3>
                  </div>

                  <div class="col-lg-9 col-md-9">
                      <form name="getreport" id="supplier_balance_sheet">
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="supplier">supplier name</option>
                        <option value="address">Address</option>
                        <option value="phone">Phone</option>
                        <option value="contact_person">Contact Person</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('supplier_balance_sheet')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('supplier_balance_sheet')">
            </form> 
                  </div>
                

                <div class="col-lg-1 col-md-1 text-right">    
                 
<?=anchor("admin/insert_form/supplier_balance_sheet_form",$addnew,'class="btn btn-default active"')?>
                  
                   
                  </div>


              </div>
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th width="20"> <?=$no?></th>
                        <th>supplier</th>

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
                          <th width="120">Delete</th>
                                         
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                         <td><?=$list->sname?></td>
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
                      

                       
                       <?php if($list->paymethod !="Voucher"){ ?>
                       
                         <a href="javascript:makedelete('<?=$list->id?>','supplier_balance_sheet','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                           <?php } ?>

                       </td>                                                         
                        
                                      </tr>
                                       <?php
                         $count++;
                         $total+=$list->returnamount;
                          endforeach;
                        
                        ?>
                    <tr>
                      
                      <td colspan="4" align="right"><?=$alltotal?></td>

                      <td  align="center"><br/><p> <?=number_format($total)?></p></td>
                    </tr>

                                        </tbody>

                    
                  </table>
                </div>
                
              </div>
            </div>

          
    