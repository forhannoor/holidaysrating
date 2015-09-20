<?php 

class africa_cities extends CI_Controller
{
    public function africa_index()
    {
      	$data['main']       = 'africa_cities/africa_index.php';
      	$data['heading']    = 'Cities of Africa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/africa_index', $data);
    }

/* Algeria */
    
     public function algiers()
    {
      	$data['main']       = 'africa_cities/algiers.php';
      	$data['heading']    = 'Algiers';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/algiers', $data);
    }
         public function constantine()
    {
      	$data['main']       = 'africa_cities/constantine.php';
      	$data['heading']    = 'Constantine';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/constantine', $data);
    }

     public function tamanrasset()
    {
      	$data['main']       = 'africa_cities/tamanrasset.php';
      	$data['heading']    = 'Tamanrasset';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/tamanrasset', $data);
    }

/* Angola */

         public function luanda()
    {
      	$data['main']       = 'africa_cities/luanda.php';
      	$data['heading']    = 'Luanda';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/luanda', $data);
    }

     public function lubango()
    {
      	$data['main']       = 'africa_cities/lubango.php';
      	$data['heading']    = 'Lubango';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/lubango', $data);
    }
     public function namibe()
    {
      	$data['main']       = 'africa_cities/namibe.php';
      	$data['heading']    = 'Namibe';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/namibe', $data);
    }

/* Benin */

     public function cotonou()
    {
      	$data['main']       = 'africa_cities/cotonou.php';
      	$data['heading']    = 'Cotonou';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/cotonou', $data);
    }
     public function porto_novo()
    {
      	$data['main']       = 'africa_cities/porto_novo.php';
      	$data['heading']    = 'Porto Novo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/porto_novo', $data);
    }
    
/* Botswana */

     public function gaborone()
    {
      	$data['main']       = 'africa_cities/gaborone.php';
      	$data['heading']    = 'Gaborone';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/gaborone', $data);
    }
     public function francistown()
    {
      	$data['main']       = 'africa_cities/francistown.php';
      	$data['heading']    = 'Francistown';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/francistown', $data);
    }
    
/* Burkino Faso */

     public function ouagadougou()
    {
      	$data['main']       = 'africa_cities/ouagadougou.php';
      	$data['heading']    = 'Ouagadougou';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/ouagadougou', $data);
    }
     public function ouahigouya()
    {
      	$data['main']       = 'africa_cities/ouahigouya.php';
      	$data['heading']    = 'Ouahigouya';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/ouahigouya', $data);
    }
    
/* Burundi */

     public function bujumbura()
    {
      	$data['main']       = 'africa_cities/bujumbura.php';
      	$data['heading']    = 'Bujumbura';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bujumbura', $data);
    }
     public function gitega()
    {
      	$data['main']       = 'africa_cities/gitega.php';
      	$data['heading']    = 'Gitega';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/gitega', $data);
    }

/* Cameroon */

     public function bafoussam()
    {
      	$data['main']       = 'africa_cities/bafoussam.php';
      	$data['heading']    = 'Bafoussam';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bafoussam', $data);
    }
     public function douala()
    {
      	$data['main']       = 'africa_cities/douala.php';
      	$data['heading']    = 'Douala';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/douala', $data);
    }
     public function garoua()
    {
      	$data['main']       = 'africa_cities/garoua.php';
      	$data['heading']    = 'Garoua';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/garoua', $data);
    }
     public function maroua()
    {
      	$data['main']       = 'africa_cities/maroua.php';
      	$data['heading']    = 'Maroua';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/maroua', $data);
    }
     public function yaounde()
    {
      	$data['main']       = 'africa_cities/yaounde.php';
      	$data['heading']    = 'Yaoundé';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/yaounde', $data);
    }
    
/* Cape Verde */

     public function pedra_badejo()
    {
      	$data['main']       = 'africa_cities/pedra_badejo.php';
      	$data['heading']    = 'Pedra Badejo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/pedra_badejo', $data);
    }
    public function praia()
    {
      	$data['main']       = 'africa_cities/praia.php';
      	$data['heading']    = 'Praia';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/praia', $data);
    }
     public function santa_maria()
    {
      	$data['main']       = 'africa_cities/santa_maria.php';
      	$data['heading']    = 'Santa Maria';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/santa_maria', $data);
    }

