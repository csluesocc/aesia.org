<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
        
    function __construct(){
        parent::__construct();                
    }
    
    public function index(){
        $this->load->view('home');
    }
    
    public function quienes_somos(){
        $this->load->view('quienes_somos');
    }
    
    public function contacto(){
        $this->load->view('contacto');
    }
    
    public function congreso2013(){
        $this->load->view('congreso2013');
    }
}
?>