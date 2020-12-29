<?php
/**
 * @author Author Name: Md Morshadun Nur
 * @email  Email: morshadunnur@gmail.com
 */
require('vendor/autoload.php');
use src\Sorting\SelectionSort;

$data = [56,3,5,2,55,43,33,10];

$sorting = new SelectionSort();
print_r($sorting->process($data));