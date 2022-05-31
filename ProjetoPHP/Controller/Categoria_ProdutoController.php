<?php


class Categoria_ProdutoController 
{

    public static function index() 
    {
        include 'Model/Categoria_ProdutoModel.php'; 
        
       
        $model = new Categoria_ProdutoModel();
        $model->getAllRows();
        include 'View/modules/Categoria_Produto/Categoria_ProdutoListar.php';
    }

    
    public static function form()
    {
        include 'Model/Categoria_ProdutoModel.php'; 
        $model = new Categoria_ProdutoModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Categoria_Produto/FormCategoria_Produto.php';
    }


    public static function save() {

        include 'Model/Categoria_ProdutoModel.php'; 
        $Categoria_Produto = new Categoria_ProdutoModel();
        $Categoria_Produto->id = $_POST['id'];
        $Categoria_Produto->descricao = $_POST['descricao'];
        $Categoria_Produto->save();  

        header("Location: /Categoria_Produto"); 
    }

    public static function delete()
    {
        include 'Model/Categoria_ProdutoModel.php'; 

        $model = new Categoria_ProdutoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Categoria_Produto"); 
    }

}