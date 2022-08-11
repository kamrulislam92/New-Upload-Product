<?php 
 $this->load->view('nav/header');
 ?> 

    <div class="add_category_form" >
        <ul >
            <li style="background:#66e0ff; hov:#0086b3;"><a href="<?php echo base_url('My_controller/back_color_list')?>"> <i class="fa fa-bars">&nbsp;Color List</i></a></li>
        </ul>
    </div>
<div class="information">  
            
     <h3>Product Information</h3>
    <section class="add_category">
        <form action="<?php echo base_url('My_controller/update_size/'.$Size_single_view->size_id);?>" method="post" enctype="multipart/form-data">
               
                <div class="form-group">
                    <label for="">Size</label>
                    <input type="text" name="size" id="" class="form-control" value="<?php echo $Size_single_view->size;?>">
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
            <input type="submit" value="Update Size" class="success">
        </form> 
    </section> 
</div>

<?php 
 $this->load->view('nav/footer');
 ?>