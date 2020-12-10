 <div class="panel panel-primary">
              <div class="panel-heading heading-over">
               <div class="container">


                  <div class="col-lg-2 col-md-2">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> Staff Balance Sheet</h3>
                  </div>

                  <div class="col-lg-9 col-md-9">
                      <form name="getreport" id="staff_balance_sheet">
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="staff">staff name</option>
                         
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('staff_balance_sheet')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('staff_balance_sheet')">
            </form> 
                  </div>
                

                <div class="col-lg-1 col-md-1 text-right">    
                 
                   <a href="javascript:show_form('staff_balance_sheet_form')" class="btn btn-default active"><?=$addnew?></a> 
                  
                   
                  </div>


              </div>
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th width="20"> <?=$no?></th>
                        <th>staff</th>

                        <th>Required Amount</th>
                        <th><?="By"?></th>
                        <th>Pay Name</th>
        <th>Loan Amount</th>

                        <th>Paid Amount</th>
                        <th>Required Balance</th>
                        <th>Note</th>
                        <th><?=$date?></th>
                                              
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
                         <td><?=$list->staff?></td>
                         <td><?php echo number_format(abs($list->total_debt))?></td>
                

                            <td><?=$list->paymethod?></td>  
                             <td><?=$list->payname?></td>  
                        <td><?=number_format($list->loanamount)?></td>
                        <td><?=number_format($list->returnamount)?></td>
                        <td><?=number_format(abs($list->balance))?></td>


                         <td><?=$list->note?></td>   
                          
                              <td><?=$list->date?></td>  
                                
                                                                   
                        
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

          
    