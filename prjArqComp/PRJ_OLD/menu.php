<style type="text/css">
    
  body,html{
    height: 100%;
  }

  nav.sidebar{
    -webkit-transition: margin 200ms ease-out;
    -moz-transition: margin 200ms ease-out;
    -o-transition: margin 200ms ease-out;
    transition: margin 200ms ease-out;
  }

  @media (min-width: 765px) {

    nav.sidebar:hover{
      margin-left: 200px;
    }

    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }

    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    nav.sidebar a{
      padding-right: 13px;
    }

    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
    }

    nav.sidebar li {
      width: 100%;
    }

    nav.sidebar:hover{
      margin-left: 0px;
    }

    .forAnimate{
      opacity: 0;
    }
  }

  @media (min-width: 1330px) {

    nav.sidebar{
    margin-left: 0px;
    float: left;
    }

    nav.sidebar .forAnimate{
    opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
  color: #CCC;
  background-color: transparent;
  }

  nav:hover .forAnimate{
  opacity: 1;
  }
  section{
  padding-left: 15px;
  }



</style>


<!-- Menu lateral -->
<nav class="navbar navbar-default sidebar" role="navigation">
  <div class="container-fluid">
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div> -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="home.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li>
              <a href="cadastro_pacientes.php">Pacientes</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#" id="odontologistas">Odontologistas - Restrito</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">Radiografias</a>
            </li>
            <li>
              <a href="#">Odontogramas</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<script type="text/javascript">

$(document).ready(function(){

  $('#odontologistas').click(function() {
    alert('Àrea restrita!');
  });
});

</script>