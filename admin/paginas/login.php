<?php
//vardump serve para printar arrays
    //var_dump($_POST);
    if ($_POST){
        $login = $_POST["login"] ?? NULL;
        $senha = $_POST["senha"] ?? NULL;
         //echo $login;S

         $sql = "select id,nome,login,senha from usuario where login = :login AND ativo = 'S' limit 1";
         
         $consulta = $pdo->prepare($sql);
         $consulta->bindParam(":login", $login);
         $consulta->execute();

         $dados = $consulta->fetch(PDO::FETCH_OBJ);

         var_dump($dados);
        //if ((empty($login))or (empty($senha))){

        //}
       
    }
?>
<div class="login">
    <h1 class="text-center">Efetuar Login</h1>
    <form method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" class="form-control" require placeholder="Por favor preencha esta campo">

        <br>

        <label for="senha">Senha</label>
        <input type="password" name="sanha" id="senha" class="form-control" require placeholder="Por favor preencha este campo">
        <br>

        <button type="submit" class="btn btn-success w-100">Efetuar Login</button>
        
    </form>
</div>