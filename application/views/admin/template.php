<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Smart Sale  | Backend Data Administrator</title>
  <base href="<?=base_url()?>"></base>

  <script src="js/jquery.js"></script>

  <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="css/buttons.dataTables.min.css" />
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="js/jszip.min.js"></script>
  <script type="text/javascript" src="js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="js/buttons.print.min.js"></script>
  <script type="text/javascript">
            $(document).ready(function () {
                $('#center-content').DataTable({
                    "bPaginate": false,
                    dom: 'Bfrtip',
                    columnDefs: [
                     { type: 'natural', targets: 0 }
                    ],
                    buttons: [{
                        extend: 'excel',
                        text: 'Excel',
                        className: 'exportExcel',
                        filename: '<?php echo $this->uri->segment(3)?>',
                        exportOptions: { modifier: { page: 'all'} }
                    },
                    {
                      extend: 'print',
                      text: window.printButtonTrans,
                      exportOptions: {
                        columns: ':not(:last-child)'
                        }
                    }
                   /* {
                        extend: 'pdf',
                        text: 'PDF',
                        className: 'exportExcel',
                        filename: 'Test_Pdf',
                        
                        exportOptions: { modifier: { page: 'all'} }
                    }
                    */
                    ]
                });
            });
        </script>

<link href="css/jquery.ui.all.css" rel="stylesheet">
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
<!--  <link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">      
   <link rel="stylesheet" type="text/css" href="css/main.css">
      <style>
  .ui-autocomplete {
    max-height: 200px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 200px;
  }
  </style>
  <style type="text/css">
  
 .hover-img
 {
  position: absolute;
  width: 700px;
    z-index: 100;
    float:left;
 }
 .gallery
 {
  width: 80px;
  float: left;
 }

</style>
<script type="text/javascript">
 $(document).ready(function(){

        $('.gallery').click(function() {

            var img = $(this).attr('alt');
            $(this).attr("src","images/photo/full/"+img);
             $(this).removeClass("gallery").addClass("hover-img");
           
        }).each(function() {
            $(this).css('cursor', 'pointer');
        });


         $(".gallery").mouseout(function () {
         var img = $(this).attr('alt');
            $(this).attr("src","images/photo/thumbs/"+img);
             $(this).removeClass("hover-img").addClass("gallery");

        });




    });
 
</script>
</head>



