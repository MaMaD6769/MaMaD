<?php  
namespace MaMaD ;
class Timestamp
{
 public function timestamps($time){
    
    $times =   date('Y-m-d H-i-s ', $time);
    echo $times ;

 }
}

