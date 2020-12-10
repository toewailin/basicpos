<?php


$show=$row->row();

?>

<h3 class="title">Edit Sale Form</h3>


 <?=form_open("","id='sale' 'class='cloneable-form'")?>
 <?=form_hidden("sale_id",$show->sale_id)?>
 <?=form_hidden("old_customer_id",$show->customer_id)?>
 <?=form_hidden("old_paytype",$show->paytype)?>
 <?=form_hidden("old_nettotal",$show->nettotal)?>
 <?=form_hidden("old_received",$show->received)?>

 
     <div class="container" style="margin-bottom:50px;">

<div class="col-md-3">
 
<!-- <h3>Sale Entry Form </h3> -->
<table class="table"> 

<tr>  <td>  Pay Type </td> 
<td> <?=form_dropdown("paytype",array("credit"=>"credit","cashdown"=>"cashdown"),$show->paytype," onclick='checkpaytype(this.value)' autocomplete='off'  class='form-control-discount'");?>

</td></tr>

<tr>  <td>  <?=$customername?>  </td> 
    <td> <?=form_dropdown('customer',$customer,$show->customer_id,"class='form-control-discount form-control disabled' onchange='check_debt_id(this.value,\"customer\")' ");?>
       
         </td></tr>
           
</table>

  </div> 


<div class="col-md-3">

<table class="table"> 

<tr>  <td align="right"> Voucher No :</td> 
<td>   
<?=form_input("voucherno",$show->voucherno,"class='form-control'");?>
</td></tr>

 <tr>
    
      <td>Note</td>
     <td><textarea name="note" class="form-control"><?=$show->note?></textarea></td>
    
     </tr>
</table>

 </div>


  

<div class="col-md-3">

<table class="table"> 

<tr>  <td align="right"> Salesman :</td> <td>   <?=$show->authority?>
</td></tr>


</table>
 
  </div>




  
<div class="col-md-3">

<table class="table"> 

<tr>  <td> Date : </td> <td> 
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=$show->date?>"/>

</td>
</tr>



</table>

 </div>


</div>

 

  <h4>Details Information</h4>
  
  <table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
           <td>No</td>
            <td align="center" width="180" ><?=$product_code?></td>
            <td align="center"><?=$product_name?></td>     
            
          
            <td align="center" width="200">Quantity pcs</td>
              <td align="center" width="150"><?=$price?></td>
            <th align="center" width="100">Discount %</th>
             <th align="center" width="100">Discount Amount</th>

            <td align="center" width="100">FOC</td>
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
          <?php
          $count=1;
          $net=0;
            foreach($row->result() as $list):
              echo form_hidden('old_product_code[]',$list->product_code);
              echo form_hidden('old_quantity[]',$list->quantity);
              echo form_hidden('old_foc[]',$list->foc);
             

          ?>

         <tr class="clonethis">
         <td><?=$count?></td>
              <td><?=form_input('product_code[]',$list->product_code,'class="form-control-discount form-control pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off" ');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]',$list->product_name,'class="form-control-discount form-control" autocomplete="off" ');?><?=form_hidden("category[]","")?><?=form_hidden("type[]","")?></td>
               <td> <?=form_input('quantity[]',$list->quantity,' class="qty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td > <?=form_input('price[]',$list->price,' class="form-control-discount price price_autocomplete" autocomplete="off" onkeyup="admincloneform(event)"  onchange="admincloneform(event)"');?>
             </td>

                  <td> <?=form_input('discount[]',$list->discount,' class="form-control-discount discount clonelastone"  onkeyup="consinement_cloneform(event,this.value)"  autocomplete="off"');?></td> 
                   <td> <?=form_input('discount_amount[]',$list->discount2,' class="form-control-discount discount_amount clonelastone"  onkeyup="consinement_cloneform(event,this.value)"  autocomplete="off"');?></td> 

               <td> <?=form_input('foc[]',$list->foc,' onblur="calamount(this.value)" class="form-control-discount form-control discount clonelastone"');?></td> 

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

     <?php //form_hidden("discounttotal",0,"id='discount'")?>

   
    <table class="table sale-footer"> 
      
       
      
            <tr>
              <td width="50%"><?="သင့္ေငြ"?></td>
              <td><?=form_input('totalamount',$net,'id="total" class="form-control" autocomplete="off" readonly');?></td>
            </tr>
              <tr>
                <td>  ပို႕ခ</td>
                 <td><?=form_input('deliveryfees',$show->deliveryfees,'class="form-control" id="deliveryfees" autocomplete="off" onkeyup="calreceived(document.getElementById(\'total\').value,this.value,document.getElementById(\'jackpot\').value)"');?></td>
              </tr>
           

            <tr id="jackpot_row">
              <td><?="Discount ေပးေငြ"?></td>
              <td><?=form_input('jackpot',$show->jackpot,'class="form-control" id="jackpot"  onkeyup="calreceived(document.getElementById(\'total\').value,document.getElementById(\'deliveryfees\').value,this.value)" onblur="calrefund(\'received\')" autocomplete="off"')?></td>
           </tr>


           <tr id="netamount">
              <td ><?="စုစုေပါင္း"?></td>
              <td><?=form_input('nettotal',$show->nettotal,'class="form-control" id="nettotal" autocomplete="off" readonly');?></td>
           </tr>
              
            <!--  <div id="creditpay"> -->

                  
                <tr id="totaldebt" class="paytypename <?=($show->paytype =="credit") ? 'creditpay' : 'cashpay' ?>">
                      <td><?="ယခင္က်န္ေငြ (-) / ပိုေငြ"?></td>
                      <td><?=form_input('totaldebt',$show->totaldebt,' class="form-control" autocomplete="off" readonly');?></td>
                    </tr>

                    
                     <tr class="paytypename <?=($show->paytype =="credit") ? 'creditpay' : 'cashpay' ?>">
                      <td><?="စုစုေပါင္း က်သင့္ေငြ"?></td>
                      <td><?=form_input('alltotal',$show->nettotal-$show->totaldebt,'id="alltotal" class="form-control" autocomplete="off" readonly');?></td>
                    </tr>
                 
                 
                   <tr id="receive_row" class="paytypename <?=($show->paytype =="credit") ? 'creditpay' : 'cashpay' ?>">
                      <td><?=$receive?></td>
                      <td><?=form_input('received',$show->received,'class="form-control" id="received" onkeyup="calrefund(this.value)" onblur="calrefund(this.value)" autocomplete="off"');?></td><!-- onblur="calrefund(this.value,document.getElementById(\'netamount\').value)" -->
                   </tr>

                
               
                   <tr id="requierdamounttopayment" class="paytypename <?=($show->paytype =="credit") ? 'creditpay' : 'cashpay' ?>">
                         <td><?="ယခုက်န္ေငြ (-) / ပိုေငြ"?></td>
                         <td> <input type="text" name="exceedamount" id="exceedamount" value="<?=$show->exceedamount?>"  class="form-control" autocomplete="off" readonly/></td>
                    </tr>
                     
        <!--   </div> -->
        
           <tr>
             <td> </td>
             <td>  
             <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'sale\')" autocomplete="off"');?> 
             </td>
           </tr>

          
     </table>

  
<?php
echo form_close();
?>
  