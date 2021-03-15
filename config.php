<?php

try{

    $strcon = mysqli_connect('sql10.freesqldatabase.com','sql10398989','IQ8vg1RESx','sql10398989') or die('Erro ao conectar ao banco de dados');


}catch(Exception $e){

    echo "Erro ao tentar se conectar com o banco de dados<br>Erro: " . $e;

}

?>