<?php
    session_start();

    require "modulos/config.php";
    require "classes/Grupo.php";
    require "classes/Repositorio_Grupos.php";

    $repositorio = new Repositorio_Grupos($conexao);
    $grupos = new Grupo();
    $horarios = $repositorio->buscarHorarios();
    $query = "SELECT * FROM grupos WHERE ";
   
    if(!empty($_POST)){
        
         
        if (!empty($_POST['cidade'])) {
            
            $query .= "cidade LIKE '%{$_POST['cidade']}%' AND ";
        }

        
        if (!empty($_POST['bairro'])) {
            
            $query .= "bairro LIKE '%{$_POST['bairro']}%' AND ";
        }

        
        if (!empty($_POST['dia'])) {
            
            $query .= "dia = '{$_POST['dia']}' AND ";
        }

        
        if (!empty($_POST['horario'])) {
            
            $query .= "horario = '{$_POST['horario']}' AND ";
        }
      
    
    }   
        if (empty($_SESSION) || ($_SESSION != $_POST) ) {
            
            $query = substr($query ,0, strlen($query) - 5); // retira o último " and "
            $grupos = $repositorio->filtrar($query);
            $_SESSION = $_POST;
            unset($_POST);
         
        }else{

            $grupos = $repositorio->buscarGrupos();
            $_SESSION = $query;

        }
      

    

if (!empty($grupos)) {
    $exibir_tabela = true;
} else {
    $exibir_tabela = FALSE;
}

     
     
    require "Templates/template.php";
?>
<pre><?php  #echo sizeof($grupos); var_dump($grupo) ?></pre>
