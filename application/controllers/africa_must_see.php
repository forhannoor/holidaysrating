<?php 

class africa_must_see extends CI_Controller
{
    public function algeria()
    {
      	$data['main']='africa_must_see/algeria.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/algeria', $data);
    }
    public function angola()
    {
      	$data['main']='africa_must_see/angola.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/angola', $data);
    }
    public function benin()
    {
      	$data['main']='africa_must_see/benin.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/angola', $data);
    }
    public function botswana()
    {
      	$data['main']='africa_must_see/botswana.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']='africa_must_see/burkino_faso.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']='africa_must_see/burundi.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']='africa_must_see/cameroon.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['main']='africa_must_see/cape_verde.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/cape_verde', $data);
    }
    public function car()
    {
      	$data['main']='africa_must_see/car.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/car', $data);
    }
    public function chad()
    {
      	$data['main']='africa_must_see/chad.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/chad', $data);
    }
    public function comoros()
    {
      	$data['main']='africa_must_see/comoros.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/comoros', $data);
    }
    public function congo()
    {
      	$data['main']='africa_must_see/congo.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/congo', $data);
    }
    public function cote()
    {
      	$data['main']='africa_must_see/cote.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/cote', $data);
    }
    public function drc()
    {
      	$data['main']='africa_must_see/drc.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/drc', $data);
    }
    public function djibouti()
    {
      	$data['main']='africa_must_see/djibouti.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']='africa_must_see/egypt.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']='africa_must_see/equatorial_guinea.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']='africa_must_see/eritrea.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']='africa_must_see/ethiopia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']='africa_must_see/gabon.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']='africa_must_see/gambia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/gambia', $data);
	}
    public function ghana()
    {
      	$data['main']='africa_must_see/ghana.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/ghana', $data);
	}
    public function guinea()
    {
      	$data['main']='africa_must_see/guinea.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/guinea', $data);
	}
    public function guinea_bissau()
    {
      	$data['main']='africa_must_see/guinea_bissau.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/guinea_bissau', $data);
	}
    public function kenya()
    {
      	$data['main']='africa_must_see/kenya.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/kenya', $data);
	}
    public function lesotho()
    {
      	$data['main']='africa_must_see/lesotho.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/lesotho', $data);
	}
    public function liberia()
    {
      	$data['main']='africa_must_see/liberia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/liberia', $data);
	}
    public function libya()
    {
      	$data['main']='africa_must_see/libya.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/libya', $data);
	}
    public function madagascar()
    {
      	$data['main']='africa_must_see/madagascar.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/madagascar', $data);
	}
    public function malawi()
    {
      	$data['main']='africa_must_see/malawi.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/malawi', $data);
	}
    public function mali()
    {
      	$data['main']='africa_must_see/mali.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/mali', $data);
	}
    public function mauritania()
    {
      	$data['main']='africa_must_see/mauritania.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/mauritania', $data);
	}
    public function mauritius()
    {
      	$data['main']='africa_must_see/mauritius.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/mauritius', $data);
	}
    public function morocco()
    {
      	$data['main']='africa_must_see/morocco.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/morocco', $data);
	}
    public function mozambique()
    {
      	$data['main']='africa_must_see/mozambique.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/mozambique', $data);
	}
    public function namibia()
    {
      	$data['main']='africa_must_see/namibia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/namibia', $data);
	}
    public function niger()
    {
      	$data['main']='africa_must_see/niger.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/niger', $data);
	}
    public function nigeria()
    {
      	$data['main']='africa_must_see/nigeria.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/nigeria', $data);
	}
    public function rwanda()
    {
      	$data['main']='africa_must_see/rwanda.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/rwanda', $data);
	}
    public function sao_tome_and_principe()
    {
      	$data['main']='africa_must_see/sao_tome_and_principe.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/sao_tome_and_principe', $data);
	}
    public function senegal()
    {
      	$data['main']='africa_must_see/senegal.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/senegal', $data);
	}
    public function seychelles()
    {
      	$data['main']='africa_must_see/seychelles.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/seychelles', $data);
	}
    public function sierra_leone()
    {
      	$data['main']='africa_must_see/sierra_leone.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/sierra_leone', $data);
	}
    public function somalia()
    {
      	$data['main']='africa_must_see/somalia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/somalia', $data);
	}
    public function south_africa()
    {
      	$data['main']='africa_must_see/south_africa.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/south_africa', $data);
	}
    public function south_sudan()
    {
      	$data['main']='africa_must_see/south_sudan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/south_sudan', $data);
	}
    public function sudan()
    {
      	$data['main']='africa_must_see/sudan.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/sudan', $data);
	}
    public function swaziland()
    {
      	$data['main']='africa_must_see/swaziland.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/swaziland', $data);
	}
    public function tanzania()
    {
      	$data['main']='africa_must_see/tanzania.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/tanzania', $data);
	}
    public function togo()
    {
      	$data['main']='africa_must_see/togo.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/togo', $data);
	}
    public function tunisia()
    {
      	$data['main']='africa_must_see/tunisia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/tunisia', $data);
	}
    public function uganda()
    {
      	$data['main']='africa_must_see/uganda.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/uganda', $data);
	}
    public function western_sahara()
    {
      	$data['main']='africa_must_see/western_sahara.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/western_sahara', $data);
	}
    public function zambia()
    {
      	$data['main']='africa_must_see/zambia.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/zambia', $data);
	}
    public function zanzibar()
    {
      	$data['main']='africa_must_see/zanzibar.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/zanzibar', $data);
	}
    public function zimbabwe()
    {
      	$data['main']='africa_must_see/zimbabwe.php';
      	$data['heading']='Must See';
      	$data['right_bar_must_see'] = 'sidebar/right_bar_must_see';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_must_see/zimbabwe', $data);
	}









}