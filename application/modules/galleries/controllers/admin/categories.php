<?php
class categories extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$categories = new Category();
		if(!empty($_POST['search']))$categories->where("name like '%".$_POST['search']."%'");
		if(@$_GET['status'])$categories->where('status',$_GET['status']);
		$data['categories'] = auth_filter($categories)->where("module = 'galleries' and parents <> 0")->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/category_index',$data);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$categories = new Category($id);
			$_POST['approve_id'] = $this->session->userdata('id');
			$categories->approve_date = date("Y-m-d H:i:s");
			$categories->from_array($_POST);
			$categories->save();
			echo approve_comment($categories);
		}
	}
	
	function form($id=FALSE)
	{	
			$categories = new Category();
			$categories->where("module = 'galleries' and parents = 0")->get();
			$data['parent'] = $categories->get_clone();
			$categories->clear();
			$data['category'] = $categories->get_by_id($id);
			$this->template->build('admin/category_form',$data);
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$category = new Category($id);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			$_POST['name'] = lang_encode($_POST['name']);
			$category->from_array($_POST);
			$category->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('galleries/admin/categories');
	}
	
	function delete($id)
	{
		if($id)
		{
			$category = new Category($id);
			$module = $category->module;
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('galleries/admin/categories');
	}
	
}
?>