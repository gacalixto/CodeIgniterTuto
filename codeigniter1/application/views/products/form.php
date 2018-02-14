
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cadastro de produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href=<?=base_url("css/bootstrap.css")?> />
    <script src="main.js"></script>
</head>
<body>
    <h1>cadastro de Produtos</h1>
    <div class="container">
    <?php 
        echo form_open("products/novo");
        echo form_label("Nome","nome");
        echo form_input(array(
            "name"=>"nome",
            "id"=>"nome",
            "class"=>"form-control",
            "maxlength" => "255"
        ));
        echo form_label("Descrição","descrição");
        echo form_textarea(array(
            "name"=>"descricao",
            "id"=>"descricao",
            "class"=>"form-control"
        ));
        echo form_label("Preço","preço");
        echo form_input(array(
            "name"=>"preco",
            "id"=>"preco",
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
    </div>
    
</body>
</html>
