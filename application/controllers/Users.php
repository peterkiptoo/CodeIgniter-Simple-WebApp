<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('UsersModel');
       $this->load->helper('url');         
   }
   public function index()
   {
    $this->load->view('includes/header');
    $this->load->view('users/login');
    $this->load->view('includes/footer');
 
   }
   public function logout()
   {
    $this->load->view('includes/header');
    $this->load->view('users/login');
    $this->load->view('includes/footer');
 
   }
   public function view()
   {
     $users= new UsersModel;
     $data['data']=$users->get_users();
     $this->load->view('includes/header');
     $this->load->view('users/list',$data);
     $this->load->view('includes/footer');
   }
    public function guest()
   {
    $this->load->view('includes/header');
    $this->load->view('users/guest');
    $this->load->view('includes/footer');
   }
    public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('users/create');
      $this->load->view('includes/footer');      
   }
    public function store()
   {
      $users=new UsersModel;
      $users->insert_user();
       redirect(base_url('users/view'));
    }

 }