<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Product</h2>
  <form method="post" action="<?php echo base_url('add');?>" enctype='multipart/form-data'>
    <div class="form-group">
	<label for="email">Product Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Product Name" name="product_name">
     <?php echo form_error('product_name'); ?>
	  </div>
    <div class="form-group">
      <label for="pwd">Product Price</label>
      <input type="number" class="form-control"  placeholder="Enter Product Price" name="product_price">
    <?php echo form_error('product_price'); ?>
	  </div>
	
	 <div class="form-group">
      <label for="pwd">Product Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Product Desccription"  name="product_description">
          <?php echo form_error('product_description'); ?>
	  </div>
	<div class="form-group">
      <label for="pwd">Product Image:</label>
      <input type='file' name='product_image[]' multiple="">
	   <?php echo form_error('product_image'); ?>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="javascript:window.history.go(-1);" class="btn btn-primary">Back</a>
	</form>
</div>

</body>
</html>
