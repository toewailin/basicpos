<style type="text/css">
  
  h3.success_history {

    text-align: center;
    padding: 30px 0px;
    text-transform: capitalize;
    font-size: 2.5em;
    color: green;
    display: block;

}

a.check_here
{
  text-align: center;
}
</style>
<div class="container">
            
             
            <div class="panel panel-primary">
            <div class="panel-heading heading-over">
              
              </div>
            
              <div class="panel-body">
                 <div class="table-responsive panel-over">
             
             <h3 class="success_history"><?=$message?></h3>

<?=anchor("admin/data_list/showroom_stock_history","<i class='fa fa-carret-right'></i> Check Here","class='btn btn-primary check_here'")?>
              
      </div>
    </div>
  </div>
 </div>
