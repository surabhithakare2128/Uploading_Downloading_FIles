<?php

//this is the controller for the index page.

//You are going to need to create / use a accounts controller that deals with login and registration you should not submit the post for the to the index controller
//POST index.php?page=accounts?action=create for adding a user
//POST index.php?page=accounts?action=login for logging a  user in and get the userID out of the session
//POST index.php?page=accounts?action=logout  this would destroy the session and return the user to the homepage
//GET  index.php?page=accounts?action=show  this would be to show the user profile and you get the userID out of session


class homepageController extends http\controller
{

    public static function show()
    {
//this is the show method that is called to show the sites name in a template any array passed in will be accepted by the template function as a model
//You could get fancy with the homepage and check for the userID in the session and hide/show the login / registration links when no session
//If there is a session then you should show the user profile link
//the template is an HTML page with PHP inserted in it.  just put an if/else statement to check for the session and show correct links


        $templateData['site_name'] = 'WELCOME TO MY WEBSITE!!!';

//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory

        self::getTemplate('homepage', $templateData);
    }

    public static function create()
    {


//I just put a $_POST here but this is where you would put the code to add a record
        print_r($_POST);
    }
    
    public function uploads(){
            echo "Hi";
            /*$templateData['site_name'] = 'WELCOME TO MY WEBSITE!!!';   
            self::getTemplate('homepage', $templateData);   
            $config['upload path'] = '/.uploads/';
        		$config['allowed_types'] = 'gif|jpg|png';
		        $config['max_size'] = '100';
		        $config['max_width'] = '1024';
		        $config['max_height'] = '768';
   
            $this->load->library('upload','$config');
   
            if(! $this->upload->uploads()){   
                 $error = array('error' => $this->upload->display_errors());
                 $this->load->view('upload_form', $error);    
            }
            else{
                  $data = array('upload_data' => $this->upload->data());
                  $this->load->view('upload_success', $data);
            }*/

        }
    

}
