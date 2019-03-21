<?php if($exibir_tabela) : ?>
<table>
    <tr>
        <th>Nome</th>
        <th>Paróquia</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Dia</th>
        <th>Horário</th>
        <th></th>    
    </tr>
     
        <?php foreach($grupos as $key => $grupo ) : ?>    

    <tr>
        <td><?php echo $grupo->nome;?></td>
        <td><?php echo $grupo->paroquia;?></td>
        <td><?php echo $grupo->bairro;?></td>
        <td><?php echo $grupo->cidade;?></td>
        <td><?php echo $grupo->dia;?></td>
        <td><?php echo $grupo->horario;?></td>
        <td><a href="templates/detalhes.php?id=<?php echo $grupo->id; ?>" rel="">Detalhes</a></td>

        <?php endforeach; ?>
    </tr>
</table>

<?php else : ?>

<h3>Não foram encontrados grupos de oração.</h3>

<?php endif ?>
