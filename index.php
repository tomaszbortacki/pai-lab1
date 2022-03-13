<?php

$firstname = 'Tomasz';
$lastname = 'Bortacki';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta namespace='author' content='<?php echo $firstname.' '.$lastname ?>'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAI - Lab1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            padding: 1rem;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Hello <?php echo $firstname.' '.$lastname ?>!</h1>
</body>
</html>
