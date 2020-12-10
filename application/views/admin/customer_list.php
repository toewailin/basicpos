   <?php
                    $count=1;
                    $exceed=0;
                    $require=0;
              foreach($lists->result() as $list):
                     ?>
                      <tr>
                      <td><?=$count?></td>
                        <td><?=$list->customer_name?></td>
                        <td ><?=$list->address?></td>
                          <td><?=$list->phone?></td>
                         <td><?=$list->contact_person?></td>
                          <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format(abs($list->total_debt));$debttype="debt_to_customer";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format(abs($list->total_debt));$debttype="debt_from_customer";}?></td>
                        <td>
                      <a onclick="viewdetails('<?=$list->id?>','voucher_by_customer','')">View Details </a>
                 
                        </td>
                      
                         <td >
                       <a href="javascript:makeedit('<?=$list->id?>','customer')"><?=$edit?></a> / 
                     
                        <!--   <a href="javascript:showdialogform('edit_form/customer/<?=$list->id?>')"><?=$edit?></a> /  -->
                     <a href="javascript:makedelete('<?=$list->id?>','customer','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                          
                      </tr>
                       <?php
                       $count++;
                       if($list->total_debt>0){$exceed+=$list->total_debt;}
                       if($list->total_debt<0) {$require+=$list->total_debt;}
          endforeach;
          
        ?>
      <tr><td colspan="5"></td><td><?=number_format($exceed)?></td><td><?=number_format(abs($require))?></td><td></td></tr>