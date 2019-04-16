<?php 

  class Tou{


   public  static function ff($arr){


              $len = count($arr);

              $str = '';
              $strr='';

               for($i=0;$i<$len;$i++){

                    if($arr[$i]%2==0){

                        $str.=$arr[$i].',';

                    }else{

                    	 $strr.=$arr[$i].',';
                    }

               }


               $su =  $strr. $str;
               $su = explode(',',$su);
               array_pop($su);


               return $su;


          


        }


    }




    //类外调用


    $obj = Tou::ff([1,2,3,4,5,6]);

   // echo $obj;
   
   print_r($obj);





 ?>