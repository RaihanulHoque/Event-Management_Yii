
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/pricing.css" rel="stylesheet">
   </head>
   <body>
<div class="table-one">
        <div class="table-one__header">
	          <div class="table-one__header-part">Choose plan</div>
	          <div class="table-one__header-part">Prices</div>
	          <div class="table-one__header-part">Quantity</div>
	          <div class="table-one__header-part" style="text-align:right !important;">Buy Tickets</div>
        </div>
        <div class="table-one__body">
        	<?php 
        		//this page is a part of Event View Page
        		echo TicketCategory::getEventCategory($model->id); //event
        	?>        	
          <!--.table-one__cell Premium-->
          <!--.table-one__cell Professional-->
          <!--.table-one__cell Unlimited-->
        </div>
      <div class="table-one__header" style="height:5px; border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px; border-top-left-radius: 0;
    border-top-right-radius: 0;">
           
        </div>
	  
	  </div>
	  </body>