<?php

class Pages extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
               $this->load->model('Search_model');
                // $this->load->model('Update_model');
                // $this->load->model('Property_model');
                // $this->load->helper('url_helper');
                // $this->load->helper('language');
                // $this->load->model('Add_users');

        }

	function view($page = 'index') {

		if(! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		 
		
			$data['title'] = 'Kalpataru Projects';
		$data['keywords'] = 'Properties' ;
		$data['description'] = 'projetcs';
		$data['kalpataru'] = $this->Search_model->get_kalpataru_projects();
		$data['kalpataru_pro'] = $this->Search_model->get_kalpataru_pro();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/forms', $data);
		$this->load->view('templates/top-menu', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
		}

		public function get_term()
	{
		$name = $this->input->post('name');
		
		//echo $name;
		$this->load->model('Search_model');
		$data = $this->Search_model->get_result($name);
    	//echo "result";$query->num_rows() > 0)

    	if(count($data)>0)
    	{
    			//echo "data";
    		
	    		foreach ($data as $row)
	    		{
	    			$region= $row->region;
  $region1= str_replace(' ','-', $region);
  $name = $row->name;
  $name1 = str_replace(' ','-', $name);
  $city = $row->city;
  $city1 = str_replace(' ','-', $city); 
	    			 echo "<ul class='list1'>";
	    			 echo "<li class='ui-menu-item' style='background-color:#ffffff;'><a href='".$row->url."' target='_blank'>".$row->name."</a></li>";
	    			 echo "</ul>"; 
	    			
	    		}

	    		
    	}
    	else{
    		echo "<li class='ui-menu-item' style='background-color:#ffffff;'>No results found</li>";
    	}
		
    	
	}

	public function search_property()
	{
		$this->load->helper('url');

		
		$property_type = $this->input->get('property_type');
        $budget = $this->input->get('budget'); 
        $region = $this->input->get('selectField'); 
       	$search = $this->input->get('search');
        $status = $this->input->get('status');

        /*$this->load->library('form_validation');
        
        $this->form_validation->set_rules('search', 'search box', 'required');
        if($this->form_validation->run()== false)
        {
        	
        	$data['title'] = "Search Results";
        $this->load->view('templates/header');
		$this->load->view('templates/top-menu');
        $this->load->view('pages/index');
        $this->load->view('templates/footer');
        }*/

        
       
	     if (!$region && !$property_type && !$budget && !$status && !$search)

		{
			redirect(base_url());
	     
	     }
		else
		{
			if ($region && !$property_type && !$budget && !$status || $search)

		{

	     redirect(base_url().$region);
		}
       else
       {
       	$this->load->model('Search_model');

        $data['property'] = $this->Search_model->search_property_type($property_type, $budget, $status);
      	$data['title'] = "Search Results";
        $this->load->view('templates/search_result_page_header', $data);
		$this->load->view('templates/top-menu', $data);
        $this->load->view('mumbai/result1', $data);
        $this->load->view('templates/footer', $data);
       }

        }
        
		}

	public function newsletter()
	{
		$subscriber = $this->input->post('subscriber');
		
		$this->load->model('Add_users');
		$data = array('email' =>$subscriber);
		$res = $this->Add_users->newsletter_subscriber($data);

		echo $res;

		
	}

	public function get_kalpataru_pro()
	{
		$city = $this->input->post('city');

                
        $data['kalpataru'] = $this->Search_model->get_kalpataru($city);
        
        $this->load->view('pages/kalpataru-projects', $data);
	}
}

?>