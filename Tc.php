<?php 

 class Tc{


  public  function  LastRemaining_Solution($n, $m){

               $list = range(1,$n); //转化为数组

                return $list;
                $num =1;
                $arr=[];

                foreach ($list as $k => $v) {
                	
                        if($v==$m){
                          unset[$v];
                         
                        }

                          $num++;

                }
               



     }





    }



    //类外调用



     $obj = new Tc();

    $arr = $obj->LastRemaining_Solution(10,2);

     var_dump($arr);


 ?>