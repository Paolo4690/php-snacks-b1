<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snacks</title>
</head>
<body>
    <?php
        $array_partite = [
            [
                'casa' => [
                    'nome'   => 'Olimpia Milano',
                    'punteggio' => 95
                ],
                'ospite' => [
                    'nome'   => 'Cantù',
                    'punteggio' => 80
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Virtus Bologna',
                    'punteggio' => 74
                ],
                'ospite' => [
                    'nome'   => 'Varese',
                    'punteggio' => 67
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'V.L. Pesaro',
                    'punteggio' => 85
                ],
                'ospite' => [
                    'nome'   => 'Reyer Venezia',
                    'punteggio' => 79
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Fortitudo Bologna',
                    'punteggio' => 69
                ],
                'ospite' => [
                    'nome'   => 'Virtus Roma',
                    'punteggio' => 61
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Mens Sana Siena',
                    'punteggio' => 77
                ],
                'ospite' => [
                    'nome'   => 'Treviso',
                    'punteggio' => 83
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Reggiana',
                    'punteggio' => 78
                ],
                'ospite' => [
                    'nome'   => 'Trieste',
                    'punteggio' => 101
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Juvecaserta',
                    'punteggio' => 62
                ],
                'ospite' => [
                    'nome'   => 'Stella Azzurra',
                    'punteggio' => 76
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Scandone Avellino',
                    'punteggio' => 102
                ],
                'ospite' => [
                    'nome'   => 'Auxilium Torino',
                    'punteggio' => 84
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Dinamo Sassari',
                    'punteggio' => 93
                ],
                'ospite' => [
                    'nome'   => 'New Basket Brindisi',
                    'punteggio' => 89
                ]
                
            ],
            [
                'casa' => [
                    'nome'   => 'Libertas Forlì',
                    'punteggio' => 64
                ],
                'ospite' => [
                    'nome'   => 'Teramo Basket',
                    'punteggio' => 81
                ]
                
            ]
        ];
    ?>
    <!-- SNACK 1  -->    <!-- SNACK 1  -->    <!-- SNACK 1  -->    <!-- SNACK 1  -->    <!-- SNACK 1  -->
    <h1>Snack 1</h1>
    <h2>Partite 24°a giornata</h2>
    <p>Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.</p>
    <ul>
        <?php
            for ($i=0; $i < count($array_partite); $i++) { ?>
                <li>
                    <span><?= $array_partite[$i]['casa']['nome'] . ' - ' ?></span>
                    <span><?= $array_partite[$i]['ospite']['nome'] . ' | ' ?></span>
                    <span><?= $array_partite[$i]['casa']['punteggio'] . ' - ' ?></span>
                    <span><?= $array_partite[$i]['ospite']['punteggio'] ?></span>
                </li>
            <?php }
        ?>
    </ul>
    <br>
    <hr>
    <!-- SNACK 2  -->    <!-- SNACK 2  -->    <!-- SNACK 2  -->    <!-- SNACK 2  -->    <!-- SNACK 2  -->
    <h1>Snack 2</h1>
    <h2>Inserisci i dati</h2>
    <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”</p>
    <form action="" method="GET">
        <label for="js-name">Inserisci il nome: </label>
        <input type="text" name="name" id="js-name"><br>
        <label for="js-mail">Inserisci una mail valida: </label>
        <input type="text" name="mail" id="js-mail"><br>
        <label for="js-age">Inserisci l'età: </label>
        <input type="number" name="age" id="js-age">
        <button>Login</button>
    </form>
    <?php 
        if (isset($_GET['name']) && $_GET['mail'] && $_GET['age']) {
            if ((strlen($_GET['name']) > 3) && (strpos($_GET['mail'], '@')) && (strpos($_GET['mail'], '.', -4)) && (is_numeric($_GET['age']))) {
                echo 'Accesso riuscito! ✔️';
            } else {
                echo 'Accesso negato! 🚫';
            }
        }
    ?>
    <br>
    <br>
    <hr>
    <!-- SNACK 4  -->    <!-- SNACK 4  -->    <!-- SNACK 4  -->    <!-- SNACK 4  -->    <!-- SNACK 4  -->
    <h1>Snack 4</h1>
    <h2>Numeri Random</h2>
    <p>Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta</p>
    <?php 
        $arr_random = [];
        while (count($arr_random) < 15) {
            $number = rand(1, 30);
            if (!in_array($number, $arr_random)) {
                $arr_random[] = $number;
            }
        }
        var_dump($arr_random)
    ?>
    <br>
    <br>
    <hr>
    <!-- SNACK 5  -->    <!-- SNACK 5  -->    <!-- SNACK 5  -->    <!-- SNACK 5  -->    <!-- SNACK 5  -->
    <h1>Snack 5</h1>
    <h2>Divisione paragrafi</h2>
    <p>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.</p>
    <?php
        $paragrafo_intero = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero perferendis consequuntur quam esse quo aperiam dolor officia. Incidunt possimus ducimus laudantium ipsa commodi. Vero perferendis consequuntur quam esse quo aperiam dolor officia. Incidunt possimus ducimus laudantium ipsa commodi! Labore esse deleniti atque accusamus voluptatibus qui consequuntur quam aliquid. ipsa officia dolorum magnam non voluptate exercitationem pariatur temporibus eos repellendus alias natus dolorem nostrum. Et, non.";

        $paragrafo_diviso = explode(".", $paragrafo_intero);
        for ($i = 0;  $i < count($paragrafo_diviso); $i++) {
            ?>
            <p>
                <?=
                    $paragrafo_diviso[$i] . ".";
                ?>
            </p>
        <?php    
        }
    ?>
</body>
</html>