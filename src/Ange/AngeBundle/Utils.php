<?php
namespace Ange\AngeBundle;

class Utils{
	
	static function addMonths($date,$months){
         
        $init=clone $date;
        $modifier=$months.' months';
        $back_modifier =-$months.' months';
        
        $date->modify($modifier);
        $back_to_init= clone $date;
        $back_to_init->modify($back_modifier);
        
        while($init->format('m')!=$back_to_init->format('m')){
        	$date->modify('-1 day')    ;
        	$back_to_init= clone $date;
        	$back_to_init->modify($back_modifier);    
        }
        
        return $date;
    }
}