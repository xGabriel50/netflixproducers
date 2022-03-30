<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(inserirUsuario($conexao,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compleusu)){
echo("O Perfil foi cadastrado com sucesso, selecione CONTINUAR para ter acesso aos conteúdos.");
}else{
echo("Não foi possível cadastrar seus dados!!");
}


include_once("../view/footer.php")
?>


 <form class="botao">
        <a class="btn btn-danger" href="../view/index.php" role="button">Voltar</a>
        <a class="btn btn-primary" href="https://www.filmezando.io" role="button">Continuar</a>
 </form>
 

