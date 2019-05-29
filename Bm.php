<?php 
class Bm{

  public function Combine($arr_A,$arr_B){

       //先和并

  	  $array = array_merge($arr_A,$arr_B);

  	   //排序

  	  asort($array);

  	  return $array;



  }


}

//类外调用

  $arr_A=[1,3,6,9];
  $arr_B=[2,4,5,8,20];
 
  $obj = new Bm();

  $num = $obj->Combine($arr_A,$arr_B);

  var_dump($num);












 ?>