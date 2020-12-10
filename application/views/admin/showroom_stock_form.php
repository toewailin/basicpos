<?=form_open('',' class="cloneable-form" id="showroom_stock" ');?>
<?php echo form_hidden("tbl","tbl_showroom_stock"); ?>

 <div class="container">
 <table class="table">
 <caption> <h1> <small>Inventory Stock Form</small> </h1>
</caption> 
<tr>
  <th></th>
  <th>Choose Date</th>
  <th>  <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date("d-m-Y")?>"/></th>

</tr>

<tr>
  <th></th>
  <th></th>
  <th></th>

 
</tr>

</table>
<p><br/><br/></p>
 <table class="table table-bordered table-hover tablesorter"> 

    <tbody id="SourceWrapper">
   
    <tr>
        <th class="center"><?=$product_code?> </th> 
        <th class="center"><?=$product_name?></th>      
        <th class="center"><?=$quantity?> (Pcs)</th>
                    <th class="center"><?="Price"?></th>                    

        <th  class="center">Total</th>


       
     </tr>
      <tr class="clonethis">
          <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete" onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
              <td> <?=form_input('product_name[]','','class="form-control-discount"');?><?=form_hidden("category[]","")?><?=form_hidden("type[]","")?></td>
             
             

      <td width="140"> <input type="text" name="quantity[]" class="form-control-discount stockqty clonelastone" onkeyup="admincloneform(event)"  onblur="admincloneform(event)" required/><?php //form_input('quantity[]','','class="form-control-sale qty clonelastone" onkeyup="cloneform(event)"');?></td>

              <td > <?=form_input('price[]','',' class="form-control-discount price" autocomplete="off" onkeyup="admincloneform(event)"  onblur="admincloneform(event)"');?></td>
                           <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total" autocomplete="off"');?>

                           

          <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
      </tr>
   </tbody>
     <tr>
       <td colspan="4" align="right"><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'showroom_stock\')"');?></td>
     </tr>
 </table>
