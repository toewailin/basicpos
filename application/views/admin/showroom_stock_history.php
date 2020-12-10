
           
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 
                  <div class="col-md-3">   <h3 class="panel-title"><i class="fa fa-bars"></i> Inventory Stock History</h3></div>
                 
                  <div class="col-md-7">  

  <?=form_open("admin/search_showroom_stock_history")?>
                    <form name="getreport"  id="showroom_stock">
           <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
              <input type="submit" class="btn btn-primary active" value="<?=$search?>" >


           
            <?=form_close()?>

                   
                  </div>

 <div class="col-lg-1 col-md-1"> 
                 
                 
                       
                  </div>
               
              </div> 
               
              </div>
              
                 <div class="panel-body">
                <div class="table-responsive panel-over">
                 <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong>Categories</strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($categories->result() as $category):
                    
                          ?>           
                  <li class="">
                     <?=anchor("admin/data_list/showroom_stock_history/".urlencode($category->category),'<i class="fa fa-"></i><span>'.$category->category.'</span>')?>
                  </li>
                  <?php endforeach ?>
        
                              
                  
              </ul>
              <br/>
              <br/>
              </div>
              <!-- left end -->
              <!-- right start -->
                <div class="col-md-10 center-content" style="margin-left: 200px">
                  <table class="table table-bordered table-hover table-striped tablesorter" id="center-content">
                    <thead  class="thead-over">
                      <tr>
                        <th>No</th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th><?=$price?></th>
                        <th> Total</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                  $count=1;
                    $totalqty=0;
                 $totalinvest=0;
            foreach($lists->result() as $list):
              $formid="form".$list->id;

                     ?>

                      <tr>
                        <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>    
                        <td><?=$list->category?></td>                       
                        <td><?=number_format($list->remainqty)?> </td>  
                        <td><?=number_format($list->price)?></td>
                        <td><?=number_format($list->price*$list->remainqty)?></td>
                        <td width="150"> <?=$list->date?></td>
                        </tr>
                    
                       <?php
                       $count++;
                       $totalqty+=$list->remainqty;
                       $totalinvest+=$list->remainqty*$list->price;
                       endforeach;
                  
                        ?>
                        <tr>
                          <td>z</td>
                          <td></td>
                          <td></td>
                          <td>စုစုေပါင္း ကုန္က်န္သင့္ေငြ</td>
                          <td><?=$totalqty?> pcs</td>
                          <td></td>
                          <td><?=number_format($totalinvest)?></td>
                          <td></td>
                        </tr>
                         
                    </tbody>

                  </table>

                
                </div>
                


              </div>
            </div>
            </div>


