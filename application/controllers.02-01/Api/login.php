<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Login extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
        $this->load->model('login_model');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{

        $this->db->select('*');
        $this->db->from('news_section as BaseTbl');
        $query = $this->db->get();






        $this->db->select("*");
       // $this->db->group_by("year");
        $query = $this->db->get("news_section");
        $allnews = $query->result_array();
        $data=array('success'=>1,'message'=>"All year get successfully.", 'all_news' =>$allnews);
        $this->set_response($data, REST_Controller::HTTP_OK);
        // if(!empty($id)){
        //     $data = $this->db->get_where("items", ['id' => $id])->row_array();
        // }else{
        //     $data = $this->db->get("items")->result();
        // }
     
        //$this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        echo "hi Ramom";
         $this->isLoggedIn();
        // $input = $this->input->post();
        // $this->db->insert('items',$input);
     
        // $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('login');
        }
        else
        {
           $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
        }
    }
   public function loginMe_post()
    {
        echo "hiii";die;
        // $this->load->library('form_validation');
        
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        // $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
        
        // if($this->form_validation->run() == FALSE)
        // {
        //     $this->index();
        // }
        // else
        // {
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            
            $result = $this->login_model->loginMe($email, $password);
            
            if(!empty($result))
            {
                $lastLogin = $this->login_model->lastLoginInfo($result->userId);

                $sessionArray = array('userId'=>$result->userId,                    
                                        'role'=>$result->roleId,
                                        'roleText'=>$result->role,
                                        'name'=>$result->name,
                                        'lastLogin'=> $lastLogin->createdDtm,
                                        'isLoggedIn' => TRUE
                                );

                $this->session->set_userdata($sessionArray);

                unset($sessionArray['userId'], $sessionArray['isLoggedIn'], $sessionArray['lastLogin']);

                $loginInfo = array("userId"=>$result->userId, "sessionData" => json_encode($sessionArray), "machineIp"=>$_SERVER['REMOTE_ADDR'], "userAgent"=>getBrowserAgent(), "agentString"=>$this->agent->agent_string(), "platform"=>$this->agent->platform());

                $this->login_model->lastLogin($loginInfo);
                
                 $this->response(['welcome .'], REST_Controller::HTTP_OK);
            }
            else
            {
                  $this->response(['Something Went Wrong.'], REST_Controller::HTTP_OK);

            }
        //}
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}