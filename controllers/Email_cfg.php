<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_cfg extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('email'); 
        
    }

    public function index()
    {
        
        $this->load->view('contact');
        
    }

     public function send_mail() { 

        $row = $this->db->get('email_cfg')->row();

        if ($row) {
            $data = array(
        'protocol' => $row->protocol,
        'smtp_host' => $row->smtp_host,
        'smtp_user' => $row->smtp_user,
        'smtp_pass' => $row->smtp_pass,
        'smtp_port' => $row->smtp_port,
        'smtp_timeout' => $row->smtp_timeout,
        'mailtype' => $row->mailtype,
        'charset' => $row->charset,
        'sender_address' => $row->sender_address,
        'sender_name' => $row->sender_name,
        );
            } else {
            $this->session->set_flashdata('message', 'Record not found');
            redirect(site_url());
        }

            $config = array();  
            $config['protocol'] = $data['protocol'];  
            $config['smtp_host'] = $data['smtp_host'];  
            $config['smtp_user'] = $data['smtp_user'];  
            $config['smtp_pass'] = $data['smtp_pass'];  
            $config['smtp_port'] = $data['smtp_port'];  
            $config['smtp_timeout'] = $data['smtp_timeout']; 
            $config['mailtype'] = $data['mailtype'];
            $config['charset'] = $data['charset'];

            $this->email->initialize($config); 
            $this->email->set_newline("\r\n");
            
         $from_email = $this->input->post('email'); 
         $name_email = $this->input->post('name'); 
         $to_email = $data['sender_address'];
         $msg_email = $this->input->post('message');
         $subject = $this->input->post('subject');
         

         //Load email library 
         $this->load->library('email', $config); 
   
         $this->email->from($from_email, $name_email); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
         $this->email->message($msg_email); 
         $this->email->send();
   
         redirect(site_url('email_cfg'));
      } 



}