/* Central African Republic */

     public function bangui()
    {
      	$data['main']       = 'africa_cities/bangui.php';
      	$data['heading']    = 'Bangui';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bangui', $data);
    }
     public function bimbo()
    {
      	$data['main']       = 'africa_cities/bimbo.php';
      	$data['heading']    = 'Bimbo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bimbo', $data);
    }
     public function berberati()
    {
      	$data['main']       = 'africa_cities/berberati.php';
      	$data['heading']    = 'Berbérati';      	
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/berberati', $data);
    }
    
/* Central African Republic */

     public function n_djamena()
    {
      	$data['main']       = 'africa_cities/n_djamena.php';
      	$data['heading']    = 'N Djamena';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/n_djamena', $data);
    }
     public function faya_largeau()
    {
      	$data['main']       = 'africa_cities/faya_largeau.php';
      	$data['heading']    = 'Faya-Largeau';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/faya_largeau', $data);
    }
    
/* Comoros */

     public function fomboni()
    {
      	$data['main']       = 'africa_cities/fomboni.php';
      	$data['heading']    = 'Fomboni';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/fomboni', $data);
    }

     public function istandra()
    {
      	$data['main']       ='africa_cities/istandra.php';
      	$data['heading']    ='Istandra';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/istandra', $data);
    }
     public function moroni()
    {
      	$data['main']       = 'africa_cities/moroni.php';
      	$data['heading']    = 'Moroni';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/moroni', $data);
    }
     public function mutsamundu()
    {
      	$data['main']       = 'africa_cities/mutsamundu.php';
      	$data['heading']    = 'Mutsamundu';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mutsamundu', $data);
    }
     public function mamoudzou()
    {
      	$data['main']       = 'africa_cities/mamoudzou.php';
      	$data['heading']    = 'Mamoudzou';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mamoudzou', $data);
    }

/* Congo */

     public function brazzaville()
    {
      	$data['main']       = 'africa_cities/brazzaville.php';
      	$data['heading']    = 'Brazzaville';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/brazzaville', $data);
    }
     public function dolisie()
    {
      	$data['main']       = 'africa_cities/dolisie.php';
      	$data['heading']    = 'Dolisie';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/dolisie', $data);
    }
     public function kindamba()
    {
      	$data['main']       = 'africa_cities/kindamba.php';
      	$data['heading']    = 'Kindamba';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kindamba', $data);
    }
     public function nkayi()
    {
      	$data['main']       = 'africa_cities/nkayi.php';
      	$data['heading']    = 'Nkayi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/nkayi', $data);
    }
     public function pointe_noire()
    {
      	$data['main']       = 'africa_cities/pointe_noire.php';
      	$data['heading']    = 'Pointe-Noire';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/pointe_noire', $data);
    }

/* Côte d'Ivoire */

     public function abidjan()
    {
      	$data['main']       = 'africa_cities/abidjan.php';
      	$data['heading']    = 'Abidjan';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/abidjan', $data);
    }
     public function abobo()
    {
      	$data['main']       = 'africa_cities/abobo.php';
      	$data['heading']    = 'Abobo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/abobo', $data);
    }
     public function bouake()
    {
      	$data['main']       = 'africa_cities/bouake.php';
      	$data['heading']    = 'Bouaké';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bouake', $data);
    }
     public function daloa()
    {
      	$data['main']       = 'africa_cities/daloa.php';
      	$data['heading']    = 'Daloa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/daloa', $data);
    }
     public function yamoussoukro()
    {
      	$data['main']       = 'africa_cities/yamoussoukro.php';
      	$data['heading']    = 'Yamoussoukro';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/yamoussoukro', $data);
    }

/* Democratic Republic of Congo */

     public function goma()
    {
      	$data['main']       = 'africa_cities/goma.php';
      	$data['heading']    = 'Goma';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/goma', $data);
    }
     public function kinshasa()
    {
      	$data['main']       = 'africa_cities/kinshasa.php';
      	$data['heading']    = 'Kinshasa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kinshasa', $data);
    }
     public function lubumbashi()
    {
      	$data['main']       = 'africa_cities/lubumbashi.php';
      	$data['heading']    = 'Lubumbashi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/lubumbashi', $data);
    }
     public function mbuji_mayi()
    {
      	$data['main']       = 'africa_cities/mbuji_mayi.php';
      	$data['heading']    = 'Mbuji-Mayi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mbuji_mayi', $data);
    }

