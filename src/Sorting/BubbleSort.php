<?php
/**
 * @author Author Name: Md Morshadun Nur
 * @email  Email: morshadunnur@gmail.com
 */

namespace src\Sorting;


class BubbleSort
{
    /**
     * @param array $data
     * @return array
     */
    function process(array $data):array
    {
        $count = 0;
        $length = count($data);
        for ($i = 0; $i < $length; $i++){
            for ($j = 0; $j < $length - 1; $j++){
                $count++;
                if ($data[$j] > $data[$j + 1]){
                    $tmp = $data[$j + 1];
                    $data[$j + 1] = $data[$j];
                    $data[$j] = $tmp;
                }
            }
        }
        echo "total count: {$count} \n";
        return $data;
    }
}