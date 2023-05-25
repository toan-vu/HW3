<?php
// Bài 5
function maxMinValue($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    echo "Max value is: ".max($arr); 
    echo "<br>";
    echo "Min value is: ".min($arr);
}
echo "bai5: ";
echo maxMinValue("1", "6", "5");
echo "<br>";
// Bài 6
function arrange($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    sort($arr);
    foreach ( $arr as $row) {
        echo $row;
        echo "; ";
    }
}
echo "bai6: ";
echo arrange("1", "7", "5");
echo "<br>";
// Bài 7
function factorial($word){
    if( is_int($word )!= "1") return "$word isn't an integer";
        else if ($word < 0) return "$word isn't a positive integer";
        else 
        $x = $word;
            for($i=1; $i < $word; $i++) {
                $x = $x * ($word - $i);
            } 
    echo "factorial is: $x";
}
echo "bai7: ";
echo factorial(4);
echo "<br>";
// Bài 8
function checkPrime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function showPrime($a, $b){
    echo "Prime numbers are: ";
    for ($i = $a; $i <= $b; $i++){
        if(checkPrime($i))
            echo $i, "; ";
    } 
}
echo "bai8: ";
echo showPrime(2, 10);
echo "<br>";
// Bài 9
function totalArr($word, $word2, $word3){
    $arr = array($word, $word2, $word3);
    echo array_sum($arr);
}
echo "bai9: ";
echo totalArr(2, 10, 12);
echo "<br>";
// Bài 10
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
function showFibonacci($word){
    for($i = 0; $i <=$word; $i ++) {
        echo (fibonacci ( $i ) . " ");
    }
}
echo "bai10: ";
echo showFibonacci(10);
echo "<br>";
// Bài 11
function Armstrong($word){
    $num = strlen($word);
    $sum = 0;
    while($word > 0){
        $var = $word % 10;
        $sum += $var ** $num;
        $word /= 10;
    } 
    if ($word == $sum) echo "true";
    else echo "false";
}
echo "bai11: ";
echo Armstrong(663);
echo "<br>";
// Bài 12
function arraySplice($word, $word2, $word3, $word4, $position, $molecules){
    $arr1 = array($word, $word2, $word3);
    $arr2 = array($word4);
    array_splice($arr1, $position, $molecules, $arr2);
    print_r ($arr1);
}
echo "bai12: ";
echo arraySplice("1", "2", "3", "4", "1", "0");
echo "<br>";
// Bài 13
function arrayUnique($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    print_r (array_unique($arr));
}
echo "bai13: ";
echo arrayUnique("1", "2", "2", "4");
echo "<br>";
// Bài 14
function findInArr($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3);
    for($i = 0; $i <3; $i++){
        if($word4 == $arr[$i]) return "position is: ". ($i+1);
    }
}
echo "bai14: ";
echo findInArr("1", "2", "3", "3");
echo "<br>";
// Bài 15
function reverse($word){
    return strrev($word);
}
echo "bai15: ";
echo reverse("hello world");
echo "<br>";
// Bài 16
function countArr($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    return count($arr);
}
echo "bai16: ";
echo countArr("1", "2", "3", "4");
echo "<br>";
// Bài 17
function palindrome($word){
    if($word == strrev($word)) return "true";
    else return "false";
}
echo "bai17: ";
echo palindrome("madam");
echo "<br>";
// Bài 18
function countVar($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    print_r (array_count_values($arr));
}
echo "bai18: ";
echo countVar("1", "2", "2", "4");
echo "<br>";
// Bài 19
function arrDecrease($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    foreach ( $arr as $row) {
        echo $row;
        echo "; ";
    }
}
echo "bai19: ";
echo arrDecrease("1", "2", "3", "4");
echo "<br>";
// Bài 20
function arrFill($word, $word2, $word3, $word4, $position, $molecules){
    $arr1 = array($word, $word2, $word3);
    $arr2 = array($word4);
    array_splice($arr1, $position, $molecules, $arr2);
    print_r ($arr1);
}
echo "bai20: ";
echo arrFill("1", "2", "3", "4", "0", "0");
echo "<br>";
// Bài 21
function findArrNum2($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($i == 1)
        return $arr[1];
    }
}
echo "bai21: ";
echo findArrNum2("1", "2", "3", "4");
echo "<br>";
// Bài 22
function gcd($a, $b) {
    if ($b == 0) return $a;
    return gcd($b, $a % $b);
}
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}
function showGcdLcm($a, $b){
    echo "Greatest common divisor is: ".gcd($b, $a % $b);
    echo "<br>";
    echo "Least common multiple is: ".($a * $b) / gcd($a, $b);
}
echo "bai22: ";
echo showGcdLcm(40, 15);
echo "<br>";
// Bài 23
function perfectNum($word){
    $x = 0;
    for($i=1; $i < $word; $i++) {
        if($word % $i == 0)
        $x = $x + $i;
    }
        if($x == $word) return "$word is a perfect number";
        else return "$word isn't a perfect number";
    
}
echo "bai23: ";
echo perfectNum(6);
echo "<br>";
// Bài 24
function maxOddNum($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($arr[$i] % 2 != 0)
        return $arr[$i];
    }
}
echo "bai24: ";
echo maxOddNum("1", "2", "3", "7");
echo "<br>";
// Bài 25
function showCheckPrime($a){
        if(checkPrime($a))
            echo $a, " is a prime number ";
            else echo $a, " isn't a prime number"; 
}
echo "bai25: ";
echo showCheckPrime(5);
echo "<br>";
// Bài 26
function maxPosNum($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($i == 0)
        return $arr[0];
    }
}
echo "bai26: ";
echo maxPosNum("1", "2", "3", "7");
echo "<br>";
// Bài 27
function minNegNum($word, $word2, $word3, $word4){
    $arr = array($word, $word2, $word3, $word4);
    echo min($arr);
}
echo "bai27: ";
echo minNegNum("1", "2", "3", "-7");
echo "<br>";
// Bài 28
function totalOddNum($word){
    $total = 0;
    for($i=1; $i <= $word; $i++){
        if($i % 2 != 0)
        $total = $total + $i;
    } return "Total odd numbers from 1 to $word are: ".$total;
}
echo "bai28: ";
echo totalOddNum(9);
echo "<br>";
// Bài 29
function perfSqureNums($word){
    $i = 0;
  while($i*$i <= $word){
        if($i*$i == $word){
            return true;
        }
        $i++;
    }
    return false;
}
function showPSN($a, $b){
    echo "Perfect square numbers are: ";
    for ($i = $a; $i <= $b; $i++){
        if(perfSqureNums($i))
            echo $i, "; ";
    } 
}
echo "bai29: ";
echo showPSN(1, 20);
echo "<br>";
// Bài 30
function findWord3($word, $word2){
    $result = strpos($word, $word2);
    if($result == "") return "false";
    else return "true";
}
echo "bai30: ";
echo findWord3("hello world", "world");
echo "<br>";
?>