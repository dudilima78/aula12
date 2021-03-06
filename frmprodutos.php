<?php
include('conexao.php');
try {
    $sql = "insert into tblprodutos (produto,preco,estoque) values (:produto,:preco,:estoque)";
    $stmt = $con->prepare($sql);
    $stmt-> bindValue(":produto",$_POST["produto"]);
    $stmt-> bindValue(":preco",$_POST["preco"]);
    $stmt-> bindValue(":estoque",$_POST["estoque"]);
    $stmt->execute();
    header("location:listarprodutos-prepare.php");
} catch(PDOException $e){
    echo "Não Cadastrou".$e->getCode();

}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Produtos</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2>Produtos</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="frmclientes.php">Clientes</a></li>
            <li><a class="dropdown-item" href="frmvendedores.php">Vendedores</a></li>
            <li><a class="dropdown-item" href="frmvendas.php">Vendas</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav><br><br>

<div class="container">

<form method="post">

        <div class="row">
        <div class="col">
        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Produto:</label>
            <input type="text" name="produto"><br><br>       
            
        </div>      

        <div class="row">
        <div class="col">
        <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Preço:</label>
                <input type="text" name="preco"><br><br>

              </div>


        <div class="row">
        <div class="col">
        <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Estoque:</label>
                <input type="text" name="estoque"><br><br>

        </div>

        </div>

        <div class="row">
        <div class="col">
        <div class="mb-3">

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        
      </div>

    </form>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
 
  </body>

</html>