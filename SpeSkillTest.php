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

    public function parityOutlier($array){

        $arrayODD = array();
        $arrayEven = array();
        $indexODD = 0;
        $indexEven = 0;
        $statusODDandEvenNumber = false;

        foreach($array as $key => $number){
            
            if($number % 2 != 0){
                array_push($arrayODD, $number); 
                $indexODD = $key;
            } else if($number % 2 == 0) {
                array_push($arrayEven, $number);
                $indexEven = $key;
            }

        }
        
        if(sizeof($arrayODD)==1){
            $result = $array[$indexODD]." (the only odd number) ";
        } else if (sizeof($arrayEven)==1){
            $result = $array[$indexEven]." (the only even number)";
        } else if (sizeof($arrayEven)==sizeof($array)){
            $result = "false (all even integer, no outlier)";
        } else if (sizeof($arrayODD)==sizeof($array)) {
            $result = "false (all odd integer, no outlier)";
        } else {
            $result = "false";
        }

        return $result;

    }

    public function findNeedle($array,$string) {

        $result = array_search($string, $array);

        return $result;
    }

    public function blueOcean($array, $number) {


        $reverse = array_reverse($number);

        if($reverse[0]==1){
            unset($array[0]);
            $result = $array;
        } else {
            
        }
        return $result;
    }


}

$a = new SpeSkillTest;

echo $a->narcissistic(1634);
echo "<br/>";
echo $a->narcissistic(153);
echo "<br/>";
echo $a->narcissistic(1234);


echo "<br/>";
print_r($a->parityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]));
echo "<br/>";
print_r($a->parityOutlier([160, 3, 1719, 19, 11, 13, -21]));
echo "<br/>";
print_r($a->parityOutlier([11, 13, 15, 19, 9, 13, -21]));


echo "<br/>";
print_r($a->findNeedle(["red", "blue", "yellow", "black", "grey"], "blue"));

echo "<br/>";
print_r($a->blueOcean([1,2,3,4,6,10], [1]));