/* Djibouti */

     public function djibouti_city()
    {
      	$data['main']       = 'africa_cities/djibouti_city.php';
      	$data['heading']    = 'Djibouti City';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/djibouti_city', $data);
    }
     public function ali_sabieh()
    {
      	$data['main']       = 'africa_cities/ali_sabieh.php';
      	$data['heading']    = 'Ali Sabieh';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/ali_sabieh', $data);
    }

/* Egypt */

     public function alexandria()
    {
      	$data['main']       = 'africa_cities/alexandria.php';
      	$data['heading']    = 'Alexandria';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/alexandria', $data);
    }
     public function cairo()
    {
      	$data['main']       = 'africa_cities/cairo.php';
      	$data['heading']    = 'Cairo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/cairo', $data);
    }
     public function giza()
    {
      	$data['main']       = 'africa_cities/giza.php';
      	$data['heading']    = 'Giza';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/giza', $data);
    }
     public function shubra_el_kheima()
    {
      	$data['main']       = 'africa_cities/shubra_el_kheima.php';
      	$data['heading']    = 'Shubra El-Kheima';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/shubra_el_kheima', $data);
    }

/* Equatorial Guinea */

     public function bata()
    {
      	$data['main']       = 'africa_cities/bata.php';
      	$data['heading']    = 'Bata';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bata', $data);
    }
     public function malabo()
    {
      	$data['main']       = 'africa_cities/malabo.php';
      	$data['heading']    = 'Malabo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/malabo', $data);
    }

/* Eritrea */

     public function asmara()
    {
      	$data['main']       = 'africa_cities/asmara.php';
      	$data['heading']    = 'Asmara';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/asmara', $data);
    }
     public function keren()
    {
      	$data['main']       = 'africa_cities/keren.php';
      	$data['heading']    = 'Keren';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/keren', $data);
    }
    
/* Ethiopia */

     public function adama()
    {
      	$data['main']       = 'africa_cities/adama.php';
      	$data['heading']    = 'Adama';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/adama', $data);
    }
     public function addis_ababa()
    {
      	$data['main']       = 'africa_cities/addis_ababa.php';
      	$data['heading']    = 'Addis Ababa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/addis_ababa', $data);
    }
     public function dire_dawa()
    {
      	$data['main']       = 'africa_cities/dire_dawa.php';
      	$data['heading']    = 'Dire Dawa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/dire_dawa', $data);
    }
     public function mek_ele()
    {
      	$data['main']       = 'africa_cities/mek_ele.php';
      	$data['heading']    = 'Mek ele';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mek_ele', $data);
    }

/* Gabon */

     public function libreville()
    {
      	$data['main']       = 'africa_cities/libreville.php';
      	$data['heading']    = 'Libreville';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/libreville', $data);
    }
     public function port_gentil()
    {
      	$data['main']       = 'africa_cities/port_gentil.php';
      	$data['heading']    = 'Port-Gentil';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/port_gentil', $data);
    }

/* Gambia */

     public function brikama()
    {
      	$data['main']       = 'africa_cities/brikama.php';
      	$data['heading']    = 'Brikama';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/brikama', $data);
    }
     public function bakau()
    {
      	$data['main']       = 'africa_cities/bakau.php';
      	$data['heading']    = 'Bakau';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bakau', $data);
    }
     public function banjul()
    {
      	$data['main']       = 'africa_cities/banjul.php';
      	$data['heading']    = 'Banjul';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/banjul', $data);
    }
        public function serekunda()
    {
      	$data['main']       = 'africa_cities/serekunda.php';
      	$data['heading']    = 'Banjul';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/serekunda', $data);
    }
 
/* Ghana */

     public function accra()
    {
      	$data['main']       = 'africa_cities/accra.php';
      	$data['heading']    = 'Accra';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/accra', $data);
    }
     public function kumasi()
    {
      	$data['main']       = 'africa_cities/kumasi.php';
      	$data['heading']    = 'Kumasi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kumasi', $data);
    }
     public function sekondi_takoradi()
    {
      	$data['main']       = 'africa_cities/sekondi_takoradi.php';
      	$data['heading']    = 'Sekondi-Takoradi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/sekondi_takoradi', $data);
    }
     public function tamale()
    {
      	$data['main']       = 'africa_cities/tamale.php';
      	$data['heading']    = 'Tamale';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/tamale', $data);
    }

