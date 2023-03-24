<?php
if($_GET){
    $valorA=$_GET['valorA'];
    $valorB=$_GET['valorB'];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplicacion=$valorA*$valorB;
    $division=$valorA/$valorB;
    echo "<br/>".$valorA."+".$valorB."=".$suma;
    echo "<br/>".$valorA."-".$valorB."=".$resta;
    echo "<br/>".$valorA."*".$valorB."=".$multiplicacion;
    echo "<br/>".$valorA."/".$valorB."=".$division;
}
?>