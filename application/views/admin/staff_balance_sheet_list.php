<?php
                    $count=1;
                    $total=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                         <td><?=$list->staff?></td>
                         <td><?php echo number_format(abs($list->total_debt))?></td>
                

                            <td><?=$list->paymethod?></td>  
                             <td><?=$list->payname?></td>  
                                                     <td><?=number_format($list->loanamount)?></td>

                        <td><?=number_format($list->returnamount)?></td>

                        <td><?=number_format(abs($list->balance))?></td>


                         <td><?=$list->note?></td>   
                          
                              <td><?=$list->date?></td>  
                                
                                                                   
                        
                                      </tr>
                                       <?php
                         $count++;
                         $total+=$list->returnamount;
                          endforeach;
                        
                        ?>
                    <tr>
                      
                      <td colspan="4" align="right"><?=$alltotal?></td>

                      <td  align="center"><br/><p> <?=number_format($total)?></p></td>
                    </tr>
