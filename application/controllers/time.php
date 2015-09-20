<?php 

class time extends CI_Controller
{
    public function aft()
    {
        $data['main']='time/aft.php';
        $data['heading']='AFT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function ast()
    {
        $data['main']='time/aft.php';
        $data['heading']='AST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function bst()
    {
        $data['main']='time/bst.php';
        $data['heading']='BST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }

    public function btt()
    {
        $data['main']='time/btt.php';
        $data['heading']='BTT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function bdt()
    {
        $data['main']='time/bdt.php';
        $data['heading']='BDT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
	public function cat()
    {
        $data['main']='time/cat.php';
        $data['heading']='CAT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }

    public function cet()
    {
        $data['main']='time/cet.php';
        $data['heading']='CET';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function dst()
    {
        $data['main']='time/dst.php';
        $data['heading']='DST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function eet()
    {
        $data['main']='time/eet.php';
        $data['heading']='EET';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function cvt()
    {
        $data['main']='time/cvt.php';
        $data['heading']='CVT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function eat()
    {
        $data['main']='time/eat.php';
        $data['heading']='EAT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function gmt()
    {
        $data['main']='time/gmt.php';
        $data['heading']='GMT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function jst()
    {
        $data['main']='time/jst.php';
        $data['heading']='JST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function kgt()
    {
        $data['main']='time/kgt.php';
        $data['heading']='KGT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function mst()
    {
        $data['main']='time/mst.php';
        $data['heading']='MST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function mut()
    {
        $data['main']='time/mut.php';
        $data['heading']='MUT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
        public function ist()
    {
        $data['main']='time/ist.php';
        $data['heading']='IST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }

    public function sast()
    {
        $data['main']='time/sast.php';
        $data['heading']='SAST';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function sct()
    {
        $data['main']='time/sct.php';
        $data['heading']='SCT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function utc()
    {
        $data['main']='time/utc.php';
        $data['heading']='UTC';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function wat()
    {
        $data['main']='time/wat.php';
        $data['heading']='WAT';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function wet()
    {
        $data['main']='time/wet.php';
        $data['heading']='WET';

      	if($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }





}