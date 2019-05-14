<?php 

class Ba{

   public function number($n){

    
        if($n>=3){

          return $this->number($n-1)+$this->number($n-2);

        }else if($n==1){

             return 1;
        }else{

        	return 2;
        }



   }






 }

 //类外调用

 $obj = new Ba();

 $aa = $obj->number(7);
 echo $aa;






 ?>