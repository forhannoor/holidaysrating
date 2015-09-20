<?php

class africa_local_food extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Recipe_m');
        $this->load->library('pagination');
    }

    public function algeria()
    {
        $config['base_url'] = site_url(__CLASS__ . '/' . __FUNCTION__);
        $config['total_rows'] = $this->Recipe_m->count_where('country', __FUNCTION__);
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        
        $data['header'] = 'layouts/header';
        $data['footer'] = 'layouts/footer';
        $data['last_line'] = 'layouts/last_line';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        $data['sidebar'] = 'layouts/sidebar';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';
        $data['recipes'] = $this->Recipe_m->get_recipes(__function__, $config['per_page'], (int) $this->uri->segment($config['uri_segment']));

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/algeria', $data);
    }
    
    public function angola()
    {
        $data['main'] = 'africa_local_food/angola.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/angola', $data);
    }
    
    public function benin()
    {
        $data['main'] = 'africa_local_food/benin.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/benin', $data);
    }
    
    public function botswana()
    {
        $data['main'] = 'africa_local_food/botswana.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('/africa_local_food/botswana', $data);
    }
    
    public function burkino_faso()
    {
        $data['main'] = 'africa_local_food/burkino_faso.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('/africa_local_food/burkino_faso', $data);
    }
    
    public function burundi()
    {
        $data['main'] = 'africa_local_food/burundi.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('/africa_local_food/burundi', $data);
    }
    
    public function cameroon()
    {
        $data['main'] = 'africa_local_food/cameroon.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/cameroon', $data);
    }
    
    public function cape_verde()
    {
        $data['main'] = 'africa_local_food/cape_verde.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_health/cape_verde', $data);
    }
    
    public function car()
    {
        $data['main'] = 'africa_local_food/car.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/car', $data);
    }
    
    public function chad()
    {
        $data['main'] = 'africa_local_food/chad.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/chad', $data);
    }
    
    public function comoros()
    {
        $data['main'] = 'africa_local_food/comoros.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/comoros', $data);
    }
    
    public function congo()
    {
        $data['main'] = 'africa_local_food/congo.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/congo', $data);
    }
    
    public function cote()
    {
        $data['main'] = 'africa_local_food/cote.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/cote', $data);
    }
    
    public function drc()
    {
        $data['main'] = 'africa_local_food/drc.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/drc', $data);
    }
    
    public function djibouti()
    {
        $data['main'] = 'africa_local_food/djibouti.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/djibouti', $data);
    }
    
    public function egypt()
    {
        $data['main'] = 'africa_local_food/egypt.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/egypt', $data);
    }
    
    public function equatorial_guinea()
    {
        $data['main'] = 'africa_local_food/equatorial_guinea.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/equatorial_guinea', $data);
    }
    
    public function eritrea()
    {
        $data['main'] = 'africa_local_food/eritrea.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/eritrea', $data);
    }
    
    public function ethiopia()
    {
        $data['main'] = 'africa_local_food/ethiopia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/ethiopia', $data);
    }
    
    public function gabon()
    {
        $data['main'] = 'africa_local_food/gabon.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/gabon', $data);
    }
    
    public function gambia()
    {
        $data['main'] = 'africa_local_food/gambia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/gambia', $data);
    }
    
    public function ghana()
    {
        $data['main'] = 'africa_local_food/ghana.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/ghana', $data);
    }
    
    public function guinea()
    {
        $data['main'] = 'africa_local_food/guinea.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/guinea', $data);
    }
    
    public function guinea_bissau()
    {
        $data['main'] = 'africa_local_food/guinea_bissau.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/guinea_bissau', $data);
    }
    
    public function kenya()
    {
        $data['main'] = 'africa_local_food/kenya.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/kenya', $data);
    }
    
    public function lesotho()
    {
        $data['main'] = 'africa_local_food/lesotho.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/lesotho', $data);
    }
    
    public function liberia()
    {
        $data['main'] = 'africa_local_food/liberia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/liberia', $data);
    }
    
    public function libya()
    {
        $data['main'] = 'africa_local_food/libya.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/libya', $data);
    }
    
    public function madagascar()
    {
        $data['main'] = 'africa_local_food/madagascar.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/madagascar', $data);
    }
    
    public function malawi()
    {
        $data['main'] = 'africa_local_food/malawi.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/malawi', $data);
    }
    
    public function mali()
    {
        $data['main'] = 'africa_local_food/mali.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/mali', $data);
    }
    
    public function mauritania()
    {
        $data['main'] = 'africa_local_food/mauritania.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/mauritania', $data);
    }
    
    public function mauritius()
    {
        $data['main'] = 'africa_local_food/mauritius.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/mauritius', $data);
    }
    
    public function morocco()
    {
        $data['main'] = 'africa_local_food/morocco.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/morocco', $data);
    }
    
    public function mozambique()
    {
        $data['main'] = 'africa_local_food/mozambique.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/mozambique', $data);
    }
    
    public function namibia()
    {
        $data['main'] = 'africa_local_food/namibia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/namibia', $data);
    }
    
    public function niger()
    {
        $data['main'] = 'africa_local_food/niger.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/niger', $data);
    }
    
    public function nigeria()
    {
        $data['main'] = 'africa_local_food/nigeria.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/nigeria', $data);
    }
    
    public function rwanda()
    {
        $data['main'] = 'africa_local_food/rwanda.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/rwanda', $data);
    }
    
    public function sao_tome_and_principe()
    {
        $data['main'] = 'africa_local_food/sao_tome_and_principe.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/sao_tome_and_principe', $data);
    }
    
    public function senegal()
    {
        $data['main'] = 'africa_local_food/senegal.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/senegal', $data);
    }
    
    public function seychelles()
    {
        $data['main'] = 'africa_local_food/seychelles.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/seychelles', $data);
    }
    
    public function sierra_leone()
    {
        $data['main'] = 'africa_local_food/sierra_leone.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/sierra_leone', $data);
    }
    
    public function somalia()
    {
        $data['main'] = 'africa_local_food/somalia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/somalia', $data);
    }
    
    public function south_africa()
    {
        $data['main'] = 'africa_local_food/south_africa.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/south_africa', $data);
    }
    
    public function south_sudan()
    {
        $data['main'] = 'africa_local_food/south_sudan.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/south_sudan', $data);
    }
    
    public function sudan()
    {
        $data['main'] = 'africa_local_food/sudan.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/sudan', $data);
    }
    
    public function swaziland()
    {
        $data['main'] = 'africa_local_food/swaziland.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/swaziland', $data);
    }
    
    public function tanzania()
    {
        $data['main'] = 'africa_local_food/tanzania.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/tanzania', $data);
    }
    
    public function togo()
    {
        $data['main'] = 'africa_local_food/togo.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/togo', $data);
    }
    
    public function tunisia()
    {
        $data['main'] = 'africa_local_food/tunisia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/tunisia', $data);
    }
    
    public function uganda()
    {
        $data['main'] = 'africa_local_food/uganda.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/uganda', $data);
    }
    
    public function western_sahara()
    {
        $data['main'] = 'africa_local_food/western_sahara.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/western_sahara', $data);
    }
    
    public function zambia()
    {
        $data['main'] = 'africa_local_food/zambia.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/zambia', $data);
    }
    
    public function zanzibar()
    {
        $data['main'] = 'africa_local_food/zanzibar.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/zanzibar', $data);
    }
    
    public function zimbabwe()
    {
        $data['main'] = 'africa_local_food/zimbabwe.php';
        $data['heading'] = 'Local Food';
        $data['right_bar_food'] = 'sidebar/right_bar_food';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('africa_local_food/zimbabwe', $data);
    }
}