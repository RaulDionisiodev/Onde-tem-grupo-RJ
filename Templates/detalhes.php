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
<h1>Nome do grupo: <?php echo $grupo['nome']; ?></h1>

<p><Strong>Paróquia: </Strong><?php echo $grupo['paroquia']; ?></p>
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



