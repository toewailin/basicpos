
<?=form_open("",'id="unit"');?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Unit Entry Form</small></h1>
</caption>
                <tbody>

                   <tr>
                    <td align="right">   <label>Product Code </label></td>
                    <td><?=form_input('product_code','','class="form-control" onkeyup="Pgrabdata(this.value)" ')?><br>
                    <span class="err"><?=form_error("from")?></span></td>
                    </tr>
                     <tr>
                    <td align="right">   <label>Product Name </label></td>
                    <td><?=form_input('product_name','','class="form-control" id="product_name"')?><br>
                    <span class="err"><?=form_error("from")?></span></td>
                    </tr>

                       <tr>
                    <td align="right">   <label>Category</label></td>
                    <td><?=form_input('category','','class="form-control" id="category" onkeyup="get_dropcategory(this.value,event)" onblur="get_drophide(event)" autocomplete="off"');?>
                    <div class="display list2"></div>
                    <span class="err"><?=form_error("category")?></span></td>
                    </tr>

                     <tr>
                    <td align="right">   <label><?=$unitname?> </label></td>
                    <td><?=form_input('unit','','class="form-control" id="unit" onkeyup="get_dropunit(this.value,event)" onblur="get_drophide(event)" autocomplete="off"');?>
                    <div class="display list2"></div>
                    <span class="err"><?=form_error("unit")?></span></td>
                    </tr>

                 
                     <tr>
                    <td align="right">   <label>Item Count (Quantity) </label></td>
                    <td><?=form_input('smallest_itemcount','','class="form-control"')?><br>
                    <span class="err"><?=form_error("from")?></span></td>
                    </tr>

                             
                  
                     <tr>
                    <td align="right">   <label>Price </label></td>
                    <td><?=form_input('price','','class="form-control"')?><br>
                    <span class="err"><?=form_error("price")?></span></td>
                    </tr>
                 <tr>
               
                 <tr>
                    <td> </td> 
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'unit\')"');?></td>
                </tr>
              
                </tbody>
              </table>
            </div>
 <?=form_close();?>
  
 