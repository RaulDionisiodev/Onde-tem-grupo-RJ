<form action="" method="post"> 
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label id="cidade" for="">Cidade:
                <input type="text" name="cidade" class="form-control input1" id="" placeholder= "Insira sua cidade">
            </label>
        </div>
         
        <div class="form-group cool-md-6">      
            <label for="">Bairro:
                <input type="text" name="bairro" class="form-control input1" id="" placeholder= "Insira seu bairro">
            </label>
        </div>
    </div> 

    <div class="form-group">
        <label for="">Dia:
            <select name="dia" class="form-control">
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
    </div>        


    <div class="form-group">        
        <label for="">Hora:
            <select name="horario" id="" class="form-control">
                    <option value="" selected></option>  
                <?php foreach ($horarios as $key => $value) : ?>
                    <option value="<?php echo $value['horario']; ?>"><?php echo $value['horario']; ?></option>
                <?php endforeach; ?>
            </select>
        </label> 
    </div>

        <input type="submit" value="Buscar">

    
</form>