<?php 

 ?>
<?=form_open_multipart("admin_unit/update_unit",'id="unit"');?>
<?php

echo form_hidden('id',$row->id);
echo form_hidden('photo',$row->photo);

?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Unit Update Form</small></h1>
</caption>
                <tbody>
                
                   <tr>
                    <td align="right">   <label>Product Code </label></td>
                    <td><?=form_input('product_code',$row->product_code,'class="form-control pcode autocomplete" onkeyup="Pgrabdata(this.value)"')?><br>
                    <span class="err"><?=form_error("from")?></span></td>
                    </tr>
                     <tr>
                    <td align="right">   <label>Product Name </label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control" id="product_name"')?><br>
                    <span class="err"><?=form_error("from")?></span></td>
                    </tr>

                     <tr>
                    <td align="right">   <label>Product Image </label></td>
                    <td><?=form_upload('userfile','','class="form-control" id="product_name"')?><br>
                    <span class="err"><?=form_error("userfile")?></span></td>
                    </tr>

                      <tr>
                    <td align="right">   <label>Category</label></td>
                    <td><?=form_input('category',$row->category,'class="form-control" id="category" onkeyup="get_dropcategory(this.value,event)" onblur="get_drophide(event)" autocomplete="off"');?>
                    <div class="display list2"></div>
                    <span class="err"><?=form_error("category")?></span></td>
                    </tr>
                    <tr>                 
                
                               
                  
                     <tr>
                    <td align="right">   <label>Sale Price </label></td>
                    <td><?=form_input('price',$row->price,'class="form-control"')?><br>
                    <span class="err"><?=form_error("price")?></span></td>
                    </tr>

                 
                 <tr>
               
                 <tr>
                    <td> </td> 
                    <td><?php echo form_submit('save',$save,'class="btn btn-primary btn-lgy" ');?></td>
                </tr>
              
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 