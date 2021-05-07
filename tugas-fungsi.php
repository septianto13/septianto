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

      echo "<h3> Soal No 1 Greetings </h3>";
      function greetings($nama){
          echo "hello $nama, Selamat datang di SMK Penus"."<br>";
      }

      greetings("Abdul");
      greetings("Bagas");
      greetings("Wahyu");
      greetings("Joko");

      echo "<br>";

      echo "<h3>Soal No 2 Reverse String</h3>";
      function reverseString($str){
          $i = strlen($str) - 1;
          for ($j = 0; $j < $i; $j++) {
              $temp = $str[$i];
              $str[$i] = $str[$j];
              $str[$j] = $temp;
              $i--;
          } ;
          echo "$str <br>";
      }

      //Hapus komentar dibawah ini untuk dijalankan Code
      reverseString("abdul");
      reverseString("SMK Penus");
      reverseString("We Are Developers");
      echo "<br>";

      echo "<h3>Soal No 3 Palindrome </h3>";
      function palindrome($str){
        $old_str = $str;
        $i = strlen($str) - 1;
        for ($j = 0; $j < $i; $j++) {
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
            $i--;

        } ;
        if ($str == $old_str) {
            echo "kata $old_str merupakan kalimat palindrome <br>";
        } else {
            echo "kata $old_str bukan kalimat palindrome <br>";
        };
    }
    // Hapus komentar di bawah ini untuk jalankan code
    palindrome("civic") ; // true
    palindrome("nababan") ; // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true

    echo "<br>";



    ?>
</body>
</html>
