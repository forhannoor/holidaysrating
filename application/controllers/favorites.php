<?php 

class favorites extends CI_Controller
{
    public function index()
    {
    }    

    public function beaches_index()
    {
      	$data['heading']       = 'Beaches';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
        
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/beaches/cairns.jpg',
                'title' => 'We have made a selection of the most amazing beaches over the world.'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/beaches/shoal-bay.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/beaches/taino-beach.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/beaches/whitehaven.jpg',
                'title' => 'Travel with us. Explore the wonderfull sunfilled beaches around the globe!'
            ),
        );
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/beaches_index', $data);
    }
    public function wonders_index()
    {
      	$data['heading']       = 'Ancient wonders';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/wonders/machu-picchu.jpg',
                'title' => 'The world wonders...'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/wonders/pyramids.jpg',
                'title' => 'Share your travel experience! Upload your video on Holidaysrating!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/wonders/taj-mahal.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/wonders/victoria-falls.jpg',
                'title' => 'Travel with us. Explore the world!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/wonders_index', $data);
    }
    public function city_trips_index()
    {
      	$data['heading']       = 'City trips';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/city-trips/darwin.jpg',
                'title' => 'We have made a selection of city trips for you.'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/city-trips/rome.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/city-trips/hongkong.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/city-trips/moscow.jpg',
                'title' => 'Travel with us. Explore the cities around the globe!!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/city_trips_index', $data);
    }
    public function cruises_index()
    {
      	$data['heading']       = 'Cruises';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/cruises/santorini.jpg',
                'title' => 'With your hair blowing in the wind, watching far away to the horizon, enjoy spectaculair cruises.'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/cruises/cruise.jpg',
                'title' => 'We have made a selection of top cruises.'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/cruises/alaska.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/cruises/seacloud.jpg',
                'title' => 'Travel with us. Explore the deepest oceans and longest rivers!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/cruises_index', $data);
    }
    public function diving_index()
    {
      	$data['heading']       = 'Diving Locations';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/diving/dive.jpg',
                'title' => 'We have made a selection of the best dive locations!'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/diving/fish.jpg',
                'title' => 'Have you dived here? Tell us all about it! Leave a comment or write your own story.'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/diving/maldives.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/diving/plane.jpg',
                'title' => 'Travel with us. Explore the most beautiful dive spots around the globe!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/diving_index', $data);
    }
    public function festivals_index()
    {
      	$data['heading']       = 'Festivals';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/festivals/carnaval.jpg',
                'title' => 'We have made a selection of the best festivals over the world!'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/festivals/il-palio.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story.'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/festivals/la-tomatina.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/festivals/oktoberfest.jpg',
                'title' => 'Party with us. Visit the craziest festivals around the globe!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/festivals_index', $data);
    }
    public function road_trips_index()
    {
      	$data['heading']       = 'Road trips';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/road-trips/flowers.jpg',
                'title' => 'We have made a selection of the best road trips out there...'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/road-trips/66.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/road-trips/tunnel-roads.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/road-trips/212.jpg',
                'title' => 'Travel with us. Discover the most amazing roads around the globe!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/road_trips_index', $data);
    }
    public function ski_index()
    {
      	$data['heading']       = 'Ski locations';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/ski-locations/ski.jpg',
                'title' => 'We have made a selection of the best ski locations over the world.'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/ski-locations/ski-lift.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/ski-locations/skiers.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/ski-locations/alpe-d-huez.jpg',
                'title' => 'Travel with us. Explore the best destinations to ski!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/ski_index', $data);
    }
    public function train_trips_index()
    {
      	$data['heading']       = 'Train trips';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/train-trips/trans-siberian-express.jpg',
                'title' => 'We have made a selection of train trips. Hop onboard!'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/train-trips/india.jpg',
                'title' => 'Have you been here? Tell us all about it! Leave a comment or write your own story!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/train-trips/trans-siberian.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/train-trips/pride-of-africa..jpg',
                'title' => 'Travel with us. Explore the best train trips around the globe!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/train_trips_index', $data);
    }
    public function islands_index()
    {
      	$data['heading']       = 'Islands';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/islands/galapagos-islands.jpg',
                'title' => 'We have made a selection of beautifil islands over the world.'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/islands/green-island.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story!'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/islands/guadeloupe.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/islands/koh-pha-ngan.jpg',
                'title' => 'Ready for some adventure? Explore the most incredible islands of the planet.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/islands_index', $data);
    }
    public function romantic_index()
    {
      	$data['heading']       = 'Romantic cities';
        $data['header']        = 'layouts/header';
       	$data['last_line']     = 'layouts/last_line';
        $data['sidebar']       = 'layouts/sidebar';
        $data['footer']		   = 'layouts/footer';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
            	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/favorites/romantic-cities/venice.jpg',
                'title' => 'We have made a selection of the most romantic cities in the world.'
            ),
            
            1 => array(
                'src' => 'assets/images/favorites/romantic-cities/paris.jpg',
                'title' => 'Have you travelled here? Tell us all about it! Leave a comment or write your own story!.'
            ),
            
            2 => array(
                'src' => 'assets/images/favorites/romantic-cities/marrakech.jpg',
                'title' => 'Vote for your favorite!'
            ),
            
            3 => array(
                'src' => 'assets/images/favorites/romantic-cities/kyoto.jpg',
                'title' => 'Travel with us. Feel the romance!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/romantic_index', $data);
    }





}