<style>
*{
    font-family: 'Courier New', Courier, monospace;
}


</style>


<?php



for ($i=1; $i <9 ; $i++) { 

    for ($j=1; $j <9 ; $j++) { 
        echo $i. "x". $j. "=".( $i*$j);
    }
    echo "<br>";
}

function mul($n){


    for ($i=1; $i <$n ; $i++) { 

        for ($j=1; $j <$n ; $j++) { 
            echo $i. "x". $j. "=".( $i*$j);
        }
        echo "<br>";
    }
}

echo "<hr>";
mul(5);
echo "<hr>";
mul(10);


echo "<hr>";
for($i=1 ; $i <= 5 ;$i++){

    for($k=1; $k <=(5-$i);$k++){
        echo "&nbsp;";    
    }
    
    for($j=1 ; $j <= (2*$i-1) ; $j++){
        echo "*";
    }
    echo "<br>";
}

?>
