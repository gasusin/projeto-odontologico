<?php $this->load->view('sys/header');?>
<?php $this->load->view('menu.php');?>

    <style type="text/css">
      body {
        display: flex;
        width: 100%;
      }

      .conteudo {
        display: flex;
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

  <h3>Cadastro de Pacientes</h3>

  <div class="itens">
    <table class="table table-striped table-hover">
      <thead class="">
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
    <form method="post" action="<?= site_url('Cadastro_pacientes/inclui_paciente');?>" id="form_paciente_inclui" name="form_paciente_inclui">
      <button class="btn btn-success" id="Adicionar" name="Adicionar">Adicionar</button>
    </form>
    <button class="btn btn-danger" id="Excluir" name="Remover" >Remover</button>
    <form method="post" action="<?= site_url('Cadastro_pacientes/altera_paciente');?>" id="form_paciente_altera" name="form_paciente_altera">
      <input type="hidden" name="paciente_cod" id="paciente_cod">
      <input type="hidden" name="paciente_nome" id="paciente_nome">
      <input type="hidden" name="paciente_cpf" id="paciente_cpf">
      <input type="hidden" name="paciente_dt_nasc" id="paciente_dt_nasc">
      <input type="hidden" name="paciente_pl_saude" id="paciente_pl_saude">
      <button class="btn btn-info" id="Alterar" name="Alterar">Alterar</button>
    </form>
  </div>

</div>




<script type="text/javascript">
  // Mascara campos
  $("#cpf").mask("999.999.999-99");
  $("#codigo").mask("99999");
  

  // Botões
  $('#Excluir').click( function() {
    var codigo = $('.selecionado').find('[name=codigo]').text();

    if (codigo) {
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
    }
  });
  
  $('#Alterar').click( function() {
      var paciente = $('.selecionado');

    if (paciente[0]) {
      var cod_paciente      = paciente.find('[name=codigo]').text();
      var nome_paciente     = paciente.find('[name=nome]').text();
      var cpf_paciente      = paciente.find('[name=cpf]').text();
      var dt_nasc_paciente  = paciente.find('[name=data_nascimento]').text();
      var pl_saude_paciente = paciente.find('[name=plano_saude]').text();

      $('#paciente_cod').val(cod_paciente);
      $('#paciente_nome').val(nome_paciente);
      $('#paciente_cpf').val(cpf_paciente);
      $('#paciente_dt_nasc').val(dt_nasc_paciente);
      $('#paciente_pl_saude').val(pl_saude_paciente);

      return true; 
    }else{
      return false;
    }
  });

  /*$('#Alterar').click( function() {
    var paciente = $('.selecionado');
    var nome_paciente = paciente.find('[name=nome]').text();
    var codigo_paciente = paciente.find('[name=codigo]').text();

console.log(paciente);
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

  /*                $('form_paciente_altera').submit();
                  window.location.reload();
              }
            }
        }
        
      });
  });
  */


  // Seleção da linha
  var tr = $('table tr:not(thead > tr)'); // :not(thead > tr) não permite seleção de linha do cabeçalho
  tr.on('click', function () {
      $(this).toggleClass('selecionado');
      tr.not(this).removeClass('selecionado');
  });
</script>

<?php $this->load->view('sys/footer');?>