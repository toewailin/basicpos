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
                        

                        
                          <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','showroom_stock')"><?=$edit?></a> 
                         / 
                     <a href="javascript:makedelete('<?=$list->id?>','showroom_stock','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                        
                         </td>
                         
                      </tr>
                    
                       <?php
                       $count++;
                       $totalqty+=$list->remainqty;

                       $totalinvest+=$list->quantity*$list->price;
            endforeach;
                  
                        ?>
                         <tr>
                    <td align="center" colspan="4"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td>
                                         <td><?=$totalqty?> pcs</td> 

                    <td> </td>

                    <td> <br/><?=number_format($totalinvest)?><br/></td><td > <br/><br/></td>
                    </tr>