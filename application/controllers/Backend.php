<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Backend extends CI_Controller{


    function __construct() {
        parent::__construct();
        
    }
   
    function index(){
    	//Halaman admin
    	if ($this->session->userdata('username',TRUE) && $this->session->userdata('user_id',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata['level']=='1'){	
            //echo "Halaman Admin";
            $this->load->view('backend/header');
            $this->load->view('backend/index');
            $this->load->view('backend/footer');
    	}else{
    	redirect('backend/login','refresh');
    	}
	}
    
    function formtambah(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('user_id',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata['level']=='1'){ 
            $this->load->view('backend/formtambah');
        }else{
            redirect('backend/login','refresh');
        }
    }

    function aksitambah(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('user_id',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata['level']=='1'){ 
            $data = array(
                    'judul'             => $this->input->post('judul'),
                    'perusahaan'        => $this->input->post('perusahaan'),
                    'tanggal_seleksi'   => $this->input->post('tanggal_seleksi'),
                    'detil'             => $this->input->post('detil'),
                    'max_umur'          => $this->input->post('max_umur'),
                    'jns_kelamin'       => $this->input->post('jns_kelamin'),
                    'biaya'             => $this->input->post('biaya'),
                    'status'            => $this->input->post('status'),
                );
            $a = $this->db->insert('d_lowongan',$data);
            if($a){
                echo json_encode('success');
            }else{
                echo json_encode('error');
            }
        }else{
                echo json_encode('error_500');
        }
    }
    

    //edit function
    function edit($id = null){
        $this->load->view('backend/formedit');
    }

    function getlokerlist(){
            $a = base_url();

            $list = $this->appmodel->gettable('d_lowongan');
            $data = array();
            $no = 0;
        foreach ($list as $l) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $l->perusahaan;
            $row[] = $l->judul;
            $row[] = $l->max_umur;
            $row[] = chklokerstts($l->status);
            $row[] = "<div class=\"hidden-sm hidden-xs action-buttons\">
                                                                <a class=\"blue\" href=\"loker/$l->id_lowongan\">
                                                                    <i class=\"ace-icon fa fa-search-plus bigger-130\"></i>
                                                                </a>

                                                                <a class=\"green\" href=\"edit/$l->id_lowongan\" rel=\"modal\" id=\"editBtn\">
                                                                    <i class=\"ace-icon fa fa-pencil bigger-130\" ></i>
                                                                </a>

                                                                <a class=\"red\" href=\"hapus/$l->id_lowongan\">
                                                                    <i class=\"ace-icon fa fa-trash-o bigger-130\"></i>
                                                                </a>
                                                            </div>"


            ;
 
            $data[] = $row;
        }
 
        $output = array(
                       //"draw" => ,
                       "recordsTotal" => $this->appmodel->count_all('d_lowongan'),
                        "recordsFiltered" => $this->appmodel->count_filtered('d_lowongan'),
                        "data" => $data
                );
        //output to json format
        echo json_encode($output);
    }



	function login(){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('user_id',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata['level']=='1'){ 

        redirect('backend','refresh');
        }else{
        }	
            $data['username'] =  $this->input->post('username',true);
            $data['password'] =  $this->input->post('password',true);	
            $this->load->view('login/vw_login',$data);
        }
    function remotelist(){
        $data = array(
                'title' => 'Daftar Lowongan',
                'loker' => $this->appmodel->gettable('d_lowongan')
                );
        $this->load->view('backend/remotelist',$data);
    }
    function loker($id=null){
        if ($this->session->userdata('username',TRUE) && $this->session->userdata('user_id',TRUE) && $this->session->userdata('remote_ip',TRUE) && $this->session->userdata['level']=='1'){ 
            if(empty($id)){
               // echo "table";
            $data = array(
                'title' => 'Daftar Lowongan',
                'loker' => $this->appmodel->gettable('d_lowongan')
                );
            
            $this->load->view('backend/header');
            $this->load->view('backend/listloker',$data);
            $this->load->view('backend/footer');  
            }else{
                //detil Loker

                echo "detil";


            }
        }else{
            redirect('backend/login','refresh');
        }
    }    

}