          
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
               <div class="container">


                  <div class="col-lg-2 col-md-2">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> ၀န္ထမ္း စာရင္း <?php if($this->uri->segment(4)){echo "( ".urldecode($this->uri->segment(4))." )";}?></h3>
                  </div>

                  <div class="col-lg-9 col-md-9">
                      <form name="getreport" id="staff">
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="staff">Staff name</option>
                       
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('staff')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('staff')">
            </form> 
                  </div>
                

                <div class="col-lg-1 col-md-1 text-right">  
      
                   <a href="javascript:show_form('staff_form')" class="btn btn-default active"><?=$addnew?></a> 
                 
                   
                  </div>


              </div>
              </div>
                <br/>
              <div class="panel-body">
                <div class="table-responsive panel-over">
               
              <!-- left end -->
              <!-- right start -->
                <div class="col-md-12 center-content">
                  <table class="table table-bordered table-hover table-striped tablesorter" id="center-content">
                    <thead class="thead-over">
                       <tr>
                        <th width="70">အစဥ္</th>                                              
                        <th width="260">အမည္</th>
                        <th width="190">လစာ</th>
                      
                        
                         <th width="230">ျပင္ / ဖ်တ္</th>
                           
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $count=1;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td width="70"><?=$count?></td>
                        <td width="260"><?=$list->staff?></td>
                        <td width="260"><?=number_format($list->salary)?></td>
                         
                         <td width="230">
                       <a href="javascript:makeedit('<?=$list->id?>','staff')"><?=$edit?></a> / 
                     
                        <!--   <a href="javascript:showdialogform('edit_form/staff/<?=$list->id?>')"><?=$edit?></a> /  -->
	                   <a href="javascript:makedelete('<?=$list->id?>','staff','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                           
                      </tr>
                       <?php
                       $count++;
					endforeach;
					
				?>
                    </tbody>
                  </table>
                  </div>
                    <?php
                  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";
                  ?>
                </div>
                
              </div>
            </div>
          </div>
          
    