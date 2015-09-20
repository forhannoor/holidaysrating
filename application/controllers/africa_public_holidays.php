<?php 

class africa_public_holidays extends CI_Controller
{
    public function algeria()
    {
      	$data['main']='africa_public_holidays/algeria.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/algeria', $data);
    }
    public function angola()
    {
      	$data['main']='africa_public_holidays/angola.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/angola', $data);
    }
    public function benin()
    {
      	$data['main']='africa_public_holidays/benin.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/benin', $data);
    }
    public function botswana()
    {
      	$data['main']='africa_public_holidays/botswana.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']='africa_public_holidays/burkino_faso.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']='africa_public_holidays/burundi.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']='africa_public_holidays/burundi.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/burundi', $data);
    }
    public function cape_verde()
    {
      	$data['main']='africa_public_holidays/cape_verde.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/cape_verde', $data);
    }
    public function car()
    {
      	$data['main']='africa_public_holidays/car.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/car', $data);
    }
    public function chad()
    {
      	$data['main']='africa_public_holidays/chad.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/chad', $data);
    }
    public function comoros()
    {
      	$data['main']='africa_public_holidays/comoros.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/comoros', $data);
    }
    public function congo()
    {
      	$data['main']='africa_public_holidays/congo.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/congo', $data);
    }
    public function cote()
    {
      	$data['main']='africa_public_holidays/cote.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/cote', $data);
    }
    public function drc()
    {
      	$data['main']='africa_public_holidays/drc.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/drc', $data);
    }
    public function djibouti()
    {
      	$data['main']='africa_public_holidays/djibouti.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']='africa_public_holidays/egypt.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']='africa_public_holidays/equatorial_guinea.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']='africa_public_holidays/eritrea.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']='africa_public_holidays/ethiopia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']='africa_public_holidays/gabon.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']='africa_public_holidays/gambia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']='africa_public_holidays/ghana.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']='africa_public_holidays/guinea.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']='africa_public_holidays/guinea_bissau.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']='africa_public_holidays/kenya.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']='africa_public_holidays/lesotho.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']='africa_public_holidays/liberia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/liberia', $data);
    }
    public function libya()
    {
      	$data['main']='africa_public_holidays/libya.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/libya', $data);
    }
    public function madagascar()
    {
      	$data['main']='africa_public_holidays/madagascar.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']='africa_public_holidays/malawi.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/malawi', $data);
    }
    public function mali()
    {
      	$data['main']='africa_public_holidays/mali.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']='africa_public_holidays/mauritania.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['main']='africa_public_holidays/mauritius.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/mauritius', $data);
    }
    public function morocco()
    {
      	$data['main']='africa_public_holidays/morocco.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']='africa_public_holidays/mozambique.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/mozambique', $data);
    }
    public function namibia()
    {
      	$data['main']='africa_public_holidays/namibia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/namibia', $data);
    }
    public function niger()
    {
      	$data['main']='africa_public_holidays/niger.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/niger', $data);
    }
    public function nigeria()
    {
      	$data['main']='africa_public_holidays/nigeria.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/nigeria', $data);
    }
    public function rwanda()
    {
      	$data['main']='africa_public_holidays/rwanda.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']='africa_public_holidays/sao_tome_and_principe.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']='africa_public_holidays/senegal.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/senegal', $data);
    }
    public function seychelles()
    {
      	$data['main']='africa_public_holidays/seychelles.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/seychelles', $data);
    }
    public function sierra_leone()
    {
      	$data['main']='africa_public_holidays/sierra_leone.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['main']='africa_public_holidays/somalia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']='africa_public_holidays/south_africa.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']='africa_public_holidays/south_sudan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']='africa_public_holidays/sudan.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']='africa_public_holidays/swaziland.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']='africa_public_holidays/tanzania.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']='africa_public_holidays/togo.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']='africa_public_holidays/tunisia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']='africa_public_holidays/uganda.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']='africa_public_holidays/western_sahara.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['main']='africa_public_holidays/zambia.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/zambia', $data);
    }
    public function zanzibar()
    {
      	$data['main']='africa_public_holidays/zanzibar.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/zanzibar', $data);
    }
    public function zimbabwe()
    {
      	$data['main']='africa_public_holidays/zimbabwe.php';
      	$data['heading']='Public holidays';
      	$data['right_bar_holidays'] = 'sidebar/right_bar_holidays';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_public_holidays/zimbabwe', $data);
    }









}