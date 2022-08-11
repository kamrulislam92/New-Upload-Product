<?php 
 $this->load->view('nav/header');
 ?>     
        <div class="add_category_form">
            <ul>
                <li><a href="<?php echo base_url('My_controller/add_color')?>"> <span>New Color Add</span></a></li>
                <li><a href="http://"><input type="button" value="Delete"></a></li>
            </ul>
        </div>
        <div class = "information">
    <span style="margin-left:10px; color:black; font-weight:bold; ">show</span>
    <select name="" id="" style="width:10%; margin:10px 0; padding:3px;">
        <option value="">10</option>
        <option value="">20</option>
        <option value="">50</option>
    </select><span style="color:black; font-weight:bold; ">entries</span>

        <p style="float:right; margin-right:10px; border:none; outline:none;">
        <label for="title"> Search:</label>
        <input type="text" name="search" size="25%">
        </p>


            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align:center;">Color Id</th>
                        <th style="text-align:center;"><input type="checkbox" name="" id=""></th>
                        <th style="text-align:center;">Color Name</th>
                        <th style="text-align:center;">Status</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>                   
                        <?php 
                            foreach($all_Color_list as $color_info){
                                ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $color_info->color_id;?></td>
                            <td style="text-align:center;"><input type="checkbox"></td>
                            <td style="text-align:center;"><?php echo $color_info->color_name;?></td>
                            <td style="text-align:center;"><?php echo $color_info->status;?></td>
                            <td style="text-align:center;">
                            <a href="<?php echo base_url('My_controller/color_single/');?><?php echo $color_info->color_id;?>"><i class="fa fa-edit bg-info text-white p-1 rounded"></i></a>
                            <a href="<?php echo base_url('My_controller/delete_single_color/');?><?php echo $color_info->color_id;?>"><i class="fa fa-trash-o fa-lg bg-danger text-white p-1 rounded"></i></a>
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

