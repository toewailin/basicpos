  <?php
                    $count=1;
                    $total=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                        <td><?=$list->date?></td>  

                         <td><?=$list->customer?></td>
                         <td><?php echo number_format(abs($list->total_debt))?></td>
                

                            <td><?=$list->paymethod?></td>  
                             <td><?=$list->payname?></td>  
                    <td><?=number_format($list->voucher_amount)?></td>

                        <td><?=number_format($list->returnamount)?></td>
                        <td><?=number_format(abs($list->balance))?></td>


                         <td><?=$list->note?></td>   
                          
                                 
                                                                   
                        <td width="150">
                      

                       <?php if($list->paymethod !="Voucher"){ ?>
                       
                         <a href="javascript:makedelete('<?=$list->id?>','customer_balance_sheet','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
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