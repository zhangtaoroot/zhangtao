<?php 

  class Tp{


    public static  function GetUglyNumber_Solution($index){


                 if(is_int($index)){
                   
                      if(is_int($index/2)){

                        GetUglyNumber_Solution($index/2);
                        die;

                      }


                       if(is_int($index/3)){

                     etUglyNumber_Solution($index/3);
                        die;


                       }

                       if(is_int($index/5)){

                      etUglyNumber_Solution($index/5);
                        die;


                       }


                       if($index==1){

                             echo '是丑数';

                       }else{

                       	echo '不是丑数';
                       }





                 }




     }





  }


  $obj = Tp::GetUglyNumber_Solution(12);

  echo $obj;
















 ?>