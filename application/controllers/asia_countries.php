<?php 

class asia_countries extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Story_model');
    }
    public function afghanistan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Afghanistan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/afghanistan/panjshir.jpg',
                'title' => 'Explore Afghanistan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/afghanistan/wakhan.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/afghanistan/mosque.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/kabul>Kabul</a> is the capital city.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/afghanistan/basin.jpg',
                'title' => 'Have you been in Afghanistan? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/afghanistan', $data);
    }
    public function bahrain()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Bahrain';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/bahrain/bahrain.jpg',
                'title' => 'Travel to Bahrain and enjoy its beauty.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/bahrain/fort.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/bahrain/skyline.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/manama>Manama</a> is the capital city of Bahrain.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/bahrain/bridge.jpg',
                'title' => 'Have you been in Bahrain? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/bahrain', $data);
    }
    public function bangladesh()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Bangladesh';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/bangladesh/bangladesh.jpg',
                'title' => 'Travel to Bangladesh and enjoy its beauty.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/bangladesh/fish.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/bangladesh/streets-bangladesh.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/dhaka>Dhaka</a> is the capital city of Bangladesh.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/bangladesh/curzon-hall-dhaka.jpg',
                'title' => 'Have you been in Bangladesh? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/bangladesh', $data);
    }
    public function bhutan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Bhutan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/bhutan/takshang-monastery.jpg',
                'title' => 'Travel to Bhutan and enjoy its beauty.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/bhutan/dancers.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/bhutan/punakha-valley.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/bandar_seri_begawan>Bandar Seri Begawan</a> is the capital city of Bhutan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/bhutan/bhutan.jpg',
                'title' => 'Have you celebrate your vacation here? Share you favorite travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/bhutan', $data);
    }    
    public function brunei()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Brunei';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/brunei/kampung-ayer.jpg',
                'title' => 'Discover Brunei.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/brunei/mosque-night.jpg',
                'title' => 'Find local recipes and start cooking!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/bhutan/punakha-valley.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/thimphu>Thimphu</a> is the capital city of Brunei.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/bhutan/bhutan.jpg',
                'title' => 'Have you travelled here? Upload your videos on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/brunei', $data);
    }

    public function myanmar()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Myanmar (Burma)';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/burma/burma.JPG',
                'title' => 'Explore Myanmar.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/burma/yangon-city.jpg',
                'title' => 'Watch or upload your video in our <a href = http://www.holidaysrating.com/index.php/topmenu/videodump>videodump</a>!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/burma/temple.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/naypyidaw>Naypyidaw</a> is the capital city of Myanmar.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/burma/lemro-river.jpg',
                'title' => 'Have you travelled here? Upload your story on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/myanmar', $data);
    }
    public function cambodia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Cambodia';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/cambodia/angor.jpg',
                'title' => 'Explore Cambodia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/cambodia/angor-tree.JPG',
                'title' => 'Watch or upload your video in our <a href = http://www.holidaysrating.com/index.php/topmenu/videodump>videodump</a>!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/cambodia/angor-entrance.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/phnom_penh>Phnom Penh</a> is the capital city of Cambodia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/cambodia/kid-on-boat.jpg',
                'title' => 'Have you travelled to Cambodia? Upload your story on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/cambodia', $data);
    }
    public function china()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'China';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/china/great-wall.jpg',
                'title' => 'Discover China.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/china/shermen-river.jpg',
                'title' => 'Watch or upload your video in our <a href = http://www.holidaysrating.com/index.php/topmenu/videodump>videodump</a>!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/china/china-temple.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/beijing>Beijing</a> is the capital city of China.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/china/china.jpg',
                'title' => 'Have you travelled to China? Upload your story on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/china', $data);
    }
    public function east_timor()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'East Timor';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/east-timor/east-timor.jpg',
                'title' => 'Discover East Timor.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/east-timor/beach.jpg',
                'title' => 'Search for your favorite adventure and vote now!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/east-timor/village.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/dilli>Dilli</a> is the capital city of East Timor.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/east-timor/men.jpg',
                'title' => 'Have you travelled to East Timor? Upload your story on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/east_timor', $data);
    }

    public function india()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'India';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/india/taj-mahal.jpg',
                'title' => 'Discover India.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/india/india.jpg',
                'title' => 'Holidaysrating, the social travel community!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/india/agra-fort.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/new_dehli>New Delhi</a> is the capital city of India.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/india/traffic.jpg',
                'title' => 'Have you been in India? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/india', $data);
    }
    public function iran()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Iran';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/iran/iran.jpg',
                'title' => 'Explore Iran.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/iran/mountains.jpg',
                'title' => 'Holidaysrating, the social travel community!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/iran/iran-mosque.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/tehran>Tehran</a> is the capital city of Iran.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/iran/zagros-mountain.jpg',
                'title' => 'Have you been in Iran? We like to know everything!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/iran', $data);
    }
    public function iraq()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Iraq';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/irag/mountains.JPG',
                'title' => 'Holidaysrating advise you to exercise a high degree of caution in Iraq.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/irag/city.JPG',
                'title' => 'Holidaysrating, the social travel community!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/iran/irag/marshlands.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/bagdad>Bagdad</a> is the capital city of Iran.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/irag/waterfall.jpg',
                'title' => 'Have you been in Iraq? We like to know everything!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/iraq', $data);
    }
    public function israel()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Israel';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/israel/coastline.jpg',
                'title' => 'Explore Israel.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/israel/kotel.jpg',
                'title' => 'Upload your story on Holidaysrating!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/israel/jerusalem.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/jerusalem>Jerusalem</a> is the capital city of Israel.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/israel/port.jpg',
                'title' => 'Have you been in Iran? We like to know everything!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/israel', $data);
    }
    public function japan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Japan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/japan/matsumoto.jpg',
                'title' => 'Explore magical Japan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/japan/mount-fujiyoshida.jpg',
                'title' => 'Upload your story on Holidaysrating!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/japan/tokyo.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/tokyo>Tokyo</a> is the capital city of Japan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/japan/japan.jpg',
                'title' => 'Have you been in Japan? We like to know everything!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/japan', $data);
    }
    public function jordan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Jordan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/jordan/amman1.jpg',
                'title' => 'Discover Jordan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/jordan/jerash.jpg',
                'title' => 'Upload your story on Holidaysrating!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/jordan/amman.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/amman>Amman</a> is the capital city of Jordan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/jordan/jordan.jpg',
                'title' => 'Have you been in Jordan? Become a member and be our travelguide!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/jordan', $data);
    }
    public function kazakhstan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Kazachstan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/kazakhstan/kazakhstan.jpg',
                'title' => 'Discover Kazachstan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/kazakhstan/kaindy-lake.jpg',
                'title' => 'Upload your story on Holidaysrating!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/kazakhstan/astana.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/astana>Astana</a> is the capital city of Kazachstan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/kazakhstan/kazakhstan-south.jpg',
                'title' => 'Have you been in Kazachstan? Become a member and be our travelguide!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/kazakhstan', $data);
    }
    public function kuwait()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Kuwait';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/kuwait/from-air.jpg',
                'title' => 'Discover Kuwait.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/kuwait/buildings.jpg',
                'title' => 'Holidaysrating, the social travel community!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/kuwait/towers.JPG',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/kuwait_city>Kuwait City</a> is the capital city of Kuwait.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/kuwait/kuwait.jpg',
                'title' => 'Have you been in Kuwait? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/kuwait', $data);
    }
    public function kyrgyzstan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Kyrgyzstan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/kyrgyzstan/lake.jpg',
                'title' => 'Explore Kyrgyzstan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/kyrgyzstan/village.jpg',
                'title' => 'Find local recipes! Create your own cookbook...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/kyrgyzstan/kyrgyzstan.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/bishkek>Bishkek</a> is the capital city of Kyrgyzstan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/kyrgyzstan/mountains.jpg',
                'title' => 'Have you been in Kyrgyzstan? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/kyrgyzstan', $data);
    }
    public function laos()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Laos';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/laos/vat-phou.jpg',
                'title' => 'Explore amazing Laos.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/laos/prabang.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/laos/buddha-park.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/vientiane>Vientiane</a> is the capital city of Laos.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/laos/pak-ou-cave.jpg',
                'title' => 'Have you had your holiday in Laos? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/laos', $data);
    }
    public function lebanon()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Lebanon';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/lebanon/byblos.jpg',
                'title' => 'Explore Lebanon.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/lebanon/baalbek.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/lebanon/beirut.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/beirut>Beirut</a> is the capital city of Lebanon.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/lebanon/sea.jpg',
                'title' => 'Have you had your holiday in Lebanon? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/lebanon', $data);
    }
    public function malaysia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Malaysia';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/malaysia/beach.jpg',
                'title' => 'Explore wonderfull Malaysia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/malaysia/river.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/malaysia/kuala-lumpur.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/kuala-lumpur>Kuala Lumpur</a> is the capital city of Malaysia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/asia/malaysia/malaysia.jpg',
                'title' => 'Have you had your holiday in Malaysia? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/malaysia', $data);
    }
    public function maldives()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Maldives';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/maldives/underwater-suite.jpg',
                'title' => 'Explore beautiful Maldives.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/maldives/from-air.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/maldives/Maldives.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/Malé>Malé</a> is the capital city of the Maldives islands.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/maldives/beach.jpg',
                'title' => 'Have you had your holiday in Maldives? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/maldives', $data);
    }
    public function mongolia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Mongolia';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/maldives/mongolia/eagle.jpg',
                'title' => 'Travel to Mongolia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/mongolia/valley.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/mongolia/ulaanbaatar.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/ulan_bator>Ulan Bator</a> is the capital city of Mongolia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/mongolia/mongolia.jpg',
                'title' => 'Have you had your holiday in Mongolia? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/mongolia', $data);
    }
    public function nepal()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Nepal';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/nepal/nepal.jpg',
                'title' => 'Travel to magical Nepal.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/nepal/city.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/nepal/ghandrung.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/male>Malé</a> is the capital city of Nepal.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/nepal/men.jpg',
                'title' => 'Have you had your holiday in Nepal? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/nepal', $data);
    }
    public function north_korea()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'North Korea';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/north-korea/mass-dance.jpg',
                'title' => 'Travel to North Korea.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/north-korea/hokaido.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/north-korea/pyongyang.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/pyongyang>Pyongyang</a> is the capital city of North Korea.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/north-korea/north-korea.jpg',
                'title' => 'Have you had your holiday in North Korea? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/north_korea', $data);
    }
    public function oman()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Oman';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/oman/oman.jpg',
                'title' => 'Travel to incredible Oman.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/oman/kids.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/oman/craftsmen.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/muscat>Muscat</a> is the capital city of Oman.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/oman/ophiolite.jpg',
                'title' => 'Have you had your holiday in Oman? Upload your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/oman', $data);
    }
    public function pakistan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Pakistan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/pakistan/pakistan.jpg',
                'title' => 'Travel to Pakistan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/pakistan/taxila.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/pakistan/landscape.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/islamabad>Islamabad</a> is the capital city of Pakistan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/pakistan/spring-celebrations.jpg',
                'title' => 'Have you had your holiday in Pakistan? Upload your travel experience here!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/pakistan', $data);
    }
    public function philippines()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Philippines';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/philippines/philippines.jpg',
                'title' => 'Travel to the stunning Philippines.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/philippines/landscape.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/philippines/coron.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/islamabad>Islamabad</a> is the capital city of Philippines.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/philippines/philippines-islands.jpg',
                'title' => 'Have you had your holiday in Philippines? Upload your travel experience here!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/philippines', $data);
    }
    public function qatar()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Qatar';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/qatar/qatar.jpg',
                'title' => 'Travel to Qatar and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/qatar/pearl-island.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/qatar/simaismah.jpg',
                'title' => '<a href = http://www.holidaysrating.com/index.php/asia_cities/doha>Doha</a> is the capital city of Qatar.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/qatar/zubara-fort.jpg',
                'title' => 'Have been to Qatar? Become our travelguide and share your information!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/qatar', $data);
    }
    public function saudi_arabia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Saudi Arabia';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/saudi-arabia/saudi-arabia.jpg',
                'title' => 'Travel to Saudi Arabia and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/saudi-arabia/medina.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/saudi-arabia/crater.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/riyadh>Riyadh</a> is the capital city of Saudi Arabia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/saudi-arabia/camel.jpg',
                'title' => 'Have been to Saudi Arabia? Become our travelguide and share your information!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/saudi_arabia', $data);
    }
    public function south_korea()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'South Korea';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/south-korea/mount-mireuksan-tongyeong.jpg',
                'title' => 'Travel to South Korea and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/south-korea/muju.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/south-korea/seoul.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/seoul>Seoul</a> is the capital city of South Korea.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/south-korea/seoul.jpg',
                'title' => 'Have been to South Korea? Become our travelguide and share your information!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/south_korea', $data);
    }
    public function sri_lanka()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Sri Lanka';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/sri-lanka/tea-plantage.jpg',
                'title' => 'Travel to Sri Lanka and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/sri-lanka/elephants.jpg',
                'title' => 'Check out our <a href = http://www.holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/sri-lanka/beach.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/sri_jayawardenepura_kotte>Sri Jayawardenepura Kotte</a> (Administrative) and <a href = http://holidaysrating.com/index.php/africa_cities/colombo>Colombo</a> (commercial) is the capital cities of Sri Lanka.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/sri-lanka/dambulla-cave-temple.jpg',
                'title' => 'Have been to Sri Lnka? Become our travelguide and share your information!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/sri_lanka', $data);
    }
    public function syria()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Syria';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/syria/syria-1.jpg',
                'title' => 'Travel to Syria and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/syria/hama.jpg',
                'title' => 'Upload or watch travel videos in our <a href = http://www.holidaysrating.com/index.php/topmenu/videodump>videodump</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/syria/syria.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/damascus>Damascus</a> is the capital city of Syria.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/syria/village.jpg',
                'title' => 'Have been to Syria? Become our travelguide and share your travel information with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/syria', $data);
    }
    public function taiwan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Taiwan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/taiwan/taiwan.jpg',
                'title' => 'Travel to Taiwan and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/taiwan/view.jpg',
                'title' => 'Upload or watch travel videos in our <a href = http://www.holidaysrating.com/index.php/topmenu/videodump>videodump</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/taiwan/chiang-kai-taipei.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/taipei>Taipei</a> is the capital city of Taiwan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/taiwan/landscape.jpg',
                'title' => 'Have been to Taiwan? Become our travelguide and share your travel information with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/taiwan', $data);
    }
    public function tajikistan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Tajikistan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/tajikistan/tajikistan.jpg',
                'title' => 'Travel to Tajikistan and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/tajikistan/market.jpg',
                'title' => 'Find local recipes or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/tajikistan/khorog.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/dushanbe>Dushanbe</a> is the capital city of Tajikistan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/tajikistan/horses.jpg',
                'title' => 'Have been to Tajikistan? Become our travelguide and share your information with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/tajikistan', $data);
    }
    public function thailand()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Thailand';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/thailand/thailand.jpg',
                'title' => 'Travel to Thailand and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/thailand/floating-market.jpg',
                'title' => 'Find local recipes or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/thailand/bangkok-emerald.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/dushanbe>Dushanbe</a> is the capital city of Thailand.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/thailand/sukhothai.jpg',
                'title' => 'Have been to Thailand? Become our travelguide and share your destination information with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/thailand', $data);
    }
        public function turkey()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Thailand';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/turkey/istanbul.jpg',
                'title' => 'Travel to Turkey and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/turkey/city.jpg',
                'title' => 'Find local recipes or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/turkey/turkey.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/ankara>Ankara</a> is the capital city of Turkey.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/turkey/marmaris.jpg',
                'title' => 'Have been to Turkey? Become our travelguide and share your information with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/turkey', $data);
    }
    public function turkmenistan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Turkmenistan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/turkmenistan/kunya-urgench.jpg',
                'title' => 'Travel to Turkmenistan and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/turkmenistan/mosque.jpg',
                'title' => 'Find local recipes or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/turkmenistan/old-nissa.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/ashgabat>Ashgabat</a> is the capital city of Turkmenistan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/turkmenistan/izmukshir.jpg',
                'title' => 'Have been to Turkmenistan? Become our travelguide and share your world with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/turkmenistan', $data);
    }
    public function uae()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'United Arab Emirates';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/uae/dubai.jpg',
                'title' => 'Travel to United Arab Emirates and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/uae/aquarium.jpg',
                'title' => 'Find local recipes for your personal cookbook or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/uae/desert.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/abu_dhabi>Abu Dhabi</a> is the capital city of United Arab Emirates.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/uae/palm-island.jpg',
                'title' => 'Have been in United Arab Emirates? Become our travelguide and share your world with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/uae', $data);
    }
    public function uzbekistan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Uzbekistan';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/uzbekistan/dry-aral.jpg',
                'title' => 'Travel to Uzbekistan and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/uzbekistan/samarkand.jpg',
                'title' => 'Find recipes from Uzbekistan for your personal cookbook or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/uzbekistan/hazrati-tashkent.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/tashkent>Tashkent</a> is the capital city of Uzbekistan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/uzbekistan/aral-sea.jpg',
                'title' => 'Have been in Uzbekistan? Become our travelguide and share your world with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/uzbekistan', $data);
    }
    public function vietnam()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Vietnam';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/vietnam/halongbay-vietnam.jpg',
                'title' => 'Travel to Vietnam and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/vietnam/landscape.jpg',
                'title' => 'Find recipes from Vietnam for your personal cookbook or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/vietnam/forbidden-city-vietnam.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/hanoi>Hanoi</a> is the capital city of Vietnam.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/vietnam/sapa-vietnam.jpg',
                'title' => 'Have been in Vietnam? Become our travelguide and share your world with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/vietnam', $data);
    }
    public function yemen()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
        $data['warning']        = 'travel_alerts/warning';
		$data['heading']		= 'Yemen';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);

        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/yemen/dragoons-blood-tree.jpg',
                'title' => 'Discover Yemen and upload your story here.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/yemen/socotra.jpg',
                'title' => 'Find recipes from Yemen for your personal cookbook or write about your favorite food.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/vietnam/yemen/fold-city.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/asia_cities/sana_a>Sana&#44;a</a> is the capital city of Yemen.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/vietnam/yemen/palace.jpg',
                'title' => 'Have been in Yemen? Become our travelguide and share your travel experience with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/yemen', $data);
    }


}