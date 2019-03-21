<?php
    define("BD_SERVIDOR", "nome do servidor");
    define("BD_USUARIO", "nome do usuário");
    define("BD_BANCO", "nome do banco");
    define("BD_SENHA", "senha do BD");

    
    $conexao = mysqli_connect(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

    mysqli_set_charset($conexao, "utf8");
?>