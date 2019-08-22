<?php

class SpeSkillTest {

    public function narcissistic($number) {

        $narcissistic = false;
        $array = str_split($number);

        $countNumber = sizeof($array) - 1;
        $lastNumber = (int) $array[$countNumber];

        $result = 0;

        foreach ($array as $char) {

            $intChar = (int) $char;

            $kuadrat = pow($intChar,$lastNumber);

            $result = (int) $result + (int) $kuadrat;
            
        }

        if($result===$number){
            $narcissistic = true;
        }

        return $narcissistic;

    }

    public function (){
        
    }


}


$a = new SpeSkillTest;
echo $a->narcissistic(1234);