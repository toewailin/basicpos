
<?=form_open("",'class="cloneable-form" id="general_income"');


   
echo form_hidden("authority",get_cookie("admin_cookie"));
    ?>
 <div class="container">

<h1 align="center">Income Entry From </h1>
<br/>


  <?=form_open('',' class="cloneable-form" id="consinement_sale" ');?>
     <div class="container" style="margin-bottom:50px;">

<div class="container">
<table class="table"> 
 <tr>
    
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date("d-m-Y")?>"/>
    </td>
     </tr>
</table>
 
  </div>
              <table class="table table-bordered table-hover tablesorter">
                          <caption>
</caption>
                <tbody id="SourceWrapper">
                <tr>
                    
                    <td class="center"><?=$description?></td>
                                        <td class="center">Income Category</td>

                     <td class="center"><?=$amount?></td>                 
                    
                  
                    <td></td>
                </tr>
                <tr class="clonethis title">
                   <td> <?=form_input('description[]','','class="form-control-discount"');?></td>
                       <td> <?=form_dropdown('income_category[]',$income_category,'','class="form-control-discount" onkeyup="admincloneform(event)"');?></td>

                     <td> <?=form_input('total[]','','class="form-control-discount total" onkeyup="admincloneform(event)"');?></td>
                      
                      <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                  <tr>
                    <td colspan="2"> </td>
                    
                    <td align="right">
                    <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'general_income\')"');?></td>
                </tr> 
                
              </table>
            </div>
 <?=form_close();?>
 