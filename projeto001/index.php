<html>
    <head>
        <title>
            Br
        </title>
    </head>
    <body>

        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        $cli = [
            'pedro' => [
                'time' => 'flamengo',
                'idade' => 18,
            ],
            'vanessa' => [
                'time' => 'palmeiras',
                'idade' => 19,
            ],
            'angela' => [
                'time' => 'inter',
                'idade' => 30,
            ],
        ];
        
        foreach ($cli as $nome => $dados){
            
            echo "Nome: $nome <br>";
            
            foreach ($dados as $key => $value) {
                echo "$key: $value <br>";
            }
            
            echo "<br>";
        }
        
        ?>
    </body>
</html>