<body onload="checkstock()">

 <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navigation" align="center">
       <?php /*anchor('admin','
        <div class="navBox c1">
            <div class="navIcon"><img src="images/nav/home.png" border="0"></div>
            <div class="navtext">Home</div>


</div>')*/?><!-- navBox c1 -->
 <a> <div class="navBox c1">
                <div class="navIcon"><img src="images/nav/brand.png" border="0"></div>
                <div class="navtext"> Setups <i class="fa fa-caret-down"></i></div>
                <div class="navDrop dropL c1">
                <div class="navTrim dropTrim"></div>

                <?=anchor("admin/data_list/unit",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Code & Price  </div></div>')?>                           
   
               <?=anchor("admin/data_list/customer",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Customer Lists </div></div>')?>
               <?=anchor("admin/data_list/supplier",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Supplier Lists </div></div>')?>      
               <?=anchor("admin/data_list/staff",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Staff Lists </div></div>')?>      
                <?=anchor("admin/data_list/remind_purchase",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> ကုန္ခါနီ ပစၥည္း Alert</div></div>')?><!-- Run Out Remind Alert -->


            </div>
               
            </div></a>


         <a>
        <div class="navBox c4">
            <div class="navIcon"><img src="images/nav/purchase.png" border="0"></div>
            <div class="navtext">Purchase <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c4">
                <div class="navTrim dropTrim"></div>
               
                 <?=anchor("admin/data_list/purchase",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Purchasing Lists </div></div>')?>



            
            </div>
        </div>
        </a>



 <a><div class="navBox c3">
            <div class="navIcon"><img src="images/nav/inventory.png" border="0"></div>
            <div class="navtext">Inventory <i class="fa fa-caret-down"></i></div>
          
          <div class="navDrop dropL c3">
            <div class="navTrim dropTrim"></div>
            
            
             <?=anchor("admin/data_list/showroom_stock",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Stock Inventory</div></div>')?>
           
             

            
            
          </div>
        </div></a>




 <a><div class="navBox c8">
            <div class="navIcon"><img src="images/nav/inventory.png" border="0"></div>
            <div class="navtext">Stock History <i class="fa fa-caret-down"></i></div>
          
          <div class="navDrop dropL c8">
            <div class="navTrim dropTrim"></div>
            
       
             <?=anchor("admin/data_list/showroom_stock_history",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Check History</div></div>')?>
           

            
            
          </div>
        </div></a>


          

        



        <a><div class="navBox c6">
                <div class="navIcon"><img src="images/nav/dollar.png" border="0"></div>
                <div class="navtext">Sale <i class="fa fa-caret-down"></i></div>

                <div class="navDrop dropL c6">
                  <div class="navTrim dropTrim"></div>
                  
                  <?php echo anchor("admin/data_list/sale",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Sale Lists</div></div>','')?>
                   

                </div>
            </div></a>





         <a>

         <div class="navBox c10">
            <div class="navIcon"><img src="images/nav/dollars.png" border="0"></div>
            <div class="navtext">Outcomes <i class="fa fa-caret-down"></i></div>
            
                        <div class="navDrop dropL c10">
                <div class="navTrim dropTrim"></div>

                  <?=anchor("admin/data_list/outcome_category",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Outcome Categories</div></div>')?>
               
                  <?=anchor("admin/data_list/general_outcome",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> General Outcomes</div></div>')?>
              
   <?=anchor("admin/data_list/income_category",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Income Categories</div></div>')?>
               
                  <?=anchor("admin/data_list/general_income",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> General Incomes</div></div>')?>
              
                
            </div>
         
        </div>

        </a>      


       

         <a>

        <div class="navBox c9">
            <div class="navIcon"><img src="images/nav/stats.png" border="0"></div>
            <div class="navtext">ေရာင္းအား <i class="fa fa-caret-down"></i></div>
            
                        <div class="navDrop dropL c9">
                <div class="navTrim dropTrim"></div>
                 <?=anchor("admin/data_list/bysaleamount",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> ေငြ ပမာဏျဖင့္</div></div>')?>
               <?=anchor("admin/data_list/byqtyamount",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> ပစၥည္း ပမာဏျဖင့္</div></div>')?>
               
              
            </div>
         
        </div>

        </a>


 <a>


         <div class="navBox c14">
         <?php
        $check_shop_stock_remind=$this->admin_model->check_shop_stock_remind();
         ?>
         
            <div class="navIcon"><img src="images/nav/remindalert.png" border="0"></div>
            <div class="navtext">ကုန္ခါနီး <i class="fa fa-caret-down"></i></div>
            
            <div class="navDrop dropL c14">
                <div class="navTrim dropTrim"></div>

                <?=anchor("admin/data_list/shop_stock_alert",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> ကုန္ခါနီး ပစၥည္းမ်ား<span class="badge" id="shopstockalert">'.$check_shop_stock_remind->num_rows().'</span></div></div>')?>
              <?php //anchor("admin/data_list/stock_alert",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> ဂိုေဒါင္တြင္းရွိ ကုန္ခါနီး ပစၥည္းမ်ား <span class="badge" id="stockalert">'.$check_remind->num_rows().'</span></div></div>')?>
              
            </div>
            <span class="badge" id="alert">
         <?php
         echo ($check_shop_stock_remind->num_rows());
         ?>
         </span>
        </div>

        </a>


  <a>
        <div class="navBox c11">
            <div class="navIcon"><img src="images/nav/profit.png" border="0"></div>
            <div class="navtext">CASH <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c11">
               
            
                    <?=anchor("admin/data_list/monthly_cash_book",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Monthly Cash Book</div></div>')?>
                    <?=anchor("admin/data_list/supplier_balance_sheet",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Supplier Balance Sheet</div></div>')?>
                    <?=anchor("admin/data_list/customer_balance_sheet",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Customer Balance Sheet</div></div>')?>
               
            </div>
        </div>
        </a>


        <a>

         <div class="navBox c15">
            <div class="navIcon"><img src="images/nav/logout1.png" border="0"></div>
            <div class="navtext"><?=get_cookie("admin_cookie")?> <i class="fa fa-caret-down"></i></div>
            
            <div class="navDrop dropL c15">
                
                 <?=anchor("admin/insert_form/account_setting",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-gear"></i> Account  Setting </div></div>')?>

                     <?=anchor("admin/data_list/user",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-user"></i> User Setting </div></div>')?>
          
               
               <?=anchor("admin/logout",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-power-off"></i> Logout</div></div>')?>
              
                 
            </div>
         
        </div>
    </a>

     <a>

         <div class="navBox c16">
            <div class="navIcon" onclick="window.print()"><img src="images/nav/print.png" border="0"></div>
            
            <div class="navDrop dropL c15">
                <div class="navTrim dropTrim"></div>
               
               <?php echo anchor("admin/backup_data/".$this->uri->segment(3),'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-cloud-download"></i> Excel</div></div>')?>
             
                 
            </div>
            
    </a>

    </div>
      </nav>

      <div id="page-wrapper">
       
        <!-- <div class="row"> -->
          <div class="" id="dialog_frame">

         

            <?php $this->load->view('admin/'.$main_content); ?>

</div>
 <!-- </div> -->
 </div><!-- /#wrapper -->

    <!-- JavaScript -->

   <div id="divLoading"> 
    </div>

  </body>
   <script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/template.js"></script>

 

  <script>

  
  $(function() {

     $( ".date" ).datepicker({
  dateFormat: "dd-mm-yy"
});
    $( "#date1" ).datepicker("option", "dateFormat","d-m-yy");
    $( "#date2" ).datepicker("option", "dateFormat","d-m-yy");
     $( "#date3" ).datepicker("option", "dateFormat","d-m-yy");
     $( ".date" ).datepicker("option", "dateFormat","d-m-yy");
  });



$(document).on('focus', "input.autocomplete", function() {
    $(this).autocomplete({
source: "<?=base_url()?>index.php/admin/search",
minLength: 0,//search after two characters
select: function(event,ui){
    //do something
    }
});
});



$(document).on('focus', "input.price_autocomplete", function() {
         pcode=$(this).parent().parent().find("input[name='product_code[]']").val();

    $(this).autocomplete({

source: "<?=base_url()?>index.php/admin/price_search/"+pcode,
minLength: 0,//search after two characters
select: function(event,ui){
    //do something
    }
});
});

  </script>
</html>


