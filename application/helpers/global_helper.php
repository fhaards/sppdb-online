<?php

	function isAdmin(){
		$ci=& get_instance();
		return $ci->session->level=='Admin';	
	}

	function isUser(){
		$ci=& get_instance();
		return $ci->session->level=='User';	
	}

	function show404IfNotAdmin(){
		if(!isAdmin()){
			redirect('error404');
		}
	}

	function redirectIfNotLogin(){
		$ci=& get_instance();
		if($ci->session->userdata('status') != "login"){
			redirect(base_url("webapp"));
		}
	}

	function getUserData(){
		$ci=& get_instance();
		$ci->load->model('model_user');
		return $ci->model_user->findBy('email',$ci->session->email);
	}
	
	function getPesertaData(){
		$ci=& get_instance();
		$ci->load->model('model_peserta');
		return $ci->model_peserta->findBy();
	}
	
	function getPesertaDataByUser(){
		$ci=& get_instance();
		$ci->load->model('model_peserta');
		return $ci->model_peserta->findByUser();
    }
    
    function runScriptJs($script){
        $ci=& get_instance();
        $ci->session->set_flashdata('scriptJs', '<script>'.$script.'</script>');
	}
	