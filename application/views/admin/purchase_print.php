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
     <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"><?="No"?></th>
                                                <th width="150"><?="Date"?></th>

                        <th width="130"><?="Voucher"?></th>
<!--                         <th width="220"><?=$suppliername?></th>
 -->                         <th width="100">Total Quantity</th>
                        <th><?="Total"?></th>
                       

                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
                    $alltotalqty=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                                               <td width="150"><?=$list->date?></td>                         

                       <td width="130"><?=$list->voucherno?></td>
<!--                         <td width="220"><?=$list->supplier?></td>
 -->                          <td width="100"><?=number_format($list->totalqty)?> pcs</td>
                         <td width="100"><?=number_format($list->nettotal)?></td>

                      </tr>
                     <?php
                     $count++;
                    $total+=$list->nettotal;
                    $alltotalqty+=$list->totalqty;

                  endforeach;
                  ?>
                 <tr>
                    <td align="right" colspan="3">All Total </td> <td><?=number_format($alltotalqty)?> pcs</td><td> <?=number_format($total)?></td>
                    </tr>
                  </tbody>
                  </table>
                 
                </div>

              
               
              </div>
</center>
</body>
</html>