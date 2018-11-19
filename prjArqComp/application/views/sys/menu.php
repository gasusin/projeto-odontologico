
<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php  echo site_url('home/index');?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo site_url('configuracao/index');?>"><i class="fa fa-cog fa-spin"></i> Configuração</a></li>
           
        </ul>
        <ul class="nav navbar-nav pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>       <?php echo $this->session->userdata('_user')->USER_NOME;?>   <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php //echo site_url('usuario/alterPass');?>"><i class="fa fa-lock"></i>      Alterar Senha</a></li>
                <li><a href="<?php //echo site_url('usuario/index');?>"><i class="fa fa-users"> </i>   Usuários</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url('usuario/logout')?>"><i class="glyphicon glyphicon-off"></i>   Logout</a></li>
              </ul>
            </li>
        </ul>
      </div>
    </div>
</nav>

<?php echo $this->message->show();?>