/* Guinea */

     public function conakry()
    {
      	$data['main']       = 'africa_cities/conakry.php';
      	$data['heading']    = 'Conakry';      	
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/conakry', $data);
    }
     public function nzerekore()
    {
      	$data['main']       = 'africa_cities/nzerekore.php';
      	$data['heading']    = 'Nzérékoré';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/nzerekore', $data);
    }
    
/* Guinea-Bissau */

     public function bissau()
    {
      	$data['main']       = 'africa_cities/bissau.php';
      	$data['heading']    = 'Bissau';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bissau', $data);
    }
     public function bafata()
    {
      	$data['main']       = 'africa_cities/bafata.php';
      	$data['heading']    = 'Bafatá';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bafata', $data);
    }

/* Kenya */

     public function mombasa()
    {
      	$data['main']       = 'africa_cities/mombasa.php';
      	$data['heading']    = 'Mombasa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mombasa', $data);
    }
     public function nairobi()
    {
      	$data['main']       = 'africa_cities/nairobi.php';
      	$data['heading']    = 'Nairobi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/nairobi', $data);
    }

/* Lesotho */

     public function mafeteng()
    {
      	$data['main']       = 'africa_cities/mafeteng.php';
      	$data['heading']    = 'Mafeteng';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mafeteng', $data);
    }
     public function maseru()
    {
      	$data['main']       = 'africa_cities/maseru.php';
      	$data['heading']    = 'Maseru';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/maseru', $data);
    }
     public function teyateyaneng()
    {
      	$data['main']       = 'africa_cities/teyateyaneng.php';
      	$data['heading']    = 'Teyateyaneng';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/teyateyaneng', $data);
    }
    
/* Liberia */

     public function gbarnga()
    {
      	$data['main']       = 'africa_cities/gbarnga.php';
      	$data['heading']    = 'Gbarnga';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/gbarnga', $data);
    }
     public function monrovia()
    {
      	$data['main']       = 'africa_cities/monrovia.php';
      	$data['heading']    = 'Monrovia';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/monrovia', $data);
    }
    
/* Libya */

     public function tripoli()
    {
      	$data['main']       = 'africa_cities/tripoli.php';
      	$data['heading']    = 'Tripoli';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/tripoli', $data);
    }
     public function benghazi()
    {
      	$data['main']       = 'africa_cities/benghazi.php';
      	$data['heading']    = 'Benghazi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/benghazi', $data);
    }
    
/* Madagascar */

     public function antananarivo()
    {
      	$data['main']       = 'africa_cities/antananarivo.php';
      	$data['heading']    = 'Antananarivo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/antananarivo', $data);
    }
     public function antsirabe()
    {
      	$data['main']       = 'africa_cities/antsirabe.php';
      	$data['heading']    = 'Antsirabe';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/antsirabe', $data);
    }
     public function fianarantsoa()
    {
      	$data['main']       = 'africa_cities/fianarantsoa.php';
      	$data['heading']    = 'Fianarantsoa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/fianarantsoa', $data);
    }
     public function toamasina()
    {
      	$data['main']       = 'africa_cities/toamasina.php';
      	$data['heading']    = 'Toamasina';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/toamasina', $data);
    }
    
/* Malawi */

     public function lilongwe()
    {
      	$data['main']       = 'africa_cities/lilongwe.php';
      	$data['heading']    = 'Lilongwe';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/lilongwe', $data);
    }
     public function biantyre()
    {
      	$data['main']       = 'africa_cities/biantyre.php';
      	$data['heading']    = 'Biantyre';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/biantyre', $data);
    }
    
/* Mali */

     public function bamako()
    {
      	$data['main']       = 'africa_cities/bamako.php';
      	$data['heading']    = 'Bamako';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bamako', $data);
    }
     public function koutiala()
    {
      	$data['main']       = 'africa_cities/koutiala.php';
      	$data['heading']    = 'Koutiala';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/koutiala', $data);
    }
     public function mopti()
    {
      	$data['main']       = 'africa_cities/mopti.php';
      	$data['heading']    = 'Mopti';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mopti', $data);
    }
     public function sikasso()
    {
      	$data['main']       = 'africa_cities/sikasso.php';
      	$data['heading']    = 'Sikasso';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/sikasso', $data);
    }

/* Mauritania */

     public function atar()
    {
      	$data['main']       = 'africa_cities/atar.php';
      	$data['heading']    = 'Atar';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/atar', $data);
    }
     public function nouakchott()
    {
      	$data['main']       = 'africa_cities/nouakchott.php';
      	$data['heading']    = 'Nouakchott';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/nouakchott', $data);
    }
    
