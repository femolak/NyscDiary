<?php
   //  error_reporting('E_WARNING');
defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);
session_start();

class Contact extends CI_Controller 
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    // Class constructor
    function __construct()
       {
           parent:: __construct();
       }


   public function index()
    {
        extract($_POST);
        if (!empty($postExperience)) 
        {
            echo "something is here";
            echo $postExperience;
            $details =  array('shortText'                   => $postExperience
                );
            $this->nyscDB->insertIntoAnyTable($details, 'experience');
             redirect('/experience');
        }
        else
        {
            // echo '<script language="Javascript"> alert("Empty Field(s) Found!!!") </script>';
            // redirect('home/register');
            echo "nothing showed here";
        } 
    }
}