<?php 
 $this->load->view('nav/header');
 ?>     
        <div class="add_category_form">
            <ul>
                <li><a href="<?php echo base_url('My_controller/add_sub_category')?>"> <span>New Sub Category</span></a></li>
                <li><a href="http://"><input type="button" value="Delete"></a></li>
            </ul>
        </div>
        <div class = "information">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align:center;">Sub Category Id</th>
                        <th style="text-align:center;">Category Name</th>
                        <th style="text-align:center;">Sub Category Name</th>
                        <th style="text-align:center;">Image</th>
                        <th style="text-align:center;">Status</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>                   
                        <?php 
                            foreach($all_sub_categories as $sub_category){
                                ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $sub_category->sub_cat_id;?></td>
                            <td style="text-align:center;"><?php echo $sub_category->category_name;?></td>
                            <td style="text-align:center;"><?php echo $sub_category->sub_category_name;?></td>
                            <td style="text-align:center;"><img src="<?php echo base_url('./uploads/sub_category_img/'.$sub_category->sub_category_image); ?>" alt="" style="height:40px; width:40px; "></td>
                            <td style="text-align:center;"><?php echo $sub_category->status;?></td>
                            <td style="text-align:center;">
                            <a href="<?php echo base_url('My_controller/sub_category_single_view/');?><?php echo $sub_category->sub_cat_id;?>"><i class="fa fa-edit bg-info text-white p-1 rounded"></i></a>
                            <a href="<?php echo base_url('My_controller/delete_sub_category/');?><?php echo $sub_category->sub_cat_id;?>"><i class="fa fa-trash-o fa-lg bg-danger text-white p-1 rounded"></i></a>
                            </td>
                        </tr>
                            <?php
                            }
                        ?>                  
                </tbody>
            </table>
        </div>

<?php 
 $this->load->view('nav/footer');
 ?>  

