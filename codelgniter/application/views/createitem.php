<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>"> 

</head>

</body>
<div class="col-md-6" >
<div class="card-header">
<h3 Align="center">PRODUCT</h3>
<hr>
<form method="post"  name="productform" id="productform" action=<?php echo base_url()."index.php/Product/ProductItem";?>>
<div class="form" >

</div>
<div class="form-group" >
     <lable for="name">Name</lable>
     <input type="text" name="name" id="name" value="" class="form-control" placeholder="Name" >
</div>
<div class="form-group">
     <lable for="name">Price</lable>
     <input type="text" name="price" id="price" value="" class="form-control" placeholder="Price" >
     <?php echo form_error('price');?>
</div>
<div class="form-group">
      <lable for="name">Description</lable>
      <input type="text" name="description" id="description" value="" class="form-control" placeholder="Description" >
      <?php echo form_error('description');?>
</div>
<button class="btn btn-primary btn-block">Insert</button>
                       
</div>
</html>
