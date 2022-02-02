<?php
if (isset($_POST['env'])) {
    $validation = new User();
    $validation->name = $_POST['name_user'];
    $validation->pass = $_POST['pass_user'];
    $validation->Login();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS only-end-->
    <title>Faça o login</title>
</head>
<style>
    .form-login{
        display: inline-block!important;
        width: 35%;
        margin-top: 250px;
    }
    .container{
        text-align: center;
    }
    .container button{
        width: 100%;
    }
    input{
        font-size: 18px!important;
        width: 100%;
    }
    span{
        font-weight: 300!important;
        font-size: 20px!important;
    }
    button{
        font-size: 23px!important;
        color: white!important;

    }
    h4{
        font-weight: 300;
    }
</style>
<body>
<div class="container">
    <div class="form-login d-inline-flex">
        <h4>PAINEL DE CONTROLE</h4><br>
        <form method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Nome</span>
            </div>
            <input type="text" class="form-control" name="name_user">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Senha</span>
            </div>
            <input type="password" class="form-control" name="pass_user">
        </div>
        <button class="btn btn-primary" type="submit"  name="env">Entrar no Painel</button>
    </div><br/><br/><br/>
    </form>
    <p>Caso não tenha a senha era será disponibilizada pelo <b>@Jhonata</b></p>
    <b><img src="https://cdn-icons-png.flaticon.com/512/2111/2111728.png" style="width: 25px"> Whatshapp (18) 99136-6226</b>
</div>
</body>
</html>
