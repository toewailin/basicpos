  <?php
                    $count=1;
                    $total=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                         <td><?=$list->supplier?></td>
                         <td><?=($list->total_debt<0? number_format(abs($list->total_debt)) : "0" )?></td>
                         <td><?=($list->total_debt>0? number_format(abs($list->total_debt)) : "0" )?></td>
                

                            <td><?=$list->paymethod?></td>  
                             <td><?=$list->payname?></td> 
                           <td><?=number_format($list->voucher_amount)?></td>
 
                        <td><?=number_format($list->returnamount)?></td>
                       <td><?=($list->balance<0? number_format(abs($list->balance)) : "0" )?></td>
                         <td><?=($list->balance>0? number_format(abs($list->balance)) : "0" )?></td>


                         <td><?=$list->note?></td>   
                          
                              <td><?=$list->date?></td>  
                                
           <td width="150">
                      

                       
                       <?php if($list->paymethod !="Voucher"){ ?>
                       
                         <a href="javascript:makedelete('<?=$list->id?>','supplier_balance_sheet','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                           <?php } ?>

                       </td>                                                         
                        
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
