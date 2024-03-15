<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruits</title>
</head>
<body>
    <h1>List of Fruits</h1>
    <ul>
        <?php foreach($fruits as $fruit): 
        
        ?>
        <li><?php echo $fruit-> name?> cost <?php echo $fruit-> price?>$ </li>

        <?php endforeach;?>
    </ul>
</body>
</html>