/* Mauritius */

     public function port_louis()
    {
      	$data['main']       = 'africa_cities/port_louis.php';
      	$data['heading']    = 'Port Louis';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/port_louis', $data);
    }
     public function plaisance()
    {
      	$data['main']       = 'africa_cities/plaisance.php';
      	$data['heading']    = 'Plaisance';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/plaisance', $data);
    }
     public function vacoas()
    {
      	$data['main']       = 'africa_cities/vacoas.php';
      	$data['heading']    = 'Vacoas';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/vacoas', $data);
    }
        
/* Morocco */

     public function casablanca()
    {
      	$data['main']       = 'africa_cities/casablanca.php';
      	$data['heading']    = 'Casablanca';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/casablanca', $data);
    }
     public function marrakech()
    {
      	$data['main']       = 'africa_cities/marrakech.php';
      	$data['heading']    = 'Marrakech';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/marrakech', $data);
    }
     public function rabat()
    {
      	$data['main']       = 'africa_cities/rabat.php';
      	$data['heading']    = 'Rabat';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/rabat', $data);
    }
    
/* Mozambique */
    
    public function beira()
    {
      	$data['main']       = 'africa_cities/beira.php';
      	$data['heading']    = 'Beira';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/beira', $data);
    }
    public function maputo()
    {
      	$data['main']       = 'africa_cities/maputo.php';
      	$data['heading']    = 'Maputo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/maputo', $data);
    }
    public function quelimane()
    {
      	$data['main']       = 'africa_cities/quelimane.php';
      	$data['heading']    = 'Quelimane';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/quelimane', $data);
    }

/* Namibia */

    public function rundu()
    {
      	$data['main']       = 'africa_cities/rundu.php';
      	$data['heading']    = 'Rundu';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/rundu', $data);
    }
    public function swakopmund()
    {
      	$data['main']       = 'africa_cities/swakopmund.php';
      	$data['heading']    = 'Swakopmund';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/swakopmund', $data);
    }
    public function walvis_bay()
    {
      	$data['main']       = 'africa_cities/walvis_bay.php';
      	$data['heading']    = 'Walvis Bay';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/walvis_bay', $data);
    }
    public function windhoek()
    {
      	$data['main']       = 'africa_cities/windhoek.php';
      	$data['heading']    = 'Windhoek';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/windhoek', $data);
    }

/* Niger */

    public function agadez()
    {
      	$data['main']       = 'africa_cities/agadez.php';
      	$data['heading']    = 'Agadez';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/agadez', $data);
    }
    public function maradi()
    {
      	$data['main']       = 'africa_cities/maradi.php';
      	$data['heading']    = 'Maradi';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/maradi', $data);
    }
    public function niamey()
    {
      	$data['main']       = 'africa_cities/niamey.php';
      	$data['heading']    = 'Niamey';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/niamey', $data);
    }
    public function zinder()
    {
      	$data['main']       = 'africa_cities/zinder.php';
      	$data['heading']    = 'Zinder';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/zinder', $data);
    }

/* Nigeria */

    public function abuja()
    {
      	$data['main']       = 'africa_cities/abuja.php';
      	$data['heading']    = 'Abuja';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/abuja', $data);
    }
    public function kware()
    {
      	$data['main']       = 'africa_cities/kware.php';
      	$data['heading']    = 'Kware';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kware', $data);
    }
    public function lagos()
    {
      	$data['main']       = 'africa_cities/lagos.php';
      	$data['heading']    = 'Lagos';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/lagos', $data);
    }
    
/* Rwanda */

    public function butare()
    {
      	$data['main']       = 'africa_cities/butare.php';
      	$data['heading']    = 'Butare';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/butare', $data);
    }
    public function kigali()
    {
      	$data['main']       = 'africa_cities/kigali.php';
      	$data['heading']    = 'Kigali';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kigali', $data);
    }
    public function ruhengeri()
    {
      	$data['main']       = 'africa_cities/ruhengeri.php';
      	$data['heading']    = 'Ruhengeri';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/ruhengeri', $data);
    }

/* São Tomé and Príncipe */

    public function sao_tome()
    {
      	$data['main']       = 'africa_cities/sao_tome.php';
      	$data['heading']    = 'São Tomé';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/sao_tome', $data);
    }
    
