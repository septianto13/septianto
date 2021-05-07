<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        
        echo "<h4>LOOPING PERTAMA</h4>";
        $i = 0;
        while ($i <= 20) {
          echo "<p>$i - I Love PHP</p>";
          $i += 2;
        }

        echo "<h4>LOOPING KEDUA</h4>";
        $i = 20;
        while ($i >= 0) {
          echo "<p>$i - I Love PHP</p>";
          $i += -2;
        }


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
    
        $numbers = [18, 45, 29, 61, 47, 34];

        $rest = array_fill(0,count($numbers),0);
        
        for ($i=0; $i < count($numbers); $i++) {
          echo "Array numbers: " . $numbers[$i] . "<br>";
          $rest[$i] = $numbers[$i] % 5;
          echo "Array sisa baginya adalah: " . $rest[$i] . "<br><br>";
        }

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        for ($i=0; $i < count($items); $i++) {
          $arrayName[$i] = array( 'id'          => $items[$i][0],
                                  'name'        => $items[$i][1],
                                  'price'       => $items[$i][2],
                                  'description' => $items[$i][3],
                                  'source'      => $items[$i][4],
                                );
        }

        print_r($arrayName);


        echo "<h3>Soal No 4 Asterix </h3>";
        
        echo "Asterix: ";
        for ($i=0; $i <= 5; $i++) {
          for ($j=0; $j < $i; $j++) {
              echo "* ";
          }
          echo "<br>";
        }
        echo "<br>";
    ?>

</body>
</html>