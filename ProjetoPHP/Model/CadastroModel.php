<?php

namespace ProjetoPHP\Model;

use ProjetoPHP\DAO\CadastroDAO;

class CadastroModel extends Model
{
   
    public $id, $nome, $email, $senha;

    public function autenticar()
    {
        $dao = new CadastroDAO();
        
        $dados_usuario_logado = $dao->selectByEmailAndSenha($this->nome, $this->email, $this->senha);

        if(is_object($dados_usuario_logado))
            return $dados_usuario_logado;
        else
            null;
    }
}