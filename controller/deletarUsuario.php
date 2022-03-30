<?php
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarUsuario($conexao,$codigousu)){
echo("Usuario excluido com sucesso.");
}else{
echo("Usuário não Excluido.");
}

include_once("../view/footer.php");
?>
<form class="botao">
        <a class="btn btn-primary" href="../view/visuUsuNome.php" role="button">Voltar</a>
 </form>