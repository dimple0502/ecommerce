<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Product</h2>
  <form method="post" action="<?php echo base_url('edit/'.$EDITDATA[0]->product_id.'');?>" enctype='multipart/form-data'>
    <div class="form-group">
      <label >Product Name:</label>
      <input type="text" class="form-control" value="<?php echo $EDITDATA[0]->product_name;?>"  placeholder="Enter Product Name" name="product_name">
     </div>
    <div class="form-group">
      <label >Product Price</label>
      <input type="number" class="form-control" value="<?php echo $EDITDATA[0]->product_price;?>" placeholder="Enter Product Price"  name="product_price">
    </div>
	
	 <div class="form-group">
      <label >Product Desccription:</label>
      <input type="text" class="form-control" value="<?php echo $EDITDATA[0]->product_description;?>" placeholder="Enter Product Description"  name="product_description">
     </div>
	<div class="form-group">
      <label for="pwd">Product Image:</label>
      <input type='file' name='product_image[]' multiple="">
	</div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="javascript:window.history.go(-1);" class="btn btn-primary">Back</a>
	
	</form>
</div>

</body>
</html>
