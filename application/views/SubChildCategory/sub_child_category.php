<?php 
 $this->load->view('nav/header');
 ?>     
        <div class="add_category_form">
            <ul>
                <li><a href="<?php echo base_url('My_controller/sub_child_category_form')?>"> <span>New Sub Child Category</span></a></li>
                <li><a href="http://"><input type="button" value="Delete"></a></li>
            </ul>
        </div>
        <div class = "information">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align:center;">Sub Child Category Id</th>
                        <th style="text-align:center;">Category Name</th>
                        <th style="text-align:center;">Sub Category Name</th>
                        <th style="text-align:center;">Sub Child Category Name</th>
                        <th style="text-align:center;">Status</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>                   
                        <?php 
                            foreach($all_sub_child_categories as $sub_child_category){
                                ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $sub_child_category->sub_child_cat_id ;?></td>
                            <td style="text-align:center;"><?php echo $sub_child_category->cat_name;?></td>
                            <td style="text-align:center;"><?php echo $sub_child_category->sub_category_name;?></td>
                            <td style="text-align:center;"><?php echo mb_strimwidth($sub_child_category->sub_child_cat_name,0,30,'...');?></td>
                            <td style="text-align:center;"><?php echo $sub_child_category->status;?></td>
                            <td style="text-align:center;">
                                <a href="<?php echo base_url('My_controller/sub_child_category_single_view/');?><?php echo $sub_child_category->sub_child_cat_id;?>"><i class="fa fa-edit bg-info text-white p-1 rounded"></i></a>
                                <a href="<?php echo base_url('My_controller/delete_sub_child_category/');?><?php echo $sub_child_category->sub_child_cat_id;?>"><i class="fa fa-trash-o fa-lg bg-danger text-white p-1 rounded"></i></a>
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

