<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <?php 
        echo "<h3> Soal No 1</h3>";
        $string = "PHP is never old";
        // Panjang string 16, jumlah kata: 4
        echo "Panjang string: " . strlen($string); 
        echo "<br>";
        echo "Jumlah kata: " . str_word_count("PHP is never old");
        echo "<br>";
        $first_sentence = "Hello PHP!"; 
        // Panjang string 10, jumlah kata: 2
        echo "Panjang string: " . strlen($first_sentence);
        echo "<br>";
        echo "Jumlah kata: " . strlen("He");
        echo "<br>";
        $second_sentence = "I'm ready for the challenges"; 
        // Panjang string 28, jumlah kata: 5
        echo "Panjang string: " . strlen($second_sentence);
        echo "<br>";
        echo "Jumlah kata: " . strlen("ready");
    
        echo "<h3> Soal No 2</h3>";
        $string2 = "I love PHP";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 7, 10) . "<br>" ;

        echo "<h3> Soal No 3 </h3>";
        $string3 = "PHP is old but sexy!";
        echo str_replace($string3,"sexy","awesome");
        echo "<br>";
        // OUTPUT : "PHP is old but awesome"


    ?>
</body> 
</html>
