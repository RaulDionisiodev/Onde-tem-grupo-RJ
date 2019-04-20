<?php
    $path = '../classes/';

    $file = $path.'Grupo.php';
    $file_2 = $path."Repositorio_Grupos.php";

    require ($file); 
    require ($file_2);
    require "../modulos/config.php";

    $grupos = new Repositorio_Grupos($conexao);
    
    if(isset($_GET['id'])){
          $id = $_GET['id'];
          $grupo = $grupos -> buscarGrupo($id);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Onde tem Grupo - RJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="./../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/main.js"></script>
</head>
<body>

    <div class="container text-center detalhes bg-light">
    
        <div class="jumbotron">
            <h1><?php echo $grupo['nome']; ?></h1>
        </div> 

        <p class="detalhes"><Strong>Paróquia: </Strong><?php echo $grupo['paroquia']; ?></p>
        <p><Strong>Endereço: </Strong><?php echo $grupo['endereco']; ?></p>
        <p><Strong>Bairro: </Strong><?php echo $grupo['bairro']; ?></p>
        <p><Strong>Cidade: </Strong><?php echo $grupo['cidade']; ?></p>
        <p><Strong>Dia: </Strong><?php echo $grupo['dia']; ?></p>
        <p><Strong>Horário: </Strong><?php echo $grupo['horario']; ?></p>


        <?php if ((isset( $grupo['telefone'])) || (isset($grupo['email']))) : ?>
            <p><Strong>Contatos:</Strong></p>

            <?php if(isset( $grupo['telefone'])) : ?>
                <p>Fone: <?php echo $grupo['telefone']?></p>
            <?php endif; ?>
            
            <?php if(isset( $grupo['email'])) :?>
                <p>Email: <?php echo $grupo['email']?></p>
            <?php endif; ?>

        <?php endif; ?>


        <h3>Redes Sociais</h3>

            <?php if(isset( $grupo['Facebook'])) : ?>
                <p><a href="<?php echo $grupo['Facebook']; ?>" target="_blank" rel="">Facebook do grupo</a></p>
            <?php endif; ?>

            <?php if(isset( $grupo['Instagram'])) : ?>
                <p><a href="<?php echo $grupo['Instagram']; ?>" target="_blank" rel="">Instagram do grupo </a></p>
            <?php endif; ?>

            <?php if(isset( $grupo['Twitter'])) : ?>
                <p><a href="<?php echo $grupo['Twitter']; ?>" target="_blank" rel="">Twitter do grupo</a></p>
            <?php endif; ?>

            <?php if(isset( $grupo['YouTube'])) : ?>
                <p><a href="<?php echo $grupo['YouTube']; ?>" target="_blank" rel="">YouTube do grupo</a></p>
            <?php endif; ?>

            
            <?php if(!isset( $grupo['YouTube']) && !isset( $grupo['Facebook']) && !isset( $grupo['Twitter']) && !isset( $grupo['Intagram']) ) : ?>
                <p> Esse grupo não possui redes sociais.</p>
            <?php endif; ?>


        <!--<h2>Testemunhos</h2>

        <p>Testemunhos dos menbros do gurpo aqui</p>  -->

        <p><a href="../index.php" target="_blank" rel="">Início</a></p>

        
        <?php include 'footer.php'; ?>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>

</html>