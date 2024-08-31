<h1>array</h1>
    <?php
        $info = array (
            "user" => array(
                "fName" => "John Neil",
                "mInitial" => "B.",
                "lName" => "Tamondong",
            ),
            "address" =>array(
                "province"=>"bulacan",
                "municipality"=>"marilao",
                "barangay"=>"abanagan sur"
            )
            );
                echo $info ["address"]["municipality"] ."</br>";
                
                ?>