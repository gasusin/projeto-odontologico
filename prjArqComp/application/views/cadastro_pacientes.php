<!DOCTYPE html>
<html>
<head>
    <title>Projeto e Arquitetura de Software</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script src="<?= base_url('js/jquery-222.min.js'); ?>"></script>
    <script src="<?= base_url('js/bootstrap.js'); ?>"></script>
    <script src="<?= base_url("js/bootbox.min.js");?>"></script>

    <script src="<?= base_url("js/jquery.min.js");?>"></script>
    <script src="<?= base_url("js/jquery.maskedinput.min.js");?>"></script>

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
    
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

      .selecionado {
        background-color: lightblue!important;
      }
    </style>
</head>
<body>

<?php include_once("menu.php"); ?>

<div class="conteudo">

  <div class="cabecalho">
      <form method="post" action="<?= site_url('cadastro_pacientes/adiciona_paciente');?>" id="form_paciente" name="form_paciente">
        <div class="form-group">
          <!-- <div class="col-sm-1">
            <label for="codigo">Código</label>
            <input class="form-control" type="text" id="codigo" name="codigo" required>
          </div> -->
          <div class="col-sm-4">
            <label for="paciente">Paciente</label>
            <input class="form-control" type="text" id="paciente" name="paciente" autofocus required>
          </div>
          <div class="col-sm-2">
            <label for="cnpj">CNPJ</label>
            <input class="form-control" type="text" id="cnpj" name="cnpj" required>
          </div>
          <div class="col-sm-2">
            <label for="data_nasc">Data Nascimento</label>
            <input class="form-control" type="date" id="data_nasc" name="data_nasc" required>
          </div>
          <div class="col-sm-2">
            <label for="plano_saude">Plano de saúde</label>
            <select class="form-control" type="text" id="plano_saude" name="plano_saude" required>
              <option>Sem plano</option>
              <option>Unimed</option>
              <option>Circulo</option>
            </select>
          </div>
        </div>
        <!-- <div class="form-group">
        </div> -->
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
          <th>CPF</th>
          <th>Data nascimento</th>
          <th>Plano Saúde</th>
          <!-- <th>Data cadastro</th> -->
          <!-- <th>Hora Cadastro</th> -->
          <th>Número de consultas</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        // var_dump($pacientes);
        if(isset($pacientes)) {
          foreach ($pacientes as $paciente) :
        ?>
            <tr>
              <td name="codigo"         ><?= $paciente["id_paciente"]     ?></td>
              <td name="nome"           ><?= $paciente['nome']            ?></td>
              <td name="cpf"            ><?= $paciente['cpf']             ?></td>
              <td name="data_nascimento"><?= $paciente['data_nascimento'] ?></td>
              <td name="plano_saude"    ><?= $paciente['plano_saude']     ?></td>
              <!-- <td><?= $paciente['data_cadastro'] ?></td> -->
              <!-- <td><?= $paciente['hora_cadastro'] ?></td> -->
              <td>1</td>
            </tr>
        <?php 
          endforeach;
        }
        ?>
      </tbody>
    </table>
  </div>
  
  <div class="botoes">
    <button class="btn btn-success" id="Adicionar" name="Adicionar">Adicionar</button>
    <button class="btn btn-danger" id="Excluir" name="Remover" >Remover</button>
    <button class="btn btn-info" id="Alterar" name="Alterar">Alterar</button>
  </div>

</div>


<div class="form-content" style="display:none;">
  <form method="post" action="<?= site_url('Cadastro_pacientes/altera_paciente');?>" id="form_paciente_altera" name="form_paciente_altera">
  <!-- <form id="form_paciente_altera" name="form_paciente_altera"> -->
    <div class="form-group">
      <!-- <div class="col-sm-4"> -->
        <label for="alt_paciente">Paciente</label>
        <input class="form-control" type="text" id="alt_paciente" name="alt_paciente" autofocus required>
      <!-- </div> -->
      <!-- <div class="col-sm-2"> -->
        <label for="alt_cnpj">CNPJ</label>
        <input class="form-control" type="text" id="alt_cnpj" name="alt_cnpj" required value="55555555555">
      <!-- </div> -->
      <!-- <div class="col-sm-2"> -->
        <label for="alt_data_nasc">Data Nascimento</label>
        <input class="form-control" type="date" id="alt_data_nasc" name="alt_data_nasc" required value="2018-01-01">
      <!-- </div> -->
      <!-- <div class="col-sm-2"> -->
        <label for="alt_plano_saude">Plano de saúde</label>
        <select class="form-control" type="text" id="alt_plano_saude" name="alt_plano_saude" required>
          <option>Sem plano</option>
          <option>Unimed</option>
          <option>Circulo</option>
        </select>
      <!-- </div> -->
    </div>
</form>
</div>




<script type="text/javascript">
  // Mascara campos
  $("#cnpj").mask("999.999.999-99");
  $("#codigo").mask("99999");
  

  // Botões
  $('#Adicionar').click( function() {
    $('#form_paciente').submit();
  });
  $('#Excluir').click( function() {
    var codigo = $('.selecionado').find('[name=codigo]').text();

    // Envia codigo do paciente para controler
    $.ajax({
      url:   '<?= site_url('Cadastro_pacientes/exclui_paciente'); ?>',
      type:  'POST',
      data: {codigo : codigo},
      error: function(result) {
        alert("Erro!");
      },
      success: function( result ) { 
        window.location.reload();
      }
    });
  });
  $('#Alterar').click( function() {
    var paciente = $('.selecionado');
    var nome_paciente = paciente.find('[name=nome]').text();
    var codigo_paciente = paciente.find('[name=codigo]').text();

    // $('alt_paciente').val(nome_paciente);

    // console.log($(".form-content").find('#alt_paciente').val(nome_paciente));
    // console.log($(".form-content").find('#alt_paciente')[0].value);
    // document.getElementById('alt_paciente').value = nome_paciente;
    
    form = $(".form-content").clone(true);
    // $(".form-content").find('name=alt_paciente').val(nome_paciente)
    // form.find('#alt_paciente').val(nome_paciente);
    // form.css('display','');

    dialog = bootbox.dialog({
      size: 'large',
      title: "Alterar paciente <strong>" + nome_paciente + "</strong>",
      message: form.html(), //$(".form-content").clone(true).html(),
      onEscape: true,
      buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancelar'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirmar',
                callback: function (result) {

                  /*console.log($('#alt_paciente').val());
                  // Envia codigo do paciente para controler
                  $.ajax({
                    url:   '<?= "site_url('Cadastro_pacientes/altera_paciente');" ?>',
                    type:  'POST',
                    async: false,
                    data: {codigo : codigo_paciente, nome : $('#alt_paciente').val(), cnpj : $('#alt_cnpj').val(), data_nascimento : $('#alt_data_nasc').val(), plano_saude : $('#alt_plano_saude').val()},
                    error: function(result) {
                      alert("Erro!");
                      console.log(result);
                    },
                    success: function( result ) { 
                      alert('alterou');
                      console.log(result);
                    }
                  });*/

                  $('form_paciente_altera').submit();
                  window.location.reload();
              }
            }
        }
        
      });
  });
  


  // Seleção da linha
  var tr = $('table tr:not(thead > tr)'); // :not(thead > tr) não permite seleção de linha do cabeçalho
  tr.on('click', function () {
      $(this).toggleClass('selecionado');
      tr.not(this).removeClass('selecionado');
  });
</script>

</body>
</html>

