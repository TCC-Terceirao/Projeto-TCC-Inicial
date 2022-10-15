<?php
session_start();

include("BancoDados.php");
include("Elemento.php");
include("Grupo.php");

$Elementos = new Elemento();
$Elementos->validarDados();

$Grupos = new Grupo();
$Grupos->getNomeGrupo();


$_SESSION['simbulo'] = $Elementos->getSimbolo();
$_SESSION['nome'] = $Elementos->getNome();
$_SESSION['nmr_atomico'] = $Elementos->getNmrAtomico();
$_SESSION['massa_atomica'] = $Elementos->getMassaAtomica();
$_SESSION['grupo'] = $Grupos->getNameGrupo();

if (isset($_SESSION['nmr_atomico'])) {
    header('Location: Resultado.php');
  }
?>