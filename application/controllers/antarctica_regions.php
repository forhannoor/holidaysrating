<?php 

class antarctica_regions extends CI_Controller
{
    public function alexander_island()
    {
      	$data['main']='antarctica_regions/alexander_island.php';
      	$data['heading']='Alexander Island';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/alexander-island/alexander-island.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/alexander-island/researchFar.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/alexander-island/gentoo-penguins.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/alexander-island/researchClose.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/alexander_island', $data);
    }
    public function berkner_island()
    {
      	$data['main']='antarctica_regions/berkner_island.php';
      	$data['heading']='Berkner Island';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/berkner-island/ronnie-ice-shelf.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/berkner-island/seal.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/berkner-island/emperor-penguin.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/berkner-island/winter.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/berkner_island', $data);
    }
    public function biscoe_islands()
    {
      	$data['main']='antarctica_regions/biscoe_islands.php';
      	$data['heading']='Biscoe Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/biscoe-islands/biscoe.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/biscoe-islands/gentoos-penguins.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/biscoe-islands/islands.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/biscoe-islands/leopard-seal.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/biscoe_islands', $data);
    }
    public function ellsworth_land()
    {
      	$data['main']='antarctica_regions/ellsworth_land.php';
      	$data['heading']='Ellsworth Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/ellsworth-land/ellsworth.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/ellsworth-land/mountain-range.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/ellsworth-land/mountain-range.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/ellsworth-land/range.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/ellsworth_land', $data);
    }
    public function enderby_land()
    {
      	$data['main']='antarctica_regions/enderby_land.php';
      	$data['heading']='Enderby Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/enderby-land/enderby.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/biscoe-islands/enderby-land/lake.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/enderby-land/hampton.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/enderby-land/enderby-land.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/enderby_land', $data);
	}
    public function marie_byrd_land()
    {
      	$data['main']='antarctica_regions/marie_byrd_land.php';
      	$data['heading']='Marie Byrd Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/marie-byrd-land/vulcano.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/marie-byrd-land/marie-byrd.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/marie-byrd-land/mt-rea.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/marie-byrd-land/marie-byrd-land.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/marie_byrd_land', $data);
	}
    public function new_schwabenland()
    {
      	$data['main']='antarctica_regions/new_schwabenland.php';
      	$data['heading']='New Schwabenland';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/new-schwabenland/new-swabia.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/new-schwabenland/new-schwabenland.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/new-schwabenland/penguins.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/new-schwabenland/ice-water.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/new_schwabenland', $data);
	}
    public function palmer_land()
    {
      	$data['main']='antarctica_regions/palmer_land.php';
      	$data['heading']='Palmer Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/palmer-land/penguins.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/palmer-land/plane.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/palmer-land/palmer-station.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/palmer-land/ice.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/palmer_land', $data);
	}
    public function queen_maud_land()
    {
      	$data['main']='antarctica_regions/queen_maud_land.php';
      	$data['heading']='Queen Maud Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/queen-maud-land/mountain.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/queen-maud-land/penguins.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/queen-maud-land/mountainClose.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/queen-maud-land/ice.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/queen_maud_land', $data);
	}
    public function south_pole()
    {
      	$data['main']='antarctica_regions/south_pole.php';
      	$data['heading']='South Pole';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/south-pole/signpost.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/south-pole/from-air.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/south-pole/seals.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/south-pole/station-flags.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/south_pole', $data);
	}
    public function south_shetland_islands()
    {
      	$data['main']='antarctica_regions/south_shetland_islands.php';
      	$data['heading']='South Shetland islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/south-shetland-islands/south-shetland.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/south-shetland-islands/king-george-island.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/south-shetland-islands/half-moon-island.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/south-shetland-islands/elephant-seals.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/south_shetland_islands', $data);
	}
    public function wilkes_land()
    {
      	$data['main']='antarctica_regions/wilkes_land.php';
      	$data['heading']='Wilkes Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/antarctica/wilkes-land/penguins.jpg',
                'title' => 'Antartica, the coldest place on Earth.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/antarctica/wilkes-land/wilkes.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/antarctica/wilkes-land/wilkes-land.jpg',
                'title' => 'We want to know everything about your travels.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/antarctica/wilkes-land/coastline.jpg',
                'title' => 'Have you been to Antarctica? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/wilkes_land', $data);
	}












}