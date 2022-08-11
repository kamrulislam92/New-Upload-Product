<!doctype html>
<html lang="en">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/utilities.css">
  
</head>
  <body>
   <section class="section_main">
        <div class="categories">
            <div class="container">
                <ul class="flex">
                    <li><a href="<?php echo base_url('My_controller/add_product');?>"><i class="fa fa-plus" aria-hidden="true"></i> <span> New Product</span></a></li>
                    <li><a href="<?php echo base_url();?>product_list"><i class="fa fa-th-list" aria-hidden="true"></i> <span> Product List</span></a></li>
                    <li><a href="<?php echo base_url('My_controller/category')?>"><i class="fa fa-th-list"></i> <span>Category</span></a></li>
                    <li><a href="<?php echo base_url('My_controller/sub_category')?>"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Sub Category</span></a></li>
                    <li><a href="<?php echo base_url('My_controller/sub_child_category')?>"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Sub Child Cetegory</span></a></li>
                    <li><a href="<?php echo base_url('My_controller/color')?>"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Color</span></a></li>
                    <li><a href="<?php echo base_url('My_controller/size')?>"><i class="fa fa-th-list" aria-hidden="true"></i> <span>Size</span></a></li>
                </ul>
            </div>