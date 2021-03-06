<?php
    class Repositorio_Grupos
    {
        private $conexao;

        public function __construct($conexao){
            $this->conexao = $conexao;
        }

        public function buscarGrupos()
        {

           $sqlBusca = "SELECT * FROM grupos";

            $resultado = $this->conexao->query($sqlBusca);


            $grupos = [];

            while ($grupo = $resultado->fetch_object()){
                    
                    $grupos[] = $grupo;
            
                }
            return $grupos;    
        }

        public function buscarGrupo($id){
            $sqlBusca = "SELECT * FROM grupos WHERE id = '{$id}'";

            $resultado = $this->conexao->query($sqlBusca);

            $grupo = $resultado->fetch_assoc();

            return $grupo;
        }
        
        public function buscarHorarios()
        {
            $sqlBusca = "SELECT DISTINCT horario FROM grupos ORDER BY horario ASC";
            
            $resultado = $this->conexao->query($sqlBusca);

             $horarios = [];

            while ($horario = $resultado->fetch_assoc()){

                $horarios[] = $horario;
            }

            return $horarios;
        }

        public function filtrar($query)
        {
          #  $sqlBusca = "SELECT * FROM grupos WHERE '{$query}'";

            $resultado = $this->conexao->query($query);

            $grupos = [];

            while ($grupo = $resultado->fetch_object()){
                    
                    $grupos[] = $grupo;
            
                }
            return $grupos;  
        }


        public function paginacao()
        {
          $grupos = $this->buscarGrupos();

          if (isset($_GET['pagina'])) { $pag_atual = $_GET['pagina'];} else {$pag_atual = 1;}

          $total_pags = ceil(sizeof($grupos) / 10);
          $limite = ($pag_atual * 10) - 10;

            $sqlBusca = "SELECT * FROM grupos LIMIT 10 OFFSET {$limite} ";

            $resultado = $this->conexao->query($sqlBusca);

            while ($grupo = $resultado->fetch_object()){ 

            $grupos_para_paginacao[] = $grupo;
            
          }
           
          return $grupos_para_paginacao;
        }
    }
    
?>