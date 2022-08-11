<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_model {

    public function getCategory(){
        $getCatagory = $this->db->get('category')->result();
        return $getCatagory;
    }
    public function getSubCategory(){
        $getSubCatagory = $this->db->get('sub_category')->result();
        return $getSubCatagory;
    }
    public function getSub_Child_Category(){
        $getSubChildCatagory = $this->db->get('sub_child_category')->result();
        return $getSubChildCatagory;
    }
   


    public function student_data_info()
	{
		$data = array();
        $data['category_name'] = $this->input->post('category_name');
        $data['sub_cat_name'] = $this->input->post('sub_cat_name');
        $data['sub_child_cat_name'] = $this->input->post('sub_child_cat_name');
        $data['product_name'] = $this->input->post('product_name');
        $data['barcode'] = $this->input->post('barcode');
        $data['Qnt'] = $this->input->post('Qnt');
        $data['purches_price'] = $this->input->post('purches_price');
        $data['sale_price'] = $this->input->post('sale_price');
        $data['whole_sale_price'] = $this->input->post('whole_sale_price');
        $data['measurement'] = $this->input->post('measurement');
        $data['product_code'] = $this->input->post('product_code');
        $data['expired'] = $this->input->post('expired');
        $data['gst_sale'] = $this->input->post('gst_sale');
        $data['gst_purchase'] = $this->input->post('gst_purchase');
        $data['status'] = $this->input->post('status');
        $sdata = array();
       $error = "";
        $config['upload_path'] ='uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000000';
        $config['max_width']  = '20480';
        $config['max_height']  = '10240';
        $this->load->library('upload',$config);
        if (! $this->upload->do_upload('product_image')) {
            $error = array('error' => $this->upload->display_errors());

        } else {
            $sdata = $this->upload->data();

            $data['product_image'] = $config['updoad-path'].$sdata['file_name'];
        }
        $data['product_description'] = $this->input->post('product_description');
         $this->db->insert('product',$data);         
	}

    public function all_product_info(){
        // $this->db->SELECT('*');
        // $this->db->FROM('product');
        // $query_result = $this->db->get();
        // $product_info = $query_result->result();
        // return $product_info;
        $this->db->SELECT('product.*,sub_category.sub_category_name as sub_cat_name,category.category_name as cat_name');
        $this->db->join('category', 'category.category_id = product.category_name','left');
        $this->db->join('sub_category','sub_category.sub_cat_id = product.sub_cat_name','left');
        $this->db->FROM('product');
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    public function single_product_info($product_id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('id',$product_id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_Product_data($update_product_id){
        $data = array();
        $data['category_name'] = $this->input->post('category_name');
        $data['sub_cat_name'] = $this->input->post('sub_cat_name');
        $data['sub_child_cat_name'] = $this->input->post('sub_child_cat_name');
        $data['product_name'] = $this->input->post('product_name');
        $data['barcode'] = $this->input->post('barcode');
        $data['Qnt'] = $this->input->post('Qnt');
        $data['purches_price'] = $this->input->post('purches_price');
        $data['sale_price'] = $this->input->post('sale_price');
        $data['whole_sale_price'] = $this->input->post('whole_sale_price');
        $data['measurement'] = $this->input->post('measurement');
        $data['product_code'] = $this->input->post('product_code');
        $data['expired'] = $this->input->post('expired');
        $data['gst_sale'] = $this->input->post('gst_sale');
        $data['gst_purchase'] = $this->input->post('gst_purchase');
        $data['status'] = $this->input->post('status');
        $sdata = array();
       $error = "";
        $config['upload_path'] ='uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000000';
        $config['max_width']  = '20480';
        $config['max_height']  = '10240';
        $this->load->library('upload',$config);
        if (! $this->upload->do_upload('product_image')) {
            $error = array('error' => $this->upload->display_errors());

        } else {
            $sdata = $this->upload->data();

            $data['product_image'] = $config['updoad-path'].$sdata['file_name'];
        }
        $data['product_description'] = $this->input->post('product_description');
        $this->db->where('id',$update_product_id);
        $this->db->update('product',$data);
    }
    public function delete_product_info($delete_product_id){
        $this -> db -> where('id ', $delete_product_id);
        $this -> db -> delete('product');
    }


    
    //  Category Methods Start
    public function add_categories($data){
         return $this->db->insert('category', $data);
    }
    public function all_category_info(){
    
        $this->db->SELECT('*');
        $this->db->FROM('category');
        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }
    public function category_info($cat_id){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id',$cat_id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_category_data($update_cat_id){

        $data['category_name']=$this->input->post('category_name');
        $sdata = array();
        $error = "";
        $config['upload_path'] ='./uploads/category_img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000000';
        $config['max_width']  = '20480';
        $config['max_height']  = '10240';
        $this->load->library('upload',$config);
        if (! $this->upload->do_upload('category_image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $sdata = $this->upload->data();
            $data['category_image'] = $config['updoad-path'].$sdata['file_name'];
        }
        $data['status']=$this->input->post('status');

        $this->db->where('category_id',$update_cat_id);
        $this->db->update('category',$data);
    }
    public function delete_category_single_row($category_id){
        $this -> db -> where('category_id ', $category_id);
        $this -> db -> delete('category');
    }
    // Sub Category Method Start
    public function add_sub_categories($data){
        return $this->db->insert('sub_category', $data);
    }
    public function all_sub_category_info(){
        // $this->db->SELECT('*');
        // $this->db->FROM('sub_category');
        // $query_result = $this->db->get();
        // $category_info = $query_result->result();
        // return $category_info;

// $this->db->SELECT ('sub_category.*,category.category_name');
// $this->db->FROM('sub_category');
// $this->db->join('sub_category', 'sub_category.category_name = category.category_id');
// $query = $this->db->get();
// $query_result = $query->result();
// return $query_result;

    $this->db->select('*');
    $this->db->from('sub_category');
    $this->db->join('category', 'category.category_id = sub_category.category_name');
    $query = $this->db->get()->result();
    return $query;

        // $this->db->SELECT sub_category.*,category.category_name
        // FROM sub_category
        // LEFT JOIN category 
        // ON sub_category.category_name = category.category_id 
        // LEFT JOIN category 



    }
    public function sub_category_info($sub_cats_id){
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_cat_id ',$sub_cats_id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_sub_category($update_sub_cat_id){

        $data['sub_category_name']=$this->input->post('sub_category_name');
        $data['category_name']=$this->input->post('category_name');
        $sdata = array();
        $error = "";
        $config['upload_path'] ='./uploads/sub_category_img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000000';
        $config['max_width']  = '20480';
        $config['max_height']  = '10240';
        $this->load->library('upload',$config);
        if (! $this->upload->do_upload('sub_category_image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $sdata = $this->upload->data();
            $data['sub_category_image'] = $config['updoad-path'].$sdata['file_name'];
        }
        $data['status']=$this->input->post('status');

        $this->db->where('sub_cat_id ',$update_sub_cat_id);
        $this->db->update('sub_category',$data);
    }
    public function sub_cat_delete_row($sub_category_id){
        $this -> db -> where('sub_cat_id', $sub_category_id);
        $this -> db -> delete('sub_category');
    }
    // Sub Child Category Method Start
    public function add_sub_child_categories($data){
        return $this->db->insert('sub_child_category', $data);
    }
    public function all_sub_child_category_info(){
        // $this->db->SELECT('*');
        // $this->db->FROM('sub_child_category');
        // $query_result = $this->db->get();
        // $sub_child_categories_info = $query_result->result();
        // return $sub_child_categories_info;

        $this->db->SELECT('sub_child_category.*,sub_category.sub_category_name,category.category_name as cat_name');
        $this->db->join('category', 'category.category_id = sub_child_category.category_name','left');
        $this->db->join('sub_category','sub_category.sub_cat_id = sub_child_category.sub_category_name','left');
        $this->db->FROM('sub_child_category');
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;



    }
    public function sub_child_single_category_info($sub_child_cat_id){
        $this->db->select('*');
        $this->db->from('sub_child_category');
        $this->db->where('sub_child_cat_id ',$sub_child_cat_id );
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_sub_child_category($update_sub_child_cat_id){

        $data['category_name']=$this->input->post('category_name');
        $data['sub_category_name']=$this->input->post('sub_category_name');
        $data['sub_child_cat_name']=$this->input->post('sub_child_cat_name');
        $data['status']=$this->input->post('status');
        $this->db->where('sub_child_cat_id',$update_sub_child_cat_id);
        $this->db->update('sub_child_category',$data);
    }
    public function sub_child_cat_delete_row($sub_child_category_id){
        $this -> db -> where('sub_child_cat_id ', $sub_child_category_id);
        $this -> db -> delete('sub_child_category');
    }

    // Color Method Start 
    public function add_insert_color($data){
        return $this->db->insert('color', $data);
    }
    public function all_color_info(){
        $this->db->SELECT('*');
        $this->db->FROM('color');
        $query_result = $this->db->get();
        $color_info = $query_result->result();
        return $color_info;
    }
    public function color_single_info($colors_id){
        $this->db->select('*');
        $this->db->from('color');
        $this->db->where('color_id ',$colors_id );
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_color($color_update_id){
        $data['color_name']=$this->input->post('color_name');
        $data['status']=$this->input->post('status');
        $this->db->where('color_id',$color_update_id);
        $this->db->update('color',$data);
    }
    public function color_delete_row($color_row_id_del){
        $this -> db -> where('color_id', $color_row_id_del);
        $this -> db -> delete('color');
    }
    // Size Method Start
    public function add_insert_size($data){
        return $this->db->insert('size_table', $data);
    }
    public function all_size_info(){
        $this->db->SELECT('*');
        $this->db->FROM('size_table');
        $query_result = $this->db->get();
        $color_info = $query_result->result();
        return $color_info;
    }
    public function size_single_info($size_id){
        $this->db->select('*');
        $this->db->from('size_table');
        $this->db->where('size_id ',$size_id );
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function update_size($id){
        $data['size']=$this->input->post('size');
        $data['status']=$this->input->post('status');
        $this->db->where('size_id',$id);
        $this->db->update('size_table',$data);
    }
    public function size_delete_row($size_row_id_del){
        $this -> db -> where('size_id', $size_row_id_del);
        $this -> db -> delete('size_table');
    }
}