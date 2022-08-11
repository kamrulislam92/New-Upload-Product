<?php 
 $this->load->view('nav/header');
 ?> 

<?php 
    //   print "<pre>";
    //   print_r($sub_categories_view);
      ?>

<div class="information">
                
     <h3>Product Information</h3>
    <section class="add_category">
        <form action="<?php echo base_url('My_controller/update_sub_category/'.$sub_categories_view->sub_cat_id);?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Sub Category Name</label>
                    <input type="text" name="sub_category_name" id="" class="form-control" value="<?php echo $sub_categories_view->sub_category_name;?>">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_name" id="">
                        <option value="">---Select Category---</option> 
                        <?php foreach($getCategory as $getCategories){ 
                            if($sub_categories_view->category_name == $getCategories->category_id){
                        ?> 
                        <option selected value="<?php echo $getCategories->category_id ; ?>"><?php echo $getCategories->category_name; ?></option>
                        <?php }else{ ?>
                            <option value="<?php echo $getCategories->category_id ; ?>"><?php echo $getCategories->category_name; ?></option>
                        <?php }} ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="sub_category_image" id="" class="form-control" value="<?php echo $sub_categories_view->sub_category_image;?>">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="">
                        <option value="">---Status---</option>
                        <option <?php echo ($sub_categories_view->status == 'Disable')? "selected": ''; ?> value="Disable">Disable</option>
                        <option <?php echo ($sub_categories_view->status == 'Enable')? "selected": ''; ?> value="Enable">Enable</option>
                    </select>
                </div>

        
            <hr>
            <input type="submit" value="Reset" class="reset">
            <input type="submit" value="Update Sub Category" class="success">
        </form> 
    </section> 
</div>

<?php 
 $this->load->view('nav/footer');
 ?>