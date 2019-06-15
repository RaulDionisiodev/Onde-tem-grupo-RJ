<?php if($exibir_tabela) : ?>
<table class="table table-hover table-sm" >

<caption class="text-center">Lista de Grupos de oração</caption>

    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th class="tabela-responsiva" scope="col">Paróquia</th>
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
            <td class="tabela-responsiva" ><?php echo $grupo->paroquia;?></td>
            <td class="tabela-responsiva" ><?php echo $grupo->bairro;?></td>
            <td class="tabela-responsiva" ><?php echo $grupo->cidade;?></td>
            <td><?php echo $grupo->dia;?></td>
            <td><?php echo $grupo->horario;?></td>
            <td><a href="Templates/detalhes.php?id=<?php echo $grupo->id; ?>" rel="">Detalhes</a></td>

            <?php endforeach; ?>
        </tr>
    </tbody>
</table>
        <?php $grupos_pags = $repositorio->buscarGrupos(); 
             $total_pags = ceil(sizeof($grupos_pags) / 10) ?>


        <nav aria-label="Paginação dos resulttados">
        <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="index.php" aria-label="Anterior">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
            </a>
            </li>

            <?php for ($i=1; $i <= $total_pags ; $i++) : ?>

            <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo ($i) ?>"><?php echo ($i) ?></a></li>
           
            <?php endfor; ?>

            
            <li class="page-item">
            <a class="page-link" href="index.php?pagina=<?php echo $total_pags?>" aria-label="Próximo">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Próximo</span>
            </a>
            </li>
        </ul>
        </nav>
<?php else : ?>

<h3 class="text-center" >Não foram encontrados grupos de oração.</h3>

<?php endif ?>

