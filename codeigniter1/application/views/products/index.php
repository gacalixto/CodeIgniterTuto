<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=<?=base_url("css/bootstrap.css")?> />
    <script src="main.js"></script>
</head>
<body>
    <div class = "container">
   <p class ="alert-success"> <?=$this->session->flashdata("success");?> </p>
   <p class ="alert-danger"> <?=$this->session->flashdata("danger");?> </p>

    <h1>Products</h1>
        <table class = "table">
            <?php foreach($products as $product):?>
            <tr>
                <td><?= $product["nome"]?></td>
                <td><?=$product["descricao"]?></td>
                <td><?= numeroEmReais($product["preco"])?></td>
            </tr>

            <?php endforeach?>
        </table>
    <?php if($this->session->userdata("usuario_logado")): ?>
        <?= anchor('login/logout','Logout',array("class"=>"btn btn-primary"));?>
    <?php else :?>
    <h1>Login</h1>
    <?php
    echo form_open("login/autenticar");
    echo form_label("Email","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxlength" => "255"
    ));
    echo form_label("Senha","senha");
    echo form_password(array(
        "name"=>"senha",
        "id"=>"senha",
        "class"=>"form-control",
        "maxlength" => "255"
    ));
    echo form_button(array(
        "class"=>"btn btn-primary",
        "content"=>"Login",
        "type"=> "submit"
    ));
    echo form_close();
    ?>
    <h1>Users</h1>
    <?php 
        echo form_open("users/novo");
        echo form_label("Nome","nome");
        echo form_input(array(
            "name"=>"nome",
            "id"=>"nome",
            "class"=>"form-control",
            "maxlength" => "255"
        ));
        echo form_label("Email","email");
        echo form_input(array(
            "name"=>"email",
            "id"=>"email",
            "class"=>"form-control",
            "maxlength" => "255"
        ));
        echo form_label("Senha","senha");
        echo form_password(array(
            "name"=>"senha",
            "id"=>"senha",
            "class"=>"form-control",
            "maxlength" => "255"
        ));
        echo form_button(array(
            "class"=>"btn btn-primary",
            "content"=>"Cadastrar",
            "type"=> "submit"
        ));
        echo form_close();
    ?>
    <?php endif ?>
    </div>
</body>
</html>