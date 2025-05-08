<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

  <?php
    
    //inheritancee in php 
    class Animal {

      public function makeSound() {
        echo "The animal makes a sound";
      }


    }
    class Dog extends Animal {
      // public function makeSound() {
      //   echo "The dog barks";
      // }
    }
    $dog = new Dog();
    $dog->makeSound();

    function fac($n) {
      if ($n == 0) {
        return 1;
      } else {
        return $n * fac($n - 1);
      }
    }
    echo fac(5);

    // factorial through loop
    function facLoop($n) {
      $fac = 1;
      for ($i = 1; $i <= $n; $i++) {
        $fac = $fac * $i;
      }
      return $fac;
    }
    echo facLoop(5);


  ?>



</body>
</html>