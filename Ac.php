<?php 

  class Ac {


    function Sum_Solution($n){

         $sum = $n;

          $sum && ($sum+=$n);

          return $sum;
      


    }



  }


    $obj = new Ac();

    $aa = $obj->Sum_Solution(15);

    echo $aa







 ?>