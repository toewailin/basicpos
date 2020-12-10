<br/>
<br/>
<?=form_open("",'class="cloneable-form" id="supplier_balance_sheet"');


   
echo form_hidden("authority",get_cookie("admin_cookie"));
    ?>
 <div class="container">

<h1 align="center">Supplier Balance Sheet Entry From </h1>
<br/>


  <?=form_open('',' class="cloneable-form" id="supplier_balance_sheet" ');?>
     <div class="container" style="margin-bottom:50px;">

<div class="col-md-8"></div>
<div class="col-md-4">

 
  </div>
             
             <table class="table table-bordered table-hover table-striped tablesorter">
               <tr>
                 <td>Supplier Name</td><td> 

                 <?=form_dropdown("supplier",$supplier,"","class='form-control'")?>
                 </td>
               </tr>
              
               <!-- <tr>
                 <td>Bank Name</td><td> 

                 <?=form_dropdown("bank_account",$bank_account,"","class='form-control'")?>
                 </td>
               </tr>
 -->
                


                   <tr>
                 <td>ေပးသူအမည္</td><td>                   
                <span><input type="text" name="payname" class="form-control" /></span>
              
                 </td>
               </tr>

              <tr>
                 <td>ေပးေငြ</td><td>                   
                <span><input type="text" name="returnamount" class="form-control" /></span>
              
                 </td>
               </tr>
                   <tr>
                 <td>မွတ္ခ်က္</td><td>                   
                <span><textarea name="note" class="form-control"/>

                </textarea></span>
              
                 </td>
               </tr>
               <tr>
                 <td>ရက္စြဲ</td><td>                   
                <span><input type="text" name="date" value="<?=date('d-m-Y')?>" placeholder="choose date" id="date" class="date form-control calender" />
                </span>
              
                 </td>
               </tr>
               <tr>
                 <td colspan="2" align="center">
                   
                 <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'supplier_balance_sheet\')"');?>
                 </td>
               </tr>
             </table>
            </div>
 <?=form_close();?>
 