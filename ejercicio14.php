<?php
$inicial=1;
do{
    $fin=1;
    do{
        echo "".$inicial."*".$fin."=".($inicial*$fin)."<br/>";
        $fin++;
    }while($fin<10);
    echo "<br/>";
    $inicial++;

}while($inicial<10);

?>