   
            <div class="panel panel-primary" id="reportdata">
              <div class="panel-heading heading-over">

                  <div class="container"> 

                      <div class="col-lg-2 col-md-2">  

                        <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$purchasetitle?></h3>
                      </div>


                        <div class="col-lg-8 col-md-8">  
                             <form name="singlesearch" id="purchase_header">
   <?=$from?> <input type="text" name="startdate" class="form-control-sale date " id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date " id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                    
                         <option value="voucherno">Voucher No</option>
                        <option value="supplier">Supplier Name</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('purchase_header')"/>

              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="searchsingle('purchase_header')">
           
            </form> 
                        </div>


                        <div class="col-lg-2 col-md-2 text-right">  
                             <?=anchor("admin/insert_form/purchase_form",$addnew,'class="btn btn-default active"')?>
                             <?=anchor("admin_sale_print/purchase_print","Print",'class="btn btn-default"')?>

                       
                           
                        </div>

                         <!-- <div class="col-lg-1 col-md-1 text-right">  
                                            <?=anchor("admin/insert_form/purchase_multiple_form","Add New To Subwarehouse",'class="btn btn-default active"')?>

                       
                           
                        </div> -->

                </div>

              </div>
             
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"><?=$no?></th>
                                                <th width="150"><?=$date?></th>

                        <th width="130"><?=$voucher?></th>
<!--                         <th width="220"><?=$suppliername?></th>
 -->                         <th width="100">Total Quantity</th>
                        <th><?=$total?></th>
                       
                       <th width="120">View Details</th>
                     <th width="120">Delete</th>

                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
                    $alltotalqty=0;
						  foreach($lists->result() as $list):
              
					           ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                                               <td width="150"><?=$list->date?></td>                         

                       <td width="130"><?=$list->voucherno?></td>
<!--                         <td width="220"><?=$list->supplier?></td>
 -->                          <td width="100"><?=number_format($list->totalqty)?> pcs</td>
                         <td width="100"><?=number_format($list->nettotal)?></td>
                         <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','pvoucher','')">View Details </a>
                       </td>
                     
                      <td width="150">
                      

                       
                       
                         <a href="javascript:makedelete('<?=$list->voucherno?>','purchase','<?=$this->uri->segment(4)?>')"><?=$delete?></a>

                       </td>

                      </tr>
                     <?php
                     $count++;
                    $total+=$list->nettotal;
                    $alltotalqty+=$list->totalqty;

                  endforeach;
                  ?>
                 <tr>
                    <td align="right" colspan="3">All Total </td> <td><?=number_format($alltotalqty)?> pcs</td><td> <?=number_format($total)?></td>
                    </tr>
                  </tbody>
                  </table>
                 
                </div>

              
               
              </div>
            </div>
          </div>
    
