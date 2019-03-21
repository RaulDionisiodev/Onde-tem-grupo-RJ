<form action="" method="post"> 

        <label id="cidade" for="">cidade:
            <input type="text" name="cidade" id="" placeholder= "Insira sua cidade">
        </label>
    
            
        <label for="">Bairro:
            <input type="text" name="bairro" id="" placeholder= "Insira seu bairro">
        </label>
    

        <label for="">Dia:
            <select name="dia">
                <option value="" selected></option>
                <option value="Domingo">Domingo</option>
                <option value="Segunda">Segunda</option>
                <option value="Terca">Terça</option>
                <option value="Quarta">Quarta</option>
                <option value="Quinta">Quinta</option>
                <option value="Sexta">Sexta</option>
                <option value="Sabado">Sábado</option>
            </select>
        </label>

    <label for="">Hora:
        <select name="horario" id="">
                <option value="" selected></option>  
            <?php foreach ($horarios as $key => $value) : ?>
                <option value="<?php echo $value['horario']; ?>"><?php echo $value['horario']; ?></option>
            <?php endforeach; ?>
        </select>
    </label> 

    <input type="submit" value="Buscar">


</form>