<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	var $data;
	var $model;
	var $date;
	var $Moderator;
	var $user;
	var $file;
	var $operating;
	var $powers;
    public function __construct()
	{
        parent::__construct();
		{
          $this->security();
		}
        $this->data = new stdClass();
		$this->load->model('vt');
		$this->model = $this->vt;
		$this->date = date('d-m-Y');
		$this->user = $this->session->userdata('info');
		$this->Moderator = $this->user->uname;
		$this->data->Moderator = $this->Moderator;
		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '9000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$this->upload->initialize($config);
		$this->data->pagesFile = 'form';
		$this->data->mainContant = 'Card';
		$this->data->contantFile= 'form';
		$this->data->colors = ['mavi','yeşil a'];
	}
	 
	function security()
	{
		$control = $this->session->userdata('control');
		if(!isset($control) || $control != true)
		{
            redirect('index.php/Administrator');
		}
	}

	function feedBack($conclusion,$file,$key='conclusion'){
		if($conclusion)
		{
			$this->session->set_flashdata($key,alert('success','İşlem Başarı ile gerçekleştirildi'));
			redirect('index.php/AdminPanel/'.$file.'');
		}
		else
		{
			$this->session->set_flashdata($key,alert('danger','İşlem Gerçekleştirilemedi bir hata oldu')); 
		 	redirect('index.php/AdminPanel/'.$file.'');										  
		}
	}

	function Error($message,$file,$key='conclusion'){
		$this->session->set_flashdata($key,alert('danger',$message)); 
		redirect('index.php/AdminPanel/'.$file.'');	
	}

	function Alert($message,$file,$type,$key='conclusion'){
		$this->session->set_flashdata($key,alert($type,$message)); 
		redirect('index.php/AdminPanel/'.$file.'');
	}

	public function index()
	{
		$this->data->contant = 'addProduct';
		$this->load->view('admin/template/template',$this->data);
	}

	public function allProduct(){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'allProduct';
		$this->data->veri = $this->model->allData('product');
		$this->load->view('admin/template/template',$this->data);
	}

	public function addProduct(){
		$this->data->contant = 'addProduct';
		$this->load->view('admin/template/template',$this->data);
	}

	public function addProductdb(){
		$title = $this->input->post('title');
		$companyName = $this->input->post('companyName');
		$category = $this->input->post('category');
		$simillars = $this->input->post('simillar');
		$selectColor = '';
		foreach($this->data->colors as $color){
			if($this->input->post(permalink($color) == 'on')){
				$selectColor .= $color.':'.permalink($color).',';
			}
		}
		if($this->input->post('productActive') == 'on'){
			$active = 'true';	
		}
		else{
			$active = 'false';
		}
		$exp = $this->input->post('exp');
		$property = $this->input->post('productProperty');
		$sss = $this->input->post('sss');
		if($this->upload->do_upload('image')){
			$this->file = $this->upload->data();
			$this->feedBack($this->model->insertData('product',product($title,$companyName,$this->file['file_name'],$simillars,$selectColor,$category,$active,$exp,$property,$sss)),'addProduct');
		}
		else{
			$this->Error($this->upload->display_errors(),'addProduct');			
		}
		
	}

	public function editProduct($id){
		$this->data->veri = $this->model->oneData('product',$id);
		$this->data->contant = 'editProduct';
		$this->load->view("Admin/template/template",$this->data);
	}

	public function editProductdb($id){
		$title = $this->input->post('title');
		$companyName = $this->input->post('companyName');
		$category = $this->input->post('category');
		$simillars = $this->input->post('simillar');
		$selectColor = '';
		foreach($this->data->colors as $color){
			if($this->input->post(permalink($color) == 'on')){
				$selectColor .= $color.':'.permalink($color).',';
			}
		}
		if($this->input->post('productActive') == 'on'){
			$active = 'true';	
		}
		else{
			$active = 'false';
		}
		$exp = $this->input->post('exp');
		$property = $this->input->post('productProperty');
		$sss = $this->input->post('sss');
		if($this->upload->do_upload('image')){
			$this->file = $this->upload->data();
			$this->feedBack($this->model->updateData('product',product($title,$companyName,$this->file['file_name'],$simillars,$selectColor,$category,$active,$exp,$property,$sss),$id),'allProduct');
		}
		else{
			$this->Error($this->upload->display_errors(),'editProduct');			
		}
	}

	public function deleteProduct($id){
		$this->feedBack($this->model->deleteData('product',$id),'allProduct');
	}

	public function addBanner(){
		$this->data->contant = 'addBanner';
		$this->load->view('admin/template/template',$this->data);
	}

	public function addBannerdb(){
		$title = $this->input->post('title');
		if($this->upload->do_upload('image')){
			$this->file = $this->upload->data();
			$this->feedBack($this->model->insertData('banner',banner($title,$this->file['file_name'])),'addBanner');
		}
		else{
			$this->Error($this->upload->display_errors(),'addBanner');			
		}
	}

	public function deleteBanner($id){
		$this->feedBack($this->model->deleteData('banner',$id),'allBanner');
	}

	public function allBanner(){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'allBanner';
		$this->data->veri = $this->model->allData('banner');
		$this->load->view('admin/template/template',$this->data);
	}

	public function addNotification(){
		$this->data->contant = 'addNotification';
		$this->load->view('admin/template/template',$this->data);
	}

	public function addNotificationdb(){
		$title = $this->input->post('title');
		$body = $this->input->post('body');
		$this->feedBack($this->model->insertData('notification',notification($title,$body)),'addNotification');
	}

	public function deleteNotification($id){
		$this->feedBack($this->model->deleteData('notification',$id),'allNotification');
	}

	public function allNotification(){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'allNotification';
		$this->data->veri = $this->model->allData('notification');
		$this->load->view('admin/template/template',$this->data);
	}

	public function editNotification($id){
		$this->data->veri = $this->model->oneData('notification',$id);
		$this->data->contant = 'editNotification';
		$this->load->view("Admin/template/template",$this->data);
	}

	public function editNotificationdb($id){
		$title = $this->input->post('title');
		$body = $this->input->post('body');
		$this->feedBack($this->model->updateData('notification',notification($title,$body),$id),'allNotification');
	}

	public function addOpportunity(){
		$this->data->contant = 'addOpportunity';
		$this->load->view('admin/template/template',$this->data);
	}

	public function addOpportunitydb(){
		$title = $this->input->post('title');
		$body = $this->input->post('body');
		if($this->upload->do_upload('image')){
			$this->file = $this->upload->data();  
			$this->feedBack($this->model->insertData('opportunity',opportunity($title,$body,$this->file['file_name'])),'addOpportunity');   
		} 
		else{ 
			$this->Error($this->upload->display_errors(),'addOpportunity');  			
		}
	}

	public function deleteOpportunity($id){ 
		$this->feedBack($this->model->deleteData('opportunity',$id),'allOpportunity'); 
	}

	public function allOpportunity(){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'allOpportunity';
		$this->data->veri = $this->model->allData('opportunity');
		$this->load->view('admin/template/template',$this->data);
	} 

	public function editOpportunity($id){ 
		$this->data->veri = $this->model->oneData('opportunity',$id); 
		$this->data->contant = 'editOpportunity'; 
		$this->load->view("Admin/template/template",$this->data); 
	}

	public function editOpportunitydb($id){ 
		$title = $this->input->post('title'); 
		$body = $this->input->post('body'); 
		if($this->upload->do_upload('image')){  
			$this->file = $this->upload->data();  
			$this->feedBack($this->model->updateData('opportunity',opportunity($title,$body,$this->file['file_name']),$id),'addOpportunity'); 
		} 
		else{ 
			$this->Error($this->upload->display_errors(),'addOpportunity');  			
		} 
	} 

	/*public function language($language){
		$this->session->set_userdata('language',$language);
	}

	public function allUser(){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'allUser';
		$this->data->veri = $this->model->allUser();
		$this->load->view('admin/template/template',$this->data);
	}
	public function createUser(){
		$this->data->contant = 'createUser';
		$this->load->view('admin/template/template',$this->data);
	}

	public function createUserdb(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$durum = $this->input->post("userActive");
		$yetkiler='';
		foreach($this->data->links as $link){	
			if($this->input->post($link) == 'on'){
				$yetkiler .= $link.",";
			}
		}
		if(!isset($yetkiler)){
			$yetkiler = '';
		}
		if($durum == 'on') {
			$durum = 'true';
		}else{
			$durum = 'false';
		}
		$token = bin2hex(random_bytes(16));
		$this->feedBack($this->model->insertData('kullaniciler',kullaniciler($username,$password,$yetkiler,$durum,$token)),'createUser');
	}

	public function editUser($id){
		$this->data->veri = $this->model->oneUser($id);
		$this->data->pagesFile = 'form';
		$this->data->mainContant = 'Card';
		$this->data->contantFile ='form';
		$this->data->contant = 'editUser';
		$this->load->view("Admin/template/template",$this->data);
	}

	public function editUserdb($id){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$durum = $this->input->post("userActive");
		$yetkiler='';
		foreach($this->data->links as $link){	
			if($this->input->post($link) == 'on'){
				$yetkiler.=$link.",";
			}
		}
		if(!isset($yetkiler)){
			$yetkiler = '';
		}
		if($durum == 'on') {
			$durum = 'true';
		}else{
			$durum = 'false';
		}
		$token =  $this->model->oneToken($id)->token;		
		$this->feedBack($this->model->updateData('kullaniciler',kullaniciler($username,$password,$yetkiler,$durum,$token),$id),'allUser');
	}

	public function userDelete($id){
		$this->feedBack($this->model->deleteData('kullaniciler',$id),'allUser');
	}

	public function messages(){
		$this->data->pagesFile = 'uiElements';
		$this->data->mainContant = 'allMessages';
		$this->data->veri = $this->data->allMessages;
		$this->load->view("Admin/template/template",$this->data);
	}

	public function messageSend()
	{
		$title = $this->input->post('mesajTitle');
		$message = $this->input->post('message');
		$this->feedBack($this->model->insertData('messages',messages($this->Moderator,$message,$title)),'');
	}

	public function userMessages($id){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'userMessages';
		$this->data->veri = $this->model->userMessages($id);
		$this->load->view('admin/template/template',$this->data);
	}

	public function editMessage($id){
		$this->data->pagesFile = 'form';
		$this->data->mainContant = 'Card';
		$this->data->contantFile = 'form';
		$this->data->contant = 'editMessage';
		$this->data->veri = $this->model->oneData('messages',$id);
		$this->load->view('admin/template/template',$this->data);
	}

	public function editMessagedb($id) {
		$title = $this->input->post('title');
		$message = $this->input->post('message');
		$this->feedBack($this->model->updateData('messages',messages($this->model->oneData('messages',$id)->uname,$message,$title),$id),'allUser');
	}

	public function deleteMessage($id){
		$this->feedBack($this->model->deleteData('messages',$id),'allUser');
	}

	public function log(){
		$this->data->pagesFile = 'tables';
		$this->data->mainContant = 'log';
		$this->data->veri = $this->model->allDataColumns('log','type,Moderator,createDate,tables,definition');
		$this->load->view("Admin/template/template",$this->data);
	}*/
}
