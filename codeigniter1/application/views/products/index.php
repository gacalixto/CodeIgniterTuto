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
    <h1>Products</h1>
        <table class = "table">
            <?php foreach($products as $product):?>
            <tr>
                <td><?= $product["nome"]?></td>
                <td><?= $product["preco"]?></td>
            </tr>

            <?php endforeach?>
        </table>
    </div>
</body>
</html>