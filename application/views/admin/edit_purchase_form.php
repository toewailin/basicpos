<?php

$show=$row->row();
?>
<br/>
<h3 class="title">Edit Purchase Form</h3>


 <?=form_open("","id='purchase_heading' 'class='cloneable-form'")?>
 <?=form_hidden("old_voucherno",$show->voucherno)?>
 <?=form_hidden("old_nettotal",$show->nettotal)?>

  <input type="hidden" name="total_debt" id="total_debt" value="<?=$show->total_debt?>">

 <table class="table table-hover tablesorter">
  <tr>
    <td><?=$voucher?></td>
    <td>
      <?php

      $ip=explode('.',$this->input->ip_address());
      ?>
      <input class="form-control-discount form-control" type="text" name="voucherno" id="voucherno" value="<?=$show->voucherno;?>"/>
   </td>
   <td><?=$suppliername?></td>
     <td> <?=form_dropdown('supplier',$supplier,$show->supplier,'class="form-control-discount" autocomplete="off" onchange="check_debt(this.value,\'supplier\')" autocomplete="off"');?></td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount form-control date" type="text" name="date" id="date1" value="<?=date('d-m-Y')?>"/>
    </td>
     </tr>
     
  </table>

 <?=form_close()?>

  <h4>Details Information</h4>
  <?=form_open('','id="purchase" name="myform"');?>
   <table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
           <td>No</td>
            <td align="center" width="180" ><?=$product_code?></td>
            <td align="center"><?=$product_name?></td>     
            
          
            <td align="center" width="200">Quantity</td>
              <td align="center" width="150"><?=$price?></td>
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
          <?php
          $count=1;
          $net=0;
            foreach($row->result() as $list):
             echo form_hidden('old_product_code[]',$list->product_code);
              echo form_hidden('old_quantity[]',$list->quantity);

?>

         <tr class="clonethis">
         <td><?=$count?></td>
              <td><?=form_input('product_code[]',$list->product_code,'class="form-control-discount form-control pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off" ');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]',$list->product_name,'class="form-control-discount form-control" autocomplete="off" ');?></td>
              <td> <?=form_input('quantity[]',$list->quantity,' class="stockqty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
           <?=form_hidden('item_count_hidden[]','');?>  <?=form_hidden("category[]",$list->category)?><?=form_hidden("type[]",$list->type)?>
          <!--  <td> <?=form_input('unit[]',$list->unit,' id="unit" class="form-control-discount form-control clonelastone" onchange="grabprice(this.value,event)" autocomplete="off" ');?><?=form_hidden("category[]",$list->category)?><?=form_hidden("type[]",$list->type)?></td>  -->

              <td width="15"> <?=form_input('price[]',$list->price,' class="form-control-discount price" autocomplete="off" onkeyup="admincloneform(event)"');?></td>

              <td width="140"> <?=form_input('total[]',$list->total,'class="form-control-discount form-control clonelastone total" autocomplete="off" ');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         <?php
          $count++;
          $net+=$list->total;
          endforeach;

         ?>
         </tbody>
     </table>
    <?=form_close()?>

<form id="purchase-send">
<table class="table">

  <tr>
       <td colspan="2" align="right">Net Amount </td><td width="200"> <input type="text" name="nettotal" id="nettotal" value="<?=$net?>"  class="form-control-discount form-control"  /></td>
 <td colspan="3" align="right"> </tr>

 <tr>
       <td colspan="2" align="right">Total Transportation Charges</td><td width="200"> <input type="text" name="totaltransportationcharges" id="totaltransportationcharges" value=0  class="form-control-discount"  /></td>
  <td colspan="3" align="right">
  </tr>
  <tr>


<tr>
       <td colspan="2" align="right">Total Transfer Rate</td><td width="200"> <input type="text" name="totaltransferrate" id="totaltransferrate" value=0  class="form-control-discount"  /></td>
  <td colspan="3" align="right">
  </tr>




  <tr>
       <td colspan="2" align="right">Total Discount</td><td width="200"> <input type="text" name="totaldiscount" id="totaldiscount" value=0  class="form-control-discount"  /></td>
 <td colspan="3" align="right"> </tr>
 


  <tr id="totaldebt">
             <td colspan="2" align="right"><?="ယခင္က်န္ေငြ (-) / ပိုေငြ / ၾကိဳေပးေငြ"?></td>
             <!-- <td><?=form_input('totaldebt',$show->total_debt,'class="form-control-discount" autocomplete="off"');?></td> -->
             <td><?=form_input('totaldebt',0,'class="form-control-discount" autocomplete="off"');?></td>
  </tr>

  <tr>
            <td colspan="2" align="right"><?="စုစုေပါင္း က်သင့္ေငြ"?></td>
            <td><?=form_input('alltotal',0,'id="alltotal" class="form-control-discount" autocomplete="off" readonly');?></td>
  </tr>


 <tr>
  <td colspan="2" align="right">ယခုေပးေငြ</td><td width="200"> <input type="text" name="received" autocomplete="off" id="received" value=0  class="form-control-discount"  onkeyup="payadvance(this.value)" onblur="payadvance(this.value)"/></td>
 <td colspan="3" align="right"> </tr>
 <tr>
       <td colspan="2" align="right">ယခုက်န္ေငြ/ ပိုေငြ</td><td width="200"> <input type="text" name="balance" id="balance" value=0  class="form-control-discount"/></td>
 <td colspan="3" align="right"> </tr>

<tr> 
<td colspan="4" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'purchase\')"');?>
</td> <td colspan="2" align="right"></td></tr>
</table>
</form>
<?php
echo form_hidden("old_netamount",$net);
echo form_close();
?>
