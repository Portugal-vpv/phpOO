<?php
require_once  __DIR__.'/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 8</title>
</head>
<body>
<?php
    $pessoas = array(
        new Pessoa('Victor Portugal', 'M', 25),
        new Pessoa('Jack Johnson', 'M', 48),
        new Pessoa('Michael Jordan', 'M', 58)
    );

    $livros = array(
         new Livro('Lord of the rings', 'Token', 473, 3, true, $pessoas[0]),
         new Livro('Astrophysics in a hurry', 'Neil deGrasse Tysson', 378, 8, true, $pessoas[1]),
         new Livro('Clean Code', 'Robert Martin', 473, 3, true, $pessoas[2]),
         new Livro('Game of Thrones', 'R.R Martin', 473, 3, true, $pessoas[0])
    );
  
?>
<?php foreach($pessoas as $pessoa) {?>
    <h2><?php echo $pessoa->getPessoa(); ?></h2>
<?php }?>

<?php foreach($livros as $livro) {?>
    <h2><?php echo $livro->getLivro(); ?></h2>
<?php }?>
    
</body>
</html>