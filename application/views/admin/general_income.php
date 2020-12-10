
<?php
$income_category=$this->admin_model->grab_income_category();

?>
        
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">

                   <div class="container">

                  <div class="col-md-2">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?="General Income"?></h3>

                  </div>

                  <div class="col-md-9">  
                        <form name="getreport" id="general_income">
              <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
               Colunm <select name="colunm" class="form-control-sale" >
                        <option value="income_category">income Categories</option>                        
                       
              </select>

              Value <?=form_dropdown('search',$income_category,'','class="form-control-sale"');?></td>
               
              <!-- <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="showreport('general_income')"> -->
               <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('general_income')">
            </form>
           
                  </div>


                    <div class="col-md-1 text-right"> 
                      
                 <?=anchor("admin/insert_form/general_income_form",$addnew,'class="btn btn-default active"')?>

                        <!--   <a href="javascript:show_form('general_income_form')" class="btn btn-default active"><?=$addnew?></a>  -->
                
                        
                     </div>


                  </div>
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
             
                  <div class="col-md-12">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                      <th width="70"><?=$no?></th>
                     
                        <th width="300"><?=$description?></th>
                        <th width="150"><?=$total?></th>
                          <th width="200"><?="Income Categories"?></th>
                        <th width="100"><?=$date?></th>
                        
                         <th width="120"><?=$edit?> / <?=$delete?></th>

                        
                      </tr>
                    </thead>
                     
                    <tbody id="content">
                    
                          <?php
                          $count=1;
                          $total=0;
                          foreach($lists->result() as $list):
                          ?>
                          <tr>
                        <td width="70"><?=$count?></td>
                       
                        <td width="300"><?=$list->description; ?></td>
                         <td width="150"><?=number_format($list->total)?></td>
                        <td width="200"><?=$list->title?></td>
                        <td width="100"><?=$list->date?></td>
                        
                         <td width="120">
                       
                
                       <a href="javascript:makeedit('<?=$list->id?>','general_income')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','general_income','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>

                    
                      </tr>
                    
                       <?php
                       $count++;
                        $total+=$list->total;
            	     endforeach; 

            				?> 
                     <tr>
                    <td align="right" colspan="2"> Total </td> <td> <?=number_format($total)?></td>
                    </tr>    </tbody>
                  </table>
               
                </div>
               </div>
              </div>
            </div>
          </div>
       
