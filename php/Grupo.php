<?php
class Grupo{
    public $id_grupo;
    public $nome_grupo;

    public function getIdGrupo(){
        return $this->id_grupo;
    }

    public function getNameGrupo(){
        return $this->nome_grupo;
    }
    
    public function getNomeGrupo(){
        include("BancoDados.php");
        
        $this->idElemento = $_POST["botao"];
        $pesquisa = $this->idElemento;
        $sql = mysqli_query($conexao, "SELECT g.* FROM Grupo as g Inner JOIN Elemento as e ON (g.Id = e.id_grupo) WHERE e.id ='$pesquisa';");

        while ($instanciacao = mysqli_fetch_array($sql))
        {
            $this->id_grupo = $instanciacao['id'];
            $this->nome_grupo = $instanciacao['nomeGrupo'];
        }
    }
}
?>



