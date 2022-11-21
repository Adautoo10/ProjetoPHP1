<?php

namespace  ProjetoPHP\Model;



use ProjetoPHP\DAO\CadastroLoginDAO;

class CadastroLoginModel extends Model
{
    
    public $id, $nome, $email, $senha;

    public function save()
    {
        include 'DAO/CadastroLoginDAO.php';

        $dao = new CadastroLoginDAO();

        if(empty($this->id))
        {
           
            $dao->insert($this);
        } 
        
        header('Location: /login');
        
        }

        public function update()
    {
        $dao = new CadastroLoginDAO();

        $dao->update($this);
    }
        public function getAllRows()
        {
            $dao = new CadastroLoginDAO();
 
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {
            $dao = new CadastroLoginDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new CadastroLoginModel();
        }




}