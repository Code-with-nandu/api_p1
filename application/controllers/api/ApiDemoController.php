<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
require APPPATH . 'libraries/RestController.php'; 
require APPPATH . 'libraries/Format.php'; 
use chriskacerguis\RestServer\RestController; 
use chriskacerguis\RestServer\Format; 
class ApiDemoController extends RestController 
{ 
    public function __construct() 
    { 
        parent::__construct(); 
        // Load any models, libraries, etc. that you'll need here. 
    } 
 
    public function index_get() 
    { 
        echo "I am restful API"; 
        echo 'Current PHP version: ' . phpversion();

    } 
 
  
} 

