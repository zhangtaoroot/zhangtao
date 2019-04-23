<?php 

   class Ca{

      public function ReverseSentence($str){
              //字符串转数组
           $arr = explode(' ', $str);
           //	var_dump($arr);

            //利用反转数组
            $arr1 = array_reverse($arr);
            //var_dump($arr1);

              //数组转字符串

             $res = implode(' ',$arr1);

              return $res;
            


      }




   }



   //类外调用

   $str ="student. a am I";
    $obj= new Ca();

    $res = $obj->ReverseSentence($str);
    echo $res;











 ?>