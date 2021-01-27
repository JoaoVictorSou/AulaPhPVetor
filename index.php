<!DOCTYPE html>
<html>

<head>
    <title>Laço com PhP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
         $matriculado[] = ["Marcelo Figueredo Barbosa Júnior", "Professor", "31"];
         $matriculado[] = ["Ana Carolina Mattiuci Figueredo", "Alunx", "16"];
         $matriculado[] = ["João Victor Souza Lima", "Alunx", "18"];
         
         foreach ($matriculado as $a) {
             echo "<ul>";
             echo "<li> <h3>" . $a[0] . "</h3> </li>";
             echo "<li class='semEstilo'> <h4>" . $a[1] . "</h4> </li>";
             echo "<li class='semEstilo'> <p>" . $a[2] . "<p> </li>";
             echo "</ul>";
         }
    ?>

</body>

</html>