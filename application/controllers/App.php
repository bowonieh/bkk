<?php

class App extends CI_CONTROLLER{
	function __construct(){
		parent::__construct();
	}

	function logincheck(){
                //$data = (array)  json_decode(file_get_contents('php://input'));
                //$val = array(
                //  'username' => $data['username'],
                //  'password' => $data['password']
                //);
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
					);
                $username = $data['username']; //read the username that filled by the user
				$password = $data['password']; //read the password that filled by the user
				$passwordx = md5($password); //this is for change $password into MD5 form
				//the query is to matching the username+password user with username+password from database
				//$this->db->where($val);
                //$q = $this->appmodel->gettable('d_user');
                
                $q = $this->db->
                        query
                        ("SELECT * 
                         FROM d_user WHERE username='$username'
                         AND password='$passwordx'");
		if ($q->num_rows() == 1) {
		// if the query is TRUE, then save the username into session and load the welcome view
				$username = $q->row()->username;
		//$password = $q->row()->password;
				$level = $q->row()->level;
                $user_id = $q->row()->user_id;
                //$id_unitkerja = $q->row()->id_unitkerja;
                $remote_ip = $_SERVER['REMOTE_ADDR'];
                $this->session->set_userdata('username',$username);
		//$this->session->set_userdata('password',$password);
		//$this->session->set_userdata('level',$level);
                $this->session->set_userdata('user_id',$user_id);
				$this->session->set_userdata('remote_ip',$remote_ip);
				$this->session->set_userdata('level',$level);
                //$this->session->set_userdata('id_unitkerja',$id_unitkerja);
				$tanggal = date('Y-m-d H:i:s');
                //$data['welcome'] = "Welcome $nama";
		//$this->load->view('welcome_view', $data);
		redirect('backend','refresh');
                //$this->db->insert('d_log',array('log'=>'USER LOGIN','tanggal'=>$tanggal,'ip_address'=>$remote_ip,'username'=>$username));
                //echo "Success";
				
		}
		else {
// query error
		//$data['error']='!! Wrong Username or Password !!';
		//$this->load->view('login/login_view');
                //redirect('login','refresh');

		redirect('backend/login','refresh');
		}
    }
    function logout()
	{
	$this->session->sess_destroy();
	redirect('backend/login', 'refresh');
	}

}