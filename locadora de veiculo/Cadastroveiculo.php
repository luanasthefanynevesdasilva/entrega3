<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar veiculo</title>

      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="Index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastrofuncionario.php"><li>funcionario</li></a>
            <a href="cadastroseguro.php"><li>seguro</li></a>
            <a href="cadastroveiculo.php"><li>veiculo</li></a>
            <a href="cadastroaluguel.php"><li>aluguel</li></a>
            <a href="cadastrodevolucao.php"><li>devolucao</li></a>
            <a href="cadastroitemaluguel.php"><li>itemaluguel</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
      <a href="Cadastroveiculo.php">Cadastrar</a>
      <a href=" pesquisarveiculo.php">listar</a><a href="excluirveiculo.php">excluir</a>
       <a href="Atualizarveiculo.php">atualizar</a><br>
</section>
  <h1>cadastro</h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processaveiculo.php">


                    ano<br>
                    <input type="yext" name="ano" class="campo" maxlength="40" required autofocus><br>
                    cor<br>
                    <input type="text" name="cor" class="campo" maxlength="40" required autofocus><br>
    				modelo<br>
                    <input type="text" name="modelo" class="campo" maxlength="40" required autofocus><br>
                    tipoveiculo<br>
                    <input type="text" name="tipoveiculo" class="campo" maxlength="40" required autofocus><br>
                    placa<br>
                    <input type="text" name="placa" class="campo" maxlength="40" required autofocus><br>
                    idseguro<br>
                    <input type="text" name="idseguro" class="campo" maxlength="40" required autofocus><br>
                    chassin<br>
                    <input type="text" name="chassin" class="campo" maxlength="40" required autofocus><br>

                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

