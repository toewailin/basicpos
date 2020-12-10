
<?=form_open("",'id="income_category"');?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Income Category Entry Form</small></h1>
</caption>
                <tbody>
                
                                
                   <tr>
                    <td align="right">   <label><?=$title?> </label></td>
                    <td><?=form_input('title','','class="form-control"')?><br>
                    <span class="err"><?=form_error("title")?></span></td>
                    </tr>
                
               
                 <tr>
                    <td> </td> 
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'income_category\')"');?></td>
                </tr>
              
                </tbody>
              </table>
            </div>
 <?=form_close();?>
  
 