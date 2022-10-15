<?php
class Elemento{
    public $id_elemento;
    public $simbolo;
    public $nome;
    public $nmrAtomico;
    public $massaAtomica;
    public $idGrupo;

    public function getSimbolo(){
        return $this->simbolo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getNmrAtomico(){
        return $this->nmrAtomico;
    }

    public function getMassaAtomica(){
        return $this->massaAtomica;
    }

    public function getIdGrupo(){
        return $this->idGrupo;
    }

    public function validarDados(){
        include("BancoDados.php");
        
        $this->idElemento = $_POST["botao"];
        $pesquisa = $this->idElemento;
        $sql = mysqli_query($conexao, "SELECT e.* FROM Elemento as e Inner JOIN Grupo as g ON (e.id_grupo = g.Id) WHERE e.id ='$pesquisa';");

        while ($instanciacao = mysqli_fetch_array($sql))
        {
            $this->id_elemento = $instanciacao['id'];
            $this->simbolo = $instanciacao['simbolo'];
            $this->nome = $instanciacao['nome'];
            $this->nmrAtomico = $instanciacao['nmr_atomico'];
            $this->massaAtomica = $instanciacao['massa'];
            $this->idGrupo = $instanciacao['id_grupo'];
        }
    }
}
?>



