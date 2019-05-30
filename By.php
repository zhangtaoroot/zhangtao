<?php 
class By{

public function Number($n){

         $n/2;
         $n%2;
       if($n==1){
          
          echo $n;
       }



  }


}


//类外调用

$obj = new By();

$aa = $obj->Number();

echo $aa;


?>