    <?php

    $table = array(
        "header" =>array(
            "Student ID",
            "Lastname",
            "Middlename",
            "Firstname",
            "Course",
            "Section",
        ),
        "body"=>array(
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            array(
                "lastname"=>"LastName",
                "middlename"=>"Middlename",
                "firstname"=>"Firstname",
                "course"=>"Course",
                "section"=>"Section",

            ),
            
        
        )
        );

            
        $headerSize = sizeof($table["header"]);
        $arraySize = sizeof($table["body"]); 
        $i = 0;
        
        echo("<table>");
        echo("<tr>");
        
    
    for ($x = 0; $x < $headerSize; $x++) {
        echo("<th>");
        echo($table["header"][$x]); 
        echo("</th>");
    }
    echo("</tr>"); 
    
    
    foreach ($table["body"] as $y) {
        echo("<tr>"); 
        echo("<td>");
        echo($i + 1); 
        echo("</td>");
        foreach ($y as $z) {
            echo("<td>"); 
            echo($z);
            echo("</td>"); 
        }
        echo("</tr>"); 
        $i++;
    }
    
    echo("</table>"); 
    
    ?>
