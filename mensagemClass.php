<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mensagemClass
 *
 * @author Nascimento
 */
class Mensagem {
    
    private $nome;
    private $email;
    private $mensagem;
    
    public function __construct($nome, $email, $mensagem) {

    }
    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }


}
