<?php

class Users extends Controller
{

    public function __construct(){
       $this->dynamic = $this->model('dynamic');
       $this->text = $this->helper('text');
    }

    public function index()
    {
       $users = $this->dynamic->getAll('users',["ORDER"=>["user_id"=>"DESC"]]);
       
        
      $this->template('users','partials/header','partials/footer',['users'=>$users]); 
    }

    public function delete($id)
    {
      $delete = $this->dynamic->delete('users',["user_id"=>$id]);
      $this->text->redirect($this->baseurl.'users');
    }

}