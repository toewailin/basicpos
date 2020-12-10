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
       <td><?=number_format($list->quantity)?> </td>  
    </tr>

     <?php
     $count++;
     $totalqty+=$list->quantity;

     $totalinvest+=$list->quantity*$list->price;
  endforeach;

?>
                         