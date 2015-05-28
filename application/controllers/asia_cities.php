<?php 

class asia_cities extends CI_Controller
{
    public function asia_index()
    {
      	$data['main']='asia_cities/asia_index.php';
      	$data['heading']='Cities of Asia';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/asia_index', $data);
    }

/* Afghanistan */
    
     public function herat()
    {
      	$data['main']='asia_cities/herat.php';
      	$data['heading']='Herat';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/herat', $data);
    }
        public function kabul()
    {
      	$data['main']='asia_cities/kabul.php';
      	$data['heading']='Kabul';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/kabul', $data);
    }
        public function qandahar()
    {
      	$data['main']='asia_cities/qandahar.php';
      	$data['heading']='Qandahar';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/qandahar', $data);
    }

/* Bangladesh */
    
     public function chittagong()
    {
      	$data['main']='asia_cities/chittagong.php';
      	$data['heading']='Chittagong';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/chittagong', $data);
    }
     public function dhaka()
    {
      	$data['main']='asia_cities/dhaka.php';
      	$data['heading']='Dhaka';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/dhaka', $data);
    }
     public function khulna()
    {
      	$data['main']='asia_cities/khulna.php';
      	$data['heading']='Khulna';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/khulna', $data);
    }
     public function sylhet()
    {
      	$data['main']='asia_cities/sylhet.php';
      	$data['heading']='Sylhet';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/sylhet', $data);
    }

/* Bhutan */
    
     public function thimphu()
    {
      	$data['main']='asia_cities/thimphu.php';
      	$data['heading']='Thimphu';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/thimphu', $data);
    }
     public function paro()
    {
      	$data['main']='asia_cities/paro.php';
      	$data['heading']='Paro';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/paro', $data);
    }

/* Brunei */
    
     public function bandar_seri_begawan()
    {
      	$data['main']='asia_cities/bandar_seri_begawan.php';
      	$data['heading']='Bandar Seri Begawan';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/bandar_seri_begawan', $data);
    }
     public function kuala_belait()
    {
      	$data['main']='asia_cities/kuala_belait.php';
      	$data['heading']='Kuala Belait';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/kuala_belait', $data);
    }

/* Burma (Myanmar) */
    
     public function mandalay()
    {
      	$data['main']='asia_cities/mandalay.php';
      	$data['heading']='Mandalay';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/mandalay', $data);
    }
     public function naypyidaw()
    {
      	$data['main']='asia_cities/naypyidaw.php';
      	$data['heading']='Naypyidaw';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/naypyidaw', $data);
    }
     public function pathein()
    {
      	$data['main']='asia_cities/pathein.php';
      	$data['heading']='Pathein';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/pathein', $data);
    }
     public function rangoon()
    {
      	$data['main']='asia_cities/rangoon.php';
      	$data['heading']='Rangoon';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/rangoon', $data);
    }

/* Cambodia */
    
     public function phnom_penh()
    {
      	$data['main']='asia_cities/phnom_penh.php';
      	$data['heading']='Phnom Penh';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/phnom_penh', $data);
    }
     public function battambang()
    {
      	$data['main']='asia_cities/battambang.php';
      	$data['heading']='Battambang';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/battambang', $data);
    }
     public function kampong_cham()
    {
      	$data['main']='asia_cities/kampong_cham.php';
      	$data['heading']='Kampong Cham';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/kampong_cham', $data);
    }
     public function prey_veng()
    {
      	$data['main']='asia_cities/prey_veng.php';
      	$data['heading']='Prey Veng';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/prey_veng', $data);
    }
     public function siem_reap()
    {
      	$data['main']='asia_cities/siem_reap.php';
      	$data['heading']='Siem Reap';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/siem_reap', $data);
    }
     public function ta_khmao()
    {
      	$data['main']='asia_cities/ta_khmao.php';
      	$data['heading']='Ta Khmao';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/ta_khmao', $data);
    }
     public function takeo()
    {
      	$data['main']='asia_cities/takeo.php';
      	$data['heading']='Takéo';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/takeo', $data);
    }

/* China - Check china_cities */

/* East Timor */

     public function dili()
    {
      	$data['main']='asia_cities/dili.php';
      	$data['heading']='Dili';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/dili', $data);
    }
     public function pante_macassar()
    {
      	$data['main']='asia_cities/pante_macassar.php';
      	$data['heading']='Pante Macassar';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/pante_macassar', $data);
    }
     public function suai()
    {
      	$data['main']='asia_cities/suai.php';
      	$data['heading']='Suai';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/suai', $data);
    }
    
/* India */

     public function chennai()
    {
      	$data['main']='asia_cities/chennai.php';
      	$data['heading']='Chennai';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/chennai', $data);
    }
    public function hyderabad()
    {
      	$data['main']='asia_cities/hyderabad.php';
      	$data['heading']='Hyderabad';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/hyderabad', $data);
    }

     public function minicoy()
    {
      	$data['main']='asia_cities/minicoy.php';
      	$data['heading']='Minicoy';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/minicoy', $data);
    }
     public function mumbay()
    {
      	$data['main']='asia_cities/mumbay.php';
      	$data['heading']='Mumbay';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/mumbay', $data);
    }
     public function new_delhi()
    {
      	$data['main']='asia_cities/new_delhi.php';
      	$data['heading']='New Delhi';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_cities/new_delhi', $data);
    }





}