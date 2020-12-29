<?php
/**
 * @author Author Name: Md Morshadun Nur
 * @email  Email: morshadunnur@gmail.com
 */
namespace src\Sorting;
class SelectionSort{
    /**
     * @param array $data
     * @return array
     */
    function process(array $data):array
    {
        $length = count($data);
        for ($i = 0; $i < $length; $i++){
            $min = $i;
            for ($j = $i+1; $j < $length; $j++){
                if ($data[$j] < $data[$min]) $min = $j;
            }
            if ($min != $i){
                $tmp = $data[$i];
                $data[$i] = $data[$min];
                $data[$min] = $tmp;
            }
        }
        return $data;
    }
}