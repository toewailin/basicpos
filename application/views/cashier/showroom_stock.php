
           
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 
                  <div class="col-md-3">   <h3 class="panel-title"><i class="fa fa-bars"></i> Inventory Stock Balance</h3></div>
                 
                  <div class="col-md-7">  
                       <form name="singlesearch" id="showroom_stock" class="searchform">
               
             
              Colunm <select name="colunm" class="form-control-sale" >
                      <option value="product_code">Product Code</option>
                      <option value="product_name">Product Name</option>
                      <option value="unit">Unit</option>
                      <option value="price">Price</option>
                      <option value="quantity">Quantity</option>
                      <option value="category">Category</option>

              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('showroom_stock')"/>
              
             <!--  <input type="button" class="btn btn-primary" value="Search" onclick="searchsingle(document.singlesearch.data.value,document.singlesearch.colunm.value,'showroom_stock')">
            -->

             <input type="button" class="btn btn-default active" value="<?=$search?>" onclick="searchsingle('showroom_stock')">
           
            </form> 
                  </div>

                  <div class="col-lg-1 col-md-1"> 
                 
                   <?//=anchor("admin_showroom_stock_history","Close Stock",'class="btn btn-warning active"')?>
                       
                  </div>
               
                <div class="col-lg-1 col-md-1 text-right"> 
                 
                   <?//=anchor("admin/insert_form/showroom_stock_form",$addnew,'class="btn btn-default active"')?>
                      
                  </div>
              </div> 
               
              </div>
              
                 <div class="panel-body">
                <div class="table-responsive panel-over">
                 <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong><a href="index.php/cashier/data_list/showroom_stock">Categories</a></strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($categories->result() as $category):
                    
                          ?>           
                  <li class="">
                     <?=anchor("cashier/data_list/showroom_stock/".$category->category,'<i class="fa fa-"></i><span>'.$category->category.'</span>')?>
                  </li>
                  <?php endforeach ?>
        
                              
                  
              </ul>
              <br/>
              <br/>
              </div>
              <!-- left end -->
              <!-- right start -->
                <div class="col-md-10" style="margin-left: 200px">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead  class="thead-over">
                      <tr>
                      <th>  No</th>
                        <th ><?=$product_code?></th>
                        <th ><?=$product_name?></th>
                          <th>  Category</th>

                        <th ><?=$quantity?></th>

                   
                          
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
                         <td><?=number_format($list->quantity)?> </td>  
                      </tr>
                    
                       <?php
                       $count++;
                       $totalqty+=$list->quantity;

                       $totalinvest+=$list->quantity*$list->price;
        		endforeach;
        					
        				        ?>
                         
                    </tbody>

                  </table>

                
                </div>
                
              </div>
            </div>
            </div>


