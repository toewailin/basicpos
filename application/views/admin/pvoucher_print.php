
<html moznomarginboxes mozdisallowselectionprint>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Smart Sale  | Backend Data Administrator</title>
	<base href="<?=base_url()?>"></base>


<link href="css/jquery-ui.css" rel="stylesheet">
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

   
    
  
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <style type="text/css">
.address
{
	font-size: 11px;
}

 @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
        margin: 0mm 15mm 10mm 15mm; /* margin you want for the content */
    }
    td h3 ,h2
    {
      color:blue !important;
      margin: 0;
    }

    th
    {
      border-bottom:1px solid gray;
    }

    table 
    {
     width: 100%;

text-align: center;
margin-bottom: 20px;
padding: 3px;
  line-height: 1.428571429;
  vertical-align: top;
    }

    p
    {
    	margin: 2px;
    }
    p:last-child
    {
    	margin-bottom: 10px;
    }

.font1
{
  color:red !important;
}

.font2
{
  color:blue !important;
}

.footer
{
  font-family:Zawgyi-One;
  font-size:11px;
  color:blue !important;
  position:absolute;
  bottom:0;
  text-align:center;
  width:100%
}

   </style>

</head>
<body onload="javascript:window.print()">
<center>
     <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=" Voucher No : ".$this->uri->segment(4)?></h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th ><?="No"?></th>
                        <th><?="Product_code"?></th>
                        <th><?="Product_name"?></th>
                         <th><?="Quantity"?></th>
                        <th ><?="Unit"?></th>
                        <th><?="Price"?></th>
                       <th>Total</th>
                       
                      <th><?="Date"?></th>
                       
                        <!--  <th><?=$edit?>/<?=$delete?></th> -->
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
                   // $totaltransportationcharges=0;
                   // $totaltransferrate=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td><?=$count?></td>
                       <td ><?=$list->product_code?></td>
                        <td ><?=$list->product_name?></td>
                          <td ><?=$list->quantity?></td>
                          <td ><?=$list->unit?></td>  
                          <td ><?=$list->price?></td>
                        
                         <td><?=$list->price*$list->quantity?></td>
                                       <td ><?=$list->date?></td>                         
                       <!--   <td >
                      
                          <a href="javascript:showdialogform('edit_form/purchase/<?=$list->id?>')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','purchase','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td> -->
                     
                      </tr>
                     <?php
                     $count++;
                    $total+=$list->total;
                    //$totaltransportationcharges += $list->totaltransportationcharges
                  endforeach;
                  ?>
                  <tr>
                    <td align="right" colspan="6">All Total </td> <td align="center"> <?=number_format($total)?></td></td>
                    </tr>
                  </tbody>
                  </table>
                 
                </div>

              
               
              </div>
            </div>
</center>
</body>
</html>