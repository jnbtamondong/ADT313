<h1> Condition <h1>
    <?php
    $number=14;
    if($number%2){
        echo"Odd";
    } elseif($number %3 ){

    }else{
        echo"Even";
    }

    echo "<br/>";

    //(condition)? true : false
    $aunthenticated = true;
    $checkAccess = ($authenticated) ? "access granted" : "access denied";
    echo $checkAccess;

    echo "<br/>";
    ?>

