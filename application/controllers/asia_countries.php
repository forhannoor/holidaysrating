<?php 

class asia_countries extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_countries/afghanistan.php';
      	$data['heading']='Afghanistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/afghanistan/panjshir.jpg',
                'title' => 'Explore Afghanistan.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/afghanistan/wakhan.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favrites>favrites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/afghanistan/mosque.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/kabul>Kabul</a> is the capital city.'
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
    public function bangladesh()
    {
      	$data['main']='asia_countries/bangladesh.php';
      	$data['heading']='Bangladesh';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/bangladesh/bangladesh.jpg',
                'title' => 'Travel to Bangladesh and enjoy its beauty.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/bangladesh/fish.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favrites>favrites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/bangladesh/streets-bangladesh.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/dhaka>Dhaka</a> is the capital city of bangladesh.'
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
      	$data['main']='asia_countries/bhutan.php';
      	$data['heading']='Bhutan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	        
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/bhutan/takshang-monastery.jpg',
                'title' => 'Travel to Bhutan and enjoy its beauty.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/bhutan/dancers.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favrites>favrites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/bhutan/punakha-valley.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bandar_seri_begawan>Bandar Seri Begawan</a> is the capital city of Bhutan.'
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
      	$data['main']='asia_countries/brunei.php';
      	$data['heading']='Brunei';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/thimphu>Thimphu</a> is the capital city of Brunei.'
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

    public function burma()
    {
      	$data['main']='asia_countries/burma.php';
      	$data['heading']='Burma (Myanmar)';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/burma/burma.JPG',
                'title' => 'Explore Burma.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/burma/yangon-city.jpg',
                'title' => 'Watch or upload your video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/burma/temple.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/naypyidaw>Naypyidaw</a> is the capital city of Burma.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/asia/burma/lemro-river.jpg',
                'title' => 'Have you travelled here? Upload your story on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_countries/cambodia.php';
      	$data['heading']='Cambodia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/cambodia/angor.jpg',
                'title' => 'Explore Cambodia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/cambodia/angor-tree.JPG',
                'title' => 'Watch or upload your video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/cambodia/angor-entrance.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/phnom_penh>Phnom Penh</a> is the capital city of Cambodia.'
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
      	$data['main']='asia_countries/china.php';
      	$data['heading']='China';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/china/great-wall.jpg',
                'title' => 'Discover China.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/china/shermen-river.jpg',
                'title' => 'Watch or upload your video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/china/china-temple.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/beijing>Beijing</a> is the capital city of China.'
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
      	$data['main']='asia_countries/east_timor.php';
      	$data['heading']='East Timor';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/dilli>Dilli</a> is the capital city of East Timor.'
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
      	$data['main']='asia_countries/india.php';
      	$data['heading']='India';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/new_dehli>New Delhi</a> is the capital city of India.'
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
      	$data['main']='asia_countries/iran.php';
      	$data['heading']='Iran';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/tehran>Tehran</a> is the capital city of Iran.'
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
      	$data['main']='asia_countries/iraq.php';
      	$data['heading']='Iraq';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bagdad>Bagdad</a> is the capital city of Iran.'
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
      	$data['main']='asia_countries/israel.php';
      	$data['heading']='Israel';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/jerusalem>Jerusalem</a> is the capital city of Israel.'
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
      	$data['main']='asia_countries/japan.php';
      	$data['heading']='Japan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/tokyo>Tokyo</a> is the capital city of Japan.'
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
      	$data['main']='asia_countries/jordan.php';
      	$data['heading']='Jordan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/amman>Amman</a> is the capital city of Jordan.'
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
      	$data['main']='asia_countries/kazakhstan.php';
      	$data['heading']='Kazakhstan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/astana>Astana</a> is the capital city of Kazachstan.'
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
      	$data['main']='asia_countries/kuwait.php';
      	$data['heading']='Kuwait';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/kuwait_city>Kuwait City</a> is the capital city of Kuwait.'
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
      	$data['main']='asia_countries/kyrgyzstan.php';
      	$data['heading']='Kyrgyzstan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
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
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bishkek>Bishkek</a> is the capital city of Kyrgyzstan.'
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
      	$data['main']='asia_countries/laos.php';
      	$data['heading']='Laos';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/laos/vat-phou.jpg',
                'title' => 'Explore amazing Laos.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/laos/prabang.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/laos/buddha-park.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/vientiane>Vientiane</a> is the capital city of Laos.'
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
      	$data['main']='asia_countries/lebanon.php';
      	$data['heading']='Lebanon';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/lebanon/byblos.jpg',
                'title' => 'Explore Lebanon.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/lebanon/baalbek.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/lebanon/beirut.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/beirut>Beirut</a> is the capital city of Lebanon.'
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
      	$data['main']='asia_countries/malaysia.php';
      	$data['heading']='Malaysia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/malaysia/beach.jpg',
                'title' => 'Explore wonderfull Malaysia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/malaysia/river.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/malaysia/kuala-lumpur.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/kuala-lumpur>Kuala Lumpur</a> is the capital city of Malaysia.'
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
      	$data['main']='asia_countries/maldives.php';
      	$data['heading']='Maldives';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/maldives/underwater-suite.jpg',
                'title' => 'Explore beautiful Maldives.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/maldives/from-air.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/maldives/Maldives.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/Malé>Malé</a> is the capital city of the Maldives islands.'
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
      	$data['main']='asia_countries/mongolia.php';
      	$data['heading']='Mongolia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/maldives/mongolia/eagle.jpg',
                'title' => 'Travel to Mongolia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/mongolia/valley.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/mongolia/ulaanbaatar.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/ulan_bator>Ulan Bator</a> is the capital city of Mongolia.'
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
      	$data['main']='asia_countries/nepal.php';
      	$data['heading']='Nepal';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/asia/nepal/nepal.jpg',
                'title' => 'Travel to magical Nepal.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/asia/nepal/city.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/asia/nepal/ghandrung.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/Malé>Malé</a> is the capital city of Nepal.'
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
      	$data['main']='asia_countries/north_korea.php';
      	$data['heading']='North Korea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/north_korea', $data);
    }
    public function oman()
    {
      	$data['main']='asia_countries/oman.php';
      	$data['heading']='Oman';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/oman', $data);
    }
    public function pakistan()
    {
      	$data['main']='asia_countries/pakistan.php';
      	$data['heading']='Pakistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/pakistan', $data);
    }
    public function philippines()
    {
      	$data['main']='asia_countries/philippines.php';
      	$data['heading']='Philippines';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/philippines', $data);
    }
    public function qatar()
    {
      	$data['main']='asia_countries/qatar.php';
      	$data['heading']='Qatar';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/qatar', $data);
    }
    public function saudi_arabia()
    {
      	$data['main']='asia_countries/saudi_arabia.php';
      	$data['heading']='Saudi Arabia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/saudi_arabia', $data);
    }
    public function south_korea()
    {
      	$data['main']='asia_countries/south_korea.php';
      	$data['heading']='South Korea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/south_korea', $data);
    }
    public function sri_lanka()
    {
      	$data['main']='asia_countries/sri_lanka.php';
      	$data['heading']='Sri Lanka';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/sri_lanka', $data);
    }
    public function syria()
    {
      	$data['main']='asia_countries/syria.php';
      	$data['heading']='Syria';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/syria', $data);
    }
    public function taiwan()
    {
      	$data['main']='asia_countries/taiwan.php';
      	$data['heading']='Taiwan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/taiwan', $data);
    }
    public function tajikistan()
    {
      	$data['main']='asia_countries/tajikistan.php';
      	$data['heading']='Tajikistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/tajikistan', $data);
    }
    public function thailand()
    {
      	$data['main']='asia_countries/thailand.php';
      	$data['heading']='Thailand';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/thailand', $data);
    }
        public function turkey()
    {
      	$data['main']='asia_countries/turkey.php';
      	$data['heading']='Turkey';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/turkey', $data);
    }

    public function turkmenistan()
    {
      	$data['main']='asia_countries/turkmenistan.php';
      	$data['heading']='Turkmenistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/turkmenistan', $data);
    }
    public function uae()
    {
      	$data['main']='asia_countries/uae.php';
      	$data['heading']='United Arab Emirates';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/uae', $data);
    }
    public function uzbekistan()
    {
      	$data['main']='asia_countries/uzbekistan.php';
      	$data['heading']='Uzbekistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/uzbekistan', $data);
    }
    public function vietnam()
    {
      	$data['main']='asia_countries/vietnam.php';
      	$data['heading']='Vietnam';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/vietnam', $data);
    }
    public function yemen()
    {
      	$data['main']='asia_countries/yemen.php';
      	$data['heading']='Yemen';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/yemen', $data);
    }


}