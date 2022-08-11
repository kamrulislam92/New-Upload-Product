<?php 
 $this->load->view('nav/header');
 ?>
            <div class="information">
           <h1 style="text-align:center; color:#bcc; font-size:30px; font-weight:bold;"> Product List</h1>
                        <div class=" container">
                            <table class="table table-bordered bg-light">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">SI</th>
                                        <th scope="col" class="text-center">Image</th>
                                        <th scope="col" class="text-center">Name</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Category</th>
                                        <th scope="col" class="text-center">Sub Category</th>
                                        <th scope="col" class="text-center">Qnt</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($all_product_info as $product_info) { ?>
                                    <tr>
                                        <th scope="row" class="text-center "><?php echo $product_info->id; ?></th>
                                        <td class="text-center "><img src="<?php echo base_url('uploads/'.$product_info->product_image); ?>" alt="" style="height:30px; width:30px;"></td>
                                        <td class="text-center "><?php echo mb_strimwidth($product_info->product_name,0,20,'...'); ?></td>                                  
                                        <td class="text-center "><?php echo $product_info->sale_price; ?></td>
                                        <td class="text-center "><?php echo $product_info->cat_name; ?></td>
                                        <td class="text-center "><?php echo $product_info->sub_cat_name; ?></td>
                                        <td class="text-center "><?php echo $product_info->Qnt; ?></td>
                                        <td class="text-center "><?php echo $product_info->status; ?></td>
                                        <td class="">
                                            <a href="<?php base_url();?>Single_product_view/<?php echo $product_info->id;?>"><i class="fa fa-edit bg-info text-white p-1 rounded"></i></a>
                                            <a onclick="return confirm('Are you sure you want to Delete This Student?');" href="<?php echo base_url('My_controller/delete_product/'.$product_info->id);?>"> <i class="fa fa-trash-o fa-lg bg-danger text-white p-1 rounded"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
      </div> 
      <?php 
 $this->load->view('nav/footer');
 ?>