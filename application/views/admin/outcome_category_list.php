    <?php
   
                          $count=1;
                          foreach($lists->result() as $list):
                          ?>
                         <tr>
                        <td><?=$count?></td>
                       
                        <td><?=$list->title?></td>  
                         <td>
                        
                         <a href="javascript:makeedit('<?=$list->id?>','outcome_category')"><?=$edit?></a> 
	                     <a href="javascript:makedelete('<?=$list->id?>','outcome_category','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                      </tr>
                     
                       <?php
                       $count++;
            	     endforeach;
            				?>
                    
                   
                  
              
          