
<?=form_open("admin/edit_general_income","id='general_income'");
 
    echo form_hidden('id',$row->id);?>
   
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
              <caption>
             <h1> <small>General Income Update Form</small></h1>
              <h5><?php echo $errmessage; ?></h5></caption>
            </caption>
                <tbody>
                
                  <tr>
                  <tr>
                    <td align="right"><label><?=$description?> :</label></td>
                    <td><?=form_textarea('description',$row->description,'class="form-control"')?></td>
                    </tr>
                     <tr>
                    <td align="right"><label><?=$amount?> :</label></td>
                    <td><?=form_input('total',$row->total,'class="form-control" id="total" ')?></td>
                    </tr>

                    
                  <tr>
                    <td align="right"> <label><?=$date?> :</label></td>
                    <td><?=form_input('date',$row->date,'class="form-control"')?></td>
                  </tr>
               
                     <tr>
                    <td align="right"><label>income Category :</label></td>
                     <td><?=form_dropdown('income_category',$income_category,$row->income_category,'class="form-control"')?></td>
                  </tr>
                   
                  <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'general_income\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
