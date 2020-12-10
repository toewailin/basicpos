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


   <h3 style="margin-top: 0px">D&K Distribution</h3>
   <h4>လူသံုးကုန္ႏွင့္ အလွကုန္ ပစၥည္းမ်ိဳးစံု ျဖန္႕ခ်ိေရး</h4>


               <div class="col-md-12">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead  class="thead-over">
                      <tr>
                      <th>  No</th>
                        <th >Product_code</th>
                        <th >Product_name</th>
                          <th>  Category</th>

                        <th >Quantity</th>
                        <th >Price</th>
                           <th> Total</th>

                   
                         <th >Date</th>
                          
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                  $count=1;
                    $totalqty=0;
                 $totalinvest=0;
            foreach($lists->result() as $list):
              $formid="form".$list->id;

                     ?>

                      <tr>
                                            <td><?=$count?></td>

                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>    
                            <td><?=$list->category?></td>                       
                     
                         <td><?=number_format($list->remainqty)?> </td>  
                        <td><?=number_format($list->price)?></td>
                          <td><?=number_format($list->price*$list->remainqty)?></td>
                        

                        
                          <td width="150">
                        <?=$list->date?>
                        
                         </td>
                         
                      </tr>
                    
                       <?php
                       $count++;
                       $totalqty+=$list->remainqty;

                       $totalinvest+=$list->remainqty*$list->price;
            endforeach;
                  
                        ?>
                         <tr>
                    <td align="center" colspan="4"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td>
                                         <td><?=$totalqty?> pcs</td> 

                    <td> </td>

                    <td> <br/><?=number_format($totalinvest)?><br/></td><td > <br/><br/></td>
                    </tr>
                    </tbody>

                  </table>

                
                </div>
          
     




</table>
</center>
</body>
</html>