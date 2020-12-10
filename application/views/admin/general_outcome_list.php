  <?php
                          $count=1;
                          $total=0;
                          foreach($lists->result() as $list):
                          ?>
                          <tr>
                        <td width="70"><?=$count?></td>
                                               <td width="100"><?=$list->date?></td>

                        <td width="300"><?=$list->description; ?></td>
                                                <td width="200"><?=$list->title?></td>

                         <td width="150"><?=number_format($list->total)?></td>
                        
                         <td width="120">
                       
                
                       <a href="javascript:makeedit('<?=$list->id?>','general_outcome')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','general_outcome','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>

                    
                      </tr>
                    
                       <?php
                       $count++;
                        $total+=$list->total;
                   endforeach; 

                    ?> 
                     <tr>
                    <td align="right" colspan="4"> Total </td> <td> <?=number_format($total)?></td>
                    </tr> 