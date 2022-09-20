<?php

namespace ProjetoPHP\Controller;

use ProjetoPHP\Model\FuncionarioModel;



class FuncionarioController extends Controller
{

    public static function index() 
    {
        include 'Model/FuncionarioModel.php'; 
        
       
        $model = new FuncionarioModel();
        $model->getAllRows();
        include 'View/modules/Funcionario/ListaFuncionarios.php';
    }

    
    public static function form()
    {
        include 'Model/FuncionarioModel.php'; 
        $model = new FuncionarioModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Funcionario/FormFuncionario.php';
    }


    public static function save() {

        include 'Model/FuncionarioModel.php'; 
        $pessoa = new FuncionarioModel();
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->cargo = $_POST['cargo'];  
        $pessoa->save();  

        header("Location: /Funcionario"); 
    }

    public static function delete()
    {
        include 'Model/FuncionarioModel.php'; 

        $model = new FuncionarioModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Funcionario"); 
    }

}