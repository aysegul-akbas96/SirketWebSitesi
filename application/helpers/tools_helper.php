<?php

 function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->helper('url');
        }



function postvalue($name){
	$ci=get_instance();
	return $ci->input->post($name,true);
}

function imageupload($name,$path,$param){
	$ci=get_instance();

	$confing['upload_path']='./uploads/'.$path.'/';
	 $config['allowed_types']= $param;

	 $ci->upload->initialize($config);
	 if($ci->upload->do_upload($name)){
	 	$image=$ci->upload->data();
	 	return $config['upload_path'].$image['file_name'];
	 }
}