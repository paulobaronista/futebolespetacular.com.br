<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'UEFA CHAMPIONS LEAGUE 2020/2021';
        $data['description'] = 'TRAGA SUA MARCA PARA JOGAR NO MAIOR ESPETÁCULO DA TERRA';
        $data['keywords'] = 'UEFA champions league 2020, futebol 2020, Midia champions league, imprensa champions league';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $empresa = $this->input->post('empresa');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.futebolespetacular.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@futebolespetacular.com.br", "UEFA CHAMPIONS LEAGUE 2020/2021");
            $this->email->to('contato@futebolespetacular.com.br');
            $this->email->cc('paulobaronista@gmail.com, adsales.brasil@turner.com, campfutebolespetacular@gmail.com, renata@spicycomm.com.br');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome: {$nome}<br/>
                E-mail: {$email}<br/>
                    Telefone/Celular: {$telefone}<br/>
                        Agência/Empresa: {$empresa}<br/>
                            Mensagem: {$mensagem}<br/>
                                </body></html>");

            if ($this->email->send()) {
                redirect('contato/obrigado');
            } else {
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado()
    {
        $data['title'] = 'UEFA CHAMPIONS LEAGUE 2020/2021';
        $data['description'] = 'TRAGA SUA MARCA PARA JOGAR NO MAIOR ESPETÁCULO DA TERRA';
        $data['keywords'] = 'UEFA champions league 2020, futebol 2020, Midia champions league, imprensa champions league';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'UEFA CHAMPIONS LEAGUE 2020/2021';
        $data['description'] = 'TRAGA SUA MARCA PARA JOGAR NO MAIOR ESPETÁCULO DA TERRA';
        $data['keywords'] = 'UEFA champions league 2020, futebol 2020, Midia champions league, imprensa champions league';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/contato.php */
