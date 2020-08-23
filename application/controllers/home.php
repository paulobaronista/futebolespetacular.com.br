<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'UEFA CHAMPIONS LEAGUE 2020/2021';
        $data['description'] = 'TRAGA SUA MARCA PARA JOGAR NO MAIOR ESPETÁCULO DA TERRA';
        $data['keywords'] = 'UEFA champions league 2020, futebol 2020, Midia champions league, imprensa champions league';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }

}

/* Location: ./application/controllers/home.php */
