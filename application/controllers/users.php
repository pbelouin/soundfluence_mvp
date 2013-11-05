<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function create()
	{
       $data = json_decode(file_get_contents('php://input'),true);
       $this->db->insert('users', $data); 

       $this->email->from('no-reply@soundfluence.com', 'Soundfluence');
       $this->email->to('pbelouin@gmail.com'); 
       //$this->email->cc('colin.kippenberg@gmail.com');  
       
       $this->email->subject('Soundfluence beta registration info');
       $this->email->message('The following user has registered for the Soundfluence beta: '+$data['name']+' email: '+$data['email']);	
       $this->email->send();

	}
}