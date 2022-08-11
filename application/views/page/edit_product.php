<?php 
 $this->load->view('nav/header');
 ?>
        <?php 
      // print "<pre>";
      // print_r($edit_single_product);
      ?>

            <div class="information">
                <form action="<?php echo base_url('My_controller/update_product/'.$edit_single_product->id);?>" method="post" enctype="multipart/form-data">
                    <h3>Product Information</h3>
                      <div class="section">
                          <div class="section_1">
                              <h4>Category <span>*</span></h4>
                              <select name="category_name" id="category_name">
                                <option value=""> ---Select Caterory--- </option>
                               <?php foreach($getCategory as $cat_data){
                                if($edit_single_product->category_name == $cat_data->category_id){
                                ?>
                                <option selected value="<?php echo $cat_data->category_id;?>"><?php echo $cat_data->category_name;?></option>
                               <?php }else{ ?>
                                <option  value="<?php echo $cat_data->category_id;?>"><?php echo $cat_data->category_name;?></option>
                              <?php  }}?>
                              </select>
                          </div>
                          <div class="section_2">
                            <h4>Sub Category <span>*</span></h4>
                              <select name="sub_cat_name" id="sub_cat_name">
                                <option value=""> ---Select Sub Category--- </option>
                                <?php foreach($getSubCategory as $subCategory){
                                  if($edit_single_product->sub_cat_name == $subCategory->sub_cat_id){
                                  ?>
                                  <option selected value="<?php echo $subCategory->sub_cat_id ;?>"><?php echo $subCategory->sub_category_name;?></option>
                                <?php }else{ ?>
                                  <option value="<?php echo $subCategory->sub_cat_id ;?>"><?php echo $subCategory->sub_category_name;?></option>
                               <?php }}?>
                              </select>
                          </div>
                          <div class="section_3">
                            <h4>Sub Child Category <span>*</span></h4>
                              <select name="sub_child_cat_name" id="sub_child_cat_name">
                              <option value=""> ---Select Sub Child Category--- </option>
                              <?php foreach($getSubChildCategory as $subChildCategory){
                                if($edit_single_product->sub_child_cat_name == $subChildCategory->sub_child_cat_id){
                                ?>
                                  <option selected value="<?php echo $subChildCategory->sub_child_cat_id;?>"><?php echo $subChildCategory->sub_child_cat_name;?></option>
                                <?php }else{ ?>
                                     <option value="<?php echo $subChildCategory->sub_child_cat_id;?>"><?php echo $subChildCategory->sub_child_cat_name;?></option>
                               <?php }}?>
                              </select>
                          </div>
                      </div>
                      <div class="section_part">
                          <div class="form-control_1">
                            <h4>Product Name <span>*</span></h4>
                            <input type="text" name="product_name" id="product_name" value="<?php echo $edit_single_product->product_name; ?>" placeholder="Product Name" >
                          </div>
                          <div class="form-control_2">
                            <h4>Bar Code <span>*</span></h4>
                            <input type="text" name="barcode" id="barcode" value="<?php echo $edit_single_product->barcode; ?>"  placeholder="673471614705">
                          </div>
                      </div>
                      <div class="section_part_1">
                          <div class="form-control_1">
                            <h4>Initial Quantity <span>*</span></h4>
                            <input type="text" name="Qnt" id="Qnt" value="<?php echo $edit_single_product->Qnt; ?>" placeholder="1000">
                          </div>
                          <div class="form-control_2">
                            <h4>Purchase Price <span>*</span></h4>
                            <input type="text" name="purches_price" id="purches_price" value="<?php echo $edit_single_product->purches_price; ?>" placeholder="Purchase Price">
                          </div>
                          <div class="form-control_3">
                            <h4>Sale Price <span>*</span></h4>
                            <input type="text" name="sale_price" id="sale_price" value="<?php echo $edit_single_product->sale_price; ?>" placeholder="Sale Price">
                          </div>
                          <div class="form-control_4">
                            <h4>Whole Sale Price<span>*</span></h4>
                            <input type="text" name="whole_sale_price" id="whole_sale_price" value="<?php echo $edit_single_product->whole_sale_price; ?>" placeholder="Whole Sale Price">
                          </div>
                      </div>
                    
                      <div class="section_part_2">
                          <div class="form-control_1">
                            <h4>Measurment <span>*</span></h4>
                            <div class="form-controls">
                                <input type="text" name="measurement" id="measurement" value="<?php echo $edit_single_product->measurement; ?>" >
                                <select name="" id="">
                                  <option value="">Pics</option>
                                  <option value="">KG</option>
                                  <option value="">Itr</option>
                                </select>
                            </div>                     
                          </div>
                          <div class="form-control_2">
                            <h4>Product Code <span>*</span></h4>
                            <input type="text" name="product_code" id="product_code" value="<?php echo $edit_single_product->product_code; ?>" placeholder="Product Code">
                          </div>
                          <div class="form-control_3">
                            <h4>Expired <span>*</span></h4>
                            <input type="date" name="expired" id="expired" value="<?php echo $edit_single_product->expired; ?>">
                          </div>
                      </div>
                  
                      <div class="section_part_3">
                          <div class="form-control_1">
                            <h4>GST Sale </h4>                      
                              <input type="text" value="<?php echo $edit_single_product->gst_sale; ?>" name="gst_sale" id="gst_sale" checked>&nbsp;With GST&nbsp;&nbsp;
                                                 
                          </div>
                          <div class="form-control_2">
                            <h4>GST Purchase </h4>
                            <input type="text" value="<?php echo $edit_single_product->gst_purchase; ?>" name="gst_purchase" id="gst_purchase" checked>
                          </div>
                          <div class="form-control_3">
                                <h4>Status</h4>
                                <select name="status" id="">
                                  <option value=""> ---Select Status--- </option>
                                  <option <?php echo ($edit_single_product->status == 'Disable')? "selected": ''; ?> value="Disable">Disable</option>
                                  <option <?php echo ($edit_single_product->status == 'Enable')? "selected": ''; ?> value="Enable">Enable</option>                                 
                                </select>
                          </div>
                      </div>

                      <div class="section_part_4">
                          <div class="form-control_1">
                            <h4>Product Video</h4>
                            <input type="text" name="whole_sale_price" id="" disabled placeholder="Hmm. We’re having trouble finding that site.">
                          </div>
                          <div class="form-control_2">
                              <h4>Product Size </h4>
                              <select name="" multiple="multiple" disabled>
                                <option value="2" selected="selected"> l</option>
                                <option value="3" selected="selected"> s</option>
                                <option value="4" selected="selected"> m</option>
                                <option value="6" selected="selected"> xl</option>
                              </select>
                          </div>
                          <div class="form-control_3">
                              <h4>Product Color</h4>
                              <select name="pro_color[]"  multiple="multiple" disabled>
                                <option value="2" selected="selected"> white</option>
                              </select>
                          </div>
                      </div>

                      <div class="section_part_5">
                          <div class="form-control_1">
                            <h4>Product Main Image <span>*</span></h4>
                            <input type="file" name="product_image" id="product_image" value="<?php echo $edit_single_product->product_image; ?>">
                          </div>
                          <div class="form-control_2">
                            <h4>Photo One <span>*</span></h4>
                            <input type="file" name="purchase_price" id="" disabled>
                          </div>
                          <div class="form-control_3">
                            <h4>Photo Two <span>*</span></h4>
                            <input type="file" name="sale_price" id="" disabled>
                          </div>
                          <div class="form-control_4">
                            <h4>Photo Three<span>*</span></h4>
                            <input type="file" name="whole_sale_price" id="" disabled>
                          </div>
                          <div class="form-control_5">
                            <h4>Photo Four<span>*</span></h4>
                            <input type="file" name="whole_sale_price" id="" disabled>
                          </div>
                      </div>
                      <div class="section_part_6">
                          <div class="form-control_1">
                            <h4>Short Description <span>*</span></h4>
                          <textarea name="product_description" id="product_description" cols="30" rows="5"><?php echo $edit_single_product->product_description; ?></textarea>
                          </div>
                          <div class="form-control_2">
                            <h4>Description<span>*</span></h4>
                          <textarea name="product_description" id="" cols="30" rows="5" disabled> </textarea>
                          </div>
                      </div>

                      <div class="submitBtn">
                        <input type="submit" value="Submit">
                      </div>
                  </form>
          </div>
      </div> 
   </section>
  </body>
</html>









