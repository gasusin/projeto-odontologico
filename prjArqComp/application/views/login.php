<html>
<head>
    <title>Projeto e Arquitetura de Software </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script src="js/jquery-222.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <style type="text/css">
        
        /****** LOGIN MODAL ******/
        .loginmodal-container {
          padding: 30px;
          max-width: 350px;
          width: 100% !important;
          background-color: #F7F7F7;
          margin: 100px auto;
          border-radius: 2px;
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
          overflow: hidden;
        }

        .loginmodal-container h1 {
          text-align: center;
          font-size: 1.8em;
        }

        .loginmodal-container input[type=submit] {
          width: 100%;
          display: block;
          margin-bottom: 10px;
          position: relative;
        }

        .loginmodal-container input[type=text], input[type=password] {
          height: 7%;
          font-size: 16px;
          width: 100%;
          margin-bottom: 10px;
          -webkit-appearance: none;
          background: #fff;
          border: 1px solid #d9d9d9;
          border-top: 1px solid #c0c0c0;
          padding: 0 8px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
        }

        .loginmodal-container input[type=text]:hover, input[type=password]:hover {
          border: 1px solid #b9b9b9;
          border-top: 1px solid #a0a0a0;
          -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
          -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
          box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }

        .loginmodal-submit {
            margin: auto;
            border: 0px;
            color: #fff;
            text-shadow: 0 1px rgba(0,0,0,0.1); 
            background-color: #4d90fe;
            height: 7%;
            font-size: 14px;
        }

        .loginmodal-submit:hover {
            background-color: #357ae8;
        }


    </style>
</head>
<body>

<div class="loginmodal-container">
    <h1>Acessar sistema</h1><br>
    <form method="get" action="<?php echo site_url('login/logon');?>">
        <input type="text" name="usuario" placeholder="Usuário" autofocus required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" name="login" class="login loginmodal-submit" value="Acessar">
    </form>
</div>


</body>
</html>