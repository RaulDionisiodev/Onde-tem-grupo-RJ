<?php
class Grupo{

    private $nome; //nome do GO
    private $paroquia;
    private $bairro;
    private $dia;
    private $horario;
    private $endereco;
    private $telefone;
    private $email;
    private $cidade;
    private $testemunhos;
    private $redes_sociais = [];
   
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome($nome)
    {
        return $this->nome;
    }

    public function setParoquia($paroquia)
    {
        $this->paroquia = $paroquia;
    }

    public function getParoquia($paroquia)
    {
        return $this->paroquia;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getBairro($bairro)
    {
        return $this->bairro;
    }

    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    public function getDia($dia)
    {
        return $this->dia;
    }
   
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function getHorario($horario)
    {
        return $this->horario;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco($endereco)
    {
        return $this->endereco;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone($telefone)
    {
        return $this->telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail($email)
    {
        return $this->email;
    }

    
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getCidade($cidade)
    {
        return $this->cidade;
    }
  
    
    public function setTestemunhos($testemunhos)
    {
        $this->testemunhos = $testemunhos;
    }

    public function getTestemunhos($testemunhos)
    {
        return $this->testemunhos;
    }

    public function setRedes( array $redes_sociais){
        $this -> redes_sociais =  [];

        foreach ($redes_sociais as $redes){
            $this->adicionarRedes($redes);
        }
    }

    public function adicionarRedes(Anexo $redes)
    {
        array_push($this->redes_sociais, $redes);
    }

    public function getRedes() : array {
        return $this -> redes_sociais;
    }
    

    public function __constructor($nome, $paroquia, $bairro, $dia, $horario, $endereco, $cidade, $email = "")
    {
        $this->setNome($nome);
        $this->setParoquia($paroquia);
        $this->setBairro($bairro);
        $this->setDia($dia);
        $this->setHorario($horario);
        $this->setEndereco($endereco);
        $this->setCidade($cidade);
        $this->setEmail($email);
    }


}




?>



