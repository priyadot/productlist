<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>Welcome</h1>
        <div class="row">
            <div class="col-m8">
            <a href="<?php echo base_url().'index.php/product/ProductItem'; ?>" class="btn btn-primary">Add Products</a>
            <a href="<?php echo base_url().'index.php/product/ProductList'; ?>" class="btn btn-primary">Show Products</a>
            </div>
        </div>
    </div>
</body>
</html>