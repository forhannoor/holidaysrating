<?php 

class africa_health extends CI_Controller
{
    public function algeria()
    {
      	$data['main']='africa_health/algeria.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/algeria', $data);
    }
    public function angola()
    {
      	$data['main']='africa_health/angola.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/angola', $data);
    }
    public function benin()
    {
      	$data['main']='africa_health/benin.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/benin', $data);
    }
    public function botswana()
    {
      	$data['main']='africa_health/botswana.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']='africa_health/burkino_faso.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']='africa_health/burundi.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']='africa_health/cameroon.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['main']='africa_health/cameroon.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/cameroon', $data);
    }
    public function car()
    {
      	$data['main']='africa_health/car.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/car', $data);
    }
    public function chad()
    {
      	$data['main']='africa_health/chad.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/chad', $data);
    }
    public function comoros()
    {
      	$data['main']='africa_health/comoros.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/comoros', $data);
    }
    public function congo()
    {
      	$data['main']='africa_health/congo.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/congo', $data);
    }
    public function cote()
    {
      	$data['main']='africa_health/cote.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/cote', $data);
    }
    public function drc()
    {
      	$data['main']='africa_health/drc.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/drc', $data);
    }
    public function djibouti()
    {
      	$data['main']='africa_health/djibouti.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/djibouti', $data);
	}
    public function egypt()
    {
      	$data['main']='africa_health/egypt.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/egypt', $data);
	}
    public function equatorial_guinea()
    {
      	$data['main']='africa_health/equatorial_guinea.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/equatorial_guinea', $data);
	}
    public function eritrea()
    {
      	$data['main']='africa_health/eritrea.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/eritrea', $data);
	}
    public function ethiopia()
    {
      	$data['main']='africa_health/ethiopia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/ethiopia', $data);
	}
    public function gabon()
    {
      	$data['main']='africa_health/gabon.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/gabon', $data);
	}
    public function gambia()
    {
      	$data['main']='africa_health/gambia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/gambia', $data);
	}
    public function ghana()
    {
      	$data['main']='africa_health/ghana.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']='africa_health/guinea.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']='africa_health/guinea_bissau.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_health/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']='africa_health/kenya.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']='africa_health/lesotho.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/lesotho', $data);
    }
     public function liberia()
    {
      	$data['main']='africa_health/liberia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/liberia', $data);
    }
     public function libya()
    {
      	$data['main']='africa_health/libya.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/libya', $data);
    }
     public function madagascar()
    {
      	$data['main']='africa_health/madagascar.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/madagascar', $data);
    }
     public function malawi()
    {
      	$data['main']='africa_health/malawi.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/malawi', $data);
    }
     public function mali()
    {
      	$data['main']='africa_health/mali.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/mali', $data);
    }
     public function mauritania()
    {
      	$data['main']='africa_health/mauritania.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/mauritania', $data);
    }
     public function mauritius()
    {
      	$data['main']='africa_health/mauritius.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/mauritius', $data);
    }
     public function morocco()
    {
      	$data['main']='africa_health/morocco.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/morocco', $data);
    }
     public function mozambique()
    {
      	$data['main']='africa_health/mozambique.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/mozambique', $data);
    }
     public function namibia()
    {
      	$data['main']='africa_health/namibia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/namibia', $data);
    }
     public function niger()
    {
      	$data['main']='africa_health/niger.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/niger', $data);
    }
     public function nigeria()
    {
      	$data['main']='africa_health/nigeria.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/nigeria', $data);
    }
     public function rwanda()
    {
      	$data['main']='africa_health/rwanda.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/rwanda', $data);
    }
     public function sao_tome_and_principe()
    {
      	$data['main']='africa_health/sao_tome_and_principe.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/sao_tome_and_principe', $data);
    }
     public function senegal()
    {
      	$data['main']='africa_health/senegal.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/senegal', $data);
    }
     public function seychelles()
    {
      	$data['main']='africa_health/seychelles.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/seychelles', $data);
    }
     public function sierra_leone()
    {
      	$data['main']='africa_health/sierra_leone.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/sierra_leone', $data);
    }
     public function somalia()
    {
      	$data['main']='africa_health/somalia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/somalia', $data);
    }
     public function south_africa()
    {
      	$data['main']='africa_health/south_africa.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/south_africa', $data);
    }
     public function south_sudan()
    {
      	$data['main']='africa_health/south_sudan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/south_sudan', $data);
    }
     public function sudan()
    {
      	$data['main']='africa_health/sudan.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/sudan', $data);
    }
     public function swaziland()
    {
      	$data['main']='africa_health/swaziland.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/swaziland', $data);
    }
     public function tanzania()
    {
      	$data['main']='africa_health/tanzania.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/tanzania', $data);
    }
     public function togo()
    {
      	$data['main']='africa_health/togo.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/togo', $data);
    }
     public function tunisia()
    {
      	$data['main']='africa_health/tunisia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/tunisia', $data);
    }
     public function uganda()
    {
      	$data['main']='africa_health/uganda.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/uganda', $data);
    }
     public function western_sahara()
    {
      	$data['main']='africa_health/western_sahara.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/western_sahara', $data);
    }
     public function zambia()
    {
      	$data['main']='africa_health/zambia.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/zambia', $data);
    }
     public function zanzibar()
    {
      	$data['main']='africa_health/zanzibar.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/zanzibar', $data);
    }
     public function zimbabwe()
    {
      	$data['main']='africa_health/zimbabwe.php';
      	$data['heading']='Health';
      	$data['right_bar_health'] = 'sidebar/right_bar_health';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('/africa_health/zimbabwe', $data);
    }





   
   
}