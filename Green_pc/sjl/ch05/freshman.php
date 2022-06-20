<?php
    $freshman = array(
        "David" => "Computer",
        "Alice" => "Math",
        "Elsa"  => "Physics",
        "Bob"   => "Music",
        "Chris" => "Electronics"
    );

    print_r($freshman);
    print "<br>";

    $freshman["Chris"] = "history";
    print_r($freshman);
    
?>