<?php 

  class Ad{


   static function FindNumbersWithSum($array, $sum){

        //计算数组的个数

   	    $len = count($array);

   	    //定义一个数组

   	    $arr = [];


   	       //循环

   	      for($i=0;$i<$len;$i++){

            for($k=0;$k<$len;$k++){
            
                   //判断

            	  if($arr[$i]+$arr[$k]==$sum){

                     $arr = $arr[$i]*$arr[$k];

            	  }

            }

   	      }

          asort($arr);
 
          return $arr[0];
     }





  }

  //类外调用


  $obj = Ad::FindNumbersWithSum(['1','2','3','4','5','6','7','8'],3)

    var_dump($obj);











 ?>