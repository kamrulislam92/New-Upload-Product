<?php 
 $this->load->view('nav/header');
 ?>
            <div class="add_category_form">
                <ul>
                    <li><a href="<?php echo base_url('My_controller/category_registration')?>"> <span>New Category</span></a></li>
                    <li><a href="http://"><input type="button" value="Delete"></a></li>
                </ul>
            </div>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align:center;">Category Id</th>
                        <th style="text-align:center;">Category Name</th>
                        <th style="text-align:center;">Category Image</th>
                        <th style="text-align:center;">Category Status</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <?php 
                            foreach($all_categories as $category){
                                ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $category->category_id;?></td>
                            <td style="text-align:center;"><?php echo $category->category_name;?></td>
                            <td style="text-align:center;"><img src="<?php echo base_url('./uploads/category_img/'.$category->category_image); ?>" alt="" style="height:40px; width:40px; "></td>
                            <td style="text-align:center;"><?php echo $category->status;?></td>
                            <td style="text-align:center;">
                            <a href="<?php echo base_url('My_controller/category_view/');?><?php echo $category->category_id;?>"><i class="fa fa-edit bg-info text-white p-1 rounded"></i></a>
                          
                            <a href="<?php echo base_url('My_controller/delete_category_row/');?><?php echo $category->category_id;?>"><i class="fa fa-trash-o fa-lg bg-danger text-white p-1 rounded"></i></a>
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

