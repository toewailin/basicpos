 <div class="panel panel-primary">
              <div class="panel-heading heading-over">
               <div class="container">


                  <div class="col-lg-2 col-md-2">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$suppliertitle?></h3>
                  </div>

                  <div class="col-lg-9 col-md-9">
                      <form name="getreport" id="supplier">
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="supplier_name">Supplier name</option>
                        <option value="address">Address</option>
                        <option value="phone">Phone</option>
                        <option value="contact_person">Contact Person</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('supplier')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('supplier')">
                      </form> 
                  </div>
                

                <div class="col-lg-1 col-md-1 text-right">    
                 
                   <a href="javascript:show_form('supplier_form')" class="btn btn-default active"><?=$addnew?></a> 
                  
                   
                  </div>


              </div>
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over center-content">
                  <table class="table table-bordered table-hover table-striped tablesorter" id="center-content">
                    <thead class="thead-over">
                      <tr>
                        <th><?=$no?></th>                                              
                        <th ><?=$suppliername?></th>
                        <th ><?=$address?></th>
                        <th ><?=$phone?></th>
                        <th ><?=$contact_person?></th>
                        <th>Receivable Amount</th>
                        <th>Payable Amount</th>
                        <th>View Details</th>
                        <th ><?=$edit?> / <?=$delete?></th>
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $count=1;
                    $exceed=0;
                    $require=0;
						        foreach($lists->result() as $list):
					           ?>
                      <tr>
                        
                          <td><?=$count?></td>
                        <td><?=$list->supplier_name?></td>
                        <td ><?=$list->address?></td>
                        <td><?=$list->phone?></td>
                        <td><?=$list->contact_person?></td>
                        <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format(abs($list->total_debt));$debttype="debt_to_supplier";}?></td>
                        <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format(abs($list->total_debt));$debttype="debt_from_supplier";}?></td>
                        <td>
                          <a onclick="viewdetails('<?=$list->id?>','voucher_by_supplier','')">View Details </a>
                        </td>
                        <td >
                         <a href="javascript:makeedit('<?=$list->id?>','supplier')"><?=$edit?></a> / 
                         <!--   <a href="javascript:showdialogform('edit_form/supplier/<?=$list->id?>')"><?=$edit?></a> /  -->
                         <a href="javascript:makedelete('<?=$list->id?>','supplier','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                       </td>
                      </tr>
                       <?php
                       $count++;
                       if($list->total_debt>0){$exceed+=$list->total_debt;}
                       if($list->total_debt<0) {$require+=$list->total_debt;}
					           endforeach;
            				?>
                    <tr>
                      <td>z</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?=number_format($exceed)?></td>
                      <td><?=number_format(abs($require))?></td>
                      <td></td>
                      <td></td>
                    </tr>
                    </tbody>
                  </table>
                    <?php
                  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";
                  ?>
                </div>
                
              </div>
            </div>
          </div>
          
    