<?php

// Cria um vetor
$usuarios = [];

/*
Para ADICIONAR um item ao vetor:
- junto ao nome da variável use os COLCHETES
*/
// Adiciona o querido professor ao vetor
$usuarios[] = ["Marcelo Figueiredo Barbosa Júnior", 31, "Professor"];

//Adiciona xs lindxs alunxs do professor
$usuarios[] = ["Ellen Marjorie de Araujo Confessor", 16, "Alunx"];
$usuarios[] = ["Carlos Danilo da Silva Teixeira", 16, "Alunx"];
$usuarios[] = ["Dierly Geniele de Lima Oliveira", 16, "Alunx"];
$usuarios[] = ["Eduardo Lima Costa", 16, "Alunx"];
$usuarios[] = ["Aline Raquel Oliveira da Silva", 16, "Alunx"];
$usuarios[] = ["Gilberth Gabriel de Souza Pegado", 16, "Alunx"];
$usuarios[] = ["Mariana Larissa Oliveira dos Santos", 16, "Alunx"];
$usuarios[] = ["Hudson Artur de Lima Andrade", 16, "Alunx"];
$usuarios[] = ["Jamili Eva Quirino Campelo", 16, "Alunx"];
$usuarios[] = ["João Victor Souza Lima", 16, "Alunx"];
$usuarios[] = ["Maria Andriely Bezerra Nunes", 16, "Alunx"];
$usuarios[] = ["Yuri Menezes Andrade", 16, "Alunx"];
$usuarios[] = ["Maria Tereza Oliveira de Morais", 16, "Alunx"];
$usuarios[] = ["Nairon Cairo Germano Batista", 16, "Alunx"];
$usuarios[] = ["Paloma Vanessa Gomes da Silva", 16, "Alunx"];
$usuarios[] = ["Romualdo Silva de Lima", 16, "Alunx"];
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Lista participantes</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            foreach ($usuarios as $a) {
                echo "<ul>";
                echo "<li> <h3>" . $a[0] . "</h3> </li>";
                echo "<li class='semEstilo'> <h4>" . $a[1] . "</h4> </li>";
                echo "<li class='semEstilo'> <p>" . $a[2] . "<p> </li>";
                echo "</ul>";
            }
        ?>
    </body>
</html>