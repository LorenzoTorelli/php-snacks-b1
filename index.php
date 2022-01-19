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

//     $name = $_GET["name"];
//     $mail = $_GET["mail"];
//     $age = $_GET["age"];

//     if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".")!== false  && is_numeric($age)){
//         echo "Accesso consentito";
//     }
//     else  echo "Accesso negato";
    



?>

<?php
    //Snack 3

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
            <?php foreach($posts as $key => $postdata) {?>
                <h2><?php echo $key; ?></h2>
                    <?php foreach($postdata as $key => $post) {?>
                        <li>

                        <h3><?php echo $post['title']?></h3> 
                        <p>Autore: <?php echo $post['author']?></p>
                        <p>Text: <?php echo $post['text']?></p>

                        </li>

                    <?php }?>                   
            <?php }?>                   

    </ul>
</body>
</html>

