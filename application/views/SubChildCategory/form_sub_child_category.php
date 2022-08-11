<?php 
 $this->load->view('nav/header');
 ?> 

<div class="information">
                
     <h3>Product Information</h3>
    <section class="add_category">
        <form action="<?php echo base_url('My_controller/insert_sub_child_category');?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_name" id="">
                        <option value="">---Select Category---</option> 
                        <?php foreach($getCategory as $getCategories){ ?> 
                        <option value="<?php echo $getCategories->category_id ; ?>"><?php echo $getCategories->category_name; ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="sub_category_name" id="">
                        <option value="">---Select Category---</option> 
                        <?php foreach($getSubCategory as $getSubCategories){ ?> 
                        <option value="<?php echo $getSubCategories->sub_cat_id  ; ?>"><?php echo $getSubCategories->sub_category_name; ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sub Child Category Name</label>
                    <input type="text" name="sub_child_cat_name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="">
                        <option value="">---Status---</option>
                        <option value="Disable">Disable</option>
                        <option value="Enable">Enable</option>
                    </select>
                </div>
            <hr>
            <input type="submit" value="Reset" class="reset">
            <input type="submit" value="Add Sub Category" class="success">
        </form> 
    </section> 
</div>

<?php 
 $this->load->view('nav/footer');
 ?>