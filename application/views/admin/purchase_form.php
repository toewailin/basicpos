

<h3 class="title">Purchase Form</h3>

<h4>Header Information</h4>

 <?=form_open("","id='purchase-heading'")?>
 <table class="table table-hover tablesorter">
  <tr>
    <td>Voucher</td>
    <td>
      <?php
      $row=$this->db->select_max("voucherno")->get("tbl_p")->row();
    $number=$row->voucherno+1;
    $voucherno=str_pad($number, 10, "0", STR_PAD_LEFT); 
   // return $pcname."-".$voucherno;

      $voucherno="P-".$voucherno;
      ?>
      <input class="form-control-discount" type="text" name="voucherno" id="voucherno" value="<?=$voucherno?>"/>
   </td>
   <td><?=$suppliername?></td>
     <td> <?=form_dropdown('supplier',$supplier,'','class="form-control-discount" onchange="check_debt(this.value,\'supplier\')" autocomplete="off"');?></td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=$today?>"/>
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
            
           <!--  <td align="center" width="100"><?=$smallitemcount?></td> -->
          
            <td align="center" width="100"><?=$quantity?></td>
<!--             <td align="center" width="150"><?=$unitname?></td>
 -->              <td align="center" width="150"><?=$price?></td>
           <!--  <td align="center" width="100"><?php //$discount?></td> -->
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
         <tr class="clonethis">
         <td class="no">1</td><?=form_hidden('item_count_hidden[]','');?>
              <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fillWithoutPrice(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?><?=form_hidden("category[]","")?><?=form_hidden("type[]","")?></td>
              <td> <?=form_input('quantity[]','',' class="stockqty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
             <!--  <td> <?=form_dropdown('unit[]',array("pcs"=>"pcs"),'','  class="form-control-discount clonelastone" onkeyup="admincloneform(event)" onchange="grabprice(this.value,event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?></td> -->
              <!--  <td><?php //form_input('item_count[]',0,' class="form-control-discount clonelastone" autocomplete="off"');?>
                
               </td> -->

              <td width="15"> <?=form_input('price[]','',' class="form-control-discount price" autocomplete="off" onkeyup="admincloneform(event)"');?></td>
            <!--   <td> <?php //form_input('discount[]',0,' onblur="calamount(this.value)" class="form-control-discount discount clonelastone"');?></td> 
              -->
              <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total" autocomplete="off"');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         </tbody>
     </table>

<?=form_close()?>

<form id="purchase-send">


<table class="table">
  <tr>
       <td colspan="2" align="right">Net Amount </td><td width="200"> 
       <input type="text" name="nettotal" id="nettotal" value=0  class="form-control-discount" autocomplete="off" /></td>
 <td colspan="3" align="right"> </tr>
 <tr>


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
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="purchase_insert(\'purchase\')"');?>
</td><td colspan="2" align="right"></tr>
</table>
</form>
