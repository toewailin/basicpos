 <?php
                    $count=1;
                    $total=0;
                    $alltotalqty=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                                               <td width="150"><?=$list->date?></td>                         

                       <td width="130"><?=$list->voucherno?></td>
<!--                         <td width="220"><?=$list->supplier?></td>
 -->                          <td width="100"><?=number_format($list->totalqty)?> pcs</td>
                         <td width="100"><?=number_format($list->nettotal)?></td>
                         <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','pvoucher','')">View Details </a>
                       </td>
                     
                      <td width="150">
                      

                       
                       
                         <a href="javascript:makedelete('<?=$list->voucherno?>','purchase','<?=$this->uri->segment(4)?>')"><?=$delete?></a>

                       </td>

                      </tr>
                     <?php
                     $count++;
                    $total+=$list->nettotal;
                    $alltotalqty+=$list->totalqty;

                  endforeach;
                  ?>
                  <tr>
                    <td align="right" colspan="3">All Total </td> <td><?=number_format($alltotalqty)?> pcs</td><td> <?=number_format($total)?></td>
                    </tr>