<!DOCTYPE html>
<html>
<head>
    <title>Projeto e Arquitetura de Software</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script src="js/jquery-222.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <style type="text/css">
      body {
        display: flex;
        width: 100%;
      }

      .conteudo {
        display: block;
        width: 100%;
        height: 100%;
      }

      .cabecalho {
        width: 100%;
      }

      .itens {
        width: 100%;
      }

      .botoes {
        width: 100%;
        bottom: 0;
        right: 0;
        position: absolute;
        background-color: #F8F8F8;
        text-align: right;
      }

      .botoes button {
        margin: 10px;
      }
    </style>
</head>
<body>

<?php include_once("menu.php"); ?>

<div class="conteudo">

  <div class="cabecalho">
      <form class="">
        <div class="form-group">
          <!-- <div class="row"> -->
            <div class="col-sm-2">
              <label for="codigo">Código</label>
              <input class="form-control" type="text" name="codigo">
            </div>
            <div class="col-sm-10">
              <label for="paciente">Paciente</label>
              <input class="form-control" type="text" name="paciente">
            </div>
          <!-- </div> -->
        </div>
      </form>
  </div>

  </br></br>
  </br></br>

  <div class="itens">
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Código</th>
          <th>Paciente</th>
          <th>Data cadastro</th>
          <th>Hora Cadastro</th>
          <th>Número de consultas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>Daniel</td>
          <td>01/01/2018</td>
          <td>18:00</td>
          <td>1</td>
        </tr>
        <tr>
          <td>002</td>
          <td>Guilherme</td>
          <td>01/01/2018</td>
          <td>18:00</td>
          <td>1</td>
        </tr>
        <tr>
          <td>003</td>
          <td>Gustavo</td>
          <td>01/01/2018</td>
          <td>18:00</td>
            <td>2</td>
        </tr>
        <tr>
          <td>004</td>
          <td>Maria</td>
          <td>01/01/2018</td>
          <td>18:00</td>
          <td>3</td>
        </tr>
        <tr>
          <td>005</td>
          <td>João</td>
          <td>01/01/2018</td>
          <td>18:00</td>
          <td>5</td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div class="botoes">
    <button class="btn btn-success">Adicionar</button>
    <button class="btn btn-danger">Remover</button>
    <button class="btn btn-info">Alterar</button>
  </div>

</div>

</body>
</html>

