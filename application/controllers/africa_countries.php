<?php 

class africa_countries extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Story_model');
    }
    
    public function algeria()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Algeria';
        $data['stories']        = $this->Story_model->get_all($this->uri->segment(2), 3);
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/algeria/oasis-de-taghit-algeria.jpg',
                'title' => 'Algeria; Oasis de Taghit.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/algeria/trimgad-algeria.jpg',
                'title' => 'Explore the many beautiful destinations of Algeria.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/algeria/algiers.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/algiers>Algiers</a> is the capital city.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/algeria/camels.jpg',
                'title' => 'Have you been in Algeria? Share you travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/algeria', $data);
    }
    
    public function angola()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Angola';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/angola/elephants.jpg',
                'title' => 'Angola offers plenty of wildlife, just like these elephants.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/angola/mucuval-dancing.jpg',
                'title' => 'Explore the many beautiful destinations of Angola.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/angola/angola.jpg',
                'title' => 'Have you been in Angola? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/angola/luanda.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/luanda>Luanda</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/angola', $data);
    }
    
    public function benin()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Benin';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/benin/benin.jpg',
                'title' => 'Discover Benin Africa.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/benin/voodoo.jpg',
                'title' => 'Benin is the birthplace for the Voodoo religio.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/benin/boat.jpg',
                'title' => 'Have you been in Benin? Upload your travel video.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/benin/traffic.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/porto_novo>Porto Novo</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/benin', $data);
    }
    
    public function botswana()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
		$data['heading']		= 'Botswana';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/botswana/lion.jpg',
                'title' => 'Botswana has definitetly plenty of wildlife! A must sen if you are travelling in Africa.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/botswana/botswana-men.jpg',
                'title' => 'Have you been out with the locals? Tell us or even better upload your video. We like to see it.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/botswana/elephant.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/botswana/landscape.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/gaoarone>Gaborone</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/botswana', $data);
    }
    
    public function burkino_faso()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Burkino Faso';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/burkino-faso/dedougou.jpg',
                'title' => 'Burkino Faso has a lot to offer, discover it with us!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/burkino-faso/women.jpg',
                'title' => 'Become a member today and start sharing your travel experiences.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/burkino-faso/market.jpg',
                'title' => 'Holidaysrating advises you to exercise a high degree of caution in Burkino Faso.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/burkino-faso/fabedougou.JPG',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/ouagadougou>Ouagadougou</a> is the capital city.'
            ),
        );
      	      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/burkino_faso', $data);
    }
    
    public function burundi()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Burundi';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/burundi/gitaga.jpg',
                'title' => 'Discover the many things Burundi has got to offer!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/burundi/burundi.jpg',
                'title' => 'Are you our next travel guide?'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/burundi/house.jpg',
                'title' => 'Have you been in Burundi? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/burundi/work.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bujumbura>Bujumbura</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/burundi', $data);
    }
    
    public function cameroon()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Cameroon';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/cameroon/giraffe.jpg',
                'title' => 'Cameroon offers plenty of wildlife, just like these giraffes.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/cameroon/ceremonyg.JPG',
                'title' => 'Explore Cameroon!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/cameroon/ekom-falls.jpg',
                'title' => 'Have you been in Cameroon? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/cameroon/highlands.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/yaounde">Yaoundé</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/cameroon', $data);
    }
    
    public function cape_verde()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Cape Verde';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/island/africa/cape-verde/cape-verde.jpg',
                'title' => 'Discover Cape Verde!'
            ),
            
            1 => array(
                'src' => 'assets/images/island/africa/cape-verde/mountains.jpg',
                'title' => 'The mountain ranges, white sandy beaches or the streetlife of <a href = http://holidaysrating.com/index.php/africa_cities/praia>Praia</a>, Cape Verde has many things to offer.'
            ),
            
            2 => array(
                'src' => 'assets/images/island/africa/cape-verde/port.jpg',
                'title' => 'Have you been in Cape Verde? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/island/africa/cape-verde/cabo-verde.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/praia>Praia</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/cape_verde', $data);
    }

    public function central_african_republic()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Central African Republic';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/central-african-republic/three-generations.jpg',
                'title' => 'Have you been to Central African Republic? Share you travel experience on Holidaysrating!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/central-african-republic/road.jpg',
                'title' => 'Holidaysrating recommends you to take a high degree of caution in Central African Republic.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/central-african-republic/damara.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bangui>Bangui</a> is the capital city.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/central-african-republic/bamingui-bangoran.jpg',
                'title' => 'Find local recipes and add them to your own cook book.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/central_african_republic', $data);
    }
    
    public function chad()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Chad';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/chad/chad.jpg',
                'title' => 'Discover Chad'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/chad/herdingboy.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/chad/village.JPG',
                'title' => 'Have you been in Chad? Share you travel experience on Holidaysrating.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/chad/market.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/n_djamena">N Djamena</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/chad', $data);
    }
    
    public function comoros()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Comoros';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/comoros/beach.jpg',
                'title' => 'Visit Comoros!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/comoros/comoros.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a> or just watch the videos from other members.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/comoros/island.jpg',
                'title' => 'Have you been to Comoros? Share you travel experience on Holidaysrating.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/comoros/moroni-comoros.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/moroni>Moroni</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/comoros', $data);
    }
    
    public function congo()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Congo';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/congo/river.jpg',
                'title' => 'Explore Congo, visit the rain forest, enjoy the sunny beaches or wonder through the streets of the capital city'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/congo/bike.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/congo/okapi.jpg',
                'title' => 'Have you seen an okapi before? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/congo/gorilla.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/brazzaville>Brazzaville</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/congo', $data);
    }
    
    public function cote_d_ivoire()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Côte d Ivoire';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/cote-d-ivoire/purple-beach.jpg',
                'title' => 'Holidaysrating recommends you to take a high degree of caution in Cote d Ivoire.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/cote-d-ivoire/king-departs.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/cote-d-ivoire/plage-de-jacqueville.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/yamoussoukro>Yamoussoukro</a> is the capital city.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/cote-d-ivoire/cote-d-ivoire.JPG',
                'title' => 'Have you been in Cote d Ivore? Share you travel experience with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/cote_d_ivoire', $data);
    }
    
    public function democratic_republic_of_congo()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Democratic Republic of Congo';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/democratic-congo/drcongo.jpg',
                'title' => 'Holidaysrating recommends you to take high degree of caution in Democratic Republic of Congo.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/democratic-congo/okapi-drcongo.jpg',
                'title' => 'Have you seen an okapi before? Got any videos? Upload them now.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/democratic-congo/market.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/kinshasa>Kinshasa</a> is the capital city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/democratic-congo/river.jpg',
                'title' => 'Find local recipes ans start your culinair adventure!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/democratic_republic_of_congo', $data);
    }
    
    public function djibouti()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Djibouti';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/djibouti/young.jpg',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/djibouti/lake-assal.jpg',
                'title' => 'Holidaysrating advise you to exercise a high degree of caution in Djibouti.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/djibouti/city.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/djibouti_city>Djibouti City</a> is the capital city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/djibouti/landscape.jpg',
                'title' => 'Have you been in Djibouti? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/djibouti', $data);
    }
    
    public function egypt()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Egypt';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/egypt/gizag.jpg',
                'title' => 'Discover the Pyramids. Explore amazing Egypt.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/egypt/camel.jpg',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/egypt/cairo.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/cairo>Cairo</a> is the capital city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/egypt/egypt.jpg',
                'title' => 'Have you been in Egypt? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/egypt', $data);
    }
    
    public function equatorial_guinea()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Equatorial Guinea';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/equatorial-guinea/beach.jpg',
                'title' => 'Equatorial Guinea has plenty to offer...'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/equatorial-guinea/malabo-church.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/equatorial-guinea/malabo.jpg',
                'title' => 'Have you been in Equatorial Guinea? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/equatorial-guinea/corisco-island.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/malabo>Malabo</a> is the capital city of Equatorial Guinea.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/equatorial_guinea', $data);
    }
    
    public function eritrea()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Eritrea';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/eritrea/qohaito-safira.jpg',
                'title' => 'Discover Eritrea.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/eritrea/dahlak-kebir.jpg',
                'title' => 'Watch videos about this holiday destination in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/eritrea/landscape.jpg',
                'title' => 'Have you been in Eritrea? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/eritrea/eritrea.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/asmara>Asmara</a> is the capital city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/eritrea', $data);
    }
    
    public function ethiopia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Ethiopia';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/ethiopia/blue-nile.jpg',
                'title' => 'Discover Ethiopia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/ethiopia/tribal-family.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a> or just watch the videos from other members.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/ethiopia/zebra.jpg',
                'title' => 'Have you been to Ethiopia? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/ethiopia/royal-palace.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/addis_ababa>Addis Ababa</a> is the capital city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ethiopia', $data);
    }
    
    public function gabon()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Gabon';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/gabon/gorilla.jpg',
                'title' => 'Explore the many wonders Gabon has to offer.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/gabon/landscape.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a> or just watch the videos from other members.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/gabon/loango.jpg',
                'title' => 'Have you been to Gabon in Africa? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/gabon/market.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/libreville>Libreville</a> is the capital city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/gabon', $data);
    }
    
    public function gambia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Gambia';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/gambia/beach.jpg',
                'title' => 'Explore the many things Gambia has to offer. The stunning landscapes, sunfilled beaches or the vibrant streetlife of the city...'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/gambia/boat.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a> or just watch the videos from other members.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/gambia/family.jpg',
                'title' => 'Have you been to Gambia in Africa? Share you travel experience on Holidaysrating, Write a story or leave a comment.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/gambia/gambia.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/banjul>Banjul</a> is the capital city of Gambia.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/gambia', $data);
    }
    
    public function ghana()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Ghana';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/ghana/banner01.jpg',
                'title' => 'Discover Ghana. Go on a safari an watch wildlife...'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/ghana/sunset.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a> or just watch the videos from other members.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/ghana/ghana.jpg',
                'title' => 'Have you been to Ghana in Africa? Share you travel experience on Holidaysrating, Write a story or leave a comment.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/ghana/city.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/accra>Accra</a> is the capital and largest city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ghana', $data);
    }
    
    public function guinea()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Guinea';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/guinea/market.jpg',
                'title' => 'Discover Guinea. Walk over the markets.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/guinea/village.jpg',
                'title' => 'Find local rcipes and create your own cook book.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/guinea/river.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/cairo>Cairo</a> is the capital city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/guinea/village1.jpg',
                'title' => 'Have you been in Guinea? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/guinea', $data);
    }
    public function guinea_bissau()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Guinea Bissau';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/guinea-bissau/sea.jpg',
                'title' => 'Discover the beauty of this great west African country.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/guinea-bissau/market.jpg',
                'title' => 'Find local rcipes and create your own cook book.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/guinea-bissau/house.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bissau>Bissau</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/guinea-bissau/guinea-bissau-port.jpg',
                'title' => 'Have you been in Guinea Bissau? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/guinea_bissau', $data);
    }
    public function kenya()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Kenya';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/kenya/elephant.jpg',
                'title' => 'Dont miss out on Kenya, Africa.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/kenya/kenya.jpg',
                'title' => 'Find local rcipes and create your own cook book.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/kenya/nairobi.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/nairobi>Nairobi</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/kenya/lions.jpg',
                'title' => 'Have you been in Kenya? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/kenya', $data);
    }
    public function lesotho()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Lesotho';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/lesotho/waterfall.jpg',
                'title' => 'Dont miss out on Lesotho, Africa.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/lesotho/landscape.jpg',
                'title' => 'Exiting landscpes.. Upload your picture for this country!.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/lesotho/blesbok.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/nairobi>Nairobi</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/lesotho/tribe.jpg',
                'title' => 'Have you been in Lesotho? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/lesotho', $data);
    }
    public function liberia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Liberia';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/liberia/work.jpg',
                'title' => 'Discover Liberia.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/liberia/rhino.jpg',
                'title' => 'Watch videos about this holiday destination in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a>.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/eritrea/liberia/rice.JPG',
                'title' => 'Have you travelled in Eritrea? Share you travel experience on Holidaysrating. Become our travelguide!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/liberia/landscape.JPG',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/monrovia>Monrovia</a> is the capital city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/liberia', $data);
    }
    public function libya()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Libya';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/libya/caravan.jpg',
                'title' => 'Discover the beauty of Libya.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/libya/berber.jpg',
                'title' => 'Find local rcipes and create your own cook book.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/libya/tripoli.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/tripoli>Tripoli</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/libya/libya.jpg',
                'title' => 'Have you been in Guinea Bissau? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/libya', $data);
    }
    public function madagascar()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Madagascar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/madagascar/avenue_baobab.jpg',
                'title' => 'Megical Madagascar.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/madagascar/sea.jpg',
                'title' => 'Find local rcipes and create your own cook book.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/madagascar/antananarivo.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/antananarivo>Antananarivo</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/adagascar/nosy_be.jpg',
                'title' => 'Have you been in Madagascar? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/madagascar', $data);
    }
    public function malawi()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Malawi';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/malawi/elephant.jpg',
                'title' => 'Watch wildlife in Malawi, like elephants. Discover the many magical things Malawi has to offer.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/malawi/lake-malawi.jpg',
                'title' => 'Upload your travel video in our <a href = http://holidaysrating.com/index.php/topmenu/videodump>videodump</a> or just watch the videos from other members.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/malawi/village.jpg',
                'title' => 'Have you been to Malawi in Africa? Share you travel experience on Holidaysrating, Write a story or leave a comment.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/malawi/nkhotakota.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/lilongwe>Lilongwe</a> is the capital and largest city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/malawi', $data);
    }
    public function mali()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Mali';
           	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/mali/bandiagara.jpg',
                'title' => 'Explore Mali, click on adventures or must sees!.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/mali/dancei.jpg',
                'title' => 'Upload your story.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/mali/elephant.jpg',
                'title' => 'Have you been to Mali in Africa? Share you travel experience on Holidaysrating, Write a story or leave a comment.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/mali/mali.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/bamako>Bamako</a> is the capital and largest city.'
            ),
        );
 	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mali', $data);
    }
    public function mauritania()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Mauritania';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/mauritania/camels.jpg',
                'title' => 'Beautiful Mauritania.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/mauritania/building.jpg',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/mauritania/rocks.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/nouakchott>Nouakchott</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/mauritania/village.jpg',
                'title' => 'Have you been in Mauritania? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mauritania', $data);
    }
    public function mauritius()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Mauritius';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/mauritius/mauritius.jpg',
                'title' => 'Relax, you are on Mauritius.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/mauritius/from-air.jpg',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/mauritius/waterfall.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/port_louis>Port Louis</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/mauritius/island.jpg',
                'title' => 'Have you been in Mauritius? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mauritius', $data);
    }
    public function mayotte()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Mayotte';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/territories/africa/mayotte/mayotte-from-air.jpg',
                'title' => 'Relax, you are on Mayotte.'
            ),
            
            1 => array(
                'src' => 'assets/images/territories/africa/mayotte/maki.jpg',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/territories/africa/mayotte/waterfall.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/mamoudzou>Mamoudzou</a> is the capital and largest city'
            ),
            
            3 => array(
                'src' => 'assets/images/territories/africa/mayotte/whale.jpg',
                'title' => 'Have you been in Mayotte? Share your travel experience on Holidaysrating!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mayotte', $data);
    }
  
    public function morocco()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Morocco';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/morocco/view.jpg',
                'title' => 'Explore the wonderful things Morocco has got to offer...'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/morocco/market.jpg',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/morocco/marrakech.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/rabat>Rabat</a> is the capital while <a href = http://holidaysrating.com/index.php/africa_cities/casablanca>Casablanca</a> is the largest city of Morocco.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/morocco/camels.jpg',
                'title' => 'Have you had your holiday on Morocco? Share your travel experience with us!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/morocco', $data);
    }
    public function mozambique()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'mozambique';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa//mozambique/boat.jpg',
                'title' => 'Angola offers plenty of wildlife, visit the national parks.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/mozambique/lake-malawi.jpg',
                'title' => 'Explore the many beautiful destinations of Mozambique, like Lake Malawi.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/mozambique/zebra.jpg',
                'title' => 'Have you been on vacation in Mozambique? Share you travel experience on Holidaysrating!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/mozambique/maputo.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/maputo>Maputo</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mozambique', $data);
    }
    public function mwali()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Mwali';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/territories/africa//mwali/beach.jpg',
                'title' => 'Comoros smallest island; Mwali.'
            ),
            
            1 => array(
                'src' => 'assets/images/territories/africa/mwali/fish.JPG',
                'title' => 'Explore the many beautiful destinations of Mwali.'
            ),
            
            2 => array(
                'src' => 'assets/images/territories/africa/mwali/islands.jpg',
                'title' => 'Have you been on vacation in Mwali? Share you travel experience with us!'
            ),
            
            3 => array(
                'src' => 'assets/images/territories/africa/mwali/mwali.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/fomboni>Fomboni</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mwali', $data);
    }
    public function namibia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Namibia';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa//namibia/giraffe.jpg',
                'title' => 'Wildlife in Namibia!.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/namibia/kunene-himba.jpg',
                'title' => 'Explore the many beautiful destinations of Namibia.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/namibia/sossus.jpg',
                'title' => 'Have you been on vacation in Namibia? Share you travel experience with us!'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/namibia/zebra.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/windhoek>Windhoek</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/namibia', $data);
    }
    public function ndzwani()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Ndzwani';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/territories/africa//ndzwani/ndzwani.jpg',
                'title' => 'Explore Ndzwani.'
            ),
            
            1 => array(
                'src' => 'assets/images/territories/africa/ndzwani/dolphins.jpg',
                'title' => 'Explore the many beautiful destinations of Ndzwani.'
            ),
            
            2 => array(
                'src' => 'assets/images/territories/africa/ndzwani/maki.jpg',
                'title' => 'Have you been on vacation in Ndzwani? Share you travel experience with us!'
            ),
            
            3 => array(
                'src' => 'assets/images/territories/africa/ndzwani/anjouan.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/mutsamundu>Mutsamundu</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ndzwani', $data);
    }
    public function ngazidja()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Ngazidja';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/territories/africa/ngazidja/house.jpg',
                'title' => 'Explore Ngazidja.'
            ),
            
            1 => array(
                'src' => 'assets/images/territories/africa/ngazidja/mangrove.jpg',
                'title' => 'Explore the many beautiful places of Ngazidja.'
            ),
            
            2 => array(
                'src' => 'assets/images/territories/africa/ngazidja/moroni.jpg',
                'title' => 'Have you been on vacation in Ngazidja? Share you travel experience with us!'
            ),
            
            3 => array(
                'src' => 'assets/images/territories/africa/ngazidja/moroni-comoros.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/moroni>Moroni</a> is the capital city.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ngazidja', $data);
    }
    public function niger()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Niger';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/niger/lion.jpg',
                'title' => 'Explore the wonderful things Niger has got to offer...'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/niger/market.JPG',
                'title' => 'Rate for your favorite city or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/niger/niger.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/nimey>Nimey</a> is the capital city.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/niger/niger-river-niamey.jpg',
                'title' => 'Have you had your holiday in Niger? Share your travel experience with us! Write your own story.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/niger', $data);
    }
        public function nigeria()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Nigeria';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/niger/lion.jpg',
                'title' => 'Explore the wonderful things Nigeria has got to offer...'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/nigeria/lagos.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/nigeria/ode-omu-market.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/nimey>Nimey</a> is the capital city of Nigeria.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/nigeria/nigeria.jpg',
                'title' => 'Have you had your holiday in Nigeria? Share your travel experience with us! Write your own story.'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/nigeria', $data);
    }

    public function rwanda()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Rwanda';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/rwanda/rwanda.jpg',
                'title' => 'Discover Rwanda.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/rwanda/zebra.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a>...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/rwanda/kigali.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/kigali>Kigali</a> is the capital city of Rwanda.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/rwanda/dance.jpg',
                'title' => 'Have you travelled to Rwanda? Have you seen this dance of heroes? Tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'São Tomé and Príncipe';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/sao-tome-and-principe/beach.jpg',
                'title' => 'Discover amazing São Tomé and Príncipe.'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/sao-tome-and-principe/sao-tome.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a> and vote for your own favorite destination or aventure...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/sao-tome-and-principe/sao-tome-city.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/sao_tome>São Tomé</a> is the capital city of these islands.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/sao-tome-and-principe/walkway.jpg',
                'title' => 'Have you travelled to São Tomé and Príncipe? Tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Senegal';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/senegal/st-louis-bridge.jpg',
                'title' => 'Explore Senegal!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/senegal/touba-mosque.jpg',
                'title' => 'Check out our <a href = http://holidaysrating.com/index.php/topmenu/favorites>favorites</a> and vote for your own favorite destination or aventure...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/senegal/senegal-port.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/dakar>Dakar</a> is the capital city.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/senegal/party.jpg',
                'title' => 'Have you travelled to Senegal? Become a member and tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/senegal', $data);
    }
       public function seychelles()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Seychelles';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/seychelles/seychelles-air.jpg',
                'title' => 'Explore this stunning island; Seychelles!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/seychelles/seychelles.jpg',
                'title' => 'Discover the beautiful destinations of this planet together with us...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/seychelles/anse-source-dargent-on-la-digue-beach.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/victoria>Victoria</a> is the capital city of Seychelles.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/seychelles/islands.jpg',
                'title' => 'Have you been on Seycheeles, Africa? Become a member and tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/seychelles', $data);
    }

    public function sierra_leone()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Sierra Leone';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/sierra-leone/freetown.jpg',
                'title' => 'Explore Sierra Leone!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/sierra-leone/rice.jpg',
                'title' => 'Discover the beautiful destinations of this planet together with us...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/sierra-leone/beach.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/freetown>Freetown</a> is the capital city of Sierra Leone.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/sierra-leone/football.jpg',
                'title' => 'Have you been on Sierra Leone, Africa? Become a member and tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/sierra_leone', $data);
    }
    public function somalia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Somalia';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/somalia/water.jpg',
                'title' => 'Discover Somalia!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/somalia/beach.jpg',
                'title' => 'Explore the beautiful destinations of this planet together with us...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/somalia/mogadishu.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/mogadishu>Mogadishu</a> is the capital city of Somalia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/somalia/hirola.jpg',
                'title' => 'Have you been on Somalia, Africa? Become a member and tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/somalia', $data);
    }
    public function south_africa()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'South Africa';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/south-africa/zebra.jpg',
                'title' => 'Discover South Africa!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/south-africa/beach.jpg',
                'title' => 'Find recipes in our local food section. Have you got a real local recipe, upload this on Holidaysrating...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/south-africa/capetown.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/capetown>Capetown</a> is the capital city of South Africa.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/south-africa/bo-kaap.jpg',
                'title' => 'Have you been on South Africa? Become a member and tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/south_africa', $data);
    }
    public function south_sudan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'South Sudan';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/south-sudan/landscape.jpg',
                'title' => 'Discover South Africa!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/south-sudan/cattle.jpg',
                'title' => 'Find recipes in our local food section. Have you got a real local recipe, upload this on Holidaysrating...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/south-sudan/south-sudan-one-year.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/juba>Juba</a> is the capital city of South Sudan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/south-sudan/village.jpg',
                'title' => 'Have you been on South Sudan, Africa? Become a member and tell us all about it!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/south_sudan', $data);
    }
    public function sudan()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Sudan';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/sudan/men.jpg',
                'title' => 'Discover Sudan!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/sudan/cheetah.jpg',
                'title' => 'Have you got a great recipe, upload this in our local food section...'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/sudan/sudan.JPG',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/juba>Juba</a> is the capital city of Sudan.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/sudan/meroe-pyramids.jpg',
                'title' => 'Become a member and tell us all about your travels!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/sudan', $data);
    }
    public function swaziland()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Swaziland';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/swaziland/nature.jpg',
                'title' => 'Discover swaziland!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/swaziland/village.jpg',
                'title' => 'Check our videodump for videos about Swaziland.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/swaziland/dance.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/khartoum>Khartoum</a> is the capital city of Swaziland.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/swaziland/animal.jpg',
                'title' => 'Become a member and tell us all about your travels!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/swaziland', $data);
    }
    public function tanzania()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Tanzania';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/tanzania/masai.jpg',
                'title' => 'Discover magical Tanzania!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/tanzania/mafia-island.jpg',
                'title' => 'Looking for wildlife? Tanzania is the place to be!'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/tanzania/zebra-migration.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/dodoma>Dodoma</a> is the capital city of Tanzania.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/tanzania/women.jpg',
                'title' => 'Become a member and tell us all about your travels!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/tanzania', $data);
    }
    public function togo()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Togo';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/togo/taberme.jpg',
                'title' => 'Visit Togo and enjoy the many wonderful things it has to offer!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/togo/market.jpg',
                'title' => 'Vote for your favorite adventure or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/togo/walk.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/lome>Lomé</a> is the capital city of Togo.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/togo/diana-monkey.jpg',
                'title' => 'Become a member and tell us all about your travels!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/togo', $data);
    }
    public function tunisia()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Tunisia';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/tunisia/monastir.jpg',
                'title' => 'Visit Tunisia and enjoy the many wonderful things it has to offer!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/tunisia/tunisia.jpg',
                'title' => 'Vote for your favorite adventure or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/tunisia/medina.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/tunis>Tunis</a> is the capital city of Tunisia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/tunisia/sousse.jpg',
                'title' => 'Enjoy the stories from members!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/tunisia', $data);
    }
    public function uganda()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Uganda';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/uganda/village.jpg',
                'title' => 'Visit Uganda and enjoy the many wonderful things it has to offer!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/uganda/gorillas.jpg',
                'title' => 'Vote for your favorite adventure or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/uganda/market.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/kampala>Kampala</a> is the capital city of Uganda.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/uganda/albert-nile.jpg',
                'title' => 'Create your own profile and invite your friends!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/uganda', $data);
    }
    public function western_sahara()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Western Sahara';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/western-sahara/dakhla.jpg',
                'title' => 'Visit Western Sahara!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/estern-sahara/esmara.jpg',
                'title' => 'Vote for your favorite adventure or destination.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/western-sahara/camels.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/el_Aaiun>El Aaiún</a> is the capital city of Western Sahara.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/western-sahara/desert.jpg',
                'title' => 'Create your own profile and invite your friends!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/western_sahara', $data);
    }
    public function zambia()
    {	
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Zambia';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/countries/africa/zambia/victoria-falls.jpg',
                'title' => 'Zambia is a great holiday destination!'
            ),
            
            1 => array(
                'src' => 'assets/images/countries/africa/zambia/lions.jpg',
                'title' => 'Enjoy the wildlife in Zambia, Africa.'
            ),
            
            2 => array(
                'src' => 'assets/images/countries/africa/zambia/lusaka.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/lusaka>Lusaka</a> is the capital city of Zambia.'
            ),
            
            3 => array(
                'src' => 'assets/images/countries/africa/zambia/market.jpg',
                'title' => 'Create your own profile and invite your friends!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/zambia', $data);
    }
    public function zanzibar()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Zanzibar';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/islands/africa/zanzibar/nungwi-beach.jpg',
                'title' => 'Zanzibar is a great holiday destination!'
            ),
            
            1 => array(
                'src' => 'assets/images/islands/africa/zanzibar/nungwi-beach.jpg',
                'title' => 'Zanzibar is not just an island...'
            ),
            
            2 => array(
                'src' => 'assets/images/islands/africa/zanzibar/restaurant.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/zanzibar_city>Zanzibar City</a> is the capital city of this island.'
            ),
            
            3 => array(
                'src' => 'assets/images/islands/africa/zanzibar/zanzibar.jpg',
                'title' => 'Are you up to date? Check out our <a href = http://holidaysrating.com/index.php/news/news_index>news</a> section!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/zanzibar', $data);
    }
    public function zimbabwe()
    {
        $data['header']         = 'layouts/header';
        $data['footer']         = 'layouts/footer';
        $data['last_line']      = 'layouts/last_line';
        $data['left_sidebar']   = 'sidebar/left_sidebar';
        $data['sidebar']        = 'layouts/sidebar';
      	$data['heading']		= 'Zimbabwe';
      	
        $data['images'] = array(
            0 => array(
                'src' => 'assets/images/islands/africa/zimbabwe/great-zimbabwe.jpg',
                'title' => 'Travel to Zimbabwe!'
            ),
            
            1 => array(
                'src' => 'assets/images/islands/africa/zimbabwe/victoria-falls.jpg',
                'title' => 'Find local recipes and place them in your cook book.'
            ),
            
            2 => array(
                'src' => 'assets/images/islands/africa/zimbabwe/harare.jpg',
                'title' => '<a href = http://holidaysrating.com/index.php/africa_cities/harare>Harare</a> is the capital city of Zimbabwe.'
            ),
            
            3 => array(
                'src' => 'assets/images/islands/africa/zimbabwe/village.jpg',
                'title' => 'Are you up to date? Check out our <a href = http://holidaysrating.com/index.php/news/news_index>news</a> section!'
            ),
        );
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/zimbabwe', $data);
    }
}