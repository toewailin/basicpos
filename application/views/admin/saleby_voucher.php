                                  
             
            <div class="panel panel-primary">
             <div class="panel-heading heading-over">

                  <div class="container"> 
                      <div class="col-md-3">  
                       <h3 class="panel-title"><i class="fa fa-bars"></i> Sale By Voucher </h3>
                      </div>

                        <div class="col-md-8">  
                              <form name="singlesearch" id="saleby_voucher">
                <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
            
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('saleby_voucher')">
           
            </form> 

                        </div>
                  </div>  
               
              </div>
              <div class="panel-body">
                 <div class="table-responsive panel-over">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>
                          <th>Voucher No</th>

                        <th>Net Total</th>
                        <th><?=$date?></th>
                                              
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
                    $alltotal=0;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td><?=$count?></td>              
                        <td><?=$list->voucherno?></td> 
                        <td><?=number_format($list->nettotal)?></td> 
                        
                       
                       
                        <td>
                          <?=$list->date?>
                        </td>
                                                            
                        
                       </tr>
                        <?php
                        $count++;
                        $alltotal+=$list->nettotal;
                					endforeach;
                				
                				?>
                    </tbody>
                    <tr>  
<td>   </td><td> Total </td><td> <?=number_format($alltotal)?> </td>
                    </tr>
                   
                  </table>

              
      </div>
    </div>
  </div>
  
