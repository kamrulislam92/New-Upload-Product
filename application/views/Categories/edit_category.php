<?php 
 $this->load->view('nav/header');
 ?>

    <?php 
    //   print "<pre>";
    //   print_r($edit_single_product);
      ?>
<div class="information">
                
     <h3>Product Information</h3>
    <section class="add_category">
    <form action="<?php echo base_url('My_controller/update_category/'.$single_view_category->category_id);?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" name="category_name" id="" class="form-control" value="<?php echo $single_view_category->category_name?>">
            </div>
            <div class="form-group">
                <label for="">Category Image</label>
                <input type="file" name="category_image" id="" class="form-control" value="<?php echo $single_view_category->category_image?>">
            </div>
            <div class="form-group">
                <label for="">Category Status</label>
                <select name="status" id="">
                    <option value="">---Status---</option>
                    <option <?php echo ($single_view_category->status == 'Disable')? "selected": ''; ?> value="Disable">Disable</option>
                    <option <?php echo ($single_view_category->status == 'Enable')? "selected": ''; ?> value="Enable">Enable</option>
                </select>
            </div>

    
    <hr>
    <input type="submit" value="Reset" class="reset">
    <input type="submit" value="Update Category" class="success">
    </form>

    </section> 
</div>
<?php 
 $this->load->view('nav/footer');
 ?>
