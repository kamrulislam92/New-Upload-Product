<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {
   public function add_product(){
    $this->load->model('My_model');
    $data['getCategory'] = $this->My_model->getCategory();
    $data['getSubCategory'] = $this->My_model->getSubCategory();
    $data['getSubChildCategory'] = $this->My_model->getSub_Child_Category();
        $this->load->view('index',$data);
   }
    public function ProductNew(){
        $this->load->model('My_model');
		$data['getCategory'] = $this->My_model->getCategory();
		$data['getSubCategory'] = $this->My_model->getSubCategory();
		$data['getSubChildCategory'] = $this->My_model->getSub_Child_Category();
		$this->load->view('http://localhost/elegant-codeigniter3-product-upload', $data); 

    }

    public function ProductList(){
        $data = array();
        $this->load->model('My_model');
        $data['all_product_info'] = $this->My_model->all_product_info();
        $this->load->view('product_list',$data);
        
    }

    public function SaveProduct(){
        $data = array();
        $this->load->model('My_model');
        $this->My_model->student_data_info();
        $sdata = array();
        //  $this->session->set_flashdata('message', 'Product Updated successfully');
        $sdata['messate'] = " Student Added Successfully!!";
        $this->session->set_userdata($sdata);
        redirect('http://localhost/elegant-codeigniter3-product-upload/');
    }

    public function SingleProductView($product_id){
        $data = array();
		$this->load->model('My_model');
	   	$data['edit_single_product'] = $this->My_model->single_product_info($product_id);
       
        $data['getCategory'] = $this->My_model->getCategory();
        $data['getSubCategory'] = $this->My_model->getSubCategory();
        $data['getSubChildCategory'] = $this->My_model->getSub_Child_Category();
		// $data['main_container_content'] = $this->load->view('page/edit_product',$data,true);
		$this->load->view('page/edit_product',$data);
    }
    public function update_product($update_product_id){
        $this->load->model('My_model');
        $this->My_model->update_Product_data($update_product_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/product_list');
    }
    public function delete_product($delete_product_id){
        $this->load->model("My_model");
        $this->My_model->delete_product_info($delete_product_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/product_list');
    }
    public function Category_Registration(){
        $this->load->view('Categories/add_category');
       }

    public function add_category(){

        $this->load->model('My_model');
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
        $result= $this->My_model->add_categories($data);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/category');

    }
    public function category(){
        $data = array();
        $this->load->model('My_model');
        $data['all_categories'] = $this->My_model->all_category_info();
		$this->load->view('Categories/category',$data);
	}
    public function category_view($cat_id){
        
        $data = array();
        $this->load->model('My_model');
        $data['single_view_category'] = $this->My_model->category_info($cat_id);
        $this->load->view('Categories/edit_category',$data);
    }

    public function update_category($update_cat_id){
       
        $this->load->model('My_model');
        $this->My_model->update_category_data($update_cat_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/category');
    }


    public function delete_category_row($category_id) {   
        $this->load->model("My_model");
        $this->My_model->delete_category_single_row($category_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/category');
    }
    // Start Sub Category Method
    public function sub_category(){
        $data = array();
        $this->load->model('My_model');
        $data['all_sub_categories'] = $this->My_model->all_sub_category_info();
        // echo "<pre>";
        // print_r($data['all_sub_categories']);
        $this->load->view('sub_category/sub_category_table',$data);
    }
    public function add_sub_category(){
        $this->load->model('My_model');
		$data['getCategory'] = $this->My_model->getCategory();
        $this->load->view('sub_category/sub_categoryForm',$data);
    }
    public function insert_sub_category(){
         $this->load->model('My_model');
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
        $result= $this->My_model->add_sub_categories($data);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/sub_category');
    }
    public function sub_category_single_view($sub_cats_id){
        $this->load->model('My_model');
        $data['getCategory'] = $this->My_model->getCategory();
        $data['sub_categories_view'] = $this->My_model->sub_category_info($sub_cats_id);
        $this->load->view('sub_category/edit_sub_category',$data);
    }
public function update_sub_category($update_sub_cat_id){
    $this->load->model('My_model');
    $this->My_model->update_sub_category($update_sub_cat_id);
    redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/sub_category');

}
    public function delete_sub_category($sub_category_id) {   
        $this->load->model("My_model");
        $this->My_model->sub_cat_delete_row($sub_category_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/sub_category');
    }
    // Start Sub Child Category Method
    public function sub_child_category(){
        $data = array();
        $this->load->model('My_model');
        $data['all_sub_child_categories'] = $this->My_model->all_sub_child_category_info();
     
        $this->load->view('SubChildCategory/sub_child_category',$data);
    }
    public function sub_child_category_form(){

        $this->load->model('My_model');
        $data['getCategory'] = $this->My_model->getCategory();
        $data['getSubCategory'] = $this->My_model->getSubCategory();
        $this->load->view('SubChildCategory/form_sub_child_category',$data);
    }
    public function insert_sub_child_category(){
        $this->load->model('My_model');
        $data['category_name']=$this->input->post('category_name');
        $data['sub_category_name']=$this->input->post('sub_category_name');
        $data['sub_child_cat_name']=$this->input->post('sub_child_cat_name');
        $data['status']=$this->input->post('status');
        $result= $this->My_model->add_sub_child_categories($data);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/sub_child_category');
    }
    public function sub_child_category_single_view($sub_child_cat_id){
        $this->load->model('My_model');
        $data['getCategory'] = $this->My_model->getCategory();
        $data['getSubCategory'] = $this->My_model->getSubCategory();
        $data['sub_child_categories_view'] = $this->My_model->sub_child_single_category_info($sub_child_cat_id);
        $this->load->view('SubChildCategory/edit_sub_child_category',$data);
    }
    public function update_sub_child_category($update_sub_child_cat_id){
        $this->load->model('My_model');
        $this->My_model->update_sub_child_category($update_sub_child_cat_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/sub_child_category');
    }
    public function delete_sub_child_category($sub_child_category_id){
        $this->load->model("My_model");
        $this->My_model->sub_child_cat_delete_row($sub_child_category_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/sub_child_category');
    }
   
    // Color Method Start 
    public function color(){
        $data = array();
        $this->load->model('My_model');
        $data['all_Color_list'] = $this->My_model->all_color_info();
        $this->load->view('color/color_view_table',$data);
    }
    public function add_color(){
        $this->load->view('color/add_color');
    }
    public function back_color_list(){
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/color');
    }
    public function insert_color(){
        $this->load->model('My_model');
        $data['color_name']=$this->input->post('color_name');
        $data['status']=$this->input->post('status');
        $result= $this->My_model->add_insert_color($data);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/color');
    }
    public function color_single($colors_id){
        $this->load->model('My_model');
        $data['color_single_view'] = $this->My_model->color_single_info($colors_id);
        $this->load->view('color/color_single_view',$data);
    }
    public function update_color($color_update_id){
        $this->load->model('My_model');
        $this->My_model->update_color($color_update_id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/color');
    }
    public function delete_single_color($color_row_id_del){
        $this->load->model("My_model");
        $this->My_model->color_delete_row($color_row_id_del);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/color');
    }
    // Start Method Size Start
    public function size(){

        $data = array();
        $this->load->model('My_model');
        $data['all_size_list'] = $this->My_model->all_size_info();
        $this->load->view('size_folder/size_view_table',$data);
    }
    public function size_add_form(){
        $this->load->view('size_folder/add_size');
    }
    public function insert_size(){
        $this->load->model('My_model');
        $data['size']=$this->input->post('size');
        $data['status']=$this->input->post('status');
        $result= $this->My_model->add_insert_size($data);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/size');
    }
    public function size_single_view($size_id){
        $this->load->model('My_model');
        $data['Size_single_view'] = $this->My_model->size_single_info($size_id);
        $this->load->view('size_folder/edit_size',$data);
    }
    public function update_size($id){
        $this->load->model('My_model');
        $this->My_model->update_size($id);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/size');
    }
    public function delete_single_size($size_row_id_del){
        $this->load->model("My_model");
        $this->My_model->size_delete_row($size_row_id_del);
        redirect('http://localhost/elegant-codeigniter3-product-upload/My_controller/size');
    }
}