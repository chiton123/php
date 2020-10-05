<?php
class animal{
    var $name;
    var $weight;

    function run($speed){
        echo " run at speed of : " .$speed;
    }

}
$cat = new animal();
$cat->run(40);


?>