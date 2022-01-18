<?php


    // Snack 1

    // $partite = [
    //     [
    //         "s_casa" => 'Olimpia Milano',
    //         "s_ospite" => 'Cantù',
    //         "p_casa" => '55',
    //         "p_ospite" => '60',
    //     ],
    //     [
    //         "s_casa" => 'Montepaschi di Siena',
    //         "s_ospite" => 'Trento',
    //         "p_casa" => '40',
    //         "p_ospite" => '30',
    //     ],
    //     [
    //         "s_casa" => 'Fortitudo Bologna',
    //         "s_ospite" => 'Virtus Bologna',
    //         "p_casa" => '77',
    //         "p_ospite" => '30',
    //     ]
    // ];

    // for ($i = 0; $i < count($partite); $i++ ) {
    //     echo '<pre>'. $partite[$i]["s_casa"]." - ".$partite[$i]["s_ospite"]." | ".$partite[$i]["p_casa"]."-".$partite[$i]["p_ospite"].'</pre>' ;
    // }


    // Snack 2 

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".")!== false  && is_numeric($age)){
        echo "Accesso consentito";
    }
    else  echo "Accesso negato";
    



?>