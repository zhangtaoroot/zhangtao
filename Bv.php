<?php 

class Bv{

public function Finnumber($array){

      $count = array_count_values($array);

      $res = [];

        foreach ($count as $v) {
        	
               if($v==1){

                 $res[]=$v;
               }

        }

        return $res;
  }






}



 //类外调用

 $array = [2,4,3,6,3,2,5,5];
 $obj = new Bv();

 $aa = $obj->Finnumber($array); 

 var_dump($aa);















 ?>