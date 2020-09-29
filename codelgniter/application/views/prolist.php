<html>
<head>
<title> Product</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
        
</head>

<body>
<div class="container">
<div class="row">
 
    <h3 Algin="center">Product List</h3>
 </div>
<hr>
        <div class="col-12 text-right">
             <a href=<?php echo base_url().'index.php/dashboard_controller/ShowDashboard';?> class="btn btn-primary">Go to Dashboard</a>
        </div>
<div class='row'>
        <div class="col-12">
           <table class="table table-striped">
             <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Price</th>
               <th>Desciption</th>
               
            </tr>

            <?php 
                if(!empty($pformdb))
                {
                        foreach($pformdb as $single_product_row){
                ?>
                <tr>
                <td> <?php echo $single_product_row['id'] ?> </td>
                <td> <?php echo $single_product_row['name'] ?> </td>
                <td> <?php echo $single_product_row['price'] ?> </td>
                <td> <?php echo $single_product_row['description'] ?> </td>
                </tr>

                <?php
                        }
                }
                ?>
</div>
</div>
</div>
</body>
</html>
