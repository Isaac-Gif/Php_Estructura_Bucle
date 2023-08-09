
<!DOCTYPE html>
<html>
<head>
    <title>Generador de imágenes Pokémon GIF</title>
</head>
<body>
    <?php
echo "Si el usuario coloca 4 <br>";
            for ($i = 0; $i <=3; $i++) {
                echo "<img src='./img/pokemon.gif' style='max-width:12%; padding:12px'>";
            }
    ?>
    <br>
    <?php
echo "Si el usuario coloca 2 <br>";
            for ($i = 0; $i <=1; $i++) {
                echo "<img src='./img/pokemon.gif' style='max-width:12%; padding:12px'>";
            }
    ?>
</body>
</html>
