<script type="text/javascript">
  


$(document).on('focus', "input.title_autocomplete", function() {
    $(this).autocomplete({
source: "http://192.168.1.100/cnc/index.php/admin/title_search/general_outcome",
minLength: 0,//search after two characters
select: function(event,ui){
    //do something
    }
});
});

</script>
<?=form_open("",'class="cloneable-form" id="general_outcome" utocomplete="on"');


   
echo form_hidden("authority",get_cookie("admin_cookie"));
    ?>
 <div class="container">

<h1 align="center">Outcome Entry From </h1>
<br/>


  <?=form_open('',' class="cloneable-form" id="consinement_sale" ');?>
     <div class="container" style="margin-bottom:50px;">

<div class="col-md-8"></div>
<div class="col-md-4">
<table class="table"> 
<tr>  <td> Date : </td> <td>

      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date("d-m-Y")?>"/>

</td></tr>
</table>
 
  </div>
              <table class="table table-bordered table-hover tablesorter">
                          <caption>
</caption>
                <tbody id="SourceWrapper">
                <tr>
                    
                    <td class="center"><?=$description?></td>
                                        <td class="center">Outcome Category</td>

                     <td class="center"><?=$amount?></td>                 
                    
                  
                    <td></td>
                </tr>
                <tr class="clonethis title">
                   <td> <?=form_input('description[]','','class="form-control-discount title_autocomplete" autocomplete="on"');?></td>
                       <td> <?=form_dropdown('outcome_category[]',$outcome_category,'','class="form-control-discount" onkeyup="admincloneform(event)"');?></td>

                     <td> <?=form_input('total[]','','class="form-control-discount total" onkeyup="admincloneform(event)"');?></td>
                      
                      <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                  <tr>
                    <td colspan="2"> </td>
                    
                    <td align="right">
                    <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'general_outcome\')"');?></td>
                </tr> 
                
              </table>
            </div>
 <?=form_close();?>
 