   <?php
                    $count=1;
                    $totalamount=0;
                    $totalreceive=0;
                    $totaldeliveryfees=0;
                    $totalreqamt=0;
                    $totaljackpot=0;
                    $totaldebt=0;
                    $totalnettotal=0;
                     $totalreceivable=0;
                     $totalpayable=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td ><?=$count?></td>
                                                <td ><?=$list->date?></td>                                      

                        <td ><?=$list->voucherno?></td>
                        <td><?=$list->customer_name?></td>
                        <td ><?=number_format($list->totalamount)?></td>
                         <td ><?=number_format($list->jackpot)?></td>
                           <td ><?=number_format($list->nettotal)?></td>
                        <td ><?php if($list->totaldebt<0 && $list->paytype=="credit") echo abs($list->totaldebt);?></td>  
                        <td ><?php if($list->totaldebt>0  && $list->paytype=="credit") echo abs($list->totaldebt);?></td> 
                         <td ><?=number_format($list->received)?></td> 
  <td ><?php if($list->exceedamount<0 && $list->paytype=="credit") echo abs($list->exceedamount);?></td>  
 <td ><?php if($list->exceedamount>0 && $list->paytype=="credit") echo abs($list->exceedamount);?></td> 
                         <td ><?=$list->paytype?></td>
<!--                          <td ><?php if($list->exceedamount>0) echo $list->exceedamount;?></td> 
 -->                        <td><?=$list->authority?></td>
                        
                       
                      <td >
                      <a onclick="viewdetails('<?=$list->sale_id?>','voucher','')">View Details </a>
                 
                        </td>
                        <td> 
                        <?=anchor("admin_sale_print/showroom_sale_voucher_print/".$list->sale_id,'<i class="fa fa-print"',' class="btn btn-info" target="_blank"')?>
                      </td>
                       <td>
                      

                          <a href="javascript:makeedit('<?=$list->sale_id?>','sale')"><?=$edit?></a> / 
                       
                       
                         <a href="javascript:makedelete('<?=$list->sale_id?>','sale','<?=$this->uri->segment(4)?>')"><?=$delete?></a>

                       </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       $totalamount+=$list->totalamount;
                                      $totalreceive+=$list->received;
                                      $totaldeliveryfees+=$list->deliveryfees;
                                       $totalnettotal+=$list->nettotal;
                                       $totaldebt+=abs($list->totaldebt);
                                       if($list->exceedamount>0)
                                        {  $totalpayable+=$list->exceedamount;}
                                      if($list->exceedamount<0)
                                        {  $totalreceivable+=$list->exceedamount;}
                                        $totaljackpot+=$list->jackpot;
                          endforeach;
                        
                        ?>

                        <tr>
                        <td ></td>

                        <td ></td>
                        <td ></td>
                        <td>Total</td>
                        <td ><?=number_format(abs($totalamount))?></td>
                         <td ><?=number_format(abs($totaljackpot))?></td>
                           <td ><?=number_format(abs($totalnettotal))?></td>
                           <td></td>
                            <td></td>

                        <td ><?=number_format(abs($totalreceive))?></td> 
                        
                           <td ><?=number_format(abs($totalreceivable))?></td>
                           <td ><?=number_format(abs($totalpayable))?></td>

                      
                        <td ></td>                                      
                        <td >
                      
                        </td>
                        </tr>
                  <tr><td colspan="12" align="center"> <?="အသားတင္ရရွိေသာေငြသား (၀ယ္သူမွေပးေငြ (".number_format($totalreceive).")  +   စုစုေပါင္းပို႕ခ (".number_format($totaldeliveryfees).")) = ".number_format($totalreceive-$totaldeliveryfees)?></td></tr>

