<?php 

class Bn{


   public function  Sum_Solution($n){


      $sum = $n;


       $sum.=$sum + $this->Sum_Solution($n-1); 

       return $sum;


   }




}


//类外调用


$obj = new Bn();

$aa = $obj->Sum_Solution(5);

echo $aa








 ?>