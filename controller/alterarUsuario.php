<?php
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarUsuario($conexao,$codigousu,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu)){
echo("Dados alterados com sucesso.");
}else{
echo("Dados não alterados.");
}

include_once("../view/footer.php");
?>
<form class="botao">
        <a class="btn btn-primary" href="../view/visuUsuNome.php" role="button">Voltar</a>
 </form>