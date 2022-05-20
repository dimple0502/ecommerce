<!DOCTYPE html> 
 <html lang="en"> 
 <head> 
   <title>Product Listing</title> 
   <meta charset="utf-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
 </head> 
 <body> 
   
 <div class="container"> 
   <h2>Product List</h2> 
 <p><a href="<?php echo base_url('add');?>" class="btn btn-primary" style="float:right;margin-bottom:10px;">Add Product</a></p> 
   <table class="table table-bordered"> 
     <thead> 
       <tr> 
	     <th>Sr No.</th> 
         <th>Product Name</th> 
         <th>Product Desccription</th> 
		 <th>Edit</th> 
         <th>Delete</th> 
       </tr> 
     </thead> 
     <tbody> 
             
         <?php foreach($LISTDATA as $data) 
             {?> 
       <tr> 
         <td><?php echo $data->product_name;?></td> 
         <td><?php echo $data->product_price;?></td> 
         <td><?php echo $data->product_description;?></td> 
         <td><a href="<?php echo base_url('edit/'.$data->product_id);?>">Edit</a></td> 
         <td><a href="<?php echo base_url('delete/'.$data->product_id);?>">Delete</a></td> 
       </tr> 
             <?php } ?>
     </tbody> 
   </table> 
 </div> 
   
 </body> 
 </html> 
