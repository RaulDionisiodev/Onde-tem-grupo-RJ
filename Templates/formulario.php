<form action="" method="post"> 
    
    <div class="form-row">
        <div class="form-group col-sm-12 col-lg-6">
            <label id="cidade" for="">Cidade:
                <input type="text" name="cidade" class="form-control" id="" placeholder= "Insira sua cidade">
            </label>
        </div>
         
        <div class="form-group col-sm-12 col-lg-6">      
            <label for="">Bairro:
                <input type="text" name="bairro" class="form-control" id="" placeholder= "Insira seu bairro">
            </label>
        </div>
    </div> 


  <div class="form-row">
        <div class="form-group col selects">
            <label for="selectDia">Dia:
                <select name="dia" id="selectDia" class="form-control">
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
    <!--   </div>        


        <div class="form-group col select"> -->        
            <label id="hora" for="selectHora">Hora:
                <select name="horario" id="selectHora" class="form-control">
                        <option value="" selected></option>  
                    <?php foreach ($horarios as $key => $value) : ?>
                        <option value="<?php echo $value['horario']; ?>"><?php echo $value['horario']; ?></option>
                    <?php endforeach; ?>
                </select>
            </label> 
        

        

            <input class="btn btn-primary" type="submit" value="Buscar">
        </div>

     </div>       
    
</form>