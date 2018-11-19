<?php $this->load->view('sys/header');?>
<?php $this->load->view('menu.php');?>

    <style type="text/css">
      body {
        display: flex;
        width: 100%;
      }

      .conteudo {
        /*display: block;*/
        margin-left: 17vw;  /*Remover - ajustar para ficar ao lado do menu corretamente*/
        width: 100%;
        height: 100%;
      }

      .conteudo h3 {
        /*display: block;*/
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

      .botoes form {
        display: contents;
      }

      .botoes button {
        margin: 10px;
      }

      .selecionado {
        background-color: lightblue!important;
      }
    </style>



<div class="conteudo">

  <h3>Cadastrar paciente</h3>

  <div class="cabecalho">
    <form method="post" action="<?= site_url('cadastro_pacientes/inclusao_paciente');?>" id="form_paciente_inclusao" name="form_paciente_inclusao">
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
          <label for="cpf">CPF</label>
          <input class="form-control" type="text" id="cpf" name="cpf" required>
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
    </form>
    
    <div class="botoes">
      <button class="btn btn-success" type="submit" id="Confirmar" name="Confirmar">Confirmar</button>
      <form method="post" action="<?= site_url('Cadastro_pacientes');?>" id="form_paciente_altera" name="form_paciente_altera">
        <button class="btn btn-danger" id="Cancelar" name="Cancelar">Cancelar</button>
      </form>
    </div>
  </div>

</div>


<script type="text/javascript">
  // Mascara campos
  $("#cpf").mask("999.999.999-99");
  $("#codigo").mask("99999");

  // Botões
  $('#Confirmar').click( function() {
    $('#form_paciente_inclusao').submit();
  });
  
</script>

<?php $this->load->view('sys/footer');?>