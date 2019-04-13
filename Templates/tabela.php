<?php if($exibir_tabela) : ?>
<table class="table table-hover table-sm" >

<caption class="text-center">Lista de Grupos de oração</caption>

    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Paróquia</th>
            <th class="tabela-responsiva" scope="col" >Bairro</th>
            <th class="tabela-responsiva" scope="col">Cidade</th>
            <th scope="col" >Dia</th>
            <th scope="col" >Horário</th>
            <th scope="col" ></th>    
        </tr>
    </thead> 
       
        <?php foreach($grupos as $key => $grupo ) : ?>    
    <tbody>
        <tr socpe="row">
            <td><?php echo $grupo->nome;?></td>
            <td><?php echo $grupo->paroquia;?></td>
            <td class="tabela-responsiva" ><?php echo $grupo->bairro;?></td>
            <td class="tabela-responsiva" ><?php echo $grupo->cidade;?></td>
            <td><?php echo $grupo->dia;?></td>
            <td><?php echo $grupo->horario;?></td>
            <td><a href="templates/detalhes.php?id=<?php echo $grupo->id; ?>" rel="">Detalhes</a></td>

            <?php endforeach; ?>
        </tr>
    </tbody>
</table>

<?php else : ?>

<h3 class="text-center" >Não foram encontrados grupos de oração.</h3>

<?php endif ?>
