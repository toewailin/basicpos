        <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container">
              <div class="col-md-3">
                <h3 class="panel-title"> <i class="fa fa-bars"></i> <?=$unittitle?></h3>
              </div>
                <div class="col-md-7">
                  
        <form name="getreport" id="unit">
              Colunm <select name="colunm" class="form-control-sale" >   
               <option value="product_code">Product Code</option>
                <option value="product_name">Product Name</option>                   
                        <option value="category">Category</option>
                        
                      
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('unit')" />
             
             <!--  <?=$from?> <input type="date" name="startdate" class="form-control-sale" id="date1"/>
              <?=$to?> <input type="date" name="enddate" class="form-control-sale" id="date2"/> -->
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('unit')">
             
          </form> 
                </div>
                <div class="col-md-2 text-right"> 
                
                <?php echo anchor("admin/insert_form/unit_form","add new",'class="btn btn-default active"'); ?>
                <?php echo anchor("admin_sale_print/unit_print","Print",'class="btn btn-default"'); ?>

<!--                   <a href="javascript:show_form('unit_form')" class="btn btn-default active"><?=$addnew?></a> 
 -->                    
                </div>
              </div>
              </div>
              
              <div class="">
                
                <div class="table-responsive panel-over">

              <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong>Categories</strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($categories->result() as $category):
                    
                          ?>           
                  <li class="">
                     <?=anchor("admin/data_list/unit/".urlencode($category->category),'<i class="fa fa-"></i><span>'.$category->category.'</span>')?>
                  </li>
                  <?php endforeach; ?>
        
                              
                  
              </ul>
              <br/>
              <br/>
              </div>
              <!-- left end -->
              <!-- right start -->
                <div class="col-md-10 center-content" style="margin-left:200px">
                   <table class="table table-bordered table-hover table-striped tablesorter" id="center-content">
                    <thead class="thead-over">
                      <tr>
                      <th width="105"><?=$no?></th>
                       <th width="100"><?=$product_code?></th>
                       <th><?=$product_name?></th>
                       <th>Image</th>
                       <th> <?=$categorytitle?></th>
                        <th width="190">Sale <?=$price?></th>
                     
                         <th width="150"><?=$edit?>/<?=$delete?></th>
               </tr>
                    </thead>
                   
                    <tbody id="content">
                     
                          <?php
                          $count=1;
                          foreach($lists->result() as $list):
                          ?>
                         <tr>
                        <td width="105"><?=$count?></td>
                         <td width="100"><?=$list->product_code?></td>
                          <td><?=$list->product_name?></td>
                          <td> <img src="images/photo/thumbs/<?=$list->photo?>" alt="<?=$list->photo?>" class="gallery img"/>  </td>
                          <td>  <?=$list->category?></td>
                        <td width="190"><?=$list->price?></td>      
                               
                         <td width="150">
                         <?php //anchor("admin/edit_form/unit/".$list->id,$edit)?>

                          <a href="javascript:makeedit('<?=$list->id?>','unit')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','unit','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                   
                      </tr>
                     
                       <?php
                       $count++;
                   endforeach;
                    ?>
                    
                    </tbody>
                  </table>

                </div> 
                </div>
                
              </div>
            </div>
          <!-- </div> -->
    