/* Senegal */

    public function dakar()
    {
      	$data['main']       = 'africa_cities/dakar.php';
      	$data['heading']    = 'Dakar';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/dakar', $data);
    }
    public function kaolack()
    {
      	$data['main']       = 'africa_cities/kaolack.php';
      	$data['heading']    = 'Kaolack';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kaolack', $data);
    }
    public function saint_louis()
    {
      	$data['main']       = 'africa_cities/sain_louis.php';
      	$data['heading']    = 'Saint-Louis';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/saint_louis', $data);
    }

/* Seychelles */

    public function anse_boileau()
    {
      	$data['main']       = 'africa_cities/anse_boileau.php';
      	$data['heading']    = 'Anse Boileau';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/anse_boileau', $data);
    }
    public function victoria()
    {
      	$data['main']       = 'africa_cities/victoria.php';
      	$data['heading']    = 'Victoria';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/victoria', $data);
    }

/* Sierra Leone */

    public function bo()
    {
      	$data['main']       = 'africa_cities/bo.php';
      	$data['heading']    = 'Bo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bo', $data);
    }
    public function freetown()
    {
      	$data['main']       = 'africa_cities/freetown.php';
      	$data['heading']    = 'Freetown';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/freetown', $data);
    }
    public function kenema()
    {
      	$data['main']       = 'africa_cities/kenema.php';
      	$data['heading']    = 'Kenema';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kenema', $data);
    }
    public function makeni()
    {
      	$data['main']       = 'africa_cities/makeni.php';
      	$data['heading']    = 'Makeni';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/makeni', $data);
    }
    
/* Somalia */

    public function hargeisa()
    {
      	$data['main']       = 'africa_cities/hargeisa.php';
      	$data['heading']    = 'Hargeisa';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/hargeisa', $data);
    }
    public function mogadishu()
    {
      	$data['main']       = 'africa_cities/mogadishu.php';
      	$data['heading']    = 'Mogadishu';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mogadishu', $data);
    }
    public function kismanyo()
    {
      	$data['main']       = 'africa_cities/kismanyo.php';
      	$data['heading']    = 'Kismanyo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kismanyo', $data);
    }
    
/* South Africa */

    public function bloemfontein()
    {
      	$data['main']       = 'africa_cities/bloemfontein.php';
      	$data['heading']    = 'Bloemfontein';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bloemfontein', $data);
    }
    public function capetown()
    {
      	$data['main']       = 'africa_cities/capetown.php';
      	$data['heading']    = 'Capetown';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/capetown', $data);
    }
    public function durban()
    {
      	$data['main']       = 'africa_cities/durban.php';
      	$data['heading']    = 'Durban';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/durban', $data);
    }
    public function johannesburg()
    {
      	$data['main']       = 'africa_cities/johannesburg.php';
      	$data['heading']    = 'Johannesburg';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/johannesburg', $data);
    }
    public function port_elizabeth()
    {
      	$data['main']       = 'africa_cities/port_elizabeth.php';
      	$data['heading']    = 'Port Elizabeth';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/port_elizabeth', $data);
    }

/* South Sudan */

    public function juba()
    {
      	$data['main']       = 'africa_cities/juba.php';
      	$data['heading']    = 'Juba';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/juba', $data);
    }
    public function malakal()
    {
      	$data['main']       = 'africa_cities/malakal.php';
      	$data['heading']    = 'Malakal';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/malakal', $data);
    }
    public function yei()
    {
      	$data['main']       = 'africa_cities/yei.php';
      	$data['heading']    = 'Yei';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/yei', $data);
    }
    
/* Sudan */

    public function khartoum()
    {
      	$data['main']       = 'africa_cities/khartoum.php';
      	$data['heading']    = 'Khartoum';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/khartoum', $data);
    }
    public function omdurman()
    {
      	$data['main']       = 'africa_cities/omdurman.php';
      	$data['heading']    = 'Omdurman';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/omdurman', $data);
    }
    public function port_sudan()
    {
      	$data['main']       = 'africa_cities/port_sudan.php';
      	$data['heading']    = 'Port Sudan';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/port_sudan', $data);
    }

/* Swaziland */

    public function mbabane()
    {
      	$data['main']       = 'africa_cities/mbabane.php';
      	$data['heading']    = 'Mbabane';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mbabane', $data);
    }
    public function manzini()
    {
      	$data['main']       = 'africa_cities/manzini.php';
      	$data['heading']    = 'Manzini';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/manzini', $data);
    }
    
