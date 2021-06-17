<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar Cliente</title>

      
      
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
      <a href="Cadastrocliente.php">Cadastrar</a>
      <a href=" pesquisarcliente.php">listar</a><a href="excluircliente.php">excluir</a>
       <a href="Atualizarcliente.php">atualizar</a><br>
</section>
  <h1>cadastro</h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processa.php">


                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    endereco<br>
                    <input type="text" name="endereco" class="campo" maxlength="40" required autofocus><br>
    				telefone<br>
                    <input type="text" name="telefone" class="campo" maxlength="40" required autofocus><br>
                    email<br>
                    <input type="text" name="email" class="campo" maxlength="40" required autofocus><br>

                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

