<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black; 
        }
        img{
            width: 100px;
        }

    </style>
</head>
<body>
    

<?php
echo "<h1> Salada de fruta</h1>";

echo "<table><tr>";
for ($x=1; $x<=10;$x++){
echo "<td><img src ='img/$x.jpg'></td>";

}
echo "</tr></table>";



?>


</body>
</html>
