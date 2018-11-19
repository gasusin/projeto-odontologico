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

  <h3>Alterar paciente <strong><?php echo $paciente; ?></strong></h3>

  <div class="cabecalho">
    <form method="post" action="<?= site_url('cadastro_pacientes/alteracao_paciente');?>" id="form_paciente_altera" name="form_paciente_altera">
      <div class="form-group">
        <div class="col-sm-4">
          <label for="alt_paciente">Paciente</label>
          <input class="form-control" type="text" id="alt_paciente" name="alt_paciente" autofocus required value="<?php echo $paciente; ?>">
        </div>
        <div class="col-sm-2">
          <label for="alt_cpf">CPF</label>
          <input class="form-control" type="text" id="alt_cpf" name="alt_cpf" required value="<?php echo $cpf; ?>">
        </div>
        <div class="col-sm-2">
          <label for="alt_data_nasc">Data Nascimento</label>
          <input class="form-control" type="date" id="alt_data_nasc" name="alt_data_nasc" required value="<?php echo $dt_nasc; ?>">
        </div>
        <div class="col-sm-2">
          <label for="alt_plano_saude">Plano de saúde</label>
          <select class="form-control" type="text" id="alt_plano_saude" name="alt_plano_saude" required value="<?php echo $plano_saude; ?>">
            <option>Sem plano</option>
            <option>Unimed</option>
            <option>Circulo</option>
          </select>
        </div>
        <input class="form-control" type="hidden" id="alt_codigo" name="alt_codigos" value="<?php echo $codigo; ?>">
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
    console.log("teasda");
    $('#form_paciente_alteracao').submit();
  });
  
</script>

<?php $this->load->view('sys/footer');?>