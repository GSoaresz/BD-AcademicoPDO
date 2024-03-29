<?php
    require_once('php/CursoDAO.php');    
    require_once('php/Curso.class.php');

    $id = isset($_POST['id']);
    $data = new DateTime($_POST['dataFundacao']);
    $curso = new Curso($_POST['nome'], $_POST['area'], $_POST['cargaHoraria'], $data);
    $cdao = new CursoDAO();
    
    if($id){
        $curso->setId(intval($_POST['id']));
        $cdao->altera($curso);
    }
    else{
        $cdao->inserir($curso);
    }
    
    header("Location: listaCursos.php");
?>