/* Tanzania */

    public function dar_es_salam()
    {
      	$data['main']       = 'africa_cities/dar_es_salaam.php';
      	$data['heading']    = 'Dar Es Salam';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/dar_es_salaam', $data);
    }
    public function dodoma()
    {
      	$data['main']       = 'africa_cities/dodoma.php';
      	$data['heading']    = 'Dodoma';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/dodoma', $data);
    }
    public function mwanza()
    {
      	$data['main']       = 'africa_cities/mwanza.php';
      	$data['heading']    = 'Mwanza';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/mwanza', $data);
    }

/* Togo */

    public function kara()
    {
      	$data['main']       = 'africa_cities/kara.php';
      	$data['heading']    = 'Kara';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kara', $data);
    }
    public function lome()
    {
      	$data['main']       = 'africa_cities/lome.php';
      	$data['heading']    = 'Lomé';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/lome', $data);
    }
    public function sokode()
    {
      	$data['main']       = 'africa_cities/sokode.php';
      	$data['heading']    = 'Sokodé';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/sokode', $data);
    }

/* Tunisia */

    public function djerba()
    {
      	$data['main']       = 'africa_cities/djerba.php';
      	$data['heading']    = 'Djerba';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/djerba', $data);
    }
    public function monastir()
    {
      	$data['main']       = 'africa_cities/monastir.php';
      	$data['heading']    = 'Monastir';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/monastir', $data);
    }
    public function sousse()
    {
      	$data['main']       = 'africa_cities/sousse.php';
      	$data['heading']    = 'Sousse';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/sousse', $data);
    }
    public function tunis()
    {
      	$data['main']       = 'africa_cities/tunis.php';
      	$data['heading']    = 'Tunis';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/tunis', $data);
    }

/* Uganda */

    public function entebbe()
    {
      	$data['main']       = 'africa_cities/entebbe.php';
      	$data['heading']    = 'Entebbe';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/entebbe', $data);
    }
    public function kampala()
    {
      	$data['main']       = 'africa_cities/kampala.php';
      	$data['heading']    = 'Kampala';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kampala', $data);
    }

/* Western Sahara */

    public function dakhla()
    {
      	$data['main']       = 'africa_cities/dakhla.php';
      	$data['heading']    = 'Dakhla';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/dakhla', $data);
    }
    public function el_aaiun()
    {
      	$data['main']       = 'africa_cities/el_aaiun.php';
      	$data['heading']    = 'El Aaiún';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/el_aaiun', $data);
    }

/* Zambia */

    public function kabwe()
    {
      	$data['main']       = 'africa_cities/kabwe.php';
      	$data['heading']    = 'Kabwe';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/kabwe', $data);
    }
    public function livingstone()
    {
      	$data['main']       = 'africa_cities/livingstone.php';
      	$data['heading']    = 'Livingstone';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/livingstone', $data);
    }
    public function lusaka()
    {
      	$data['main']       = 'africa_cities/lusaka.php';
      	$data['heading']    = 'Lusaka';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/lusaka', $data);
    }
    public function ndola()
    {
      	$data['main']       = 'africa_cities/ndola.php';
      	$data['heading']    = 'Ndola';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/ndola', $data);
    }
    
/* Zanzibar */

    public function zanzibar_city()
    {
      	$data['main']       = 'africa_cities/zanzibar_city.php';
      	$data['heading']    = 'Zanzibar City';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/zanzibar_city', $data);
    }
    
/* Zimbabwe */

    public function bulawayo()
    {
      	$data['main']       = 'africa_cities/bulawayo.php';
      	$data['heading']    = 'Bulawayo';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/bulawayo', $data);
    }
    public function harare()
    {
      	$data['main']       = 'africa_cities/harare.php';
      	$data['heading']    = 'Harare';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/harare', $data);
    }
    public function chitungwiza()
    {
      	$data['main']       = 'africa_cities/chitungwiza.php';
      	$data['heading']    = 'Chitungwiza';
        $data['header']     = 'layouts/header';
       	$data['last_line']  = 'layouts/last_line';
        $data['sidebar']    = 'layouts/sidebar';
        $data['footer']     = 'layouts/footer';
      	$data['left_bar_city'] = 'sidebar/left_bar_city';
      	
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_cities/chitungwiza', $data);
    }











}
      	
      	
      	
      	
      	
      	
