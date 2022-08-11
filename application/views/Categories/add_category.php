<?php 
 $this->load->view('nav/header');
 ?>
<div class="information">
                
     <h3>Product Information</h3>
    <section class="add_category">
    <form action="<?php echo base_url('My_controller/add_category');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" name="category_name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Category Image</label>
                <input type="file" name="category_image" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Category Status</label>
                <select name="status" id="">
                    <option value="">---Status---</option>
                    <option value="Disable">Disable</option>
                    <option value="Enable">Enable</option>
                </select>
            </div>

    
    <hr>
    <input type="submit" value="Reset" class="reset">
    <input type="submit" value="Add Category" class="success">
    </form>

    </section> 
</div>
<?php 
 $this->load->view('nav/footer');
 ?>